<?php
$page_title = "Small Claims Court";
$pageStyles = ['assets/css/small-claims-court.css'];
$pageScripts = ['assets/js/small-claims-court.js']; // Include even if initially empty

ob_start(); // Start output buffering
?>

<!-- Hero Section -->
<section class="page-hero small-claims-hero glass-effect-dark">
    <div class="container">
        <h1>Small Claims Court</h1>
        <p class="subtitle">Accessible & Cost-Effective Justice for Minor Civil Disputes</p>
    </div>
</section>

<!-- Main Content Section -->
<section class="page-content small-claims-content">
    <div class="container">

        <!-- Overview -->
        <article class="content-section overview-section" id="overview">
            <h2><i class="fas fa-info-circle"></i> Overview</h2>
            <p>The Small Claims Court provides a simplified, accessible, and cost-effective forum for resolving minor civil disputes. It aims to deliver prompt judgments for monetary or property claims not exceeding the statutory limit, without the formality and expense of higher courts.</p>
        </article>

        <!-- Key Definitions -->
        <article class="content-section definitions-section glass-effect-light" id="key-definitions">
            <h2><i class="fas fa-book-open"></i> Key Definitions</h2>
            <ul class="definitions-list">
                <li><strong>Commissioner:</strong> A legally qualified officer (e.g., magistrate or attorney) appointed to preside over Small Claims Court matters.</li>
                <li><strong>Claim Amount:</strong> The monetary value or the worth of property in dispute, subject to the court’s financial limit (currently E20,000).</li>
                <li><strong>Judgment Debtor:</strong> A person ordered by the court to pay money or deliver property.</li>
                <li><strong>Execution:</strong> The legal process to enforce a court judgment.</li>
            </ul>
        </article>

        <!-- Court Establishment and Access -->
        <article class="content-section establishment-section" id="court-establishment-and-access">
            <h2><i class="fas fa-landmark"></i> Court Establishment and Access</h2>
             <ul>
                <li><strong>Designation:</strong> Small Claims Courts are established by the Chief Justice in consultation with the Minister of Justice.</li>
                <li><strong>Locations:</strong> Courts operate at designated magistrate’s offices nationwide.</li>
                <li><strong>Language:</strong> Proceedings are held in English or local languages; interpreters are provided when necessary.</li>
                <li><strong>Public Hearing:</strong> All proceedings are open to the public unless closed for reasons of security, morality, or fairness.</li>
            </ul>
        </article>

        <!-- Jurisdiction -->
        <article class="content-section jurisdiction-section glass-effect" id="jurisdiction">
            <h2><i class="fas fa-balance-scale-right"></i> Jurisdiction</h2>
            <div class="jurisdiction-grid">
                <div class="jurisdiction-item">
                    <h3>Financial Limit</h3>
                    <p>Up to <strong>E20,000</strong> for claims in money or the value of movable/immovable property (adjustable by Ministerial notice).</p>
                </div>
                <div class="jurisdiction-item">
                    <h3>Permitted Claims</h3>
                    <ul>
                        <li>Recovery of money or movable property.</li>
                        <li>Delivery of immovable property (value ≤ E20,000).</li>
                        <li>Ejectment for occupation rights (value ≤ E20,000).</li>
                        <li>Liquid document enforcement (e.g., promissory notes).</li>
                    </ul>
                </div>
                <div class="jurisdiction-item excluded">
                    <h3>Excluded Matters</h3>
                    <p>Divorce, mental capacity disputes, defamation, malicious prosecution, interdicts, and claims against the Government.</p>
                </div>
            </div>
        </article>

        <!-- Eligible Users -->
        <article class="content-section users-section" id="eligible-users">
            <h2><i class="fas fa-users"></i> Eligible Users</h2>
            <ul>
                <li><strong>Plaintiffs:</strong> Natural persons only (self-represented).</li>
                <li><strong>Defendants:</strong> Natural or juristic persons; juristic persons must be represented by a company director or officer.</li>
                <li><strong>Representation:</strong> No lawyers for individuals; juristic entities may appoint an officer.</li>
            </ul>
        </article>

        <!-- How to File a Claim -->
        <article class="content-section filing-section glass-effect-light" id="how-to-file-a-claim">
            <h2><i class="fas fa-file-signature"></i> How to File a Claim</h2>
            <ol class="steps-list">
                <li><span class="step-number">1</span> <strong>Pre-Action Notice:</strong> Send a written demand to the other party at least 14 days before filing.</li>
                <li><span class="step-number">2</span> <strong>Submit Summons:</strong> Lodge the summons and proof of demand with the Small Claims Court Clerk.</li>
                <li><span class="step-number">3</span> <strong>Service of Process:</strong> Court messenger or plaintiff serves the summons on the defendant.</li>
                <li><span class="step-number">4</span> <strong>Defendant’s Response:</strong> Written defence may be filed before the hearing date.</li>
                <li><span class="step-number">5</span> <strong>Counterclaims:</strong> Must also fall within the jurisdictional limit.</li>
            </ol>
        </article>

        <!-- Court Procedures -->
        <article class="content-section procedures-section" id="court-procedures">
            <h2><i class="fas fa-gavel"></i> Court Procedures</h2>
            <ul>
                <li><strong>Evidence:</strong> Informal; oral testimony under oath, limited cross-examination.</li>
                <li><strong>Inquisitorial Role:</strong> Commissioner may question parties to clarify facts.</li>
                <li><strong>Document Amendments:</strong> Allowed if no party is prejudiced.</li>
                <li><strong>Withdrawal:</strong> Plaintiffs may withdraw claims with court approval.</li>
            </ul>
        </article>

        <!-- Judgments and Costs -->
        <article class="content-section judgments-section glass-effect" id="judgments-and-costs">
            <h2><i class="fas fa-receipt"></i> Judgments and Costs</h2>
            <ul>
                <li><strong>Outcomes:</strong> Judgment in favour of plaintiff or defendant; absolution from the instance if evidence is insufficient.</li>
                <li><strong>Payment Plans:</strong> Court-approved instalment arrangements for debtors.</li>
                <li><strong>Costs:</strong> Limited to court fees, messenger charges, and reasonable out-of-pocket expenses; no attorney fees.</li>
            </ul>
        </article>

        <!-- Enforcement of Judgments -->
        <article class="content-section enforcement-section" id="enforcement-of-judgments">
            <h2><i class="fas fa-clipboard-check"></i> Enforcement of Judgments</h2>
            <ul>
                <li><strong>Direct Payment:</strong> Judgment debtor pays the creditor as ordered.</li>
                <li><strong>Warrant of Execution:</strong> Issued by magistrate’s court if the debtor defaults.</li>
                <li><strong>Protected Property:</strong> Essential household items are exempt from execution.</li>
                <li><strong>Instalment Proposals:</strong> Debtors can apply for court-approved payment schedules.</li>
            </ul>
        </article>

        <!-- Offences and Penalties -->
        <article class="content-section offences-section glass-effect-light" id="offences-and-penalties">
            <h2><i class="fas fa-exclamation-triangle"></i> Offences and Penalties</h2>
            <ul>
                <li><strong>Contempt of Court:</strong> Disrupting proceedings or insulting officials (fine ≤ E2,000 or imprisonment ≤ 2 months).</li>
                <li><strong>Obstruction:</strong> Interfering with court processes or messengers (similar penalties).</li>
                <li><strong>Failure to Notify Address Change:</strong> Must notify within 14 days (fine or imprisonment).</li>
            </ul>
        </article>

        <!-- Additional Information -->
        <article class="content-section additional-info-section" id="additional-information">
            <h2><i class="fas fa-plus-circle"></i> Additional Information</h2>
            <ul>
                <li><strong>Finality:</strong> No appeal; judgments may only be reviewed by the High Court on grounds of jurisdictional error, bias, or procedural irregularities.</li>
                <li><strong>Adjustment of Limits:</strong> The Minister may revise financial thresholds by gazette notice.</li>
                <li><strong>Oath of Commissioners:</strong> Commissioners swear to administer justice impartially.</li>
            </ul>
             <p class="act-link">For the full legislative text, refer to the <a href="#" target="_blank" rel="noopener noreferrer">Small Claims Court Act, 2011 (Act No. 1/2011)</a>.</p> <!-- Add actual link later -->
        </article>

        <!-- Contact Details -->
        <article class="content-section contact-section glass-effect" id="contact-details">
            <h2><i class="fas fa-phone-alt"></i> Contact Details</h2>
            <div class="contact-grid">
                <div>
                    <h3>Small Claims Court Clerk</h3>
                    <p>Office Hours: 8:30 AM–1:00 PM & 2:00 PM–4:30 PM (Monday-Friday)</p>
            
                </div>
                <div>
                    <h3>The Judiciary of Eswatini</h3>
                    <p>Email: smallclaims@judiciary.org.sz</p>
                    <p>Phone: + 268 24042901</p>
                </div>
            </div>
        </article>

    </div> <!-- /.container -->
</section> <!-- /.page-content -->

<?php
$pageContent = ob_get_clean(); // Capture the output buffer into $pageContent
require_once 'template.php'; // Include the template file
?>