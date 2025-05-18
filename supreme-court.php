<?php
/**
 * Supreme Court page for the Judiciary of Eswatini
 * Displays comprehensive information about the Supreme Court, its jurisdiction, processes, and procedures
 */

// Set page title
$page_title = "Supreme Court of Eswatini";

// Define page-specific stylesheets
$pageStyles = ['assets/css/supreme-court.css'];

// Start output buffering to capture page content
ob_start();
?>

<!-- Hero Section with Glassmorphism Effect -->
<section class="hero-section" style="background-image: url('assets/images/supreme/cj.jpg');">
    <div class="container">
        <div class="hero-content glass-effect-dark">
            <h1>Supreme Court of Eswatini</h1>
            <p class="tagline">The Apex Court and Final Arbiter of Justice</p>
        </div>
    </div>
</section>

<!-- Main Content Area with Sidebar -->
<section class="supreme-section">
    <div class="container">
        <div class="supreme-container">
            <!-- Sidebar Navigation -->
            <aside class="supreme-sidebar glass-effect">
                <nav class="sidebar-nav">
                    <h3>Table of Contents</h3>
                    <ul id="supreme-nav">
                        <li><a href="#introduction" class="active">Introduction</a></li>
                        <li><a href="#composition">Composition of the Court</a></li>
                        <li><a href="#jurisdiction">Jurisdiction and Powers</a></li>
                        <li><a href="#appellate-process">Appellate Process</a></li>
                        <li><a href="#criminal-appeals">Criminal Appeals</a></li>
                        <li><a href="#civil-appeals">Civil Appeals</a></li>
                        <li><a href="#pauper-appellants">Pauper Appellants</a></li>
                        <li><a href="#new-evidence">New Evidence & Reviews</a></li>
                        <li><a href="#supervisory">Supervisory Jurisdiction</a></li>
                        <li><a href="#audio-visual">Audio-Visual Links</a></li>
                        <li><a href="#sessions">Court Sessions</a></li>
                        <li><a href="#officials">Court Officials</a></li>
                        <li><a href="#access">Access & Etiquette</a></li>
                        <li><a href="#contact">Contact Information</a></li>
                    </ul>
                </nav>
            </aside>
            
            <!-- Main Content -->
            <div class="supreme-content">
                <!-- Introduction Section -->
                <section id="introduction" class="supreme-section-content">
                    <div class="section-header">
                        <h2>Introduction</h2>
                    </div>
                    
                    <div class="glass-card">
                        <p>The Supreme Court of Eswatini, established under Section 142 of the Constitution, is the highest appellate and review court in the Kingdom. It ensures consistency in the application of law, interprets the Constitution, and serves as the final arbiter of justice for both civil and criminal matters.</p>
                        
                        <p>As the apex court in the judicial hierarchy, the Supreme Court's decisions are binding on all lower courts and establish legal precedents that guide the development of Eswatini's legal system.</p>
                    </div>
                </section>
                
                <!-- Composition of the Court Section -->
                <section id="composition" class="supreme-section-content">
                    <div class="section-header">
                        <h2>Composition of the Court</h2>
                    </div>
                    
                    <div class="composition-grid">
                        <div class="glass-card composition-card">
                            <div class="composition-icon">
                                <i class="fas fa-gavel"></i>
                            </div>
                            <h3>Chief Justice</h3>
                            <p>Presides over the Supreme Court and leads the Judiciary of Eswatini.</p>
                        </div>
                        
                        <div class="glass-card composition-card">
                            <div class="composition-icon">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                            <h3>Justices</h3>
                            <p>Appointed by His Majesty the King on the advice of the Judicial Service Commission.</p>
                        </div>
                        
                        <div class="glass-card composition-card">
                            <div class="composition-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3>Panel Size</h3>
                            <p>Typically comprises the Chief Justice plus at least four other justices.</p>
                        </div>
                        
                        <div class="glass-card composition-card">
                            <div class="composition-icon">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <h3>Sessions</h3>
                            <p>The Court sits in regular sessions, usually in May and November of each year.</p>
                        </div>
                    </div>
                    
                </section>
                
                <!-- Jurisdiction and Powers Section -->
                <section id="jurisdiction" class="supreme-section-content">
                    <div class="section-header">
                        <h2>Jurisdiction and Powers</h2>
                    </div>
                    
                    <div class="glass-card">
                        <div class="jurisdiction-tabs">
                            <div class="tabs-header">
                                <button class="tab-btn active" data-tab="appellate">Appellate Jurisdiction</button>
                                <button class="tab-btn" data-tab="constitutional">Constitutional Jurisdiction</button>
                                <button class="tab-btn" data-tab="supervisory">Supervisory Jurisdiction</button>
                            </div>
                            <div class="tabs-content">
                                <div class="tab-panel active" id="appellate-panel">
                                    <h4>Appellate Jurisdiction</h4>
                                    <ul class="feature-list">
                                        <li>Final court of appeal from the High Court and the Industrial Court of Appeal</li>
                                        <li>No further appeal lies beyond the Supreme Court</li>
                                        <li>Authority to hear appeals on matters of law, fact, and mixed law and fact</li>
                                        <li>Power to affirm, reverse, or modify decisions of lower courts</li>
                                    </ul>
                                </div>
                                <div class="tab-panel" id="constitutional-panel">
                                    <h4>Constitutional Jurisdiction</h4>
                                    <ul class="feature-list">
                                        <li>Authority to interpret the Constitution and declare legislation unconstitutional</li>
                                        <li>Issues advisory opinions on constitutional questions when requested</li>
                                        <li>Adjudicates disputes between organs of state regarding constitutional matters</li>
                                        <li>Guardian of constitutional rights and freedoms</li>
                                    </ul>
                                </div>
                                <div class="tab-panel" id="supervisory-panel">
                                    <h4>Supervisory Jurisdiction</h4>
                                    <ul class="feature-list">
                                        <li>Reviews decisions of lower courts and tribunals for constitutional compliance</li>
                                        <li>Applications must be filed within 25 days of the decision under review</li>
                                        <li>Power to issue directions to ensure the proper administration of justice</li>
                                        <li>Authority to develop common law and customary law consistent with the Constitution</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Appellate Process Section -->
                <section id="appellate-process" class="supreme-section-content">
                    <div class="section-header">
                        <h2>Appellate Process</h2>
                    </div>
                    
                    <div class="glass-card">
                        <div class="process-steps">
                            <div class="process-step">
                                <div class="step-number">1</div>
                                <div class="step-content">
                                    <h4>Notice of Appeal</h4>
                                    <p>File within <strong>20 days</strong> of the lower court's judgment; cross‑appeals must follow within <strong>15 days</strong> of receipt.</p>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="step-number">2</div>
                                <div class="step-content">
                                    <h4>Record of Appeal</h4>
                                    <p>Compile pleadings, judgments, and evidence; certify via the Registrar.</p>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="step-number">3</div>
                                <div class="step-content">
                                    <h4>Heads of Argument</h4>
                                    <p>Submit written submissions at least <strong>20 days</strong> before the hearing.</p>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="step-number">4</div>
                                <div class="step-content">
                                    <h4>Service</h4>
                                    <p>Serve all documents on respondents upon filing.</p>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="step-number">5</div>
                                <div class="step-content">
                                    <h4>Pre‑Hearing Conference</h4>
                                    <p>Attend at the Registrar's direction to finalize logistics.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Criminal Appeals Section -->
                <section id="criminal-appeals" class="supreme-section-content">
                    <div class="section-header">
                        <h2>Criminal Appeals</h2>
                    </div>
                    
                    <div class="glass-card">
                        <div class="criminal-appeals-content">
                            <div class="info-box">
                                <div class="info-icon">
                                    <i class="fas fa-gavel"></i>
                                </div>
                                <div class="info-content">
                                    <h4>Bail Pending Appeal</h4>
                                    <p>Apply first in the High Court; if refused, escalate to the Supreme Court with an affidavit and sureties (Criminal Form 7).</p>
                                </div>
                            </div>
                            
                            <div class="info-box">
                                <div class="info-icon">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                                <div class="info-content">
                                    <h4>Record Preparation</h4>
                                    <p>Include charge sheets, transcripts of proceedings, and judgments.</p>
                                </div>
                            </div>
                            
                            <div class="info-box">
                                <div class="info-icon">
                                    <i class="fas fa-balance-scale"></i>
                                </div>
                                <div class="info-content">
                                    <h4>Death Sentence Review</h4>
                                    <p>Mandatory automatic review by the Supreme Court.</p>
                                </div>
                            </div>
                            
                            <div class="info-box">
                                <div class="info-icon">
                                    <i class="fas fa-user-shield"></i>
                                </div>
                                <div class="info-content">
                                    <h4>Accused Rights</h4>
                                    <p>Right to be present unless waived for security or public health reasons; free counsel for murder and treason appeals when indigent.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Civil Appeals Section -->
                <section id="civil-appeals" class="supreme-section-content">
                    <div class="section-header">
                        <h2>Civil Appeals</h2>
                    </div>
                    
                    <div class="glass-card">
                        <div class="civil-appeals-grid">
                            <div class="appeal-item">
                                <div class="appeal-icon">
                                    <i class="fas fa-file-contract"></i>
                                </div>
                                <h4>Record Submission</h4>
                                <p>File certified record within <strong>40 days</strong> of lodging the appeal; exclude irrelevant material.</p>
                            </div>
                            
                            <div class="appeal-item">
                                <div class="appeal-icon">
                                    <i class="fas fa-hand-holding-usd"></i>
                                </div>
                                <h4>Security for Costs</h4>
                                <p>Appellants must provide security for respondents' costs unless exempt (e.g., government entities).</p>
                            </div>
                            
                            <div class="appeal-item">
                                <div class="appeal-icon">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                                <h4>Written Submissions</h4>
                                <p>Heads of argument due <strong>20 days</strong> before hearing; respondent replies <strong>15 days</strong> prior.</p>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Pauper Appellants Section -->
                <section id="pauper-appellants" class="supreme-section-content">
                    <div class="section-header">
                        <h2>Pauper Appellants</h2>
                    </div>
                    
                    <div class="glass-card">
                        <h3>Eligibility & Application Process</h3>
                        
                        <div class="eligibility-content">
                            <div class="eligibility-criteria">
                                <h4>Eligibility</h4>
                                <p>Demonstrate inability to pay fees via affidavit.</p>
                            </div>
                            
                            <div class="application-process">
                                <h4>Application Process</h4>
                                <ol class="process-list">
                                    <li>Submit pauper application to the Registrar.</li>
                                    <li>Registrar assesses financial status and refers to counsel for merit determination.</li>
                                    <li>If approved, state covers fees (excluding record preparation costs).</li>
                                </ol>
                            </div>
                            
                            <div class="free-representation">
                                <h4>Free Representation</h4>
                                <p>Granted where counsel certifies substantial grounds for appeal.</p>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- New Evidence & Reviews Section -->
                <section id="new-evidence" class="supreme-section-content">
                    <div class="section-header">
                        <h2>New Evidence & Reviews</h2>
                    </div>
                    
                    <div class="two-column-grid">
                        <div class="glass-card">
                            <h3>New Evidence</h3>
                            <p>Admitted only if unavailable during original trial despite due diligence; file via affidavit or oral examination.</p>
                            <ul class="checklist">
                                <li>Must be relevant to the issues in the case</li>
                                <li>Must be credible and potentially impact the outcome</li>
                                <li>Must explain why it was not available at trial</li>
                                <li>Must be filed through proper procedural channels</li>
                            </ul>
                        </div>
                        
                        <div class="glass-card">
                            <h3>Reviews</h3>
                            <p>Permitted on grounds of fraud, miscarriage of justice, or after discovery of new evidence; file within <strong>20 days</strong> of the impugned decision.</p>
                            <ul class="checklist">
                                <li>Clear demonstration of grounds for review required</li>
                                <li>Strict adherence to filing timelines enforced</li>
                                <li>Full documentation of alleged errors needed</li>
                                <li>Sworn affidavits must support factual claims</li>
                            </ul>
                        </div>
                    </div>
                </section>
                
                <!-- Supervisory Jurisdiction Section -->
                <section id="supervisory" class="supreme-section-content">
                    <div class="section-header">
                        <h2>Supervisory Jurisdiction</h2>
                    </div>
                    
                    <div class="glass-card">
                        <div class="supervisory-content">
                            <div class="scope-info">
                                <h3>Scope</h3>
                                <p>Constitutional review of lower court or tribunal decisions.</p>
                                <p>The Supreme Court's supervisory jurisdiction allows it to oversee the functioning of all courts and tribunals to ensure compliance with constitutional principles and proper administration of justice.</p>
                            </div>
                            
                            <div class="procedure-info">
                                <h3>Procedure</h3>
                                <ol class="numbered-steps">
                                    <li>File an application with affidavit within <strong>25 days</strong> of the decision</li>
                                    <li>Attach a copy of the order being challenged</li>
                                    <li>Serve the application on all affected parties</li>
                                    <li>Await directions from the Registrar for hearing dates</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Audio-Visual Links Section -->
                <section id="audio-visual" class="supreme-section-content">
                    <div class="section-header">
                        <h2>Audio-Visual Links in Proceedings</h2>
                    </div>
                    
                    <div class="glass-card">
                        <div class="criteria-container">
                            <div class="criteria-box">
                                <h3>Use Criteria</h3>
                                <div class="criteria-grid">
                                    <div class="criterion">
                                        <h4>Criminal Cases</h4>
                                        <p>Requires consent of the accused unless delay risks frustration of justice.</p>
                                    </div>
                                    <div class="criterion">
                                        <h4>Civil Cases</h4>
                                        <p>Default unless good reason to require in‑person attendance.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="technical-standards">
                                <h3>Technical Standards</h3>
                                <ul class="standard-list">
                                    <li><strong>Approved Platforms:</strong> Microsoft Teams, Zoom</li>
                                    <li><strong>Visual Requirements:</strong> Professional conduct and background</li>
                                    <li><strong>Camera Policy:</strong> Cameras must remain on for judges and counsel</li>
                                    <li><strong>Audio Policy:</strong> Microphones muted except when speaking</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Court Sessions Section -->
                <section id="sessions" class="supreme-section-content">
                    <div class="section-header">
                        <h2>Court Sessions</h2>
                    </div>
                    
                    <div class="sessions-grid">
                        <div class="glass-card session-card">
                            <div class="session-icon">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <h3>Regular Sessions</h3>
                            <p>May and November annually.</p>
                        </div>
                        
                        <div class="glass-card session-card">
                            <div class="session-icon">
                                <i class="fas fa-calendar-plus"></i>
                            </div>
                            <h3>Special Sessions</h3>
                            <p>Convened by the Chief Justice as needed.</p>
                        </div>
                        
                        <div class="glass-card session-card">
                            <div class="session-icon">
                                <i class="fas fa-hourglass-half"></i>
                            </div>
                            <h3>Duration</h3>
                            <p>Typically 2–3 weeks per session; schedules published at the start of each session.</p>
                        </div>
                    </div>
                </section>
                
                <!-- Court Officials Section -->
                <section id="officials" class="supreme-section-content">
                    <div class="section-header">
                        <h2>Court Officials</h2>
                    </div>
                    
                    <div class="glass-card">
                        <div class="officials-grid">
                            <div class="official-card">
                                <div class="official-icon">
                                    <i class="fas fa-balance-scale"></i>
                                </div>
                                <h3>Chief Justice</h3>
                                <p>Head of the Judiciary who presides over the Supreme Court.</p>
                            </div>
                            
                            <div class="official-card">
                                <div class="official-icon">
                                    <i class="fas fa-gavel"></i>
                                </div>
                                <h3>Justices</h3>
                                <p>Appointed members of the Supreme Court bench.</p>
                            </div>
                            
                            <div class="official-card">
                                <div class="official-icon">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <h3>Registrar</h3>
                                <p>Administrative head responsible for court operations.</p>
                            </div>
                            
                            <div class="official-card">
                                <div class="official-icon">
                                    <i class="fas fa-user-cog"></i>
                                </div>
                                <h3>Deputy Registrar</h3>
                                <p>Assists the Registrar in administrative functions.</p>
                            </div>
                            
                            <div class="official-card">
                                <div class="official-icon">
                                    <i class="fas fa-users-cog"></i>
                                </div>
                                <h3>Court Support Staff</h3>
                                <p>Various personnel supporting court operations.</p>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Access & Etiquette Section -->
                <section id="access" class="supreme-section-content">
                    <div class="section-header">
                        <h2>Access & Etiquette</h2>
                    </div>
                    
                    <div class="access-etiquette-grid">
                        <div class="glass-card etiquette-card">
                            <div class="etiquette-icon">
                                <i class="fas fa-door-open"></i>
                            </div>
                            <h3>Public Access</h3>
                            <p>Hearings open to the public subject to space and security.</p>
                        </div>
                        
                        <div class="glass-card etiquette-card">
                            <div class="etiquette-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h3>Security Screening</h3>
                            <p>Mandatory at building entrance.</p>
                        </div>
                        
                        <div class="glass-card etiquette-card">
                            <div class="etiquette-icon">
                                <i class="fas fa-video-slash"></i>
                            </div>
                            <h3>Recording</h3>
                            <p>Photography and recording prohibited without leave of the Court.</p>
                        </div>
                        
                        <div class="glass-card etiquette-card">
                            <div class="etiquette-icon">
                                <i class="fas fa-tshirt"></i>
                            </div>
                            <h3>Dress Code</h3>
                            <p>Business attire required.</p>
                        </div>
                        
                        <div class="glass-card etiquette-card">
                            <div class="etiquette-icon">
                                <i class="fas fa-comments"></i>
                            </div>
                            <h3>Courtroom Conduct</h3>
                            <p>Stand when the Court enters/exits; speak only when recognized.</p>
                        </div>
                    </div>
                </section>
                
                <!-- Contact Information Section -->
                <section id="contact" class="supreme-section-content">
                    <div class="section-header">
                        <h2>Contact Information</h2>
                    </div>
                    
                    <div class="glass-card contact-card">
                        <div class="contact-grid">
                            <div class="contact-info">
                                <h3>Registrar of the Supreme Court</h3>
                                <ul class="contact-list">
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>High Court Building, Lusutfu Road, Mbabane, Eswatini</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-envelope"></i>
                                        <span>P.O. Box 19, Mbabane</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-phone"></i>
                                        <span>+268 2404 2901</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-at"></i>
                                        <span>supremecourt@judiciary.org.sz</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        <span>Office Hours: 8:30 AM–1:00 PM & 2:00 PM–4:30 PM (Monday-Friday)</span>
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="contact-map">
                                <div class="map-placeholder">
                                    <i class="fas fa-map-marked-alt"></i>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3239.1001498629294!2d31.141976057467218!3d-26.33323851958402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2s!4v1746896472031!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    <p>Supreme Court Location</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="disclaimer glass-card">
                        <p>For detailed guidance and case‑specific advice, refer to the full Supreme Court Rules, 2023 (Legal Notice No. 294 of 2023) or consult a qualified legal practitioner.</p>
                    </div>
                </section>
                
                <!-- Call to Action Section -->
                <section class="supreme-cta">
                    <div class="cta-container glass-effect">
                        <h3>Need Legal Information?</h3>
                        <p>Explore our resources or contact the Registrar's office for guidance on Supreme Court procedures.</p>
                        <div class="cta-buttons">
                            <a href="court-rules.php" class="btn btn-primary">Court Rules</a>
                            <a href="contact.php" class="btn btn-outline">Contact Us</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>

<?php
// Capture the page content
$pageContent = ob_get_clean();

// Define page-specific scripts
$pageScripts = ['assets/js/supreme-court.js'];

// Include the template
include_once 'template.php';
?>