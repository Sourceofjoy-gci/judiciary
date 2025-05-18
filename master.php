<?php
$page_title = "Master of the High Court";
$pageStyles = ['assets/css/master.css'];
$pageScripts = ['assets/js/master.js'];

ob_start(); // Start output buffering
?>

<!-- Hero Section -->
<section class="page-hero master-hero glass-effect-dark parallax-hero">
    <div class="hero-overlay"></div>
    <div class="container">
        <h1>Master of the High Court</h1>
        <p class="subtitle">Administering Estates and Protecting Financial Interests in Eswatini</p>
        <div class="hero-cta">
            <a href="#estate-reporting-process" class="btn-primary">Estate Reporting Process <i class="fas fa-chevron-right"></i></a>
            <a href="#document-checklist" class="btn-secondary">Document Requirements <i class="fas fa-file-alt"></i></a>
        </div>
    </div>
</section>

<!-- Main Content Section -->
<section class="page-content master-content">
    <div class="container">

        <!-- Introduction Section -->
        <article class="content-section intro-section" id="introduction">
            <h2><i class="fas fa-landmark"></i> Introduction</h2>
            <p>The Master's Office plays a vital role in the administration and protection of assets within the jurisdiction of Eswatini. The office serves as a custodian of estates and financial interests, ensuring proper management and distribution according to the law.</p>
        </article>

        <!-- Responsibilities Section -->
        <article class="content-section responsibilities-section glass-effect" id="responsibilities">
            <h2><i class="fas fa-tasks"></i> Key Responsibilities</h2>
            <p class="section-intro">The Master's Office is entrusted with several critical functions to ensure proper administration of estates and protection of interests.</p>
            
            <div class="responsibilities-grid">
                <div class="responsibility-card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <h3>Administration of Deceased Estates</h3>
                    </div>
                    <div class="card-content">
                        <ul>
                            <li>Overseeing the winding up of deceased estates.</li>
                            <li>Ensuring proper distribution of assets to beneficiaries.</li>
                            <li>Supervising executors in their duties.</li>
                        </ul>
                        <div class="card-footer">
                            <a href="#estate-reporting-process" class="card-link">View Process <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="responsibility-card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>Protection of Interests</h3>
                    </div>
                    <div class="card-content">
                        <ul>
                            <li>Safeguarding the interests of creditors, debtors, legatees, and minors.</li>
                            <li>Ensuring compliance with legal requirements.</li>
                            <li>Providing oversight for financial matters related to estates.</li>
                        </ul>
                        <div class="card-footer">
                            <a href="#document-checklist" class="card-link">Required Documents <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="responsibility-card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-file-signature"></i>
                        </div>
                        <h3>Registration and Safekeeping of Wills</h3>
                    </div>
                    <div class="card-content">
                        <ul>
                            <li>Maintaining records of registered wills.</li>
                            <li>Ensuring secure storage and confidentiality.</li>
                            <li>Facilitating access when legally required.</li>
                        </ul>
                        <div class="card-footer">
                            <a href="#faq" class="card-link">Read FAQs <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <!-- Estate Reporting Process Section -->
        <article class="content-section process-section glass-effect" id="estate-reporting-process">
            <h2><i class="fas fa-list-ol"></i> Estate Reporting Process</h2>
            <p class="section-intro">Reporting and administering a deceased estate follows a structured process that ensures proper handling of the deceased's assets and affairs.</p>
            
            <div class="process-timeline">
                <div class="process-step" data-step="1">
                    <div class="step-connector"></div>
                    <div class="step-icon">
                        <i class="fas fa-file-signature"></i>
                    </div>
                    <div class="step-content">
                        <h3>Report the Estate</h3>
                        <p>Contact the Master's Office within <strong>14 days</strong> of death to report the estate.</p>
                        <div class="step-tip">
                            <i class="fas fa-info-circle"></i> This timeline is mandated by law. Early reporting helps expedite the process.
                        </div>
                    </div>
                </div>
                
                <div class="process-step" data-step="2">
                    <div class="step-connector"></div>
                    <div class="step-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <div class="step-content">
                        <h3>Submit Required Documents</h3>
                        <p>Provide all necessary documentation including death certificate, will (if any), and inventory of assets.</p>
                        <a href="#document-checklist" class="step-action">View Required Documents <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="process-step" data-step="3">
                    <div class="step-connector"></div>
                    <div class="step-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <div class="step-content">
                        <h3>Appointment of Executor</h3>
                        <p>The Master will appoint an executor for estates above the threshold value, or issue a Letter of Authority for smaller estates.</p>
                        <div class="step-note">
                            <strong>Processing Time:</strong> Typically 2-4 weeks after document submission
                        </div>
                    </div>
                </div>
                
                <div class="process-step" data-step="4">
                    <div class="step-connector"></div>
                    <div class="step-icon">
                        <i class="fas fa-balance-scale-right"></i>
                    </div>
                    <div class="step-content">
                        <h3>Liquidation and Distribution</h3>
                        <p>The executor will gather assets, pay debts, and distribute the remaining estate to beneficiaries.</p>
                        <div class="step-timeline">
                            <div class="timeline-item"><span>0-3 months</span> Estate inventory</div>
                            <div class="timeline-item"><span>3-6 months</span> Creditor claims period</div>
                            <div class="timeline-item"><span>6+ months</span> Asset distribution</div>
                        </div>
                    </div>
                </div>
                
                <div class="process-step" data-step="5">
                    <div class="step-connector"></div>
                    <div class="step-icon">
                        <i class="fas fa-file-invoice"></i>
                    </div>
                    <div class="step-content">
                        <h3>Filing of Accounts</h3>
                        <p>The executor files accounts with the Master detailing all transactions and distributions.</p>
                        <div class="step-tip">
                            <i class="fas fa-info-circle"></i> Accounts must be filed within 6 months of appointment, with possible extensions if required.
                        </div>
                    </div>
                </div>
                
                <div class="process-step" data-step="6">
                    <div class="step-connector"></div>
                    <div class="step-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="step-content">
                        <h3>Discharge of Executor</h3>
                        <p>Once all duties are fulfilled and accounts approved, the executor is formally discharged.</p>
                        <div class="step-note">
                            <strong>Estate Closure:</strong> Complete estate administration typically takes 8-12 months, but may be longer for complex estates.
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <!-- Document Checklist Section -->
        <article class="content-section document-checklist-section glass-effect" id="document-checklist">
            <h2><i class="fas fa-clipboard-list"></i> Document Checklist</h2>
            <p class="section-intro">The following documents are required for different estate administration processes. Select a category to view the specific requirements.</p>
            
            <div class="checklist-container">
                <div class="checklist-tabs">
                    <button class="tab-btn active" data-tab="tab1">
                        <i class="fas fa-file-medical"></i>
                        <span>Reporting an Estate</span>
                    </button>
                    <button class="tab-btn" data-tab="tab2">
                        <i class="fas fa-gavel"></i>
                        <span>Letters of Executorship</span>
                    </button>
                    <button class="tab-btn" data-tab="tab3">
                        <i class="fas fa-file-signature"></i>
                        <span>Letters of Authority</span>
                    </button>
                    <button class="tab-btn" data-tab="tab4">
                        <i class="fas fa-file-invoice"></i>
                        <span>Final Account</span>
                    </button>
                </div>
                
                <div class="checklist-content">
                    <div class="tab-pane active" id="tab1">
                        <div class="checklist-header">
                            <div class="checklist-icon"><i class="fas fa-file-medical"></i></div>
                            <h3>Documents for Reporting an Estate</h3>
                            <p class="checklist-subtitle">These documents must be submitted within 14 days of death.</p>
                        </div>
                        <div class="document-grid">
                            <div class="document-item">
                                <div class="document-icon"><i class="fas fa-id-card"></i></div>
                                <div class="document-info">
                                    <h4>Death Certificate</h4>
                                    <p>Certified copy</p>
                                </div>
                            </div>
                            <div class="document-item">
                                <div class="document-icon"><i class="fas fa-ring"></i></div>
                                <div class="document-info">
                                    <h4>Marriage Certificate</h4>
                                    <p>If applicable</p>
                                </div>
                            </div>
                            <div class="document-item">
                                <div class="document-icon"><i class="fas fa-scroll"></i></div>
                                <div class="document-info">
                                    <h4>Original Will</h4>
                                    <p>Or certified copy (if any)</p>
                                </div>
                            </div>
                            <div class="document-item">
                                <div class="document-icon"><i class="fas fa-coins"></i></div>
                                <div class="document-info">
                                    <h4>Asset List</h4>
                                    <p>With estimated values</p>
                                </div>
                            </div>
                            <div class="document-item">
                                <div class="document-icon"><i class="fas fa-hand-holding-usd"></i></div>
                                <div class="document-info">
                                    <h4>Liabilities List</h4>
                                    <p>Outstanding debts and amounts</p>
                                </div>
                            </div>
                            <div class="document-item">
                                <div class="document-icon"><i class="fas fa-id-badge"></i></div>
                                <div class="document-info">
                                    <h4>ID of Deceased</h4>
                                    <p>Certified copy</p>
                                </div>
                            </div>
                            <div class="document-item">
                                <div class="document-icon"><i class="fas fa-users"></i></div>
                                <div class="document-info">
                                    <h4>IDs of Beneficiaries</h4>
                                    <p>Certified copies</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane" id="tab2">
                        <div class="checklist-header">
                            <div class="checklist-icon"><i class="fas fa-gavel"></i></div>
                            <h3>Documents for Letters of Executorship</h3>
                            <p class="checklist-subtitle">Required for estates above the threshold value.</p>
                        </div>
                        <div class="document-grid">
                            <div class="document-item">
                                <div class="document-icon"><i class="fas fa-file-alt"></i></div>
                                <div class="document-info">
                                    <h4>Death Notice</h4>
                                    <p>Formal notification with details</p>
                                </div>
                            </div>
                            <div class="document-item">
                                <div class="document-icon"><i class="fas fa-id-card"></i></div>
                                <div class="document-info">
                                    <h4>Death Certificate</h4>
                                    <p>Certified copy</p>
                                </div>
                            </div>
                            <div class="document-item">
                                <div class="document-icon"><i class="fas fa-file-contract"></i></div>
                                <div class="document-info">
                                    <h4>Next of Kin Affidavit</h4>
                                    <p>Completed and signed</p>
                                </div>
                            </div>
                            <div class="document-item">
                                <div class="document-icon"><i class="fas fa-clipboard-list"></i></div>
                                <div class="document-info">
                                    <h4>Asset Inventory</h4>
                                    <p>With detailed valuation</p>
                                </div>
                            </div>
                            <div class="document-item">
                                <div class="document-icon"><i class="fas fa-scroll"></i></div>
                                <div class="document-info">
                                    <h4>Will</h4>
                                    <p>If any exists</p>
                                </div>
                            </div>
                            <div class="document-item">
                                <div class="document-icon"><i class="fas fa-id-badge"></i></div>
                                <div class="document-info">
                                    <h4>Representative ID</h4>
                                    <p>Certified copy</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane" id="tab3">
                        <div class="checklist-header">
                            <div class="checklist-icon"><i class="fas fa-file-signature"></i></div>
                            <h3>Documents for Letters of Authority</h3>
                            <p class="checklist-subtitle">For smaller estates below the threshold value.</p>
                        </div>
                        <div class="document-grid">
                            <div class="document-item">
                                <div class="document-icon"><i class="fas fa-file-alt"></i></div>
                                <div class="document-info">
                                    <h4>Death Notice</h4>
                                    <p>Official notification form</p>
                                </div>
                            </div>
                            <div class="document-item">
                                <div class="document-icon"><i class="fas fa-id-card"></i></div>
                                <div class="document-info">
                                    <h4>Death Certificate</h4>
                                    <p>Certified copy</p>
                                </div>
                            </div>
                            <div class="document-item">
                                <div class="document-icon"><i class="fas fa-file-contract"></i></div>
                                <div class="document-info">
                                    <h4>Next of Kin Affidavit</h4>
                                    <p>Completed and signed</p>
                                </div>
                            </div>
                            <div class="document-item">
                                <div class="document-icon"><i class="fas fa-clipboard-list"></i></div>
                                <div class="document-info">
                                    <h4>Asset Inventory</h4>
                                    <p>With detailed valuation</p>
                                </div>
                            </div>
                            <div class="document-item">
                                <div class="document-icon"><i class="fas fa-scroll"></i></div>
                                <div class="document-info">
                                    <h4>Will</h4>
                                    <p>If any exists</p>
                                </div>
                            </div>
                            <div class="document-item">
                                <div class="document-icon"><i class="fas fa-id-badge"></i></div>
                                <div class="document-info">
                                    <h4>Representative ID</h4>
                                    <p>Certified copy</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane" id="tab4">
                        <div class="checklist-header">
                            <div class="checklist-icon"><i class="fas fa-file-invoice"></i></div>
                            <h3>Documents for Final Account Submission</h3>
                            <p class="checklist-subtitle">Required for closing the estate administration process.</p>
                        </div>
                        <div class="document-grid">
                            <div class="document-item">
                                <div class="document-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                                <div class="document-info">
                                    <h4>L&D Account</h4>
                                    <p>Liquidation and Distribution</p>
                                </div>
                            </div>
                            <div class="document-item">
                                <div class="document-icon"><i class="fas fa-receipt"></i></div>
                                <div class="document-info">
                                    <h4>Payment Vouchers</h4>
                                    <p>Supporting all transactions</p>
                                </div>
                            </div>
                            <div class="document-item">
                                <div class="document-icon"><i class="fas fa-file-alt"></i></div>
                                <div class="document-info">
                                    <h4>Receipts</h4>
                                    <p>From heirs/beneficiaries</p>
                                </div>
                            </div>
                            <div class="document-item">
                                <div class="document-icon"><i class="fas fa-landmark"></i></div>
                                <div class="document-info">
                                    <h4>Bank Statements</h4>
                                    <p>Of estate account</p>
                                </div>
                            </div>
                            <div class="document-item">
                                <div class="document-icon"><i class="fas fa-file-certificate"></i></div>
                                <div class="document-info">
                                    <h4>Tax Clearance</h4>
                                    <p>Certificate from revenue authority</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="document-note">
                <i class="fas fa-info-circle"></i>
                <p>All documents should be submitted in person at the Master's Office. Additional documents may be required based on the specific circumstances of the estate.</p>
            </div>
        </article>

        <!-- Contact Information Section -->
        <article class="content-section contact-section" id="contact-information">
            <h2><i class="fas fa-address-book"></i> Contact the Master's Office</h2>
            <div class="contact-details">
                <p><strong>Office Address:</strong> [Insert Full Address Here, e.g., High Court Building, Hospital Hill, Mbabane]</p>
                <p><strong>Phone:</strong> [Insert Phone Number(s)]</p>
                <p><strong>Email:</strong> <a href="mailto:[Insert Email Address]">[Insert Email Address]</a></p>
                <p><strong>Office Hours:</strong> Monday to Friday, 8:30 AM - 4:00 PM</p>
            </div>
        </article>

        <!-- FAQ Section -->
        <article class="content-section faq-section glass-effect" id="faq">
            <h2><i class="fas fa-question-circle"></i> Frequently Asked Questions</h2>
            <div class="faq-accordion">
                <div class="faq-item">
                    <button class="faq-question">How long does the estate administration process typically take?</button>
                    <div class="faq-answer">
                        <p>The duration varies depending on the complexity of the estate, potential disputes, and efficiency of information gathering. Simple estates might take 6-12 months, while complex ones can take longer.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">Do I need an attorney to report an estate?</button>
                    <div class="faq-answer">
                        <p>While not legally required for initial reporting, engaging an attorney is highly recommended, especially for complex estates, to ensure compliance and navigate legal procedures correctly.</p>
                    </div>
                </div>
                 <div class="faq-item">
                    <button class="faq-question">What happens if the deceased did not leave a will?</button>
                    <div class="faq-answer">
                        <p>The estate is administered according to the laws of intestate succession. The Master's Office will guide the appointment of an executor and the distribution of assets based on legal hierarchy.</p>
                    </div>
                </div>
                 <div class="faq-item">
                    <button class="faq-question">How are disputes between beneficiaries handled?</button>
                    <div class="faq-answer">
                        <p>The Master's Office may attempt mediation. If unresolved, disputes may need to be settled through formal court proceedings.</p>
                    </div>
                </div>
                 <div class="faq-item">
                    <button class="faq-question">What are the fees associated with estate administration?</button>
                    <div class="faq-answer">
                        <p>Fees include Master's fees (calculated as a percentage of the estate value), executor's remuneration (if applicable), valuation costs, advertising costs, and potential legal fees.</p>
                    </div>
                </div>
                 <div class="faq-item">
                    <button class="faq-question">Can I check the status of an estate online?</button>
                    <div class="faq-answer">
                        <p>[Provide current status - e.g., Currently, online status checking is not available. Please contact the Master's Office directly for updates.]</p>
                    </div>
                </div>
            </div>
        </article>

    </div> <!-- /.container -->
</section> <!-- /.page-content -->

<?php
$pageContent = ob_get_clean(); // Capture the output buffer into $pageContent
require_once 'template.php'; // Include the template file
?>