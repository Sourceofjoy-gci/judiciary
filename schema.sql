-- Database Schema for Judiciary of Eswatini Website
-- This script creates all necessary tables and inserts sample data

-- Create the database (if it doesn't exist)
CREATE DATABASE IF NOT EXISTS judiciary_eswatini;
USE judiciary_eswatini;

-- Disable foreign key checks temporarily to avoid issues during drops
SET FOREIGN_KEY_CHECKS = 0;

-- Drop existing tables (if they exist) in reverse dependency order
DROP TABLE IF EXISTS contact_messages;
DROP TABLE IF EXISTS subscribers;
DROP TABLE IF EXISTS court_rolls;
DROP TABLE IF EXISTS documents;
DROP TABLE IF EXISTS news_images;
DROP TABLE IF EXISTS news_posts;
DROP TABLE IF EXISTS judgments;
DROP TABLE IF EXISTS speeches;
DROP TABLE IF EXISTS court_locations;
DROP TABLE IF EXISTS judges;
DROP TABLE IF EXISTS users;

-- Re-enable foreign key checks
SET FOREIGN_KEY_CHECKS = 1;

-- Create users table (for admin access)
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    full_name VARCHAR(100) NOT NULL,
    role ENUM('admin', 'editor', 'viewer') NOT NULL DEFAULT 'viewer',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create judges table
CREATE TABLE judges (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    title VARCHAR(100) NOT NULL,
    court_type ENUM('supreme', 'high', 'commercial', 'industrial', 'magistrate', 'small_claims') NOT NULL,
    biography TEXT,
    appointment_date DATE,
    photo_path VARCHAR(255),
    status ENUM('active', 'retired', 'acting') NOT NULL DEFAULT 'active',
    display_order INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create court_locations table
CREATE TABLE court_locations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    court_type ENUM('supreme', 'high', 'commercial', 'industrial', 'magistrate', 'small_claims') NOT NULL,
    address TEXT NOT NULL,
    phone VARCHAR(50),
    email VARCHAR(100),
    latitude DECIMAL(10, 8),
    longitude DECIMAL(11, 8),
    opening_hours TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create news_posts table
CREATE TABLE news_posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL UNIQUE,
    content TEXT NOT NULL,
    excerpt TEXT,
    category ENUM('announcements', 'court_rulings', 'press_releases', 'news', 'events') NOT NULL,
    featured_image VARCHAR(255),
    author_id INT,
    status ENUM('published', 'draft') NOT NULL DEFAULT 'published',
    date_published TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (author_id) REFERENCES users(id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create news_images table
CREATE TABLE news_images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    article_id INT NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    display_order INT NOT NULL DEFAULT 1,
    caption VARCHAR(255) DEFAULT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (article_id) REFERENCES news_posts(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create documents table
CREATE TABLE documents (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL UNIQUE,
    description TEXT,
    file_path VARCHAR(255) NOT NULL,
    file_size INT,
    court_type ENUM('supreme', 'high', 'commercial', 'industrial', 'magistrate', 'small_claims'),
    document_type ENUM('legislation', 'court_rule', 'practice_directive', 'judgment', 'form', 'other') NOT NULL,
    upload_user_id INT,
    date_published TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (upload_user_id) REFERENCES users(id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create court_rolls table
CREATE TABLE court_rolls (
    id INT AUTO_INCREMENT PRIMARY KEY,
    case_number VARCHAR(50) NOT NULL,
    case_title VARCHAR(255) NOT NULL,
    court_type ENUM('supreme', 'high', 'commercial', 'industrial', 'magistrate', 'small_claims') NOT NULL,
    court_location_id INT,
    hearing_date DATE NOT NULL,
    hearing_time TIME NOT NULL,
    judge_id INT,
    case_status ENUM('scheduled', 'heard', 'adjourned', 'completed') NOT NULL DEFAULT 'scheduled',
    notes TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (court_location_id) REFERENCES court_locations(id) ON DELETE SET NULL,
    FOREIGN KEY (judge_id) REFERENCES judges(id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create subscribers table
CREATE TABLE subscribers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL UNIQUE,
    name VARCHAR(100),
    subscription_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('active', 'unsubscribed') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create contact_messages table
CREATE TABLE contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(50),
    subject VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    status ENUM('new', 'read', 'replied', 'archived') NOT NULL DEFAULT 'new',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create judgments table
CREATE TABLE judgments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    case_number VARCHAR(50) NOT NULL,
    court_type ENUM('supreme', 'high', 'commercial', 'industrial', 'magistrate', 'small_claims') NOT NULL,
    plaintiff VARCHAR(255) NOT NULL,
    defendant VARCHAR(255) NOT NULL,
    judgment_date DATE NOT NULL,
    eswatinili_url VARCHAR(255) NOT NULL,
    status ENUM('published', 'draft') NOT NULL DEFAULT 'published',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_by INT,
    FOREIGN KEY (created_by) REFERENCES users(id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create speeches table
CREATE TABLE speeches (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    topic VARCHAR(255) NOT NULL,
    summary TEXT NOT NULL,
    content TEXT NOT NULL,
    speaker VARCHAR(100) NOT NULL,
    speech_date DATE NOT NULL,
    pdf_document VARCHAR(255),
    status ENUM('published', 'draft') NOT NULL DEFAULT 'published',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_by INT,
    FOREIGN KEY (created_by) REFERENCES users(id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert sample data for users
INSERT INTO users (username, password, email, full_name, role) VALUES
('admin', '$2y$10$8KgGC/Zw3hVcw0WBQvQ4luM4yq5TRFiT1/ZJ7i2PVoYcKUe0Q1wBK', 'admin@judiciary.gov.sz', 'System Administrator', 'admin'),
('editor', '$2y$10$YZA1FrEhNUz1PbI2a14Uk.UXNNj79aGXY5CsZnrrLFQI5l4ovA4qW', 'editor@judiciary.gov.sz', 'Content Editor', 'editor');
-- Note: Password for admin is 'admin123' and for editor is 'editor123' (using bcrypt hash)

-- Insert sample data for judges
INSERT INTO judges (full_name, title, court_type, biography, appointment_date, status, display_order) VALUES
('Hon. Justice Smith', 'Chief Justice', 'supreme', 'Justice Smith has served on the bench for over 25 years.', '2015-03-15', 'active', 1),
('Hon. Justice Brown', 'Justice of the Supreme Court', 'supreme', 'Justice Brown previously served as a High Court judge for 10 years.', '2016-07-21', 'active', 2),
('Hon. Justice Johnson', 'Judge President of the High Court', 'high', 'Justice Johnson specializes in constitutional law.', '2018-02-10', 'active', 1),
('Hon. Justice Williams', 'Judge of the High Court', 'high', 'Justice Williams has expertise in commercial and contract law.', '2019-05-25', 'active', 2),
('Hon. Justice Davis', 'Judge of the Commercial Court', 'commercial', 'Justice Davis has extensive experience in commercial disputes.', '2020-01-15', 'active', 1),
('Hon. Justice Wilson', 'Judge of the Industrial Court', 'industrial', 'Justice Wilson specializes in labor law and dispute resolution.', '2017-11-03', 'active', 1);

-- Insert sample data for court locations
INSERT INTO court_locations (name, court_type, address, phone, email, latitude, longitude, opening_hours) VALUES
('Supreme Court', 'supreme', 'Hospital Hill, Mbabane, Eswatini', '+268 2404 2901', 'supreme@judiciary.gov.sz', -26.3114, 31.1351, 'Monday - Friday: 8:30 AM - 4:30 PM'),
('High Court', 'high', 'Hospital Hill, Mbabane, Eswatini', '+268 2404 2901', 'high@judiciary.gov.sz', -26.3114, 31.1351, 'Monday - Friday: 8:30 AM - 4:30 PM'),
('Commercial Court', 'commercial', 'Commercial Court Building, Mbabane, Eswatini', '+268 2404 3500', 'commercial@judiciary.gov.sz', -26.3125, 31.1355, 'Monday - Friday: 8:30 AM - 4:30 PM'),
('Industrial Court', 'industrial', 'Industrial Court Building, Mbabane, Eswatini', '+268 2404 2000', 'industrial@judiciary.gov.sz', -26.3118, 31.1360, 'Monday - Friday: 8:30 AM - 4:30 PM'),
('Mbabane Magistrate Court', 'magistrate', 'Mbabane Central, Eswatini', '+268 2404 2500', 'mbabane.magistrate@judiciary.gov.sz', -26.3105, 31.1340, 'Monday - Friday: 8:30 AM - 4:30 PM'),
('Manzini Magistrate Court', 'magistrate', 'Manzini Central, Eswatini', '+268 2505 2500', 'manzini.magistrate@judiciary.gov.sz', -26.4957, 31.3785, 'Monday - Friday: 8:30 AM - 4:30 PM'),
('Small Claims Court Mbabane', 'small_claims', 'Mbabane Central, Eswatini', '+268 2404 2600', 'smallclaims.mbabane@judiciary.gov.sz', -26.3106, 31.1342, 'Monday - Friday: 8:30 AM - 4:30 PM');

-- Insert sample data for news_posts
INSERT INTO news_posts (title, slug, content, excerpt, category, author_id, status, date_published) VALUES
('Chief Justice Unveils Five-Year Judiciary Modernization Plan', 'judiciary-modernization-plan', 'The Chief Justice today unveiled an ambitious five-year plan to modernize the Judiciary of Eswatini. The plan includes the implementation of electronic filing systems, digital court recording, and improved case management to reduce backlogs. The initiative aims to improve access to justice and increase the efficiency of court operations across the country.', 'An ambitious plan to modernize the Judiciary of Eswatini was unveiled today by the Chief Justice.', 'announcements', 1, 'published', '2025-02-15 10:30:00'),
('Supreme Court Rules on Landmark Constitutional Case', 'landmark-constitutional-case', 'In a historic decision, the Supreme Court of Eswatini has ruled on a landmark constitutional case that clarifies the separation of powers between branches of government. The unanimous ruling, delivered by the Chief Justice, sets an important precedent for future constitutional interpretation and reinforces the independence of the judiciary.', 'The Supreme Court has delivered a historic ruling on a landmark constitutional case.', 'court_rulings', 1, 'published', '2025-02-12 14:45:00'),
('Judiciary Reports 30% Reduction in Case Backlog', 'case-backlog-reduction', 'The Judiciary of Eswatini has announced a significant 30% reduction in case backlog over the past year. This achievement is attributed to various efficiency measures, including extended court hours, specialized case management teams, and improved scheduling procedures. The Chief Justice commended judges and court staff for their dedication to clearing the backlog.', 'The Judiciary has achieved a significant reduction in case backlog through improved efficiency measures.', 'press_releases', 2, 'published', '2025-02-08 11:15:00'),
('New E-Filing System to Launch Next Month', 'e-filing-system-launch', 'The Judiciary of Eswatini will launch its new electronic filing system next month, allowing attorneys and litigants to submit court documents online. The system will initially be available for the High Court and Commercial Court, with plans to expand to other courts in the coming months. Training sessions for legal practitioners will begin next week.', 'A new electronic filing system will be launched next month, allowing for online submission of court documents.', 'news', 2, 'published', '2025-02-05 09:00:00'),
('Annual Judicial Conference Scheduled for March', 'judicial-conference-march', 'The Annual Judicial Conference will be held on March 15-17, 2025, at the Royal Swazi Convention Center. The theme of this year\'s conference is "Strengthening Judicial Independence and Accountability." Judges, magistrates, and legal professionals from across the region are expected to attend. Registration is now open on the Judiciary website.', 'The Annual Judicial Conference will take place in March with the theme of judicial independence and accountability.', 'events', 1, 'published', '2025-02-01 13:20:00');

-- Insert sample data for documents
INSERT INTO documents (title, slug, description, file_path, file_size, court_type, document_type, upload_user_id, date_published) VALUES
('Supreme Court Rules, 2023', 'supreme-court-rules-2023', 'The official rules governing procedure in the Supreme Court of Eswatini', 'uploads/documents/supreme-court-rules-2023.pdf', 2500000, 'supreme', 'court_rule', 1, '2023-01-15 00:00:00'),
('High Court Rules', 'high-court-rules', 'The official rules governing procedure in the High Court of Eswatini', 'uploads/documents/high-court-rules.pdf', 3000000, 'high', 'court_rule', 1, '2020-06-10 00:00:00'),
('Commercial Court Practice Directive 1/2021', 'commercial-court-directive-2021', 'Practice directive establishing the Commercial Court division and its procedures', 'uploads/documents/commercial-court-directive-2021.pdf', 1200000, 'commercial', 'practice_directive', 1, '2021-10-06 00:00:00'),
('Industrial Court Rules, 2007', 'industrial-court-rules-2007', 'The official rules governing procedure in the Industrial Court of Eswatini', 'uploads/documents/industrial-court-rules-2007.pdf', 1800000, 'industrial', 'court_rule', 1, '2007-03-20 00:00:00'),
('Magistrate Court Rules', 'magistrate-court-rules', 'The official rules governing procedure in the Magistrate Courts of Eswatini', 'uploads/documents/magistrate-court-rules.pdf', 2200000, 'magistrate', 'court_rule', 1, '2018-05-25 00:00:00'),
('Small Claims Court Act, 2011', 'small-claims-court-act-2011', 'The Act establishing the Small Claims Court and its jurisdiction', 'uploads/documents/small-claims-court-act-2011.pdf', 1500000, 'small_claims', 'legislation', 1, '2011-07-01 00:00:00'),
('Notice of Motion Form', 'notice-of-motion-form', 'Standard form for filing a Notice of Motion in the High Court', 'uploads/forms/notice-of-motion.pdf', 500000, 'high', 'form', 2, '2022-04-18 00:00:00'),
('Affidavit Template', 'affidavit-template', 'Template for preparing an affidavit for court submission', 'uploads/forms/affidavit-template.pdf', 400000, NULL, 'form', 2, '2022-04-18 00:00:00');

-- Insert sample data for court_rolls
INSERT INTO court_rolls (case_number, case_title, court_type, court_location_id, hearing_date, hearing_time, judge_id, case_status, notes) VALUES
('SC/12/2025', 'Director of Public Prosecutions v. John Doe', 'supreme', 1, '2025-03-15', '09:00:00', 1, 'scheduled', 'Appeal case from High Court decision'),
('SC/13/2025', 'ABC Corporation v. XYZ Ltd', 'supreme', 1, '2025-03-15', '11:30:00', 2, 'scheduled', 'Commercial dispute appeal'),
('HC/56/2025', 'State v. Jane Smith', 'high', 2, '2025-03-10', '10:00:00', 3, 'scheduled', 'Criminal trial - Day 1'),
('HC/57/2025', 'Acme Company v. Eswatini Revenue Authority', 'high', 2, '2025-03-10', '14:00:00', 4, 'scheduled', 'Tax dispute'),
('COMC/23/2025', 'Bank of Eswatini v. Sunrise Enterprises', 'commercial', 3, '2025-03-12', '09:30:00', 5, 'scheduled', 'Debt recovery case'),
('IC/34/2025', 'John Worker v. Mining Corporation', 'industrial', 4, '2025-03-08', '10:00:00', 6, 'scheduled', 'Unfair dismissal claim'),
('MBB/78/2025', 'State v. David Johnson', 'magistrate', 5, '2025-03-05', '11:00:00', NULL, 'scheduled', 'Theft charges'),
('MAN/45/2025', 'State v. Sarah Williams', 'magistrate', 6, '2025-03-06', '09:00:00', NULL, 'scheduled', 'Assault charges'),
('SC/34/2025', 'Retail Store v. Customer', 'small_claims', 7, '2025-03-07', '10:00:00', NULL, 'scheduled', 'Dispute over defective product');

-- Insert sample data for subscribers
INSERT INTO subscribers (email, name, subscription_date, status) VALUES
('john.doe@example.com', 'John Doe', '2025-01-15 08:23:15', 'active'),
('jane.smith@example.com', 'Jane Smith', '2025-01-20 10:45:30', 'active'),
('lawyer@lawfirm.com', 'Legal Professional', '2025-01-25 14:10:22', 'active'),
('student@law.edu', 'Law Student', '2025-02-01 09:30:45', 'active');

-- Insert sample data for contact_messages
INSERT INTO contact_messages (name, email, phone, subject, message, status, created_at) VALUES
('Thomas Johnson', 'thomas@example.com', '+268 7612 3456', 'Query about Court Procedures', 'I would like to know the procedure for filing a small claims case. What forms do I need and what are the fees involved?', 'new', '2025-02-15 11:23:45'),
('Sarah Brown', 'sarah@lawfirm.com', '+268 7698 7654', 'Request for Court Records', 'I am a legal representative seeking access to court records for case number HC/123/2024. Please advise on the process for obtaining certified copies.', 'read', '2025-02-14 09:45:12'),
('Michael Lee', 'michael@university.edu', '+268 7634 5678', 'Research Interview Request', 'I am a researcher at the University of Eswatini conducting a study on judicial reforms. I would appreciate an opportunity to interview the Chief Justice.', 'replied', '2025-02-10 14:30:00');

-- Insert sample data for judgments
INSERT INTO judgments (case_number, court_type, plaintiff, defendant, judgment_date, eswatinili_url, status, created_by) VALUES
('SC 12/25', 'supreme', 'Party A', 'Party B', '2025-02-10', 'https://eswatinili.org/judgments/sc-12-25', 'published', 1),
('HC 45/25', 'high', 'Party C', 'Party D', '2025-02-05', 'https://eswatinili.org/judgments/hc-45-25', 'published', 1),
('CC 08/25', 'commercial', 'Company X', 'Company Y', '2025-01-28', 'https://eswatinili.org/judgments/cc-08-25', 'published', 1);

-- Insert sample data for speeches
INSERT INTO speeches (title, topic, summary, content, speaker, speech_date, pdf_document, status, created_by) VALUES
('Opening of the High Court', 'Judicial Innovation and Access to Justice in the Digital Age', 'A comprehensive address on modernizing the judiciary through digital transformation and improving access to justice.', 'Full speech content here...', 'Chief Justice', '2025-02-05', 'uploads/speeches/opening-of-the-high-court.pdf', 'published', 1),
('Address to the Law Society', 'Evolving Labor Relations in Eswatini', 'An insightful discussion on the changing landscape of labor relations and employment law in Eswatini.', 'Full speech content here...', 'High Court Judge', '2025-01-22', 'uploads/speeches/address-to-the-law-society.pdf', 'published', 1);