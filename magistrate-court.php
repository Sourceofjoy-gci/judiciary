<?php
$page_title = "Magistrate Courts of Eswatini";
$pageStyles = ['assets/css/magistrate-court.css'];
// Add Leaflet CSS for the interactive map
$pageStyles[] = 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.css';
$pageScripts = ['assets/js/magistrate-court.js'];
// Add Leaflet JS for the interactive map
$pageScripts[] = 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.js';

ob_start(); // Start output buffering
?>

<!-- Modern Hero Section with Parallax Effect -->
<section class="page-hero magistrate-hero glass-effect-dark">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <h1 class="animate-fade-in">Magistrate Courts</h1>
            <p class="subtitle animate-fade-in">The Foundation of Justice in Eswatini Communities</p>
            <div class="hero-actions animate-fade-in">
                <a href="#court-guide" class="btn btn-primary">Court Rules Guide</a>
                <a href="#locations" class="btn btn-outline-light">Find a Court</a>
            </div>
        </div>
    </div>
</section>

<!-- Main Content Section -->
<section class="page-content magistrate-content">
    <div class="container">

        <!-- Introduction -->
        <article class="content-section magistrate-intro">
            <h2>Introduction</h2>
            <p>Magistrate Courts are the primary courts of first instance in Eswatini, handling the majority of civil and criminal cases. These courts are distributed throughout the country to ensure accessible justice for all citizens.</p>
        </article>

        <!-- Court Locations & Map -->
        <article class="content-section court-locations-section">
            <h2>Court Locations</h2>
            <p>Find Magistrate Courts throughout Eswatini using our interactive map.</p>
            
            <div class="map-container glass-effect">
                <div id="court-map"><!-- Map will be initialized here by JS -->
                    <p class="map-placeholder">Interactive map loading... If it doesn't appear, please ensure JavaScript is enabled.</p>
                </div>
                <div class="map-controls">
                    <!-- Add map controls/legend if needed -->
                    <span><i class="fas fa-map-marker-alt principal-marker"></i> Principal</span>
                    <span><i class="fas fa-map-marker-alt senior-marker"></i> Senior</span>
                    <span><i class="fas fa-map-marker-alt regional-marker"></i> Regional</span>
                    <!-- <button id="find-nearest-btn"><i class="fas fa-location-arrow"></i> Use My Location</button> --> <!-- Feature to be implemented -->
                </div>
            </div>

            <h3>Locations Directory</h3>
            <div class="locations-directory">
                <!-- Location Cards - Example: Mbabane -->
                <div class="location-card glass-effect">
                    <h4><i class="fas fa-map-marker-alt principal-marker"></i> 1. Mbabane</h4>
                    <p><strong>Address:</strong> CRN Gwamile Street & Malandela Ave, Opposite Omnicenter Building</p>
                    <p><strong>Contact:</strong> Phone: +268 2404 5516</p>
                    <p><strong>Hours:</strong> Mon–Fri, 08:00–16:00</p>
                </div>
                
                <!-- Manzini -->
                <div class="location-card glass-effect">
                    <h4><i class="fas fa-map-marker-alt principal-marker"></i> 2. Manzini</h4>
                    <p><strong>Address:</strong> CRN Mahleka St & Martin St next to Build It Hardware</p>
                    <p><strong>Contact:</strong> Phone: +268 2505 2296</p>
                    <p><strong>Hours:</strong> Mon–Fri, 08:00–16:00</p>
                </div>

                <!-- Nhlangano -->
                 <div class="location-card glass-effect">
                    <h4><i class="fas fa-map-marker-alt senior-marker"></i> 3. Nhlangano</h4>
                    <p><strong>Address:</strong> Next to Police Station and First National Bank</p>
                    <p><strong>Contact:</strong> Phone: +268 2207 8351</p>
                    <p><strong>Hours:</strong> Mon–Fri, 08:00–16:00</p>
                </div>

                <!-- Hluthi -->
                 <div class="location-card glass-effect">
                    <h4><i class="fas fa-map-marker-alt regional-marker"></i> 4. Hluthi</h4>
                    <p><strong>Address:</strong> Between Nhlangano-Lavumisa road, MR11, Next to Hluti Police Station</p>
                    <p><strong>Contact:</strong> Phone: +268 2217 6144</p>
                    <p><strong>Hours:</strong> Mon–Fri, 08:00–16:00</p>
                </div>

                <!-- Siteki -->
                 <div class="location-card glass-effect">
                    <h4><i class="fas fa-map-marker-alt senior-marker"></i> 5. Siteki</h4>
                    <p><strong>Address:</strong> Opp Building Society, Next to Police Station</p>
                    <p><strong>Contact:</strong> Phone: +268 2343 4175</p>
                    <p><strong>Hours:</strong> Mon–Fri, 08:00–16:00</p>
                </div>

                <!-- Simunye -->
                 <div class="location-card glass-effect">
                    <h4><i class="fas fa-map-marker-alt regional-marker"></i> 6. Simunye</h4>
                    <p><strong>Address:</strong> Next to Police Station</p>
                    <p><strong>Contact:</strong> Phone: +268 2383 8340</p>
                    <p><strong>Hours:</strong> Mon–Fri, 08:00–16:00</p>
                </div>

                <!-- Pigg’s Peak -->
                 <div class="location-card glass-effect">
                    <h4><i class="fas fa-map-marker-alt regional-marker"></i> 7. Pigg’s Peak</h4>
                    <p><strong>Address:</strong> MR1 CRN Swazi Bank, Next to Pigg's Peak Town Board</p>
                    <p><strong>Contact:</strong> Phone: +268 2437 1283</p>
                    <p><strong>Hours:</strong> Mon–Fri, 08:00–16:00</p>
                </div>
                <!-- Add other locations similarly -->
                  <div class="location-card glass-effect">
                    <h4><i class="fas fa-map-marker-alt regional-marker"></i> 7. Big Bend</h4>
                    <p><strong>Address:</strong> Next to Police Station</p>
                    <p><strong>Contact:</strong> Phone: +268 2383 8340</p>
                    <p><strong>Hours:</strong> Mon–Fri, 08:00–16:00</p>
                </div>
            </div>
        </article>

        <!-- Jurisdiction and Powers -->
        <article class="content-section jurisdiction-section">
            <h2>Jurisdiction and Powers</h2>
            <p>Understanding the scope and limitations of Magistrate Courts in Eswatini.</p>
            <div class="jurisdiction-details">
                <div class="jurisdiction-card glass-effect">
                    <h3><i class="fas fa-gavel"></i> Criminal Jurisdiction</h3>
                    <ul>
                        <li>Can impose sentences up to 10 years’ imprisonment or fines not exceeding E50,000.</li>
                        <li>Handles summary offences and indictable offences triable summarily.</li>
                        <li>May refer cases beyond its sentencing limits to the High Court.</li>
                    </ul>
                </div>
                <div class="jurisdiction-card glass-effect">
                    <h3><i class="fas fa-balance-scale"></i> Civil Jurisdiction</h3>
                    <ul>
                        <li>Adjudicates claims up to E300,000 in monetary value.</li>
                        <li>Hears contract disputes, property matters, and personal injury cases within its financial limits.</li>
                        <li>Exceptions: land disputes above prescribed value and specialized matters reserved for higher courts.</li>
                    </ul>
                </div>
                <div class="jurisdiction-card glass-effect">
                    <h3><i class="fas fa-folder-open"></i> Special Jurisdictions</h3>
                    <ul>
                        <li>Domestic violence protection orders.</li>
                        <li>Maintenance and custody disputes.</li>
                        <li>Small claims procedures for disputes under E5,000.</li>
                    </ul>
                </div>
            </div>
        </article>

        <!-- Court Procedures -->
        <article class="content-section procedures-section">
            <h2>Court Procedures</h2>
            <p>A guide to navigating Magistrate Court procedures.</p>
            <div class="procedure-tabs">
                <!-- Basic Tab Structure (JS can enhance this) -->
                <div class="tab active" data-tab="criminal">Criminal Cases</div>
                <div class="tab" data-tab="civil">Civil Cases</div>
                <div class="tab" data-tab="special">Special Applications</div>
            </div>
            <div class="procedure-content">
                <div class="tab-pane active" id="criminal">
                    <h3>Criminal Case Procedure</h3>
                    <ol>
                        <li>Arrest and charge</li>
                        <li>First appearance and plea</li>
                        <li>Bail application</li>
                        <li>Trial process with evidence presentation</li>
                        <li>Sentencing hearing</li>
                    </ol>
                </div>
                <div class="tab-pane" id="civil">
                    <h3>Civil Case Procedure</h3>
                    <ol>
                        <li>Filing a claim at court registry</li>
                        <li>Service of documents on respondent</li>
                        <li>Pre-trial conference or case management</li>
                        <li>Trial procedure and witness testimony</li>
                        <li>Judgment, costs assessment, and enforcement actions</li>
                    </ol>
                </div>
                <div class="tab-pane" id="special">
                    <h3>Special Applications</h3>
                    <ul>
                        <li>Protection orders under the Domestic Violence Act</li>
                        <li>Maintenance applications for children and spouses</li>
                        <li>Eviction proceedings under the Rent Control Act</li>
                    </ul>
                </div>
            </div>
        </article>

        <!-- Appeals Process -->
        <article class="content-section appeals-section">
            <h2>Appeals Process</h2>
            <p>How to appeal Magistrate Court decisions to the High Court.</p>
            <ol class="steps-list">
                <li><span class="step-number">1</span> File a notice of appeal within 14 days of judgment.</li>
                <li><span class="step-number">2</span> Prepare and lodge the court record.</li>
                <li><span class="step-number">3</span> Submit appeal documents and prescribed fees.</li>
                <li><span class="step-number">4</span> High Court hearing date set.</li>
                <li><span class="step-number">5</span> Judgment on appeal delivered by the High Court.</li>
            </ol>
        </article>

        <!-- Court Officials -->
        <article class="content-section officials-section">
            <h2>Court Officials and Their Roles</h2>
            <div class="officials-grid">
                <div class="official-card glass-effect-light">
                    <h3>Chief Magistrate</h3>
                    <p>Oversees administrative functions, assigns magistrates, manages court performance.</p>
                </div>
                 <div class="official-card glass-effect-light">
                    <h3>Senior Magistrates</h3>
                    <p>Preside over serious criminal/high-value civil matters, mentor regional magistrates.</p>
                </div>
                 <div class="official-card glass-effect-light">
                    <h3>Regional Magistrates</h3>
                    <p>Handle day-to-day case management, small claims, specialized applications.</p>
                </div>
                 <div class="official-card glass-effect-light">
                    <h3>Court Clerks</h3>
                    <p>Maintain records, manage filings, provide public assistance.</p>
                </div>
                 <div class="official-card glass-effect-light">
                    <h3>Prosecutors</h3>
                    <p>Present criminal cases for the State, liaise with police.</p>
                </div>
            </div>
        </article>

       
        <!-- FAQ Section -->
        <article class="content-section faq-section">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-accordion">
                <div class="faq-item">
                    <button class="faq-question">Do I need a lawyer to appear in Magistrate Court?</button>
                    <div class="faq-answer">
                        <p>You may represent yourself or engage a lawyer; however, legal representation is recommended for complex matters.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">How do I file a civil claim in Magistrate Court?</button>
                    <div class="faq-answer">
                        <p>Obtain the claim form at any Magistrate Court registry, complete it with particulars of your claim, and submit with the prescribed fee.</p>
                    </div>
                </div>
                 <div class="faq-item">
                    <button class="faq-question">What are the court fees for different types of cases?</button>
                    <div class="faq-answer">
                        <p>Fees vary by case type and claim value; a fee schedule is available at each registry and on our website.</p>
                    </div>
                </div>
                 <div class="faq-item">
                    <button class="faq-question">How long do Magistrate Court cases typically take?</button>
                    <div class="faq-answer">
                        <p>Timelines depend on case complexity and court workload; summary matters may conclude within weeks, while contested hearings can take months.</p>
                    </div>
                </div>
                 <div class="faq-item">
                    <button class="faq-question">What should I bring when attending court?</button>
                    <div class="faq-answer">
                        <p>Bring a valid ID, case documents, witness lists, and any relevant evidence or exhibits.</p>
                    </div>
                </div>
                 <div class="faq-item">
                    <button class="faq-question">Can I represent myself in Magistrate Court?</button>
                    <div class="faq-answer">
                        <p>Yes; parties are permitted to self-represent, but should familiarize themselves with court rules and procedures.</p>
                    </div>
                </div>
                <!-- Add other FAQs similarly -->
            </div>
        </article>

        <!-- Contact and Support -->
        <article class="content-section contact-support-section">
            <h2>Contact and Support</h2>
            <div class="support-details">
                <div class="support-card glass-effect">
                    <h3><i class="fas fa-phone-alt"></i> General Inquiries</h3>
                    <p>Phone: +268 2404 1000</p>
                    <p>Email: info@judiciary.org.sz</p>
                </div>
                <div class="support-card glass-effect">
                    <h3><i class="fas fa-info-circle"></i> Help Desk</h3>
                    <p>Visit any Magistrate Court registry for in-person assistance.</p>
                </div>
                <div class="support-card glass-effect">
                    <h3><i class="fas fa-universal-access"></i> Support Services</h3>
                    <ul>
                        <li>Interpreter services available on request.</li>
                        <li>Assistance for persons with disabilities.</li>
                    </ul>
                </div>
            </div>
        </article>

    </div> <!-- /.container -->
</section> <!-- /.page-content -->


<?php
$pageContent = ob_get_clean(); // Capture the output buffer into $pageContent
require_once 'template.php'; // Include the template file, which will use $pageContent
?>