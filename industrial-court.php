<?php
/**
 * Industrial Court Page for Judiciary of Eswatini
 */

// Set page-specific variables
$page_title = "Industrial Court";

// Add page-specific stylesheets
$pageStyles = ["assets/css/industrial-court.css"];

// Add page-specific scripts
$pageScripts = ["assets/js/industrial-court.js"];

// Start content buffering to capture all output
ob_start();
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="hero-content glass-effect">
            <h1>Industrial Court of Eswatini</h1>
            <p class="tagline">Specialized Court for Employment and Labor Disputes</p>
        </div>
    </div>
</section>

<div class="container">
    <!-- Introduction Section -->
    <section class="intro-section glass-panel">
        <div class="section-content">
            <h2>Introduction</h2>
            <p>The Industrial Court of Eswatini is a specialized court established to adjudicate employment and labor disputes fairly and expeditiously. Created in 1980, it serves as an important forum for resolving workplace conflicts and ensuring compliance with labor laws in the Kingdom.</p>
        </div>
    </section>

    <!-- Court Members Section -->
    <section id="court-members" class="members-section">
        <div class="section-header">
            <h2>Court Composition</h2>
            <p>The Industrial Court consists of specialized judges and assessors with expertise in labor matters.</p>
        </div>
        
        <div class="members-grid">
            <div class="member-card glass-panel">
                <div class="member-image">
                    <img src="assets/images/industrial/jp.jpg" alt="President of the Industrial Court">
                </div>
                <div class="member-info">
                    <h3>The President</h3>
                    <p class="member-title">President of the Industrial Court</p>
                    <p class="member-bio">Heads the Industrial Court proceedings and administration, leading with expertise in labor law and industrial relations.</p>
                </div>
            </div>
            
            <div class="member-card glass-panel">
                <div class="member-image">
                    <img src="assets/images/industrial/dlamini.jpg" alt="Industrial Court Judge">
                </div>
                <div class="member-info">
                    <h3>Judge Dlamini</h3>
                    <p class="member-title">Judge of the Industrial Court</p>
                    <p class="member-bio">Specializes in employment contract disputes and workplace discrimination cases.</p>
                </div>
            </div>
            
            <div class="member-card glass-panel">
                <div class="member-image">
                    <img src="assets/images/industrial/mazibuko_.jpg" alt="Industrial Court Judge">
                </div>
                <div class="member-info">
                    <h3>Judge Mazibuko</h3>
                    <p class="member-title">Judge of the Industrial Court</p>
                    <p class="member-bio">Expert in collective bargaining agreements and trade union matters.</p>
                </div>
            </div>
            
            <div class="member-card glass-panel">
                <div class="member-image">
                    <img src="assets/images/industrial/nkonyane.jpg" alt="Industrial Court Judge">
                </div>
                <div class="member-info">
                    <h3>Judge Nkonyane</h3>
                    <p class="member-title">Judge of the Industrial Court</p>
                    <p class="member-bio">Specializes in unfair dismissal claims and remedial awards.</p>
                </div>
            </div>
        </div>
        
        <div class="assessors-info glass-panel">
            <h3>Court Assessors</h3>
            <p>The Industrial Court is assisted by qualified assessors who have specialized knowledge in labor relations, industrial practices, and business management. They provide technical expertise to judges during complex industrial disputes.</p>
        </div>
    </section>

    <!-- Jurisdiction Section with Tabs -->
    <section id="jurisdiction" class="jurisdiction-section">
        <div class="section-header">
            <h2>Jurisdiction and Powers</h2>
            <p>The Industrial Court has extensive jurisdiction over employment and labor matters.</p>
        </div>
        
        <div class="tabs-container">
            <div class="tabs">
                <button class="tab-btn active" data-tab="employment">Employment Disputes</button>
                <button class="tab-btn" data-tab="labor">Labor Relations</button>
                <button class="tab-btn" data-tab="statutory">Statutory Compliance</button>
                <button class="tab-btn" data-tab="remedial">Remedial Powers</button>
            </div>
            
            <div class="tab-content glass-panel">
                <div id="employment" class="tab-pane active">
                    <h3>Employment Disputes</h3>
                    <ul class="feature-list">
                        <li>
                            <svg class="icon"><use xlink:href="assets/svg/sprites.svg#check"></use></svg>
                            <div>
                                <h4>Unfair Dismissal Claims</h4>
                                <p>The court has jurisdiction to hear and determine claims of unfair dismissal by employees against employers.</p>
                            </div>
                        </li>
                        <li>
                            <svg class="icon"><use xlink:href="assets/svg/sprites.svg#check"></use></svg>
                            <div>
                                <h4>Wrongful Termination</h4>
                                <p>Cases involving breach of employment contract terms in termination processes.</p>
                            </div>
                        </li>
                        <li>
                            <svg class="icon"><use xlink:href="assets/svg/sprites.svg#check"></use></svg>
                            <div>
                                <h4>Breach of Employment Contracts</h4>
                                <p>Disputes related to alleged violations of employment agreements by either party.</p>
                            </div>
                        </li>
                        <li>
                            <svg class="icon"><use xlink:href="assets/svg/sprites.svg#check"></use></svg>
                            <div>
                                <h4>Disciplinary Actions</h4>
                                <p>Review of workplace disciplinary procedures and outcomes for compliance with legal standards.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <div id="labor" class="tab-pane">
                    <h3>Labor Relations</h3>
                    <ul class="feature-list">
                        <li>
                            <svg class="icon"><use xlink:href="assets/svg/sprites.svg#check"></use></svg>
                            <div>
                                <h4>Collective Bargaining Disputes</h4>
                                <p>Resolution of disputes arising from collective bargaining processes and agreements.</p>
                            </div>
                        </li>
                        <li>
                            <svg class="icon"><use xlink:href="assets/svg/sprites.svg#check"></use></svg>
                            <div>
                                <h4>Trade Union Recognition</h4>
                                <p>Matters related to the recognition of trade unions by employers and related rights.</p>
                            </div>
                        </li>
                        <li>
                            <svg class="icon"><use xlink:href="assets/svg/sprites.svg#check"></use></svg>
                            <div>
                                <h4>Industrial Action Matters</h4>
                                <p>Cases involving strikes, lockouts, and other forms of industrial action.</p>
                            </div>
                        </li>
                        <li>
                            <svg class="icon"><use xlink:href="assets/svg/sprites.svg#check"></use></svg>
                            <div>
                                <h4>Workplace Discrimination</h4>
                                <p>Adjudication of claims involving discrimination in the workplace based on protected characteristics.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <div id="statutory" class="tab-pane">
                    <h3>Statutory Compliance</h3>
                    <ul class="feature-list">
                        <li>
                            <svg class="icon"><use xlink:href="assets/svg/sprites.svg#check"></use></svg>
                            <div>
                                <h4>Employment Act Violations</h4>
                                <p>Enforcement of compliance with the Employment Act and other labor legislation.</p>
                            </div>
                        </li>
                        <li>
                            <svg class="icon"><use xlink:href="assets/svg/sprites.svg#check"></use></svg>
                            <div>
                                <h4>Occupational Health and Safety</h4>
                                <p>Disputes related to workplace safety standards and obligations.</p>
                            </div>
                        </li>
                        <li>
                            <svg class="icon"><use xlink:href="assets/svg/sprites.svg#check"></use></svg>
                            <div>
                                <h4>Wages and Benefits Regulations</h4>
                                <p>Cases involving minimum wage compliance, payment of wages, and statutory benefits.</p>
                            </div>
                        </li>
                        <li>
                            <svg class="icon"><use xlink:href="assets/svg/sprites.svg#check"></use></svg>
                            <div>
                                <h4>Working Conditions</h4>
                                <p>Matters related to statutory requirements for working conditions and employee welfare.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <div id="remedial" class="tab-pane">
                    <h3>Remedial Powers</h3>
                    <ul class="feature-list">
                        <li>
                            <svg class="icon"><use xlink:href="assets/svg/sprites.svg#check"></use></svg>
                            <div>
                                <h4>Reinstatement</h4>
                                <p>Authority to order employers to reinstate unfairly dismissed employees to their former positions.</p>
                            </div>
                        </li>
                        <li>
                            <svg class="icon"><use xlink:href="assets/svg/sprites.svg#check"></use></svg>
                            <div>
                                <h4>Compensation Awards</h4>
                                <p>Power to award financial compensation for various employment-related violations and damages.</p>
                            </div>
                        </li>
                        <li>
                            <svg class="icon"><use xlink:href="assets/svg/sprites.svg#check"></use></svg>
                            <div>
                                <h4>Declaratory Orders</h4>
                                <p>Issuance of orders declaring rights and obligations in employment relationships.</p>
                            </div>
                        </li>
                        <li>
                            <svg class="icon"><use xlink:href="assets/svg/sprites.svg#check"></use></svg>
                            <div>
                                <h4>Injunctive Relief</h4>
                                <p>Authority to grant injunctions to prevent unlawful industrial action or other employment violations.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Court Procedures Accordion -->
    <section id="procedures" class="procedures-section">
        <div class="section-header">
            <h2>Court Procedures</h2>
            <p>Understanding the process of bringing and resolving cases in the Industrial Court</p>
        </div>
        
        <div class="accordion glass-panel">
            <div class="accordion-item">
                <div class="accordion-header">
                    <h3>Filing a Claim</h3>
                    <span class="accordion-icon">+</span>
                </div>
                <div class="accordion-content">
                    <p>To initiate proceedings in the Industrial Court, applicants must follow these steps:</p>
                    <ul>
                        <li><strong>Required Documentation:</strong> Complete Form A (Application Form) with details of the dispute, parties involved, and remedy sought.</li>
                        <li><strong>Time Limitations:</strong> Claims must be filed within 6 months of the dispute arising or termination of employment.</li>
                        <li><strong>Fees:</strong> Payment of filing fees as prescribed by court regulations.</li>
                        <li><strong>Service Requirements:</strong> Applicants must serve a copy of the application on the respondent within 14 days of filing.</li>
                    </ul>
                    <p>All forms are available at the Industrial Court Registry or can be downloaded from the Forms section of this website.</p>
                </div>
            </div>
            
            <div class="accordion-item">
                <div class="accordion-header">
                    <h3>Pre-Hearing Stage</h3>
                    <span class="accordion-icon">+</span>
                </div>
                <div class="accordion-content">
                    <p>Before a full hearing, the court conducts preliminary procedures:</p>
                    <ul>
                        <li><strong>Case Management Conference:</strong> Parties meet with a judge to establish timelines, identify issues, and explore settlement possibilities.</li>
                        <li><strong>Document Disclosure:</strong> Parties exchange relevant documents and evidence to be used in the proceedings.</li>
                        <li><strong>Witness Statements:</strong> Filing of written statements from witnesses who will testify during the hearing.</li>
                        <li><strong>Settlement Attempts:</strong> The court encourages alternative dispute resolution before proceeding to a full hearing.</li>
                    </ul>
                </div>
            </div>
            
            <div class="accordion-item">
                <div class="accordion-header">
                    <h3>Hearing Process</h3>
                    <span class="accordion-icon">+</span>
                </div>
                <div class="accordion-content">
                    <p>During the formal hearing, the following procedure is followed:</p>
                    <ul>
                        <li><strong>Presentation of Evidence:</strong> Each party presents their case, starting with the applicant, through documents and exhibits.</li>
                        <li><strong>Witness Testimony:</strong> Witnesses give evidence under oath and are subject to cross-examination.</li>
                        <li><strong>Legal Arguments:</strong> Legal representatives present arguments based on evidence and applicable law.</li>
                        <li><strong>Role of Assessors:</strong> Court assessors assist judges by providing technical expertise in industry-specific matters.</li>
                    </ul>
                    <p>Hearings are typically open to the public unless the court orders otherwise for confidentiality reasons.</p>
                </div>
            </div>
            
            <div class="accordion-item">
                <div class="accordion-header">
                    <h3>Judgment and Remedies</h3>
                    <span class="accordion-icon">+</span>
                </div>
                <div class="accordion-content">
                    <p>After considering all evidence and arguments, the court issues its judgment:</p>
                    <ul>
                        <li><strong>Delivery of Judgment:</strong> Decisions are delivered in writing and/or orally in open court.</li>
                        <li><strong>Types of Orders:</strong> The court may order reinstatement, compensation, declaratory orders, or other appropriate remedies.</li>
                        <li><strong>Implementation Timeframes:</strong> Orders typically specify the time within which they must be complied with.</li>
                        <li><strong>Enforcement Mechanisms:</strong> Failure to comply with court orders may result in contempt proceedings or execution against assets.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ADR Section -->
    <section id="adr" class="adr-section">
        <div class="section-header">
            <h2>Alternative Dispute Resolution</h2>
            <p>The Industrial Court encourages resolution of disputes through alternative methods.</p>
        </div>
        
        <div class="adr-cards">
            <div class="adr-card glass-panel">
                <div class="card-icon">
                    <svg class="icon"><use xlink:href="assets/svg/sprites.svg#handshake"></use></svg>
                </div>
                <h3>Court-Annexed Mediation</h3>
                <ul>
                    <li>Voluntary process facilitated by court-appointed mediators</li>
                    <li>Confidential discussions to reach mutually acceptable solutions</li>
                    <li>Settlements formalized as consent orders of the court</li>
                    <li>No cost beyond standard filing fees</li>
                </ul>
            </div>
            
            <div class="adr-card glass-panel">
                <div class="card-icon">
                    <svg class="icon"><use xlink:href="assets/svg/sprites.svg#balance"></use></svg>
                </div>
                <h3>Conciliation</h3>
                <ul>
                    <li>Process guided by conciliators from the Labour Commissioner's Office</li>
                    <li>Required step before certain disputes can proceed to court</li>
                    <li>Focus on resolving disputes through compromise</li>
                    <li>Certificate of outcome issued if conciliation fails</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Appeals Process -->
    <section id="appeals" class="appeals-section glass-panel">
        <div class="section-content">
            <h2>Appeals Process</h2>
            <p>Decisions of the Industrial Court may be appealed to the Industrial Court of Appeal:</p>
            
            <div class="appeal-details">
                <div class="appeal-item">
                    <h3>Grounds for Appeal</h3>
                    <p>Appeals may be made on grounds of:</p>
                    <ul>
                        <li>Errors in law</li>
                        <li>Jurisdictional errors</li>
                        <li>Procedural irregularities</li>
                    </ul>
                    <p>Appeals based solely on factual findings are generally not permitted.</p>
                </div>
                
                <div class="appeal-item">
                    <h3>Filing Timeline</h3>
                    <p>A notice of appeal must be filed within 6 weeks from the date of the Industrial Court judgment.</p>
                </div>
                
                <div class="appeal-item">
                    <h3>Procedure</h3>
                    <p>The appellant must:</p>
                    <ol>
                        <li>File notice of appeal with the Industrial Court Registry</li>
                        <li>Pay the prescribed appeal fee</li>
                        <li>Serve the notice on all respondents</li>
                        <li>File a record of proceedings within 8 weeks</li>
                    </ol>
                </div>
                
                <div class="appeal-item">
                    <h3>Outcomes</h3>
                    <p>The Industrial Court of Appeal may:</p>
                    <ul>
                        <li>Uphold the original decision</li>
                        <li>Overturn and substitute its own decision</li>
                        <li>Remit the matter back to the Industrial Court for reconsideration</li>
                        <li>Make any other order it deems appropriate</li>
                    </ul>
                </div>
            </div>
            
            <p class="appeal-link">For more information, visit the <a href="industrial-court-appeal.php">Industrial Court of Appeal page</a>.</p>
        </div>
    </section>

    <!-- Resources and Forms -->
    <section id="resources" class="resources-section">
        <div class="section-header">
            <h2>Forms and Resources</h2>
            <p>Essential documents for Industrial Court proceedings</p>
        </div>
        
        <div class="resources-grid">
            <div class="resource-card glass-panel">
                <div class="resource-icon">
                    <svg class="icon"><use xlink:href="assets/svg/sprites.svg#file-text"></use></svg>
                </div>
                <div class="resource-content">
                    <h3>Application Forms</h3>
                    <p>Standard forms for initiating proceedings</p>
                    <a href="#" class="resource-link">Download Forms</a>
                </div>
            </div>
            
            <div class="resource-card glass-panel">
                <div class="resource-icon">
                    <svg class="icon"><use xlink:href="assets/svg/sprites.svg#file-text"></use></svg>
                </div>
                <div class="resource-content">
                    <h3>Response Forms</h3>
                    <p>Forms for respondents in proceedings</p>
                    <a href="#" class="resource-link">Download Forms</a>
                </div>
            </div>
            
            <div class="resource-card glass-panel">
                <div class="resource-icon">
                    <svg class="icon"><use xlink:href="assets/svg/sprites.svg#book"></use></svg>
                </div>
                <div class="resource-content">
                    <h3>Practice Directions</h3>
                    <p>Guidelines on court procedures</p>
                    <a href="#" class="resource-link">View Directions</a>
                </div>
            </div>
            
            <div class="resource-card glass-panel">
                <div class="resource-icon">
                    <svg class="icon"><use xlink:href="assets/svg/sprites.svg#book"></use></svg>
                </div>
                <div class="resource-content">
                    <h3>Industrial Court Rules</h3>
                    <p>Detailed rules governing proceedings</p>
                    <a href="#" class="resource-link">View Rules</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Management System -->
    <section id="case-management" class="case-management-section glass-panel">
        <div class="section-content">
            <h2>Case Management System</h2>
            <p>The Industrial Court employs an efficient case management system to track and expedite cases:</p>
            
            <div class="feature-columns">
                <div class="feature-column">
                    <div class="feature-icon">
                        <svg class="icon"><use xlink:href="assets/svg/sprites.svg#search"></use></svg>
                    </div>
                    <h3>Case Tracking</h3>
                    <p>Monitor the progress of your case through our digital tracking system.</p>
                </div>
                
                <div class="feature-column">
                    <div class="feature-icon">
                        <svg class="icon"><use xlink:href="assets/svg/sprites.svg#upload"></use></svg>
                    </div>
                    <h3>Electronic Filing</h3>
                    <p>Submit documents electronically to expedite the filing process.</p>
                </div>
                
                <div class="feature-column">
                    <div class="feature-icon">
                        <svg class="icon"><use xlink:href="assets/svg/sprites.svg#calendar"></use></svg>
                    </div>
                    <h3>Scheduling</h3>
                    <p>Efficient allocation of hearing dates and case management conferences.</p>
                </div>
                
                <div class="feature-column">
                    <div class="feature-icon">
                        <svg class="icon"><use xlink:href="assets/svg/sprites.svg#bell"></use></svg>
                    </div>
                    <h3>Notifications</h3>
                    <p>Receive updates about your case via email or SMS.</p>
                </div>
            </div>
            
            <a href="#" class="button">Access Case Management Portal</a>
        </div>
    </section>

    <!-- Landmark Cases -->
    <section id="landmark-cases" class="landmark-section">
        <div class="section-header">
            <h2>Landmark Decisions</h2>
            <p>Notable cases that have shaped labor law in Eswatini</p>
        </div>
        
        <div class="cases-timeline">
            <div class="timeline-item glass-panel">
                <div class="timeline-date">2005</div>
                <div class="timeline-content">
                    <h3>Swaziland National Association of Teachers v Ministry of Education</h3>
                    <p>Established principles regarding collective bargaining rights and union representation in the public sector.</p>
                </div>
            </div>
            
            <div class="timeline-item glass-panel">
                <div class="timeline-date">2010</div>
                <div class="timeline-content">
                    <h3>Dlamini v Royal Swazi Sugar Corporation</h3>
                    <p>Set precedent for unfair dismissal cases and established guidelines for appropriate compensation.</p>
                </div>
            </div>
            
            <div class="timeline-item glass-panel">
                <div class="timeline-date">2015</div>
                <div class="timeline-content">
                    <h3>Federation of Swazi Employers v Trade Unions Congress</h3>
                    <p>Clarified legal requirements for lawful industrial action and strike procedures.</p>
                </div>
            </div>
            
            <div class="timeline-item glass-panel">
                <div class="timeline-date">2020</div>
                <div class="timeline-content">
                    <h3>Nkambule v Eswatini Telecommunications Company</h3>
                    <p>Landmark decision on workplace discrimination and equal treatment principles.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section id="contact" class="contact-section glass-panel">
        <div class="section-content">
            <h2>Contact Information</h2>
            
            <div class="contact-grid">
                <div class="contact-item">
                    <div class="contact-icon">
                        <svg class="icon"><use xlink:href="assets/svg/sprites.svg#map-pin"></use></svg>
                    </div>
                    <h3>Location</h3>
                    <p>Industrial Court Building<br>Mbabane, Eswatini</p>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <svg class="icon"><use xlink:href="assets/svg/sprites.svg#mail"></use></svg>
                    </div>
                    <h3>Postal Address</h3>
                    <p>P.O. Box 1571<br>Mbabane, Eswatini</p>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <svg class="icon"><use xlink:href="assets/svg/sprites.svg#phone"></use></svg>
                    </div>
                    <h3>Phone</h3>
                    <p>+268 2404 2391/2/3</p>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <svg class="icon"><use xlink:href="assets/svg/sprites.svg#mail"></use></svg>
                    </div>
                    <h3>Email</h3>
                    <p>industrial.court@judiciary.gov.sz</p>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <svg class="icon"><use xlink:href="assets/svg/sprites.svg#clock"></use></svg>
                    </div>
                    <h3>Operating Hours</h3>
                    <p>Monday to Friday<br>8:00 AM - 4:30 PM</p>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
// Capture the output and store it in the pageContent variable
$pageContent = ob_get_clean();

// Include the template file
include('template.php');
?>