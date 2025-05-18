<?php
/**
 * Legislation, Court Rules, and Practice Directives
 * A consolidated page displaying all legal resources
 */

// Set page title
$page_title = "Legislation & Rules";

// Start output buffering
ob_start();

// Page specific styles
$pageStyles = [
    'assets/css/legislation.css'
];

// Page specific scripts
$pageScripts = [
    'assets/js/legislation.js'
];
?>

<!-- Page Header Banner -->
<section class="page-header glass-effect">
    <div class="container">
        <h1 class="page-title">Legislation & Rules</h1>
        <div class="breadcrumbs">
            <a href="index.php">Home</a> / Legislation & Rules
        </div>
    </div>
</section>

<!-- Quick Navigation -->
<section class="quick-nav">
    <div class="container">
        <div class="nav-tabs" id="section-tabs">
            <a href="#legislation-section" class="nav-tab active" data-target="legislation-section">Legislation</a>
            <a href="#court-rules-section" class="nav-tab" data-target="court-rules-section">Court Rules</a>
            <a href="#practice-directives-section" class="nav-tab" data-target="practice-directives-section">Practice Directives</a>
        </div>
    </div>
</section>

<!-- Search and Filter Section -->
<section class="search-filter">
    <div class="container">
        <div class="filter-container glass-effect">
            <form id="document-filter-form">
                <div class="form-group">
                    <input type="text" id="search-docs" placeholder="Search documents..." class="search-input">
                </div>
                <div class="form-group">
                    <select id="year-filter" class="filter-select">
                        <option value="">All Years</option>
                        <?php
                        // Generate years from 1970 to current year
                        $currentYear = date("Y");
                        for ($year = $currentYear; $year >= 1970; $year--) {
                            echo "<option value=\"$year\">$year</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <select id="court-filter" class="filter-select">
                        <option value="">All Courts</option>
                        <option value="supreme">Supreme Court</option>
                        <option value="high">High Court</option>
                        <option value="commercial">Commercial Court</option>
                        <option value="industrial">Industrial Court</option>
                        <option value="magistrate">Magistrate Courts</option>
                    </select>
                </div>
                <button type="submit" class="btn-filter">Apply Filters</button>
                <button type="reset" class="btn-reset">Reset</button>
            </form>
        </div>
    </div>
</section>

<!-- Legislation Section -->
<section id="legislation-section" class="content-section active">
    <div class="container">
        <div class="section-header">
            <h2>Legislation</h2>
            <p>Key legislation governing the legal system of Eswatini</p>
        </div>
        
        <div class="cards-container">
            <!-- Constitutional Legislation -->
            <div class="category-group">
                <h3>Constitutional</h3>
                <div class="card-grid">
                    <div class="document-card glass-effect">
                        <div class="card-icon">
                            <i class="fas fa-scroll"></i>
                        </div>
                        <div class="card-content">
                            <h4>Constitution of Eswatini</h4>
                            <p>Act 001 of 2005</p>
                            <div class="card-meta">
                                <span class="year">2005</span>
                                <span class="size">1.2 MB</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <a href="#" class="btn-view" data-doc="constitution_2005.pdf">View</a>
                            <a href="#" class="btn-download" data-doc="constitution_2005.pdf">Download</a>
                        </div>
                    </div>
                    
                    <div class="document-card glass-effect">
                        <div class="card-icon">
                            <i class="fas fa-landmark"></i>
                        </div>
                        <div class="card-content">
                            <h4>Constitutional Review Commission Act</h4>
                            <p>Act 021 of 1996</p>
                            <div class="card-meta">
                                <span class="year">1996</span>
                                <span class="size">450 KB</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <a href="#" class="btn-view" data-doc="constitutional_review_commission_act_1996.pdf">View</a>
                            <a href="#" class="btn-download" data-doc="constitutional_review_commission_act_1996.pdf">Download</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Judicial Legislation -->
            <div class="category-group">
                <h3>Judicial</h3>
                <div class="card-grid">
                    <div class="document-card glass-effect">
                        <div class="card-icon">
                            <i class="fas fa-gavel"></i>
                        </div>
                        <div class="card-content">
                            <h4>Judiciary Act</h4>
                            <p>Act 015 of 1998</p>
                            <div class="card-meta">
                                <span class="year">1998</span>
                                <span class="size">780 KB</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <a href="#" class="btn-view" data-doc="judiciary_act_1998.pdf">View</a>
                            <a href="#" class="btn-download" data-doc="judiciary_act_1998.pdf">Download</a>
                        </div>
                    </div>
                    
                    <div class="document-card glass-effect">
                        <div class="card-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <div class="card-content">
                            <h4>Administration of Justice Act</h4>
                            <p>Act 035 of 2011</p>
                            <div class="card-meta">
                                <span class="year">2011</span>
                                <span class="size">950 KB</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <a href="#" class="btn-view" data-doc="administration_of_justice_act_2011.pdf">View</a>
                            <a href="#" class="btn-download" data-doc="administration_of_justice_act_2011.pdf">Download</a>
                        </div>
                    </div>
                    
                    <div class="document-card glass-effect">
                        <div class="card-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="card-content">
                            <h4>Judicial Service Commission Act</h4>
                            <p>Act 013 of 2000</p>
                            <div class="card-meta">
                                <span class="year">2000</span>
                                <span class="size">620 KB</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <a href="#" class="btn-view" data-doc="jsc_act_2000.pdf">View</a>
                            <a href="#" class="btn-download" data-doc="jsc_act_2000.pdf">Download</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Civil Procedure -->
            <div class="category-group">
                <h3>Civil Procedure</h3>
                <div class="card-grid">
                    <div class="document-card glass-effect">
                        <div class="card-icon">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <div class="card-content">
                            <h4>Civil Procedure Act</h4>
                            <p>Act 019 of 2018</p>
                            <div class="card-meta">
                                <span class="year">2018</span>
                                <span class="size">1.5 MB</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <a href="#" class="btn-view" data-doc="civil_procedure_act_2018.pdf">View</a>
                            <a href="#" class="btn-download" data-doc="civil_procedure_act_2018.pdf">Download</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Court Rules Section -->
<section id="court-rules-section" class="content-section">
    <div class="container">
        <div class="section-header">
            <h2>Court Rules</h2>
            <p>Procedural rules governing proceedings in various courts</p>
        </div>
        
        <div class="cards-container">
            <!-- Supreme Court Rules -->
            <div class="category-group">
                <h3>Supreme Court</h3>
                <div class="card-grid">
                    <div class="document-card glass-effect">
                        <div class="card-icon">
                            <i class="fas fa-university"></i>
                        </div>
                        <div class="card-content">
                            <h4>Supreme Court Rules</h4>
                            <p>Legal Notice 104 of 2007</p>
                            <div class="card-meta">
                                <span class="year">2007</span>
                                <span class="size">1.3 MB</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <a href="#" class="btn-view" data-doc="supreme_court_rules_2007.pdf">View</a>
                            <a href="#" class="btn-download" data-doc="supreme_court_rules_2007.pdf">Download</a>
                        </div>
                    </div>
                    
                    <div class="document-card glass-effect">
                        <div class="card-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <div class="card-content">
                            <h4>Supreme Court (Amendment) Rules</h4>
                            <p>Legal Notice 156 of 2016</p>
                            <div class="card-meta">
                                <span class="year">2016</span>
                                <span class="size">450 KB</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <a href="#" class="btn-view" data-doc="supreme_court_amendment_rules_2016.pdf">View</a>
                            <a href="#" class="btn-download" data-doc="supreme_court_amendment_rules_2016.pdf">Download</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- High Court Rules -->
            <div class="category-group">
                <h3>High Court</h3>
                <div class="card-grid">
                    <div class="document-card glass-effect">
                        <div class="card-icon">
                            <i class="fas fa-gavel"></i>
                        </div>
                        <div class="card-content">
                            <h4>High Court Rules</h4>
                            <p>Legal Notice 007 of 2010</p>
                            <div class="card-meta">
                                <span class="year">2010</span>
                                <span class="size">1.8 MB</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <a href="#" class="btn-view" data-doc="high_court_rules_2010.pdf">View</a>
                            <a href="#" class="btn-download" data-doc="high_court_rules_2010.pdf">Download</a>
                        </div>
                    </div>
                    
                    <div class="document-card glass-effect">
                        <div class="card-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div class="card-content">
                            <h4>Commercial Court Rules</h4>
                            <p>Legal Notice 043 of 2015</p>
                            <div class="card-meta">
                                <span class="year">2015</span>
                                <span class="size">1.1 MB</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <a href="#" class="btn-view" data-doc="commercial_court_rules_2015.pdf">View</a>
                            <a href="#" class="btn-download" data-doc="commercial_court_rules_2015.pdf">Download</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Industrial Court Rules -->
            <div class="category-group">
                <h3>Industrial Court</h3>
                <div class="card-grid">
                    <div class="document-card glass-effect">
                        <div class="card-icon">
                            <i class="fas fa-industry"></i>
                        </div>
                        <div class="card-content">
                            <h4>Industrial Court Rules</h4>
                            <p>Legal Notice 065 of 2008</p>
                            <div class="card-meta">
                                <span class="year">2008</span>
                                <span class="size">980 KB</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <a href="#" class="btn-view" data-doc="industrial_court_rules_2008.pdf">View</a>
                            <a href="#" class="btn-download" data-doc="industrial_court_rules_2008.pdf">Download</a>
                        </div>
                    </div>
                    
                    <div class="document-card glass-effect">
                        <div class="card-icon">
                            <i class="fas fa-balance-scale-right"></i>
                        </div>
                        <div class="card-content">
                            <h4>Industrial Court of Appeal Rules</h4>
                            <p>Legal Notice 072 of 2009</p>
                            <div class="card-meta">
                                <span class="year">2009</span>
                                <span class="size">850 KB</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <a href="#" class="btn-view" data-doc="industrial_court_appeal_rules_2009.pdf">View</a>
                            <a href="#" class="btn-download" data-doc="industrial_court_appeal_rules_2009.pdf">Download</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Magistrate Court Rules -->
            <div class="category-group">
                <h3>Magistrate Courts</h3>
                <div class="card-grid">
                    <div class="document-card glass-effect">
                        <div class="card-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="card-content">
                            <h4>Magistrate Court Rules</h4>
                            <p>Legal Notice 018 of 2012</p>
                            <div class="card-meta">
                                <span class="year">2012</span>
                                <span class="size">1.4 MB</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <a href="#" class="btn-view" data-doc="magistrate_court_rules_2012.pdf">View</a>
                            <a href="#" class="btn-download" data-doc="magistrate_court_rules_2012.pdf">Download</a>
                        </div>
                    </div>
                    
                    <div class="document-card glass-effect">
                        <div class="card-icon">
                            <i class="fas fa-coins"></i>
                        </div>
                        <div class="card-content">
                            <h4>Small Claims Courts Rules</h4>
                            <p>Legal Notice 032 of 2013</p>
                            <div class="card-meta">
                                <span class="year">2013</span>
                                <span class="size">720 KB</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <a href="#" class="btn-view" data-doc="small_claims_court_rules_2013.pdf">View</a>
                            <a href="#" class="btn-download" data-doc="small_claims_court_rules_2013.pdf">Download</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Practice Directives Section -->
<section id="practice-directives-section" class="content-section">
    <div class="container">
        <div class="section-header">
            <h2>Practice Directives</h2>
            <p>Guidelines issued by the Chief Justice and other judicial officers</p>
        </div>
        
        <div class="cards-container">
            <!-- Supreme Court Directives -->
            <div class="category-group">
                <h3>Supreme Court Directives</h3>
                <div class="card-grid">
                    <div class="document-card glass-effect">
                        <div class="card-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="card-content">
                            <h4>Supreme Court Practice Directive 1 of 2022</h4>
                            <p>Filing of Electronic Documents</p>
                            <div class="card-meta">
                                <span class="year">2022</span>
                                <span class="size">380 KB</span>
                                <span class="date">17 Jan 2022</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <a href="#" class="btn-view" data-doc="sc_practice_directive_1_2022.pdf">View</a>
                            <a href="#" class="btn-download" data-doc="sc_practice_directive_1_2022.pdf">Download</a>
                        </div>
                    </div>
                    
                    <div class="document-card glass-effect">
                        <div class="card-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="card-content">
                            <h4>Supreme Court Practice Directive 2 of 2022</h4>
                            <p>Consolidated Appeals Procedure</p>
                            <div class="card-meta">
                                <span class="year">2022</span>
                                <span class="size">420 KB</span>
                                <span class="date">03 Mar 2022</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <a href="#" class="btn-view" data-doc="sc_practice_directive_2_2022.pdf">View</a>
                            <a href="#" class="btn-download" data-doc="sc_practice_directive_2_2022.pdf">Download</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- High Court Directives -->
            <div class="category-group">
                <h3>High Court Directives</h3>
                <div class="card-grid">
                    <div class="document-card glass-effect">
                        <div class="card-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="card-content">
                            <h4>High Court Practice Directive 1 of 2023</h4>
                            <p>Case Management Procedures</p>
                            <div class="card-meta">
                                <span class="year">2023</span>
                                <span class="size">450 KB</span>
                                <span class="date">12 Feb 2023</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <a href="#" class="btn-view" data-doc="hc_practice_directive_1_2023.pdf">View</a>
                            <a href="#" class="btn-download" data-doc="hc_practice_directive_1_2023.pdf">Download</a>
                        </div>
                    </div>
                    
                    <div class="document-card glass-effect">
                        <div class="card-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="card-content">
                            <h4>High Court Practice Directive 2 of 2023</h4>
                            <p>Civil Trial Procedure</p>
                            <div class="card-meta">
                                <span class="year">2023</span>
                                <span class="size">380 KB</span>
                                <span class="date">18 Apr 2023</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <a href="#" class="btn-view" data-doc="hc_practice_directive_2_2023.pdf">View</a>
                            <a href="#" class="btn-download" data-doc="hc_practice_directive_2_2023.pdf">Download</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Chief Justice Directives -->
            <div class="category-group">
                <h3>Chief Justice Directives</h3>
                <div class="card-grid">
                    <div class="document-card glass-effect highlighted">
                        <div class="card-badge">New</div>
                        <div class="card-icon">
                            <i class="fas fa-bookmark"></i>
                        </div>
                        <div class="card-content">
                            <h4>CJ Practice Directive 1 of 2024</h4>
                            <p>Court Procedures During Public Health Emergencies</p>
                            <div class="card-meta">
                                <span class="year">2024</span>
                                <span class="size">520 KB</span>
                                <span class="date">15 Mar 2024</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <a href="#" class="btn-view" data-doc="cj_practice_directive_1_2024.pdf">View</a>
                            <a href="#" class="btn-download" data-doc="cj_practice_directive_1_2024.pdf">Download</a>
                        </div>
                    </div>
                    
                    <div class="document-card glass-effect">
                        <div class="card-icon">
                            <i class="fas fa-bookmark"></i>
                        </div>
                        <div class="card-content">
                            <h4>CJ Practice Directive 3 of 2021</h4>
                            <p>Judicial Ethics and Conduct</p>
                            <div class="card-meta">
                                <span class="year">2021</span>
                                <span class="size">680 KB</span>
                                <span class="date">07 Sep 2021</span>
                            </div>
                        </div>
                        <div class="card-actions">
                            <a href="#" class="btn-view" data-doc="cj_practice_directive_3_2021.pdf">View</a>
                            <a href="#" class="btn-download" data-doc="cj_practice_directive_3_2021.pdf">Download</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PDF Viewer Modal -->
<div id="document-viewer-modal" class="modal">
    <div class="modal-content glass-effect">
        <div class="modal-header">
            <h3 id="modal-title">Document Title</h3>
            <button class="modal-close">&times;</button>
        </div>
        <div class="modal-body">
            <div id="pdf-viewer">
                <div class="loading-indicator">
                    <div class="spinner"></div>
                    <p>Loading document...</p>
                </div>
                <iframe id="pdf-iframe" src="" frameborder="0"></iframe>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#" id="download-btn" class="btn-download">Download</a>
            <button class="btn-close">Close</button>
        </div>
    </div>
</div>

<?php
// Capture the output buffer and store it in the $pageContent variable
$pageContent = ob_get_clean();

// Include the template file
include('template.php');
?>
