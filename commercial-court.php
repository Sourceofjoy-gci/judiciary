<?php
/**
 * Commercial Court page for the Judiciary of Eswatini
 * Displays comprehensive information about the Commercial Court, its jurisdiction, processes, and procedures
 */

// Set page title
$page_title = "Commercial Court of Eswatini";

// Define page-specific stylesheets
$pageStyles = ['assets/css/commercial-court.css'];

// Define page-specific scripts
$pageScripts = ['assets/js/commercial-court.js'];

// Start output buffering to capture page content
ob_start();
?>

<!-- Hero Section with Glassmorphism Effect -->
<section class="hero-section" style="background-image: url('assets/images/scales-of-justice.jpg');">
    <div class="container">
        <div class="hero-content glass-effect-dark">
            <h1>Commercial Court of Eswatini</h1>
            <p class="tagline">Specialized Division for Efficient Resolution of Commercial Disputes</p>
            <div class="directive-badge">Practice Directive 1/2021</div>
        </div>
    </div>
</section>

<!-- Main Content Area with Sidebar -->
<section class="commercial-court-section">
    <div class="container">
        <div class="commercial-court-container">
            <!-- Sidebar Navigation -->
            <aside class="commercial-court-sidebar glass-effect">
                <nav class="sidebar-nav">
                    <h3>Table of Contents</h3>
                    <ul id="commercial-court-nav">
                        <li><a href="#introduction" class="active">Introduction</a></li>
                        <li><a href="#key-features">Key Features</a></li>
                        <li><a href="#jurisdiction">Jurisdiction</a></li>
                        <li><a href="#case-allocation">Case Allocation</a></li>
                        <li><a href="#action-proceedings">Action Proceedings</a></li>
                        <li><a href="#application-proceedings">Application Proceedings</a></li>
                        <li><a href="#pre-trial-conference">Pre-Trial Conference</a></li>
                        <li><a href="#expert-evidence">Expert Evidence</a></li>
                        <li><a href="#urgent-applications">Urgent Applications</a></li>
                        <li><a href="#appeals">Appeals</a></li>
                        <li><a href="#contact-information">Contact Information</a></li>
                    </ul>
                </nav>
            </aside>
            
            <!-- Main Content -->
            <div class="commercial-court-content">
                <!-- Introduction Section -->
                <section id="introduction" class="commercial-court-section-content">
                    <div class="section-header">
                        <h2>Introduction</h2>
                    </div>
                    
                    <div class="glass-card">
                        <p>The Commercial Court is a <strong>division of the High Court</strong> established to resolve commercial disputes expeditiously. It operates under the High Court Rules unless otherwise specified in this directive. The court's mandate is to ensure efficient resolution of complex commercial matters affecting businesses in Eswatini.</p>
                        
                        <div class="info-block">
                            <div class="info-icon">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                            <div class="info-content">
                                <h4>A Specialized Approach to Business Disputes</h4>
                                <p>The Commercial Court was established under Practice Directive 1/2021 to provide businesses and commercial entities with a dedicated judicial forum focused on commercial law expertise and expedited dispute resolution.</p>
                            </div>
                        </div>
                        
                        <div class="directive-info">
                            <div class="directive-data">
                                <span class="directive-label">Established Under:</span>
                                <span class="directive-value">Practice Directive 1/2021</span>
                            </div>
                            <div class="directive-data">
                                <span class="directive-label">Issued Date:</span>
                                <span class="directive-value">06 October 2021</span>
                            </div>
                            <div class="directive-data">
                                <span class="directive-label">Legal Foundation:</span>
                                <span class="directive-value">Constitution of Eswatini (Sections 139(5), 142, 153, 154)</span>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Key Features Section -->
                <section id="key-features" class="commercial-court-section-content">
                    <div class="section-header">
                        <h2>Key Features</h2>
                    </div>
                    
                    <div class="glass-card">
                        <div class="features-grid">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="fas fa-gavel"></i>
                                </div>
                                <h3>Specialized Judges</h3>
                                <p>Appointed by the King on advice of the Judicial Service Commission. Judges must meet the same qualifications as High Court Judges (Constitution, Section 154).</p>
                            </div>
                            
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="fas fa-door-open"></i>
                                </div>
                                <h3>Public Proceedings</h3>
                                <p>Hearings are conducted openly unless restricted by constitutional provisions.</p>
                            </div>
                            
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                                <h3>Court of Record</h3>
                                <p>Proceedings are documented and maintained by the Assistant Registrar.</p>
                            </div>
                            
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="fas fa-tachometer-alt"></i>
                                </div>
                                <h3>Expedited Process</h3>
                                <p>Streamlined procedures designed for swift resolution of commercial disputes.</p>
                            </div>
                            
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <h3>Commercial Focus</h3>
                                <p>Dedicated exclusively to business-related legal matters and disputes.</p>
                            </div>
                            
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="fas fa-search"></i>
                                </div>
                                <h3>Specialized Expertise</h3>
                                <p>Judges with particular knowledge of commercial law and business practices.</p>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Jurisdiction Section -->
                <section id="jurisdiction" class="commercial-court-section-content">
                    <div class="section-header">
                        <h2>Jurisdiction</h2>
                    </div>
                    
                    <div class="glass-card">
                        <p>The Commercial Court handles disputes arising from <strong>commercial transactions</strong>, including but not limited to:</p>
                        
                        <div class="jurisdiction-grid">
                            <div class="jurisdiction-item">
                                <div class="jurisdiction-icon">
                                    <i class="fas fa-ship"></i>
                                </div>
                                <div class="jurisdiction-text">
                                    <h4>Export/import of goods</h4>
                                </div>
                            </div>
                            
                            <div class="jurisdiction-item">
                                <div class="jurisdiction-icon">
                                    <i class="fas fa-landmark"></i>
                                </div>
                                <div class="jurisdiction-text">
                                    <h4>Banking, insurance, and financial services</h4>
                                </div>
                            </div>
                            
                            <div class="jurisdiction-item">
                                <div class="jurisdiction-icon">
                                    <i class="fas fa-copyright"></i>
                                </div>
                                <div class="jurisdiction-text">
                                    <h4>Intellectual property (trademarks, copyright)</h4>
                                </div>
                            </div>
                            
                            <div class="jurisdiction-item">
                                <div class="jurisdiction-icon">
                                    <i class="fas fa-building"></i>
                                </div>
                                <div class="jurisdiction-text">
                                    <h4>Company law matters (Companies Act interpretation)</h4>
                                </div>
                            </div>
                            
                            <div class="jurisdiction-item">
                                <div class="jurisdiction-icon">
                                    <i class="fas fa-file-signature"></i>
                                </div>
                                <div class="jurisdiction-text">
                                    <h4>Commercial contracts and mercantile documents</h4>
                                </div>
                            </div>
                            
                            <div class="jurisdiction-item">
                                <div class="jurisdiction-icon">
                                    <i class="fas fa-life-ring"></i>
                                </div>
                                <div class="jurisdiction-text">
                                    <h4>Business rescue and insolvency cases</h4>
                                </div>
                            </div>
                            
                            <div class="jurisdiction-item">
                                <div class="jurisdiction-icon">
                                    <i class="fas fa-handshake"></i>
                                </div>
                                <div class="jurisdiction-text">
                                    <h4>Arbitration disputes</h4>
                                </div>
                            </div>
                            
                            <div class="jurisdiction-item">
                                <div class="jurisdiction-icon">
                                    <i class="fas fa-ban"></i>
                                </div>
                                <div class="jurisdiction-text">
                                    <h4>Unlawful competition</h4>
                                </div>
                            </div>
                            
                            <div class="jurisdiction-item">
                                <div class="jurisdiction-icon">
                                    <i class="fas fa-oil-can"></i>
                                </div>
                                <div class="jurisdiction-text">
                                    <h4>Oil/gas exploitation (non-administrative law aspects)</h4>
                                </div>
                            </div>
                            
                            <div class="jurisdiction-item">
                                <div class="jurisdiction-icon">
                                    <i class="fas fa-heartbeat"></i>
                                </div>
                                <div class="jurisdiction-text">
                                    <h4>Medical scheme services</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Case Allocation Section -->
                <section id="case-allocation" class="commercial-court-section-content">
                    <div class="section-header">
                        <h2>Case Allocation</h2>
                    </div>
                    
                    <div class="glass-card">
                        <h3>Designation Process</h3>
                        
                        <div class="process-flow">
                            <div class="process-step">
                                <div class="step-number">1</div>
                                <div class="step-content">
                                    <h4>Application for Designation</h4>
                                    <p>Any party may apply to the <strong>Registrar of the High Court</strong> to classify a case as a commercial dispute.</p>
                                </div>
                            </div>
                            
                            <div class="process-step">
                                <div class="step-number">2</div>
                                <div class="step-content">
                                    <h4>Submission Requirements</h4>
                                    <p>Submit a <strong>letter</strong> detailing the case's nature and legal basis for designation.</p>
                                </div>
                            </div>
                            
                            <div class="process-step">
                                <div class="step-number">3</div>
                                <div class="step-content">
                                    <h4>Administrative Decision</h4>
                                    <p>The Registrar consults the Chief Justice to assign the case to a Commercial Court Judge.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="urgent-note">
                            <h4>Urgent Applications</h4>
                            <ul>
                                <li>Must include a <strong>letter justifying urgency</strong>.</li>
                                <li>The Registrar rules on designation immediately.</li>
                            </ul>
                        </div>
                    </div>
                </section>
                
                <!-- Action Proceedings Section -->
                <section id="action-proceedings" class="commercial-court-section-content">
                    <div class="section-header">
                        <h2>Action Proceedings</h2>
                    </div>
                    
                    <div class="glass-card">
                        <div class="proceedings-timeline">
                            <div class="timeline-item">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h4>Summons Issuance</h4>
                                    <p>File at the High Court.</p>
                                </div>
                            </div>
                            
                            <div class="timeline-item">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h4>Application for Commercial Designation</h4>
                                    <p>Submit to the Registrar with notice to all parties.</p>
                                </div>
                            </div>
                            
                            <div class="timeline-item">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h4>Registrar's Ruling</h4>
                                    <p>Made within <strong>2 days</strong> of application.</p>
                                </div>
                            </div>
                            
                            <div class="timeline-item">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h4>Review Option</h4>
                                    <p>Parties may challenge the Registrar's decision via motion proceedings before a High Court Judge.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="proceedings-diagram">
                            <div class="diagram-title">Action Proceedings Workflow</div>
                            <div class="diagram-container">
                                <div class="diagram-step">Summons</div>
                                <div class="diagram-arrow">→</div>
                                <div class="diagram-step">Application</div>
                                <div class="diagram-arrow">→</div>
                                <div class="diagram-step">Ruling</div>
                                <div class="diagram-arrow">→</div>
                                <div class="diagram-step">High Court<br>(if review)</div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Application Proceedings Section -->
                <section id="application-proceedings" class="commercial-court-section-content">
                    <div class="section-header">
                        <h2>Application Proceedings</h2>
                    </div>
                    
                    <div class="glass-card">
                        <div class="procedure-cards">
                            <div class="procedure-card">
                                <div class="procedure-number">1</div>
                                <h4>Motion Proceedings</h4>
                                <p>Initiated in the High Court.</p>
                            </div>
                            
                            <div class="procedure-card">
                                <div class="procedure-number">2</div>
                                <h4>Transfer Request</h4>
                                <p>Apply to the Registrar to move the case to the Commercial Court.</p>
                            </div>
                            
                            <div class="procedure-card">
                                <div class="procedure-number">3</div>
                                <h4>Timeline Management</h4>
                                <p>The Judge sets deadlines for:</p>
                                <ul>
                                    <li>Affidavit submissions</li>
                                    <li>Heads of Argument</li>
                                    <li>Hearing dates</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="process-visualization">
                            <div class="visualization-title">Application Process Flow</div>
                            <div class="flow-diagram">
                                <div class="flow-start">
                                    <i class="fas fa-file-alt"></i>
                                    <span>Motion Filing</span>
                                </div>
                                <div class="flow-arrow"></div>
                                <div class="flow-step">
                                    <i class="fas fa-exchange-alt"></i>
                                    <span>Transfer Application</span>
                                </div>
                                <div class="flow-arrow"></div>
                                <div class="flow-step">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Timeline Setting</span>
                                </div>
                                <div class="flow-arrow"></div>
                                <div class="flow-end">
                                    <i class="fas fa-gavel"></i>
                                    <span>Commercial Court Hearing</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Pre-Trial Conference Section -->
                <section id="pre-trial-conference" class="commercial-court-section-content">
                    <div class="section-header">
                        <h2>Pre-Trial Conference</h2>
                    </div>
                    
                    <div class="glass-card">
                        <div class="conference-details">
                            <div class="timing-box">
                                <div class="timing-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="timing-text">
                                    <h4>Timing</h4>
                                    <p>Held within <strong>5 days</strong> of case allocation.</p>
                                </div>
                            </div>
                            
                            <div class="agenda-box">
                                <h4>Key Agenda Items</h4>
                                <ul class="agenda-list">
                                    <li>Legal issues for determination</li>
                                    <li>Number of witnesses (including experts)</li>
                                    <li>Estimated trial duration</li>
                                    <li>Non-contested legal issues</li>
                                </ul>
                            </div>
                            
                            <div class="outcome-box">
                                <div class="outcome-icon">
                                    <i class="fas fa-file-signature"></i>
                                </div>
                                <div class="outcome-text">
                                    <h4>Outcome</h4>
                                    <p>A signed <strong>Pre-Trial Conference Minute</strong> becomes part of the court record.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="conference-illustration">
                            <div class="illustration-container">
                                <i class="fas fa-users"></i>
                                <span class="illustration-title">Pre-Trial Conference</span>
                                <div class="conference-participants">
                                    <div class="participant judge">
                                        <i class="fas fa-gavel"></i>
                                        <span>Judge</span>
                                    </div>
                                    <div class="participant counsel-one">
                                        <i class="fas fa-user-tie"></i>
                                        <span>Counsel 1</span>
                                    </div>
                                    <div class="participant counsel-two">
                                        <i class="fas fa-user-tie"></i>
                                        <span>Counsel 2</span>
                                    </div>
                                    <div class="participant registrar">
                                        <i class="fas fa-user"></i>
                                        <span>Registrar</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Expert Evidence Section -->
                <section id="expert-evidence" class="commercial-court-section-content">
                    <div class="section-header">
                        <h2>Expert Evidence</h2>
                    </div>
                    
                    <div class="glass-card">
                        <div class="expert-process">
                            <div class="expert-meeting">
                                <div class="expert-meeting-icon">
                                    <i class="fas fa-user-graduate"></i>
                                </div>
                                <div class="expert-meeting-content">
                                    <h4>Expert Meeting</h4>
                                    <p>Presiding Judge convenes experts to file joint reports.</p>
                                </div>
                            </div>
                            
                            <div class="expert-minute">
                                <div class="expert-minute-icon">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                                <div class="expert-minute-content">
                                    <h4>Joint Minute</h4>
                                    <p>Experts must outline <strong>agreed/disputed issues</strong> and legal grounds for disagreements.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="expert-benefits">
                            <h4>Benefits of Expert Evidence Procedure</h4>
                            <div class="benefits-grid">
                                <div class="benefit-item">
                                    <div class="benefit-icon">
                                        <i class="fas fa-search"></i>
                                    </div>
                                    <div class="benefit-text">Clarity on technical matters</div>
                                </div>
                                
                                <div class="benefit-item">
                                    <div class="benefit-icon">
                                        <i class="fas fa-bolt"></i>
                                    </div>
                                    <div class="benefit-text">Expedited proceedings</div>
                                </div>
                                
                                <div class="benefit-item">
                                    <div class="benefit-icon">
                                        <i class="fas fa-check-double"></i>
                                    </div>
                                    <div class="benefit-text">Identification of agreed facts</div>
                                </div>
                                
                                <div class="benefit-item">
                                    <div class="benefit-icon">
                                        <i class="fas fa-balance-scale"></i>
                                    </div>
                                    <div class="benefit-text">Focused legal argumentation</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Urgent Applications Section -->
                <section id="urgent-applications" class="commercial-court-section-content">
                    <div class="section-header">
                        <h2>Urgent Applications</h2>
                    </div>
                    
                    <div class="glass-card">
                        <div class="urgency-process">
                            <div class="urgency-step">
                                <div class="urgency-number">1</div>
                                <div class="urgency-content">
                                    <h4>Submission</h4>
                                    <p>File with a detailed urgency justification.</p>
                                </div>
                            </div>
                            
                            <div class="urgency-step">
                                <div class="urgency-number">2</div>
                                <div class="urgency-content">
                                    <h4>Registrar's Decision</h4>
                                    <p>Immediate ruling on commercial dispute designation.</p>
                                </div>
                            </div>
                            
                            <div class="urgency-step">
                                <div class="urgency-number">3</div>
                                <div class="urgency-content">
                                    <h4>Case Allocation</h4>
                                    <p>Registrar and Chief Justice assign to a Judge promptly.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="urgency-criteria">
                            <h4>Criteria for Urgency</h4>
                            <div class="criteria-container">
                                <div class="criterion">
                                    <div class="criterion-icon">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                    <div class="criterion-text">Immediate harm or prejudice</div>
                                </div>
                                
                                <div class="criterion">
                                    <div class="criterion-icon">
                                        <i class="fas fa-hourglass-half"></i>
                                    </div>
                                    <div class="criterion-text">Time-sensitive commercial matters</div>
                                </div>
                                
                                <div class="criterion">
                                    <div class="criterion-icon">
                                        <i class="fas fa-hand-paper"></i>
                                    </div>
                                    <div class="criterion-text">Need for immediate injunctive relief</div>
                                </div>
                                
                                <div class="criterion">
                                    <div class="criterion-icon">
                                        <i class="fas fa-money-bill-wave"></i>
                                    </div>
                                    <div class="criterion-text">Substantial economic impact</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Appeals Section -->
                <section id="appeals" class="commercial-court-section-content">
                    <div class="section-header">
                        <h2>Appeals</h2>
                    </div>
                    
                    <div class="glass-card">
                        <div class="appeals-info">
                            <div class="appeals-route">
                                <div class="route-icon">
                                    <i class="fas fa-arrow-up"></i>
                                </div>
                                <div class="route-content">
                                    <h4>Appeal Route</h4>
                                    <p>Appeals from Commercial Court judgments go to the <strong>Supreme Court</strong>.</p>
                                </div>
                            </div>
                            
                            <div class="appeals-procedure">
                                <div class="procedure-icon">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                                <div class="procedure-content">
                                    <h4>Procedure</h4>
                                    <p>Follows standard Supreme Court appeal rules.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="appeals-hierarchy">
                            <div class="hierarchy-title">Appeals Hierarchy</div>
                            <div class="hierarchy-diagram">
                            <div class="court-level supreme">
                                    <i class="fas fa-landmark"></i>
                                    <span>Supreme Court</span>
                                </div>
                                <div class="hierarchy-arrow">
                                    <i class="fas fa-long-arrow-alt-up"></i>
                                </div>
                                <div class="court-level commercial">
                                    <i class="fas fa-building"></i>
                                    <span>Commercial Court</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Contact Information Section -->
                <section id="contact-information" class="commercial-court-section-content">
                    <div class="section-header">
                        <h2>Contact Information</h2>
                    </div>
                    
                    <div class="glass-card contact-card">
                        <div class="contact-info">
                            <div class="registrar-contact">
                                <h3>Registrar of the High Court</h3>
                                
                                <div class="contact-detail">
                                    <div class="contact-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-text">
                                        <strong>Address:</strong> Commercial Court, Nokwane, Bethany.
                                    </div>
                                </div>
                                
                                <div class="contact-detail">
                                    <div class="contact-icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="contact-text">
                                        <strong>Tel:</strong> (+268) 2404 2901/3
                                    </div>
                                </div>
                                
                                <div class="contact-detail">
                                    <div class="contact-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="contact-text">
                                        <strong>Email:</strong> commercial_court@judiciary.org.sz
                                    </div>
                                </div>
                            </div>
                            
                            <div class="hours-operation">
                                <h3>Hours of Operation</h3>
                                <div class="hours-grid">
                                    <div class="day-group">
                                        <div class="day">Monday - Thursday</div>
                                        <div class="time">8:00 AM - 4:30 PM</div>
                                    </div>
                                    <div class="day-group">
                                        <div class="day">Friday</div>
                                        <div class="time">8:00 AM - 3:30 PM</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="inquiry-form">
                            <h3>Commercial Court Inquiry</h3>
                            <form id="commercial-court-inquiry" class="contact-form">
                                <div class="form-group">
                                    <label for="fullname">Full Name</label>
                                    <input type="text" id="fullname" name="fullname" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" name="email" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="organization">Organization/Company</label>
                                    <input type="text" id="organization" name="organization">
                                </div>
                                
                                <div class="form-group">
                                    <label for="inquiry-type">Type of Inquiry</label>
                                    <select id="inquiry-type" name="inquiry-type" required>
                                        <option value="">Select Inquiry Type</option>
                                        <option value="case-designation">Case Designation</option>
                                        <option value="urgent-application">Urgent Application</option>
                                        <option value="procedural-question">Procedural Question</option>
                                        <option value="general-inquiry">General Inquiry</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea id="message" name="message" rows="5" required></textarea>
                                </div>
                                
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">Submit Inquiry</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                
                <!-- References Section -->
                <section class="commercial-court-section-content">
                    <div class="section-header">
                        <h2>References</h2>
                    </div>
                    
                    <div class="glass-card references-card">
                        <ul class="references-list">
                            <li>Constitution of Eswatini (Sections 139(5), 142, 153, 154)</li>
                            <li>Practice Directive 1/2021 (Issued 06 October 2021)</li>
                        </ul>
                        
                        <div class="download-directive">
                            <a href="assets/docs/Practice_Directive_COMMERCIAL_COURT.pdf" target= "_blank" class="btn btn-outline">
                                <i class="fas fa-download"></i> Download Practice Directive 1/2021
                            </a>
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