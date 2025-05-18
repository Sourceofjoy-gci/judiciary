<?php
/**
 * Judicial Service Commission page for Judiciary of Eswatini website
 * Displays information about the JSC, its mandate, composition, and functions
 */

// Set page title
$page_title = "Judicial Service Commission";

// Include page-specific styles
$pageStyles = [
    "assets/css/jsc.css"
];

// Include page-specific scripts
$pageScripts = [
    "assets/js/jsc.js"
];

// Start output buffering to capture page content
ob_start();
?>

<!-- Hero Section -->
<section class="hero-section" style="background-image: url('assets/images/jsc-hero-bg.jpg');">
    <div class="hero-content glass-effect-dark">
        <h1>Judicial Service Commission</h1>
        <p class="tagline">Upholding Judicial Independence and Excellence</p>
    </div>
</section>

<!-- Main Content -->
<div class="container">
    <!-- Introduction Section -->
    <section class="jsc-intro">
        <div class="section-content">
            <p class="lead">The Judicial Service Commission (JSC) is a constitutional body responsible for safeguarding the independence, integrity, and effectiveness of the judiciary in Eswatini. Established under the Constitution, the JSC plays a crucial role in the appointment, discipline, and removal of judicial officers, ensuring the proper administration of justice in the Kingdom.</p>
        </div>
    </section>

    <!-- Main Content with Sidebar -->
    <div class="jsc-container">
        <!-- Sidebar Navigation -->
        <aside class="jsc-sidebar glass-effect">
            <nav class="sidebar-nav">
                <ul>
                    <li><a href="#mandate" class="active">Constitutional Mandate</a></li>
                    <li><a href="#composition">JSC Membership</a></li>
                    <li><a href="#functions">Functions and Powers</a></li>
                    <li><a href="#appointment-process">Appointment Process</a></li>
                    <li><a href="#judicial-officers">Judicial Officers</a></li>
                    <li><a href="#complaints">Complaints Procedure</a></li>
                    <li><a href="#reports">Reports and Publications</a></li>
                    <li><a href="#legal-framework">Legal Framework</a></li>
                    <li><a href="#contact">Contact Information</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content Area -->
        <div class="jsc-content">
            <!-- Mandate Section -->
            <section id="mandate" class="content-section">
                <div class="section-header">
                    <h2>Constitutional Mandate</h2>
                    <div class="section-divider"></div>
                </div>
                <div class="section-content">
                    <p>The JSC's authority and responsibilities are derived from the Constitution of Eswatini.</p>
                    
                    <div class="mandate-cards">
                        <div class="mandate-card glass-effect">
                            <div class="card-icon">
                                <i class="fas fa-gavel"></i>
                            </div>
                            <h3>Appointments</h3>
                            <ul>
                                <li>Advising the King on judicial appointments</li>
                                <li>Selection process for judicial officers</li>
                                <li>Merit-based recruitment procedures</li>
                            </ul>
                        </div>
                        
                        <div class="mandate-card glass-effect">
                            <div class="card-icon">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                            <h3>Discipline</h3>
                            <ul>
                                <li>Investigation of complaints against judges</li>
                                <li>Disciplinary proceedings</li>
                                <li>Recommendations for action</li>
                            </ul>
                        </div>
                        
                        <div class="mandate-card glass-effect">
                            <div class="card-icon">
                                <i class="fas fa-user-minus"></i>
                            </div>
                            <h3>Removal</h3>
                            <ul>
                                <li>Grounds for removal of judges</li>
                                <li>Due process requirements</li>
                                <li>Protection against arbitrary removal</li>
                            </ul>
                        </div>
                        
                        <div class="mandate-card glass-effect">
                            <div class="card-icon">
                                <i class="fas fa-cogs"></i>
                            </div>
                            <h3>Administration</h3>
                            <ul>
                                <li>Recommendations on court operations</li>
                                <li>Judicial welfare matters</li>
                                <li>Resource allocation advice</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Composition Section -->
            <section id="composition" class="content-section">
                <div class="section-header">
                    <h2>JSC Membership</h2>
                    <div class="section-divider"></div>
                </div>
                <div class="section-content">
                    <p>The JSC consists of distinguished individuals representing various sectors of the legal and governmental system.</p>
                    
                    <div class="members-container">
                        <div class="member-category">
                            <h3>Chairperson: Chief Justice</h3>
                            <div class="member-details glass-effect">
                                <p><strong>Role and responsibilities:</strong> Leads the Commission and ensures its proper functioning.</p>
                                <p><strong>Appointment process:</strong> Appointed by the King in accordance with constitutional provisions.</p>
                                <p><strong>Term of office:</strong> Serves as Chairperson for the duration of their tenure as Chief Justice.</p>
                            </div>
                        </div>
                        
                        <div class="member-category">
                            <h3>Ex-Officio Members</h3>
                            <div class="member-details glass-effect">
                                <ul>
                                    <li>Chairman of the Civil Service Commission</li>
                                    <li>Other constitutional positions as specified by law</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="member-category">
                            <h3>Appointed Members</h3>
                            <div class="member-details glass-effect">
                                <ul>
                                    <li>King's appointees</li>
                                    <li>Legal profession representatives</li>
                                    <li>Public representatives</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="member-category">
                            <h3>Secretary</h3>
                            <div class="member-details glass-effect">
                                <p><strong>Administrative role:</strong> Coordinates the Commission's activities and maintains records.</p>
                                <p><strong>Support functions:</strong> Provides administrative support to the Commission.</p>
                                <p><strong>Record-keeping:</strong> Maintains minutes, decisions, and other important documentation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Functions Section -->
            <section id="functions" class="content-section">
                <div class="section-header">
                    <h2>Functions and Powers</h2>
                    <div class="section-divider"></div>
                </div>
                <div class="section-content">
                    <p>The JSC exercises significant powers to ensure judicial independence and effectiveness.</p>
                    
                    <div class="functions-accordion">
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <h3>Judicial Appointments</h3>
                                <span class="accordion-icon"><i class="fas fa-plus"></i></span>
                            </div>
                            <div class="accordion-content">
                                <ul>
                                    <li><strong>Selection criteria:</strong> Establishing and applying criteria for judicial appointments.</li>
                                    <li><strong>Interview processes:</strong> Conducting thorough interviews of candidates.</li>
                                    <li><strong>Recommendation procedures:</strong> Formulating recommendations for the King.</li>
                                    <li><strong>Appointment categories:</strong> Handling various judicial appointment categories.</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <h3>Performance Monitoring</h3>
                                <span class="accordion-icon"><i class="fas fa-plus"></i></span>
                            </div>
                            <div class="accordion-content">
                                <ul>
                                    <li><strong>Evaluation systems:</strong> Implementing systems to evaluate judicial performance.</li>
                                    <li><strong>Productivity assessment:</strong> Assessing the productivity of judicial officers.</li>
                                    <li><strong>Quality control measures:</strong> Ensuring the quality of judicial decisions.</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <h3>Disciplinary Oversight</h3>
                                <span class="accordion-icon"><i class="fas fa-plus"></i></span>
                            </div>
                            <div class="accordion-content">
                                <ul>
                                    <li><strong>Complaint handling:</strong> Receiving and processing complaints against judicial officers.</li>
                                    <li><strong>Investigation procedures:</strong> Investigating allegations of misconduct.</li>
                                    <li><strong>Disciplinary hearings:</strong> Conducting fair and impartial hearings.</li>
                                    <li><strong>Range of sanctions:</strong> Imposing appropriate disciplinary measures.</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <h3>Advisory Role</h3>
                                <span class="accordion-icon"><i class="fas fa-plus"></i></span>
                            </div>
                            <div class="accordion-content">
                                <ul>
                                    <li><strong>Judicial reform advice:</strong> Providing recommendations for judicial system reform.</li>
                                    <li><strong>Court administration recommendations:</strong> Advising on improvements to court administration.</li>
                                    <li><strong>Legal system improvement proposals:</strong> Proposing changes to enhance the legal system.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Appointment Process Section -->
            <section id="appointment-process" class="content-section">
                <div class="section-header">
                    <h2>Judicial Appointment Process</h2>
                    <div class="section-divider"></div>
                </div>
                <div class="section-content">
                    <p>The JSC follows a structured and transparent process for recommending judicial appointments.</p>
                    
                    <div class="process-timeline">
                        <div class="timeline-item">
                            <div class="timeline-marker">1</div>
                            <div class="timeline-content glass-effect">
                                <h3>Vacancy Identification</h3>
                                <ul>
                                    <li>Needs assessment</li>
                                    <li>Position creation</li>
                                    <li>Vacancy announcement</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-marker">2</div>
                            <div class="timeline-content glass-effect">
                                <h3>Application and Nomination</h3>
                                <ul>
                                    <li>Qualification requirements</li>
                                    <li>Documentation submission</li>
                                    <li>Deadline compliance</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-marker">3</div>
                            <div class="timeline-content glass-effect">
                                <h3>Screening and Shortlisting</h3>
                                <ul>
                                    <li>Initial review</li>
                                    <li>Background checks</li>
                                    <li>Shortlist compilation</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-marker">4</div>
                            <div class="timeline-content glass-effect">
                                <h3>Interviews and Assessment</h3>
                                <ul>
                                    <li>Interview panels</li>
                                    <li>Assessment criteria</li>
                                    <li>Performance evaluation</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-marker">5</div>
                            <div class="timeline-content glass-effect">
                                <h3>Recommendation and Appointment</h3>
                                <ul>
                                    <li>JSC deliberations</li>
                                    <li>Recommendation to the King</li>
                                    <li>Formal appointment procedure</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Judicial Officers Section -->
            <section id="judicial-officers" class="content-section">
                <div class="section-header">
                    <h2>Categories of Judicial Officers</h2>
                    <div class="section-divider"></div>
                </div>
                <div class="section-content">
                    <p>The JSC oversees the appointment of various judicial officers within the judiciary.</p>
                    
                    <div class="officers-grid">
                        <div class="officer-category glass-effect">
                            <h3>Superior Court Judges</h3>
                            <ul>
                                <li>Supreme Court Justices</li>
                                <li>High Court Judges</li>
                                <li>Industrial Court of Appeal Judges</li>
                            </ul>
                        </div>
                        
                        <div class="officer-category glass-effect">
                            <h3>Specialized Court Judges</h3>
                            <ul>
                                <li>Industrial Court Judges</li>
                                <li>Commercial Court Judges</li>
                                <li>Other specialized court officers</li>
                            </ul>
                        </div>
                        
                        <div class="officer-category glass-effect">
                            <h3>Magistrates</h3>
                            <ul>
                                <li>Principal Magistrates</li>
                                <li>Senior Magistrates</li>
                                <li>Magistrates</li>
                            </ul>
                        </div>
                        
                        <div class="officer-category glass-effect">
                            <h3>Court Administrators</h3>
                            <ul>
                                <li>Registrars</li>
                                <li>Assistant Registrars</li>
                                <li>Other key administrative positions</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Complaints Procedure Section -->
            <section id="complaints" class="content-section">
                <div class="section-header">
                    <h2>Complaints Against Judicial Officers</h2>
                    <div class="section-divider"></div>
                </div>
                <div class="section-content">
                    <p>The process for handling complaints against judicial officers:</p>
                    
                    <div class="complaints-process">
                        <div class="process-step glass-effect">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h3>Complaint Submission</h3>
                                <ul>
                                    <li>Format requirements</li>
                                    <li>Required information</li>
                                    <li>Submission channels</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="process-step glass-effect">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h3>Initial Assessment</h3>
                                <ul>
                                    <li>Preliminary review</li>
                                    <li>Jurisdiction determination</li>
                                    <li>Frivolous complaint filtering</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="process-step glass-effect">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <h3>Investigation</h3>
                                <ul>
                                    <li>Investigation committee</li>
                                    <li>Evidence gathering</li>
                                    <li>Hearings and interviews</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="process-step glass-effect">
                            <div class="step-number">4</div>
                            <div class="step-content">
                                <h3>Determination</h3>
                                <ul>
                                    <li>Findings presentation</li>
                                    <li>Recommendation formulation</li>
                                    <li>Decision-making process</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="process-step glass-effect">
                            <div class="step-number">5</div>
                            <div class="step-content">
                                <h3>Action Implementation</h3>
                                <ul>
                                    <li>Disciplinary measures</li>
                                    <li>Remedial actions</li>
                                    <li>Dismissal procedures when warranted</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Reports Section -->
            <section id="reports" class="content-section">
                <div class="section-header">
                    <h2>Annual Reports and Publications</h2>
                    <div class="section-divider"></div>
                </div>
                <div class="section-content">
                    <p>The JSC issues reports on its activities and the state of the judiciary.</p>
                    
                    <div class="reports-container">
                        <div class="report-type glass-effect">
                            <h3>Annual Report</h3>
                            <p>Yearly activity summary</p>
                            <a href="#" class="btn btn-outline">View Reports</a>
                        </div>
                        
                        <div class="report-type glass-effect">
                            <h3>Special Reports</h3>
                            <p>Thematic or issue-specific publications</p>
                            <a href="#" class="btn btn-outline">View Reports</a>
                        </div>
                        
                        <div class="report-type glass-effect">
                            <h3>Statistics</h3>
                            <p>Judicial performance data</p>
                            <a href="#" class="btn btn-outline">View Data</a>
                        </div>
                        
                        <div class="report-type glass-effect">
                            <h3>Recommendations</h3>
                            <p>System improvement proposals</p>
                            <a href="#" class="btn btn-outline">View Recommendations</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Legal Framework Section -->
            <section id="legal-framework" class="content-section">
                <div class="section-header">
                    <h2>Legal Framework</h2>
                    <div class="section-divider"></div>
                </div>
                <div class="section-content">
                    <p>The constitutional and statutory basis for the JSC's authority:</p>
                    
                    <div class="legal-framework-container glass-effect">
                        <div class="legal-item">
                            <h3>Constitutional Provisions</h3>
                            <p>Relevant sections of the Constitution</p>
                            <a href="#" class="read-more">Read more <i class="fas fa-arrow-right"></i></a>
                        </div>
                        
                        <div class="legal-item">
                            <h3>Enabling Legislation</h3>
                            <p>JSC Act and regulations</p>
                            <a href="#" class="read-more">Read more <i class="fas fa-arrow-right"></i></a>
                        </div>
                        
                        <div class="legal-item">
                            <h3>Rules of Procedure</h3>
                            <p>Internal operational rules</p>
                            <a href="#" class="read-more">Read more <i class="fas fa-arrow-right"></i></a>
                        </div>
                        
                        <div class="legal-item">
                            <h3>Practice Directions</h3>
                            <p>Implementation guidelines</p>
                            <a href="#" class="read-more">Read more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Information Section -->
            <section id="contact" class="content-section">
                <div class="section-header">
                    <h2>Contact the JSC</h2>
                    <div class="section-divider"></div>
                </div>
                <div class="section-content">
                    <div class="contact-container glass-effect">
                        <div class="contact-details">
                            <div class="contact-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <div>
                                    <h3>Secretariat</h3>
                                    <p>JSC Office, High Court Building, Mbabane</p>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <div>
                                    <h3>Postal Address</h3>
                                    <p>P.O. Box 19, Mbabane</p>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <i class="fas fa-phone"></i>
                                <div>
                                    <h3>Phone</h3>
                                    <p>+268 2404 2901</p>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <i class="fas fa-at"></i>
                                <div>
                                    <h3>Email</h3>
                                    <p>jsc@judiciary.gov.sz</p>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <i class="fas fa-clock"></i>
                                <div>
                                    <h3>Office Hours</h3>
                                    <p>Monday to Friday: 8:00 AM - 4:30 PM</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3239.1001498629294!2d31.141976057467218!3d-26.33323851958402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2s!4v1746896472031!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<?php
// Get the captured content
$pageContent = ob_get_clean();

// Include the template
include_once 'template.php';
?>
