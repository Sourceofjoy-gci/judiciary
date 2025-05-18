<?php
$page_title = "Contact Us";
$pageStyles = ['assets/css/contact.css'];
// Add Leaflet/Map library CSS if needed:
// $pageStyles[] = 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.css';
$pageScripts = ['assets/js/contact.js'];
// Add Leaflet/Map library JS if needed:
// $pageScripts[] = 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.js';
// $pageScripts[] = 'https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap'; // Example for Google Maps

ob_start(); // Start output buffering
?>

<!-- Hero Section -->
<section class="page-hero contact-hero glass-effect-dark">
    <div class="container">
        <h1>Contact the Judiciary of Eswatini</h1>
        <p class="subtitle">We're Here to Assist You</p>
    </div>
</section>

<!-- Main Content Section -->
<section class="page-content contact-content">
    <div class="container">

        <!-- Introduction Section -->
        <article class="content-section intro-section text-center" id="introduction">
            <p>The Judiciary of Eswatini is committed to providing accessible information and assistance to all citizens. Whether you have questions about court procedures, need to follow up on a case, or require general information about the judicial system, our team is ready to help.</p>
        </article>

        <!-- Contact Grid (Form & Main Office) -->
        <div class="contact-grid-layout">

            <!-- Contact Form Section -->
            <article class="content-section contact-form-section glass-effect" id="contact-form">
                <h2><i class="fas fa-paper-plane"></i> Get in Touch</h2>
                <p>Use the form below to send us your inquiry. We strive to respond to all messages within 48 business hours.</p>
                
                <?php
                // Display success/error messages from session if they exist
                session_start();
                if (isset($_SESSION['contact_success']) && $_SESSION['contact_success'] === true) {
                    echo '<div class="alert alert-success">' . htmlspecialchars($_SESSION['contact_message']) . '</div>';
                    // Clear the messages so they don't show up on page refresh
                    unset($_SESSION['contact_success']);
                    unset($_SESSION['contact_message']);
                } elseif (isset($_SESSION['contact_error']) && $_SESSION['contact_error'] === true) {
                    echo '<div class="alert alert-danger">' . htmlspecialchars($_SESSION['contact_message']) . '</div>';
                    // Clear the messages
                    unset($_SESSION['contact_error']);
                    unset($_SESSION['contact_message']);
                }
                ?>
                <form id="main-contact-form" action="includes/process_contact.php" method="POST" enctype="multipart/form-data" novalidate>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="full-name">Full Name <span class="required">*</span></label>
                            <input type="text" id="full-name" name="full_name" required aria-required="true">
                            <div class="error-message"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email Address <span class="required">*</span></label>
                            <input type="email" id="email" name="email" required aria-required="true">
                             <div class="error-message"></div>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone">
                             <div class="error-message"></div>
                        </div>
                    </div>
                    <div class="form-row">
                         <div class="form-group">
                            <label for="subject">Subject <span class="required">*</span></label>
                            <input type="text" id="subject" name="subject" required aria-required="true">
                             <div class="error-message"></div>
                        </div>
                    </div>
                     <div class="form-row">
                        <div class="form-group">
                            <label for="department">Court/Department</label>
                            <select id="department" name="department">
                                <option value="">-- Select One --</option>
                                <option value="general">General Inquiry</option>
                                <option value="supreme_court">Supreme Court Registry</option>
                                <option value="high_court">High Court Registry</option>
                                <option value="master_office">Master of the High Court</option>
                                <option value="magistrate_mbabane">Magistrate Court - Mbabane</option>
                                <option value="magistrate_manzini">Magistrate Court - Manzini</option>
                                <option value="industrial_court">Industrial Court</option>
                                <option value="small_claims">Small Claims Court</option>
                                <option value="feedback">Feedback/Complaint</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="message">Message <span class="required">*</span></label>
                            <textarea id="message" name="message" rows="6" required aria-required="true"></textarea>
                             <div class="error-message"></div>
                        </div>
                    </div>
                     <div class="form-row">
                        <div class="form-group">
                            <label for="attachment">File Attachment (Optional, Max 5MB)</label>
                            <input type="file" id="attachment" name="attachment" accept=".pdf,.doc,.docx,.jpg,.png">
                             <div class="error-message"></div>
                        </div>
                    </div>
                    <!-- Add CAPTCHA/Security Check here if needed -->
                    <div class="form-row">
                         <div class="form-group privacy-policy">
                            <input type="checkbox" id="privacy" name="privacy" value="accepted" required aria-required="true">
                            <label for="privacy">I acknowledge and accept the <a href="/privacy-policy.php" target="_blank">Privacy Policy</a>. <span class="required">*</span></label>
                             <div class="error-message"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                     <div id="form-status"></div> <!-- For success/error messages after submission -->
                </form>
            </article>

            <!-- Main Office Section -->
            <article class="content-section main-office-section" id="main-office">
                <h2><i class="fas fa-building"></i> Main Judiciary Office</h2>
                <p>Our headquarters is located in Mbabane.</p>
                <div class="office-details">
                    <p><i class="fas fa-map-marker-alt"></i> <strong>Physical Address:</strong><br> High Court Building, Hospital Hill, Mbabane, Eswatini</p>
                    <p><i class="fas fa-envelope"></i> <strong>Postal Address:</strong><br> P.O. Box 19, Mbabane, Eswatini</p>
                    <p><i class="fas fa-phone-alt"></i> <strong>Phone:</strong> <a href="tel:+26824042968">+268 2404 2968</a></p>
                    <p><i class="fas fa-fax"></i> <strong>Fax:</strong> +268 2404 XXXX [Update Fax]</p>
                    <p><i class="fas fa-at"></i> <strong>Email:</strong> <a href="mailto:info@judiciary.org.sz">info@judiciary.org.sz</a></p>
                    <p><i class="fas fa-clock"></i> <strong>Office Hours:</strong><br> Monday to Friday, 8:00 AM - 4:30 PM<br><em>(Closed on public holidays)</em></p>
                </div>
                 <!-- Embedded Map Placeholder -->
                <div class="embedded-map-placeholder glass-effect-light">
                     <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3480.74941118688!2d31.1333!3d-26.3167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ee8cee8f5a5a5a5%3A0x1ee8cee8f5a5a5a5!2sHigh%20Court%20of%20Eswatini!5e0!3m2!1sen!2sus!4v1678886400000!5m2!1sen!2sus"
                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Location of High Court of Eswatini"></iframe>
                </div>
            </article>

        </div> <!-- /.contact-grid-layout -->


        <!-- Court Locations Section -->
        <article class="content-section court-locations-section" id="court-locations">
            <h2><i class="fas fa-map-marked-alt"></i> Court Locations</h2>
            <p>Find contact information for courts throughout Eswatini. For detailed information, please visit the respective court pages.</p>
            <div class="court-directory-grid">
                <!-- Example Court Card -->
                <div class="court-card glass-effect-light">
                    <h3>Supreme Court</h3>
                    <p>High Court Building, Mbabane</p>
                    <p>Registry: +268 2404 XXXX</p>
                    <a href="supreme-court.php" class="btn btn-secondary btn-sm">More Info</a>
                </div>
                 <div class="court-card glass-effect-light">
                    <h3>High Court</h3>
                    <p>High Court Building, Mbabane</p>
                    <p>Registry: +268 2404 XXXX</p>
                    <a href="high-court.php" class="btn btn-secondary btn-sm">More Info</a>
                </div>
                 <div class="court-card glass-effect-light">
                    <h3>Commercial Court</h3>
                    <p>[Address], Mbabane</p>
                    <p>Registry: +268 2404 XXXX</p>
                    <a href="commercial-court.php" class="btn btn-secondary btn-sm">More Info</a>
                </div>
                 <div class="court-card glass-effect-light">
                    <h3>Industrial Court of Appeal</h3>
                    <p>[Address], Mbabane</p>
                    <p>Registry: +268 2404 XXXX</p>
                    <a href="industrial-court-appeal.php" class="btn btn-secondary btn-sm">More Info</a>
                </div>
                 <div class="court-card glass-effect-light">
                    <h3>Industrial Court</h3>
                    <p>[Address], Mbabane</p>
                    <p>Registry: +268 2404 XXXX</p>
                    <a href="industrial-court.php" class="btn btn-secondary btn-sm">More Info</a>
                </div>
                 <div class="court-card glass-effect-light">
                    <h3>Magistrate Courts</h3>
                    <p>Various locations (Mbabane, Manzini, etc.)</p>
                    <p>See specific court details.</p>
                    <a href="magistrate-court.php" class="btn btn-secondary btn-sm">More Info</a>
                </div>
                 <div class="court-card glass-effect-light">
                    <h3>Small Claims Courts</h3>
                    <p>Operates within Magistrate Courts</p>
                    <p>See specific court details.</p>
                    <a href="small-claims-courts.php" class="btn btn-secondary btn-sm">More Info</a>
                </div>
                <!-- Add other courts as needed -->
            </div>
        </article>

        <!-- Department Contacts Section -->
        <article class="content-section department-contacts-section" id="department-contacts">
            <h2><i class="fas fa-sitemap"></i> Department Contacts</h2>
            <p>Reach out to specific departments within the Judiciary.</p>
             <div class="department-list">
                 <!-- Example Department -->
                <div class="department-item glass-effect">
                    <h3>Office of the Chief Justice</h3>
                    <p><strong>Contact:</strong> [Contact Person/Title]</p>
                    <p><strong>Phone:</strong> [Phone Number]</p>
                    <p><strong>Email:</strong> [Email Address]</p>
                    <p><em>Oversees the administration and direction of the Judiciary.</em></p>
                </div>
                 <div class="department-item glass-effect">
                    <h3>Office of the Registrar</h3>
                    <p><strong>Contact:</strong> [Contact Person/Title]</p>
                    <p><strong>Phone:</strong> [Phone Number]</p>
                    <p><strong>Email:</strong> [Email Address]</p>
                    <p><em>Manages court records, filings, and procedural inquiries.</em></p>
                </div>
                 <div class="department-item glass-effect">
                    <h3>Master of the High Court</h3>
                    <p><strong>Contact:</strong> [Contact Person/Title]</p>
                    <p><strong>Phone:</strong> [Phone Number]</p>
                    <p><strong>Email:</strong> [Email Address]</p>
                    <p><em>Handles administration of deceased estates, trusts, and minors' funds.</em></p>
                    <a href="master.php" class="btn btn-secondary btn-sm">Visit Page</a>
                </div>
                 <div class="department-item glass-effect">
                    <h3>Judicial Service Commission (JSC)</h3>
                    <p><strong>Contact:</strong> [Contact Person/Title]</p>
                    <p><strong>Phone:</strong> [Phone Number]</p>
                    <p><strong>Email:</strong> [Email Address]</p>
                    <p><em>Responsible for judicial appointments and disciplinary matters.</em></p>
                </div>
                 <div class="department-item glass-effect">
                    <h3>Court Administration</h3>
                    <p><strong>Contact:</strong> [Contact Person/Title]</p>
                    <p><strong>Phone:</strong> [Phone Number]</p>
                    <p><strong>Email:</strong> [Email Address]</p>
                    <p><em>Handles general administrative and operational matters.</em></p>
                </div>
                <!-- Add other departments -->
            </div>
        </article>

        <!-- Map Section (Placeholder for interactive map) -->
        <article class="content-section map-section" id="find-us">
            <h2><i class="fas fa-map-pin"></i> Find Us</h2>
            <p>Use the interactive map to locate our main office and courts.</p>
            <div id="interactive-map-container" class="glass-effect" style="height: 450px; background-color: #e9ecef; display: flex; align-items: center; justify-content: center; color: #6c757d; font-style: italic;">
                Interactive Map Loading... (Requires JavaScript Map Library Integration)
                <!-- Map will be initialized here by JS -->
            </div>
        </article>

        <!-- FAQ Section -->
        <article class="content-section faq-section glass-effect-light" id="faq">
            <h2><i class="fas fa-question-circle"></i> Frequently Asked Questions</h2>
            <p>Quick answers to common inquiries.</p>
            <div class="faq-accordion">
                 <div class="faq-item">
                    <button class="faq-question">What are the court operating hours?</button>
                    <div class="faq-answer">
                        <p>Most court registries and offices operate from 8:00 AM to 4:30 PM, Monday to Friday, excluding public holidays. Specific courtroom hours may vary.</p>
                    </div>
                </div>
                 <div class="faq-item">
                    <button class="faq-question">How do I file a case?</button>
                    <div class="faq-answer">
                        <p>The process depends on the type of case and the court. Generally, you start by filing specific documents (like a summons or application) at the relevant court registry. Visit the specific court's page or contact the registry for detailed procedures.</p>
                    </div>
                </div>
                 <div class="faq-item">
                    <button class="faq-question">How can I follow up on my case status?</button>
                    <div class="faq-answer">
                        <p>You can inquire about your case status by contacting the registry of the court where the case was filed. Please have your case number ready.</p>
                    </div>
                </div>
                 <div class="faq-item">
                    <button class="faq-question">Where can I get court documents certified?</button>
                    <div class="faq-answer">
                        <p>Court documents can usually be certified at the registry of the court that issued them. Fees may apply.</p>
                    </div>
                </div>
                 <div class="faq-item">
                    <button class="faq-question">How do I contact a specific judge or magistrate?</button>
                    <div class="faq-answer">
                        <p>Direct contact with judges or magistrates regarding ongoing cases is generally not permitted to maintain impartiality. Official communication should go through the court registry or formal applications.</p>
                    </div>
                </div>
                 <div class="faq-item">
                    <button class="faq-question">What payment methods are accepted for court fees?</button>
                    <div class="faq-answer">
                        <p>Accepted payment methods typically include cash and electronic funds transfer (EFT). Please confirm with the specific court registry.</p>
                    </div>
                </div>
            </div>
        </article>

        <!-- Support Services Section -->
        <article class="content-section support-services-section" id="support-services">
            <h2><i class="fas fa-hands-helping"></i> Additional Support Services</h2>
            <p>Other ways we can assist you.</p>
            <div class="support-options-grid">
                <div class="support-option glass-effect">
                    <h3>Interpreter Services</h3>
                    <p>Available in various languages upon request. Contact the relevant court registry in advance.</p>
                </div>
                 <div class="support-option glass-effect">
                    <h3>Accessibility Services</h3>
                    <p>Assistance for persons with disabilities. Please inform the court registry of your needs beforehand.</p>
                </div>
                 <div class="support-option glass-effect">
                    <h3>Public Legal Aid</h3>
                    <p>Information on eligibility and application for legal aid services can be obtained from [Relevant Body/Link].</p>
                </div>
                 <div class="support-option glass-effect">
                    <h3>Document Services</h3>
                    <p>Certification, copies of judgments, and record retrieval available at court registries (fees may apply).</p>
                </div>
            </div>
        </article>

        <!-- Feedback Section -->
        <article class="content-section feedback-section text-center" id="feedback">
            <h2><i class="fas fa-comments"></i> Your Feedback Matters</h2>
            <p>Help us improve our services by sharing your experience.</p>
            <div class="feedback-options">
                <a href="#" class="btn btn-outline-primary">Online Feedback Form</a> <!-- Link to form -->
                <a href="#" class="btn btn-outline-primary">Complaint Procedure</a> <!-- Link to procedure -->
                <!-- <p>Suggestion boxes are available at major court locations.</p> -->
            </div>
        </article>

        <!-- Emergency Contact Section -->
        <article class="content-section emergency-contact-section glass-effect-light" id="emergency-contact">
            <h2><i class="fas fa-exclamation-triangle"></i> Emergency Contacts</h2>
            <p>For urgent judicial matters outside normal operating hours.</p>
            <div class="emergency-details">
                <p><strong>After-Hours Contact:</strong> [Emergency Contact Number]</p>
                <p><strong>Weekend Duty Officer:</strong> Contact via [Procedure/Number]</p>
                <p><em>Note: This contact is strictly for urgent matters like emergency protection orders or bail applications requiring immediate attention.</em></p>
            </div>
        </article>

        <!-- Follow Us Section -->
        <article class="content-section follow-us-section text-center" id="follow-us">
            <h2><i class="fas fa-share-alt"></i> Connect With Us</h2>
            <p>Stay updated with the latest from the Judiciary of Eswatini.</p>
            <div class="social-media-links">
                <a href="#" aria-label="Facebook" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" aria-label="Twitter" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="#" aria-label="LinkedIn" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" aria-label="YouTube" class="social-icon"><i class="fab fa-youtube"></i></a>
            </div>
        </article>

    </div> <!-- /.container -->
</section> <!-- /.page-content -->


<?php
$pageContent = ob_get_clean(); // Capture the output buffer into $pageContent
require_once 'template.php'; // Include the template file
?>