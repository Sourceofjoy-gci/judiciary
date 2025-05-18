<?php
/**
 * About Us page for the Judiciary of Eswatini
 * Displays information about the judiciary's vision, mission, structure, and history
 */

// Set page title
$page_title = "About Us";

// Define page-specific stylesheets
$pageStyles = ['assets/css/about.css'];

// Start output buffering to capture page content
ob_start();
?>

<!-- Hero Section with Glassmorphism Effect -->
<section class="hero-section" style="background-image: url('assets/images/scales-of-justice.jpg');">
    <div class="container">
        <div class="hero-content glass-effect-dark">
            <h1>About the Judiciary of Eswatini</h1>
            <p class="tagline">Upholding Justice, Preserving Independence, Serving the Nation</p>
        </div>
    </div>
</section>

<!-- Main Content Area with Sidebar -->
<section class="about-section">
    <div class="container">
        <div class="about-container">
            <!-- Sidebar Navigation -->
            <aside class="about-sidebar glass-effect">
                <nav class="sidebar-nav">
                    <ul id="about-nav">
                        <li><a href="#vision-mission" class="active">Vision and Mission</a></li>
                        <li><a href="#judicial-power">Judicial Power</a></li>
                        <li><a href="#judiciary-structure">Judiciary Structure</a></li>
                        <li><a href="#chief-justice">Chief Justice Functions</a></li>
                        <li><a href="#independence">Independence of the Judiciary</a></li>
                        <li><a href="#history">History</a></li>
                    </ul>
                </nav>
            </aside>
            
            <!-- Main Content -->
            <div class="about-content">
                <!-- Vision and Mission Section -->
                <section id="vision-mission" class="about-section-content">
                    <div class="section-header">
                        <h2>Vision and Mission</h2>
                    </div>
                    
                    <div class="glass-card">
                        <h3>Vision</h3>
                        <p>"To uphold the rule of law and effectively dispense justice to all citizens of the Kingdom, ensuring that the judiciary maintains its independence and respect."</p>
                    </div>
                    
                    <div class="glass-card">
                        <h3>Mission</h3>
                        <p>"To administer justice fairly and to all members of society regardless of status, to uphold the provisions of the Constitution of the country, and to offer public service of the highest standard."</p>
                    </div>
                    
                    <div class="core-values">
                        <h3>Core Values</h3>
                        <div class="values-grid">
                            <div class="value-card glass-effect">
                                <div class="value-icon">
                                    <i class="fas fa-balance-scale"></i>
                                </div>
                                <h4>Integrity</h4>
                                <p>We uphold the highest standards of ethical conduct and moral principles.</p>
                            </div>
                            <div class="value-card glass-effect">
                                <div class="value-icon">
                                    <i class="fas fa-gavel"></i>
                                </div>
                                <h4>Impartiality</h4>
                                <p>We make decisions without bias, treating all parties equally.</p>
                            </div>
                            <div class="value-card glass-effect">
                                <div class="value-icon">
                                    <i class="fas fa-handshake"></i>
                                </div>
                                <h4>Respect</h4>
                                <p>We treat all individuals with dignity and courtesy.</p>
                            </div>
                            <div class="value-card glass-effect">
                                <div class="value-icon">
                                    <i class="fas fa-award"></i>
                                </div>
                                <h4>Excellence</h4>
                                <p>We strive for the highest quality in all our services and procedures.</p>
                            </div>
                            <div class="value-card glass-effect">
                                <div class="value-icon">
                                    <i class="fas fa-landmark"></i>
                                </div>
                                <h4>Independence</h4>
                                <p>We maintain our autonomy from external influences in judicial decisions.</p>
                            </div>
                            <div class="value-card glass-effect">
                                <div class="value-icon">
                                    <i class="fas fa-balance-scale"></i>
                                </div>
                                <h4>Accountability</h4>
                                <p>We take responsibility for our actions and decisions.</p>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Judicial Power Section -->
                <section id="judicial-power" class="about-section-content">
                    <div class="section-header">
                        <h2>Judicial Power</h2>
                    </div>
                    
                    <div class="glass-card">
                        <p>The judicial power of Eswatini is vested in the Judiciary, which is independent and subject only to the Constitution. The courts are the guardians of the Constitution and the rule of law.</p>
                    </div>
                    
                    <div class="judicial-principles">
                        <h3>Key Constitutional Principles</h3>
                        <div class="principles-container">
                            <div class="principle-card glass-effect">
                                <div class="principle-number">1</div>
                                <p>Judicial power is derived from the people and shall be exercised by the courts established under the Constitution.</p>
                            </div>
                            <div class="principle-card glass-effect">
                                <div class="principle-number">2</div>
                                <p>The courts are independent and subject only to the Constitution and the law, which they shall apply impartially without fear, favor or prejudice.</p>
                            </div>
                            <div class="principle-card glass-effect">
                                <div class="principle-number">3</div>
                                <p>No person or organ of state shall interfere with judges or judicial officers in the exercise of their judicial functions.</p>
                            </div>
                            <div class="principle-card glass-effect">
                                <div class="principle-number">4</div>
                                <p>The Judiciary shall have jurisdiction over all civil and criminal matters in the country, and shall have the power to punish for contempt of court.</p>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Judiciary Structure Section -->
                <section id="judiciary-structure" class="about-section-content">
                    <div class="section-header">
                        <h2>Judiciary Structure</h2>
                    </div>
                    
                    <div class="court-hierarchy glass-card">
                        <div class="hierarchy-diagram">
                            <div class="court-level supreme">
                                <h4>Supreme Court</h4>
                                <p>Apex Court</p>
                            </div>
                            <div class="court-level high">
                                <h4>High Court and Industrial Court of Appeal</h4>
                                <p>Superior Courts</p>
                            </div>
                            <div class="court-level specialized">
                                <h4>Specialized and First Instance Courts</h4>
                                <div class="specialized-courts">
                                    <div class="specialized-court">Magistrate Courts</div>
                                    <div class="specialized-court">Industrial Court</div>
                                    <div class="specialized-court">Small Claims Court</div>
                                    <div class="specialized-court">Swazi National Courts</div>
                                </div>
                            </div>
                            <div class="court-level administrative">
                                <h4>Administrative Offices</h4>
                                <div class="admin-offices">
                                    <div class="admin-office">Master of the High Court</div>
                                    <div class="admin-office">Judicial Commissioner</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="court-tabs">
                        <div class="tabs-container">
                            <div class="tabs-header">
                                <button class="tab-btn active" data-tab="jurisdiction">Jurisdiction</button>
                                <button class="tab-btn" data-tab="appeals">Appeals</button>
                                <button class="tab-btn" data-tab="specialized">Specialized Courts</button>
                                <button class="tab-btn" data-tab="access">Access to Justice</button>
                            </div>
                            <div class="tabs-content glass-effect">
                                <div class="tab-panel active" id="jurisdiction-panel">
                                    <h4>Jurisdiction of Courts</h4>
                                    <p>Each court in Eswatini has specific jurisdictional limits, both in terms of monetary value and subject matter. The Supreme Court has unlimited jurisdiction as the final appellate court, while the High Court has original jurisdiction in all civil and criminal matters.</p>
                                </div>
                                <div class="tab-panel" id="appeals-panel">
                                    <h4>Appeals Process</h4>
                                    <p>Appeals generally follow the court hierarchy, starting from lower courts to higher courts. Decisions of the Magistrate Courts can be appealed to the High Court, while decisions of the High Court can be appealed to the Supreme Court, which is the final court of appeal.</p>
                                </div>
                                <div class="tab-panel" id="specialized-panel">
                                    <h4>Specialized Courts</h4>
                                    <p>The judiciary includes specialized courts to handle specific matters. The Industrial Court handles labor disputes, the Commercial Court deals with commercial matters, and the Small Claims Court handles minor civil claims. Swazi National Courts apply Swazi customary law.</p>
                                </div>
                                <div class="tab-panel" id="access-panel">
                                    <h4>Access to Justice</h4>
                                    <p>The judiciary is committed to ensuring access to justice for all citizens of Eswatini. This includes providing legal aid services, translators for court proceedings, and ensuring that court facilities are accessible to people with disabilities.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Chief Justice Functions Section -->
                <section id="chief-justice" class="about-section-content">
                    <div class="section-header">
                        <h2>Chief Justice Functions</h2>
                    </div>
                    
                    <div class="functions-container">
                        <div class="function-card glass-effect">
                            <div class="function-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h4>Performance Monitoring</h4>
                            <p>Monitor and evaluate judicial performance to ensure efficient administration of justice.</p>
                        </div>
                        <div class="function-card glass-effect">
                            <div class="function-icon">
                                <i class="fas fa-clipboard"></i>
                            </div>
                            <h4>Administrative Procedures</h4>
                            <p>Establish and maintain administrative procedures for effective court operations.</p>
                        </div>
                        <div class="function-card glass-effect">
                            <div class="function-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <h4>Annual Reporting</h4>
                            <p>Prepare and submit annual reports on the functioning of the judiciary.</p>
                        </div>
                        <div class="function-card glass-effect">
                            <div class="function-icon">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <h4>Making Recommendations</h4>
                            <p>Provide recommendations for improving judicial administration and operations.</p>
                        </div>
                        <div class="function-card glass-effect">
                            <div class="function-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h4>Supervision of Staff</h4>
                            <p>Oversee and manage judicial staff to ensure efficient court operations.</p>
                        </div>
                        <div class="function-card glass-effect">
                            <div class="function-icon">
                                <i class="fas fa-sitemap"></i>
                            </div>
                            <h4>JSC Leadership</h4>
                            <p>Chair the Judicial Service Commission responsible for judicial appointments and discipline.</p>
                        </div>
                    </div>
                </section>
                
                <!-- Independence of the Judiciary Section -->
                <section id="independence" class="about-section-content">
                    <div class="section-header">
                        <h2>Independence of the Judiciary</h2>
                    </div>
                    
                    <div class="glass-card">
                        <p>Judicial independence is a cornerstone of the rule of law in Eswatini. It ensures that judges and other judicial officers can perform their duties free from any external pressure or influence, making decisions based solely on facts and law.</p>
                    </div>
                    
                    <div class="independence-aspects">
                        <h3>Key Aspects of Independence</h3>
                        <div class="aspects-container">
                            <div class="aspect-card glass-effect">
                                <h4>Institutional Independence</h4>
                                <p>The judiciary operates as a separate branch of government, with its own structure and administration.</p>
                            </div>
                            <div class="aspect-card glass-effect">
                                <h4>Individual Independence</h4>
                                <p>Judges are free to decide cases impartially, based solely on facts and proper application of the law.</p>
                            </div>
                            <div class="aspect-card glass-effect">
                                <h4>Financial Autonomy</h4>
                                <p>The judiciary has its own budget allocation to ensure operational independence.</p>
                            </div>
                            <div class="aspect-card glass-effect">
                                <h4>Security of Tenure</h4>
                                <p>Judges hold office until retirement, subject only to removal for proven misbehavior or incapacity.</p>
                            </div>
                            <div class="aspect-card glass-effect">
                                <h4>Administrative Independence</h4>
                                <p>The judiciary controls its internal operations, case assignments, and court procedures.</p>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- History Section -->
                <section id="history" class="about-section-content">
                    <div class="section-header">
                        <h2>History</h2>
                    </div>
                    
                    <div class="glass-card">
                        <p>The judiciary of Eswatini has evolved over time, from traditional systems of dispute resolution to the modern court system that operates today. The current judicial system combines elements of Roman-Dutch common law with Swazi customary law.</p>
                    </div>
                    
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-marker glass-effect"></div>
                            <div class="timeline-content glass-effect">
                                <h4>Pre-colonial Era</h4>
                                <p>Justice was administered through traditional Swazi systems, with chiefs and eventually the king serving as final arbiters.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker glass-effect"></div>
                            <div class="timeline-content glass-effect">
                                <h4>Colonial Period</h4>
                                <p>British colonial administration introduced Roman-Dutch law and formal court structures alongside traditional systems.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker glass-effect"></div>
                            <div class="timeline-content glass-effect">
                                <h4>Independence (1968)</h4>
                                <p>Eswatini gained independence and established its own judiciary while maintaining parts of the colonial legal framework.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker glass-effect"></div>
                            <div class="timeline-content glass-effect">
                                <h4>Constitutional Developments</h4>
                                <p>The adoption of the 2005 Constitution strengthened judicial independence and reformed the court structure.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker glass-effect"></div>
                            <div class="timeline-content glass-effect">
                                <h4>Modern Era</h4>
                                <p>Continued refinement of the dual legal system, with ongoing efforts to harmonize traditional Swazi customary law with modern legal principles.</p>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Call to Action Section -->
                <section class="about-cta">
                    <div class="cta-container glass-effect">
                        <h3>Learn More About Our Courts</h3>
                        <p>Explore detailed information about different courts and their functions, or get in touch with us if you have any questions.</p>
                        <div class="cta-buttons">
                            <a href="courts.php" class="btn btn-primary">Our Courts</a>
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
$pageScripts = ['assets/js/about.js'];

// Include the template
include_once 'template.php';
?>