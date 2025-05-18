<?php
/**
 * Industrial Court of Appeal page for the Judiciary of Eswatini
 * Displays comprehensive information about the Industrial Court of Appeal, its jurisdiction, processes, and procedures
 */

// Set page title
$page_title = "Industrial Court of Appeal of Eswatini";

// Define page-specific stylesheets
$pageStyles = ['assets/css/industrial-court-appeal.css'];

// Define page-specific scripts
$pageScripts = ['assets/js/industrial-court-appeal.js'];

// Start output buffering to capture page content
ob_start();
?>

<!-- Hero Section with Glassmorphism Effect -->
<section class="hero-section" style="background-image: url('assets/images/industrial/jp.jpg');">
    <div class="container">
        <div class="hero-content glass-effect-dark">
            <h1>Industrial Court of Appeal</h1>
            <p class="tagline">Final Authority on Labor and Employment Disputes</p>
        </div>
    </div>
</section>

<!-- Main Content Area with Sidebar -->
<section class="industrial-section">
    <div class="container">
        <div class="industrial-container">
            <!-- Sidebar Navigation -->
            <aside class="industrial-sidebar glass-effect">
                <nav class="sidebar-nav">
                    <h3>Table of Contents</h3>
                    <ul id="industrial-nav">
                        <li><a href="#introduction" class="active">Introduction</a></li>
                        <li><a href="#jurisdiction">Jurisdiction & Authority</a></li>
                        <li><a href="#composition">Court Composition</a></li>
                        <li><a href="#appeal-process">Appeal Process</a></li>
                        <li><a href="#grounds">Grounds for Appeal</a></li>
                        <li><a href="#representation">Legal Representation</a></li>
                        <li><a href="#sessions">Court Sessions</a></li>
                        <li><a href="#supreme-appeals">Appeals to Supreme Court</a></li>
                        <li><a href="#contact">Contact Information</a></li>
                    </ul>
                </nav>
            </aside>
            
            <!-- Main Content -->
            <div class="industrial-content">
                <!-- Introduction Section -->
                <section id="introduction" class="industrial-section-content">
                    <div class="section-header">
                        <h2>Introduction</h2>
                    </div>
                    
                    <div class="glass-card">
                        <p>The Industrial Court of Appeal of Eswatini is a superior court established to hear and determine appeals from the Industrial Court. Created in 1980 alongside the Industrial Court, it ensures the consistent and proper application of labor and employment laws in the Kingdom, with its decisions subject only to appeal to the Supreme Court on constitutional matters or points of law of public importance.</p>
                        
                        <p>As a specialized appellate body, the Industrial Court of Appeal maintains the integrity of Eswatini's labor jurisprudence, balancing the interests of employers, employees, and labor organizations while upholding the principles of fairness and justice in the workplace.</p>
                    </div>
                </section>
                
                <!-- Jurisdiction Section -->
                <section id="jurisdiction" class="industrial-section-content">
                    <div class="section-header">
                        <h2>Jurisdiction and Authority</h2>
                    </div>
                    
                    <div class="glass-card">
                        <p>The Industrial Court of Appeal has appellate jurisdiction over the Industrial Court.</p>
                        
                        <div class="jurisdiction-grid">
                            <div class="jurisdiction-card">
                                <div class="jurisdiction-icon">
                                    <i class="fas fa-gavel"></i>
                                </div>
                                <h3>Appeals from Industrial Court</h3>
                                <ul class="feature-list">
                                    <li>Final decisions and orders</li>
                                    <li>Interlocutory rulings (with leave)</li>
                                    <li>Review of procedural matters</li>
                                </ul>
                            </div>
                            
                            <div class="jurisdiction-card">
                                <div class="jurisdiction-icon">
                                    <i class="fas fa-search"></i>
                                </div>
                                <h3>Scope of Review</h3>
                                <ul class="feature-list">
                                    <li>Questions of law</li>
                                    <li>Questions of fact</li>
                                    <li>Mixed questions of law and fact</li>
                                    <li>Procedural irregularities</li>
                                </ul>
                            </div>
                            
                            <div class="jurisdiction-card">
                                <div class="jurisdiction-icon">
                                    <i class="fas fa-balance-scale"></i>
                                </div>
                                <h3>Remedial Powers</h3>
                                <ul class="feature-list">
                                    <li>Affirm, modify, or reverse Industrial Court decisions</li>
                                    <li>Remand cases for further proceedings</li>
                                    <li>Issue final orders</li>
                                    <li>Award costs</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Court Composition Section -->
                <section id="composition" class="industrial-section-content">
                    <div class="section-header">
                        <h2>Court Composition</h2>
                    </div>
                    
                    <div class="glass-card">
                        <p>The Industrial Court of Appeal consists of specialized judges with expertise in labor and employment law.</p>
                        
                        <div class="composition-grid">
                            <div class="composition-card">
                                <div class="composition-icon">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <h3>President</h3>
                                <p>Heads the Industrial Court of Appeal and presides over hearings</p>
                            </div>
                            
                            <div class="composition-card">
                                <div class="composition-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <h3>Justices</h3>
                                <p>Appointed by the King on advice of the Judicial Service Commission</p>
                            </div>
                            
                            <div class="composition-card">
                                <div class="composition-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <h3>Qualifications</h3>
                                <p>Extensive legal experience and expertise in labor and employment law</p>
                            </div>
                            
                            <div class="composition-card">
                                <div class="composition-icon">
                                    <i class="fas fa-chair"></i>
                                </div>
                                <h3>Sitting Arrangements</h3>
                                <p>Cases are typically heard by a panel of three justices</p>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Appeal Process Section -->
                <section id="appeal-process" class="industrial-section-content">
                    <div class="section-header">
                        <h2>Appeal Process</h2>
                    </div>
                    
                    <div class="glass-card">
                        <p>Understanding the steps involved in appealing to the Industrial Court of Appeal:</p>
                        
                        <div class="process-steps">
                            <div class="process-step">
                                <div class="step-number">1</div>
                                <div class="step-content">
                                    <h4>Filing Notice of Appeal</h4>
                                    <p>Must be filed within <strong>30 days</strong> from the date of judgment</p>
                                    <ul class="process-details">
                                        <li>Content requirements include specific grounds of appeal</li>
                                        <li>Payment of prescribed filing fees</li>
                                        <li>Service on all parties to the original proceedings</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="step-number">2</div>
                                <div class="step-content">
                                    <h4>Record Preparation</h4>
                                    <p>Complete record of Industrial Court proceedings</p>
                                    <ul class="process-details">
                                        <li>Transcription of oral evidence and arguments</li>
                                        <li>Certification by the Registrar of the Industrial Court</li>
                                        <li>Submission to the Industrial Court of Appeal Registry</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="step-number">3</div>
                                <div class="step-content">
                                    <h4>Written Submissions</h4>
                                    <p>Detailed legal arguments from all parties</p>
                                    <ul class="process-details">
                                        <li>Appellant's arguments due within 21 days of filing</li>
                                        <li>Respondent's reply due within 21 days thereafter</li>
                                        <li>Format requirements per court rules</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="step-number">4</div>
                                <div class="step-content">
                                    <h4>Hearing Procedure</h4>
                                    <p>Oral arguments before the Court</p>
                                    <ul class="process-details">
                                        <li>Scheduling by the Court Registrar</li>
                                        <li>Typically limited to 30 minutes per side</li>
                                        <li>Questions from the panel of justices</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="step-number">5</div>
                                <div class="step-content">
                                    <h4>Judgment Delivery</h4>
                                    <p>Final decision on the appeal</p>
                                    <ul class="process-details">
                                        <li>Deliberation among panel members</li>
                                        <li>Written judgment with reasons</li>
                                        <li>Usually delivered within 90 days of hearing</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Grounds for Appeal Section -->
                <section id="grounds" class="industrial-section-content">
                    <div class="section-header">
                        <h2>Grounds for Appeal</h2>
                    </div>
                    
                    <div class="two-column-grid">
                        <div class="glass-card">
                            <h3>Errors of Law</h3>
                            <ul class="checklist">
                                <li>Misinterpretation of statutes</li>
                                <li>Incorrect application of legal principles</li>
                                <li>Jurisdictional errors</li>
                                <li>Misapplication of precedent</li>
                            </ul>
                        </div>
                        
                        <div class="glass-card">
                            <h3>Errors of Fact</h3>
                            <ul class="checklist">
                                <li>Findings contrary to evidence</li>
                                <li>Insufficient evidence to support findings</li>
                                <li>Failure to consider material evidence</li>
                                <li>Misinterpretation of witness testimony</li>
                            </ul>
                        </div>
                        
                        <div class="glass-card">
                            <h3>Procedural Irregularities</h3>
                            <ul class="checklist">
                                <li>Due process violations</li>
                                <li>Bias or appearance of bias</li>
                                <li>Improper admission or exclusion of evidence</li>
                                <li>Denial of fair hearing opportunity</li>
                            </ul>
                        </div>
                        
                        <div class="glass-card">
                            <h3>Ultra Vires Actions</h3>
                            <ul class="checklist">
                                <li>Court exceeding its statutory powers</li>
                                <li>Improper remedies or relief granted</li>
                                <li>Jurisdictional overreach</li>
                                <li>Failure to follow ministerial directives</li>
                            </ul>
                        </div>
                    </div>
                </section>
                
                <!-- Legal Representation Section -->
                <section id="representation" class="industrial-section-content">
                    <div class="section-header">
                        <h2>Legal Representation</h2>
                    </div>
                    
                    <div class="glass-card">
                        <p>Information about representation before the Industrial Court of Appeal:</p>
                        
                        <div class="representation-grid">
                            <div class="representation-card">
                                <div class="representation-icon">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <h3>Legal Practitioners</h3>
                                <p>Must be attorneys enrolled in Eswatini with rights of appearance</p>
                            </div>
                            
                            <div class="representation-card">
                                <div class="representation-icon">
                                    <i class="fas fa-id-badge"></i>
                                </div>
                                <h3>Special Permission</h3>
                                <p>Non-attorneys may appear with special leave of the Court</p>
                            </div>
                            
                            <div class="representation-card">
                                <div class="representation-icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <h3>Self-Representation</h3>
                                <p>Parties may represent themselves subject to Court guidelines</p>
                            </div>
                            
                            <div class="representation-card">
                                <div class="representation-icon">
                                    <i class="fas fa-hand-holding-usd"></i>
                                </div>
                                <h3>Costs and Fees</h3>
                                <p>Standard attorney fees apply as per Court tariffs</p>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Court Sessions Section -->
                <section id="sessions" class="industrial-section-content">
                    <div class="section-header">
                        <h2>Court Sessions</h2>
                    </div>
                    
                    <div class="glass-card">
                        <p>The Industrial Court of Appeal sits in sessions throughout the year.</p>
                        
                        <div class="sessions-tabs">
                            <div class="tabs-header">
                                <button class="tab-btn active" data-tab="regular">Regular Sessions</button>
                                <button class="tab-btn" data-tab="special">Special Sessions</button>
                                <button class="tab-btn" data-tab="venues">Venues</button>
                                <button class="tab-btn" data-tab="calendar">Annual Calendar</button>
                            </div>
                            <div class="tabs-content">
                                <div class="tab-panel active" id="regular-panel">
                                    <h4>Regular Sessions</h4>
                                    <p>The Court typically sits in two regular sessions per year:</p>
                                    <ul class="feature-list">
                                        <li>First Session (February) </li>
                                        <li>Second Session (July)</li>
                                    </ul>
                                    <p>Each session usually lasts for five months, with cases scheduled according to readiness and availability of the a bench.</p>
                                </div>
                                <div class="tab-panel" id="special-panel">
                                    <h4>Special Sessions</h4>
                                    <p>The Court may convene special sessions for:</p>
                                    <ul class="feature-list">
                                        <li>Urgent matters requiring immediate attention</li>
                                        <li>Cases with significant public interest</li>
                                        <li>Matters affecting national labor stability</li>
                                        <li>Clearing backlogs when necessary</li>
                                    </ul>
                                    <p>Special sessions are called by the President of the Court as needed.</p>
                                </div>
                                <div class="tab-panel" id="venues-panel">
                                    <h4>Venues</h4>
                                    <p>The Court primarily sits in the following locations:</p>
                                    <ul class="feature-list">
                                        <li>Main Courtroom, Mbabane, Fincorp Building</li>
                                    </ul>
                                    <p>Virtual hearings may be arranged in special circumstances.</p>
                                </div>
                                <div class="tab-panel" id="calendar-panel">
                                    <h4>Annual Calendar</h4>
                                    <p>The Court's calendar is published in December for the coming year, specifying:</p>
                                    <ul class="feature-list">
                                        <li>Exact dates for all regular sessions</li>
                                        <li>Filing deadlines for each session</li>
                                        <li>Pre-hearing conference schedules</li>
                                        <li>Court vacations and public holidays</li>
                                    </ul>
                                    <p><a href="#forms" class="internal-link">Download the current Court Calendar</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                
                <!-- Further Appeals Section -->
                <section id="supreme-appeals" class="industrial-section-content">
                    <div class="section-header">
                        <h2>Appeals to the Supreme Court</h2>
                    </div>
                    
                    <div class="glass-card">
                        <p>Limited circumstances under which Industrial Court of Appeal decisions may be appealed to the Supreme Court:</p>
                        
                        <div class="supreme-appeals-grid">
                            <div class="appeal-route-card">
                                <div class="route-icon">
                                    <i class="fas fa-landmark"></i>
                                </div>
                                <h3>Constitutional Questions</h3>
                                <p>Appeals involving the interpretation or application of the Constitution of Eswatini</p>
                            </div>
                            
                            <div class="appeal-route-card">
                                <div class="route-icon">
                                    <i class="fas fa-balance-scale"></i>
                                </div>
                                <h3>Points of Law of Public Importance</h3>
                                <p>Legal issues with broader implications for Eswatini's jurisprudence</p>
                            </div>
                            
                            <div class="appeal-route-card">
                                <div class="route-icon">
                                    <i class="fas fa-file-signature"></i>
                                </div>
                                <h3>Special Leave</h3>
                                <p>Exceptional permission required from the Supreme Court to appeal</p>
                            </div>
                            
                            <div class="appeal-route-card">
                                <div class="route-icon">
                                    <i class="fas fa-gavel"></i>
                                </div>
                                <h3>Finality</h3>
                                <p>Most decisions are final and not subject to further appeal</p>
                            </div>
                        </div>
                        
                        <div class="appeal-process-note glass-panel">
                            <h4><i class="fas fa-info-circle"></i> Important Note</h4>
                            <p>Applications for leave to appeal to the Supreme Court must be filed within 21 days of the Industrial Court of Appeal's judgment. The application must demonstrate that the matter raises constitutional issues or points of law of public importance.</p>
                        </div>
                    </div>
                </section>
                
                
               
                <!-- Contact Information Section -->
                <section id="contact" class="industrial-section-content">
                    <div class="section-header">
                        <h2>Contact Information</h2>
                    </div>
                    
                    <div class="glass-card contact-card">
                        <div class="contact-grid">
                            <div class="contact-info">
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-detail">
                                        <h4>Physical Address</h4>
                                        <p>Fincorp Building<br>Gwamile Street<br>Mbabane, Eswatini</p>
                                    </div>
                                </div>
                                
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="contact-detail">
                                        <h4>Postal Address</h4>
                                        <p>P.O. Box 19<br>Mbabane, H100<br>Eswatini</p>
                                    </div>
                                </div>
                                
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="contact-detail">
                                        <h4>Phone</h4>
                                        <p>+268 2404 2500<br>+268 2404 2555</p>
                                    </div>
                                </div>
                                
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-at"></i>
                                    </div>
                                    <div class="contact-detail">
                                        <h4>Email</h4>
                                        <p>ica.registry@judiciary.gov.sz</p>
                                    </div>
                                </div>
                                
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div class="contact-detail">
                                        <h4>Operating Hours</h4>
                                        <p>Monday to Friday: 8:30 AM - 4:00 PM<br>Closed on Public Holidays</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="contact-map">
                                <div class="map-placeholder">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14383.204567289264!2d31.130674574356867!3d-26.31654274370359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ee8cdc5533e0f29%3A0xc4f7839d88fb458c!2sMbabane%2C%20Eswatini!5e0!3m2!1sen!2sus!4v1650818301747!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>

<?php
// Capture the output buffer and store it in the pageContent variable
$pageContent = ob_get_clean();

// Include the template file which will use the captured content
include_once 'template.php';
?>