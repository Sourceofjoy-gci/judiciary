<?php
/**
 * Site Footer Component
 * 
 * Includes contact info, quick links, newsletter signup, and copyright
 * Integrated with template system and SVG sprite
 */
?>
<!-- Footer Section -->
<footer class="site-footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-widgets">
                <div class="footer-widget about-widget">
                    <h3 class="widget-title">About Judiciary</h3>
                    <p>The Judiciary of Eswatini is responsible for the administration of justice in accordance with the Constitution and laws of the Kingdom of Eswatini.</p>
                    <address>
                        <p><svg class="icon"><use xlink:href="assets/svg/sprites.svg#map-marker"></use></svg> High Court, Hospital Hill, Mbabane</p>
                        <p><svg class="icon"><use xlink:href="assets/svg/sprites.svg#phone"></use></svg> +268 2404 2000</p>
                        <p><svg class="icon"><use xlink:href="assets/svg/sprites.svg#mail"></use></svg> info@judiciary.gov.sz</p>
                    </address>
                </div>
                
                <div class="footer-widget links-widget">
                    <h3 class="widget-title">Quick Links</h3>
                    <ul>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="courts.php">Our Courts</a></li>
                        <li><a href="judges.php">Judges & Officers</a></li>
                        <li><a href="legislation.php">Legislation & Rules</a></li>
                        <li><a href="court-rolls.php">Court Rolls</a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
                
                <div class="footer-widget services-widget">
                    <h3 class="widget-title">Court Services</h3>
                    <ul>
                        <li><a href="services.php#civil">Civil Law</a></li>
                        <li><a href="services.php#criminal">Criminal Law</a></li>
                        <li><a href="services.php#family">Family Law</a></li>
                        <li><a href="services.php#labour">Labour Law</a></li>
                        <li><a href="services.php#small-claims">Small Claims</a></li>
                        <li><a href="services.php#commercial">Commercial Law</a></li>
                    </ul>
                </div>
                
                <div class="footer-widget newsletter-widget">
                    <h3 class="widget-title">Stay Updated</h3>
                    <form class="newsletter-form" action="process/subscribe.php" method="post" novalidate>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your Email Address" required 
                                   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                        </div>
                        <div class="form-group consent-check">
                            <input type="checkbox" id="consent" name="consent" required>
                            <label for="consent">I agree to receive newsletters</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="footer-bottom">
        <div class="container">
            <div class="copyright">
                <p>&copy; <?php echo date('Y'); ?> Judiciary of Eswatini. All Rights Reserved.</p>
            </div>
            <div class="footer-nav">
                <ul>
                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                    <li><a href="terms-of-use.php">Terms of Use</a></li>
                    <li><a href="sitemap.php">Sitemap</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <a href="#" aria-label="Facebook"><svg class="icon"><use xlink:href="assets/svg/sprites.svg#facebook"></use></svg></a>
                <a href="#" aria-label="Twitter"><svg class="icon"><use xlink:href="assets/svg/sprites.svg#twitter"></use></svg></a>
                <a href="#" aria-label="LinkedIn"><svg class="icon"><use xlink:href="assets/svg/sprites.svg#linkedin"></use></svg></a>
            </div>
        </div>
    </div>
</footer>

<!-- Back to top button -->
<a href="#" class="back-to-top" aria-label="Back to top">
    <svg class="icon"><use xlink:href="assets/svg/sprites.svg#arrow-up"></use></svg>
</a>