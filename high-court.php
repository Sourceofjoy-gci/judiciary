<?php
/**
 * High Court page for the Judiciary of Eswatini
 * Displays comprehensive information about the High Court, its jurisdiction, processes, and procedures
 */

// Set page title
$page_title = "High Court of Eswatini";

// Define page-specific stylesheets
$pageStyles = ['assets/css/high-court.css'];

// Define page-specific scripts
$pageScripts = ['assets/js/high-court.js'];

// Start output buffering to capture page content
ob_start();
?>

<!-- Hero Section with Glassmorphism Effect -->
<section class="hero-section" style="background-image: url('assets/images/high1.jpg');">
    <div class="container">
        <div class="hero-content glass-effect-dark">
            <h1>High Court of Eswatini</h1>
            <p class="tagline">Superior Court of Record with Unlimited Original Jurisdiction</p>
        </div>
    </div>
</section>

<!-- Main Content Area with Sidebar -->
<section class="high-court-section">
    <div class="container">
        <div class="high-court-container">
            <!-- Sidebar Navigation -->
            <aside class="high-court-sidebar glass-effect">
                <nav class="sidebar-nav">
                    <h3>Table of Contents</h3>
                    <ul id="high-court-nav">
                        <li><a href="#introduction" class="active">Introduction</a></li>
                        <li><a href="#jurisdiction">Jurisdiction and Powers</a></li>
                        <li><a href="#court-divisions">Court Divisions</a></li>
                        <li><a href="#court-procedures">Court Procedures</a></li>
                        <li><a href="#court-calendar">Court Calendar and Terms</a></li>
                        <li><a href="#contact">Contact Information</a></li>
                    </ul>
                </nav>
            </aside>
            
            <!-- Main Content -->
            <div class="high-court-content">
                <!-- Introduction Section -->
                <section id="introduction" class="high-court-section-content">
                    <div class="section-header">
                        <h2>Introduction</h2>
                    </div>
                    
                    <div class="glass-card intro-card">
                        <p>The High Court of Eswatini is a superior court of record with unlimited original jurisdiction in civil and criminal matters. Established in 1954, it serves as an integral part of the Kingdom's judicial system, handling serious criminal cases, complex civil disputes, and appeals from subordinate courts.</p>
                        
                        <div class="historical-timeline">
                            <div class="timeline-point">
                                <div class="year">1954</div>
                                <div class="event">Establishment of the High Court of Eswatini</div>
                            </div>
                            <div class="timeline-connector"></div>
                            <div class="timeline-point">
                                <div class="year">1968</div>
                                <div class="event">Post-Independence Reforms</div>
                            </div>
                            <div class="timeline-connector"></div>
                            <div class="timeline-point">
                                <div class="year">2005</div>
                                <div class="event">Constitutional Restructuring</div>
                            </div>
                            <div class="timeline-connector"></div>
                            <div class="timeline-point">
                                <div class="year">Present</div>
                                <div class="event">Modern Judicial Framework</div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Jurisdiction Section -->
                <section id="jurisdiction" class="high-court-section-content">
                    <div class="section-header">
                        <h2>Jurisdiction and Powers</h2>
                    </div>
                    
                    <div class="glass-card">
                        <p>The High Court has extensive jurisdiction as provided by the Constitution and other laws.</p>
                        
                        <div class="jurisdiction-tabs">
                            <div class="tabs-header">
                                <button class="tab-btn active" data-tab="original">Original Jurisdiction</button>
                                <button class="tab-btn" data-tab="appellate">Appellate Jurisdiction</button>
                                <button class="tab-btn" data-tab="supervisory">Supervisory Jurisdiction</button>
                            </div>
                            <div class="tabs-content">
                                <div class="tab-panel active" id="original-panel">
                                    <h4>Original Jurisdiction</h4>
                                    <ul class="feature-list">
                                        <li>Unlimited jurisdiction in civil matters</li>
                                        <li>Serious criminal offenses (murder, treason, etc.)</li>
                                        <li>Constitutional matters</li>
                                        <li>Administrative law cases</li>
                                    </ul>
                                </div>
                                <div class="tab-panel" id="appellate-panel">
                                    <h4>Appellate Jurisdiction</h4>
                                    <ul class="feature-list">
                                        <li>Appeals from Magistrate Courts</li>
                                        <li>Appeals from specialized tribunals</li>
                                        <li>Review of administrative decisions</li>
                                        <li>Applications for judicial review</li>
                                    </ul>
                                </div>
                                <div class="tab-panel" id="supervisory-panel">
                                    <h4>Supervisory Jurisdiction</h4>
                                    <ul class="feature-list">
                                        <li>Oversight of all subordinate courts</li>
                                        <li>Judicial review of administrative actions</li>
                                        <li>Enforcement of fundamental rights</li>
                                        <li>Issuance of prerogative writs (mandamus, certiorari, prohibition)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Court Divisions Section -->
                <section id="court-divisions" class="high-court-section-content">
                    <div class="section-header">
                        <h2>Court Divisions</h2>
                    </div>
                    
                    <div class="glass-card">
                        <p>The High Court operates through specialized divisions to enhance efficiency and expertise.</p>
                        
                        <div class="divisions-grid">
                            <div class="division-card">
                                <div class="division-icon">
                                    <i class="fas fa-gavel"></i>
                                </div>
                                <h3>Criminal Division</h3>
                                <ul>
                                    <li>Serious criminal offenses</li>
                                    <li>Complex criminal matters</li>
                                    <li>Criminal appeals from lower courts</li>
                                </ul>
                            </div>
                            
                            <div class="division-card">
                                <div class="division-icon">
                                    <i class="fas fa-balance-scale"></i>
                                </div>
                                <h3>Civil Division</h3>
                                <ul>
                                    <li>Complex civil litigation</li>
                                    <li>Contractual disputes</li>
                                    <li>Torts and damages claims</li>
                                </ul>
                            </div>
                            
                            <div class="division-card">
                                <div class="division-icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <h3>Commercial Division</h3>
                                <ul>
                                    <li>Business and commercial disputes</li>
                                    <li>Corporate law matters</li>
                                    <li>Banking and financial cases</li>
                                </ul>
                            </div>
                            
                            <div class="division-card">
                                <div class="division-icon">
                                    <i class="fas fa-scroll"></i>
                                </div>
                                <h3>Constitutional Division</h3>
                                <ul>
                                    <li>Constitutional interpretations</li>
                                    <li>Enforcement of fundamental rights</li>
                                    <li>Constitutional petitions</li>
                                </ul>
                            </div>
                            
                            <div class="division-card">
                                <div class="division-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <h3>Family Division</h3>
                                <ul>
                                    <li>Divorce and matrimonial causes</li>
                                    <li>Child custody and maintenance</li>
                                    <li>Adoption and guardianship</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Court Procedures Section -->
                <section id="court-procedures" class="high-court-section-content">
                    <div class="section-header">
                        <h2>Court Procedures</h2>
                    </div>
                    
                    <div class="glass-card">
                        <p>Understanding the processes and procedures of the High Court</p>
                        
                        <div class="procedure-tabs">
                            <div class="tabs-header">
                                <button class="tab-btn active" data-tab="civil">Civil Procedure</button>
                                <button class="tab-btn" data-tab="criminal">Criminal Procedure</button>
                                <button class="tab-btn" data-tab="appeals">Appeals Procedure</button>
                            </div>
                            <div class="tabs-content">
                                <div class="tab-panel active" id="civil-panel">
                                    <h4>Civil Procedure</h4>
                                    <div class="process-steps">
                                        <div class="process-step">
                                            <div class="step-number">1</div>
                                            <div class="step-content">
                                                <h5>Filing a case</h5>
                                                <p>Submit pleadings with required documentation and fees to the Registry.</p>
                                            </div>
                                        </div>
                                        <div class="process-step">
                                            <div class="step-number">2</div>
                                            <div class="step-content">
                                                <h5>Pleadings process</h5>
                                                <p>Exchange of statement of claim, defense, and counterclaims between parties.</p>
                                            </div>
                                        </div>
                                        <div class="process-step">
                                            <div class="step-number">3</div>
                                            <div class="step-content">
                                                <h5>Pre-trial conference</h5>
                                                <p>Meeting to narrow issues, discuss settlement, and plan for trial.</p>
                                            </div>
                                        </div>
                                        <div class="process-step">
                                            <div class="step-number">4</div>
                                            <div class="step-content">
                                                <h5>Trial procedure</h5>
                                                <p>Presentation of evidence, witness testimony, and legal arguments.</p>
                                            </div>
                                        </div>
                                        <div class="process-step">
                                            <div class="step-number">5</div>
                                            <div class="step-content">
                                                <h5>Judgment and enforcement</h5>
                                                <p>Court's decision and mechanisms for enforcement if necessary.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-panel" id="criminal-panel">
                                    <h4>Criminal Procedure</h4>
                                    <div class="process-steps">
                                        <div class="process-step">
                                            <div class="step-number">1</div>
                                            <div class="step-content">
                                                <h5>Committal proceedings</h5>
                                                <p>Preliminary examination of evidence to determine if case should proceed to trial.</p>
                                            </div>
                                        </div>
                                        <div class="process-step">
                                            <div class="step-number">2</div>
                                            <div class="step-content">
                                                <h5>Plea taking</h5>
                                                <p>Accused person's formal response to the charges (guilty/not guilty).</p>
                                            </div>
                                        </div>
                                        <div class="process-step">
                                            <div class="step-number">3</div>
                                            <div class="step-content">
                                                <h5>Trial process</h5>
                                                <p>Prosecution and defense present their cases before the court.</p>
                                            </div>
                                        </div>
                                        <div class="process-step">
                                            <div class="step-number">4</div>
                                            <div class="step-content">
                                                <h5>Evidence presentation</h5>
                                                <p>Examination of witnesses, documents, and other evidence.</p>
                                            </div>
                                        </div>
                                        <div class="process-step">
                                            <div class="step-number">5</div>
                                            <div class="step-content">
                                                <h5>Sentencing</h5>
                                                <p>Determination of appropriate punishment if found guilty.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-panel" id="appeals-panel">
                                    <h4>Appeals Procedure</h4>
                                    <div class="process-steps">
                                        <div class="process-step">
                                            <div class="step-number">1</div>
                                            <div class="step-content">
                                                <h5>Filing notice of appeal</h5>
                                                <p>Submit within prescribed time limits (usually 14-30 days after judgment).</p>
                                            </div>
                                        </div>
                                        <div class="process-step">
                                            <div class="step-number">2</div>
                                            <div class="step-content">
                                                <h5>Record preparation</h5>
                                                <p>Compilation of court transcripts and relevant documents.</p>
                                            </div>
                                        </div>
                                        <div class="process-step">
                                            <div class="step-number">3</div>
                                            <div class="step-content">
                                                <h5>Hearing process</h5>
                                                <p>Appellate arguments presented by both parties before the court.</p>
                                            </div>
                                        </div>
                                        <div class="process-step">
                                            <div class="step-number">4</div>
                                            <div class="step-content">
                                                <h5>Judgment delivery</h5>
                                                <p>Court's decision on the appeal, which may affirm, reverse, or modify the original judgment.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Court Calendar Section -->
                <section id="court-calendar" class="high-court-section-content">
                    <div class="section-header">
                        <h2>Court Calendar and Terms</h2>
                    </div>
                    
                    <div class="glass-card">
                        <p>The High Court operates on a term basis throughout the year.</p>
                        
                        <div class="calendar-grid">
                            <div class="term-card active-term">
                                <div class="term-header">First Term</div>
                                <div class="term-duration">January to March</div>
                                <ul class="term-activities">
                                    <li>First Session Matters</li>
                                </ul>
                            </div>
                            
                            <div class="term-card vacation">
                                <div class="term-header">Vacation</div>
                                <div class="term-duration">April</div>
                                <div class="vacation-note">Emergency and urgent matters only</div>
                            </div>
                            
                            <div class="term-card">
                                <div class="term-header">Second Term</div>
                                <div class="term-duration">May to August</div>
                                <ul class="term-activities">
                                    <li>Second Session Matters</li>
                                </ul>
                            </div>
                            
                            <div class="term-card vacation">
                                <div class="term-header">Vacation</div>
                                <div class="term-duration">August</div>
                                <div class="vacation-note">Emergency and urgent matters only</div>
                            </div>
                            
                            <div class="term-card">
                                <div class="term-header">Third Term</div>
                                <div class="term-duration">September to December</div>
                                <ul class="term-activities">
                                    <li>Third Session Matters</li>
                                </ul>
                            </div>
                            
                            <div class="term-card vacation">
                                <div class="term-header">Vacation</div>
                                <div class="term-duration">December</div>
                                <div class="vacation-note">Emergency and urgent matters only</div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Contact Information Section -->
                <section id="contact" class="high-court-section-content">
                    <div class="section-header">
                        <h2>Contact Information</h2>
                    </div>
                    
                    <div class="glass-card contact-card">
                        <div class="contact-info">
                            <div class="contact-detail">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Location</h4>
                                    <p>High Court Building, Hospital Hill, Mbabane</p>
                                </div>
                            </div>
                            
                            <div class="contact-detail">
                                <div class="contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Postal Address</h4>
                                    <p>P.O. Box 19, Mbabane</p>
                                </div>
                            </div>
                            
                            <div class="contact-detail">
                                <div class="contact-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Phone</h4>
                                    <p>+268 2404 2901 / +268 2404 3286</p>
                                </div>
                            </div>
                            
                            <div class="contact-detail">
                                <div class="contact-icon">
                                    <i class="fas fa-at"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Email</h4>
                                    <p>highcourt@judiciary.gov.sz</p>
                                </div>
                            </div>
                            
                            <div class="contact-detail">
                                <div class="contact-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Hours of Operation</h4>
                                    <p>Monday to Friday: 8:00 AM - 4:30 PM</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="contact-form-container">
                            <h3>Inquiry Form</h3>
                            <form id="high-court-inquiry-form" class="contact-form">
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" id="name" name="name" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" name="email" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" id="subject" name="subject" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea id="message" name="message" rows="5" required></textarea>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Submit Inquiry</button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>

<?php
// Get the buffered content
$pageContent = ob_get_clean();

// Include the template
include_once 'template.php';
?>