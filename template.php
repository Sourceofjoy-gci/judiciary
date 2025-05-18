<?php
/**
 * Template file for Judiciary of Eswatini website
 * This file contains the header and footer structure used across all pages
 */

// Initialize session for potential user authentication
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Database connection (to be included from separate file)
require_once 'includes/config.php';
require_once 'includes/db_connect.php';
require_once 'includes/functions.php';

// Determine current page for navigation highlighting
$current_page = basename($_SERVER['PHP_SELF']);
$page_title = isset($page_title) ? $page_title . " - Judiciary of Eswatini" : "Judiciary of Eswatini";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Official website of the Judiciary of Eswatini">
    <title><?php echo $page_title; ?></title>
<!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    
    <!-- Main stylesheet -->
    <link rel="stylesheet" href="assets/css/styles.css">
    
    <!-- Page Specific Stylesheets -->
    <?php if(isset($pageStyles)): ?>
        <?php foreach ($pageStyles as $style): ?>
            <link rel="stylesheet" href="<?php echo htmlspecialchars($style); ?>">
        <?php endforeach; ?>
    <?php endif; ?>
    
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.ico">
</head>
<body>
    <!-- Header Section -->
    <header class="site-header">
        <div class="header-top">
            <div class="container">
                <div class="header-contact-info">
                    <a href="mailto:info@judiciary.gov.sz"><svg class="icon"><use xlink:href="assets/svg/sprites.svg#mail"></use></svg> info@judiciary.gov.sz</a>
                    <a href="tel:+26824042000"><svg class="icon"><use xlink:href="assets/svg/sprites.svg#phone"></use></svg> +268 2404 2000</a>
                </div>
                <div class="header-social">
                    <a href="#" aria-label="Facebook"><svg class="icon"><use xlink:href="assets/svg/sprites.svg#facebook"></use></svg></a>
                    <a href="#" aria-label="Twitter"><svg class="icon"><use xlink:href="assets/svg/sprites.svg#twitter"></use></svg></a>
                    <a href="#" aria-label="LinkedIn"><svg class="icon"><use xlink:href="assets/svg/sprites.svg#linkedin"></use></svg></a>
                </div>
            </div>
        </div>
        
        <div class="header-main glass-effect">
            <div class="container">
                <div class="logo">
                    <a href="index.php">
                        <img src="assets/images/Designer.png" alt="Judiciary of Eswatini Logo">
                        <span class="logo-text">Judiciary of Eswatini</span>
                    </a>
                </div>
                
                <button class="mobile-menu-toggle" aria-label="Toggle menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                
                <nav class="main-navigation">
                    <ul class="nav-menu">
                        <li class="<?php echo $current_page == 'index.php' ? 'active' : ''; ?>">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="has-dropdown <?php echo $current_page == 'about.php' ? 'active' : ''; ?>">
                            <a href="about.php">About Us</a>
                            <ul class="dropdown">
                                <li><a href="about.php#vision-mission">Mission & Vision</a></li>
                                <li><a href="about.php#judicial-power">Judicial Power</a></li>
                                <li><a href="about.php#judiciary-structure">Judiciary Structure</a></li>
                                <li><a href="about.php#chief-justice">Chief Justice Functions</a></li>
                                <li><a href="about.php#independence">Independence of the Judiciary</a></li>
                                <li><a href="about.php#history">History</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo $current_page == 'jsc.php' ? 'active' : ''; ?>">
                            <a href="jsc.php">JSC</a>
                        </li>
                        <li class="has-dropdown <?php echo in_array($current_page, ['supreme-court.php', 'high-court.php', 'commercial-court.php','industrial-court-appeal.php','industrial-court.php', 'magistrate-courts.php', 'small-claims-court.php']) ? 'active' : ''; ?>">
                            <a href="courts.php">Courts</a>
                            <ul class="dropdown">
                                <li><a href="supreme-court.php">Supreme Court</a></li>
                                <li><a href="high-court.php">High Court</a></li>
                                <li><a href="commercial-court.php">Commercial Court</a></li>
                                <li><a href="industrial-court-appeal.php">Industrial Court of Appeal</a></li>
                                <li><a href="industrial-court.php">Industrial Court</a></li>
                                <li><a href="magistrate-court.php">Magistrate Courts</a></li>
                                <li><a href="small-claims-court.php">Small Claims Courts</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown <?php echo in_array($current_page, ['legislation.php', 'court-rules.php', 'practice-directives.php']) ? 'active' : ''; ?>">
                            <a href="legislation.php">Legislation & Rules</a>
                            <ul class="dropdown">
                                <li><a href="legislation.php#legislation-section">Legislation</a></li>
                                <li><a href="legislation.php#court-rules-section">Court Rules</a></li>
                                <li><a href="legislation.php#practice-directives-section">Practice Directives</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo $current_page == 'master.php' ? 'active' : ''; ?>">
                            <a href="master.php">Master of the High Court</a>
                        </li>
                        <li class="<?php echo $current_page == 'news.php' ? 'active' : ''; ?>">
                            <a href="news.php">News</a>
                        </li>
                        <li class="<?php echo $current_page == 'contact.php' ? 'active' : ''; ?>">
                            <a href="contact.php">Contact</a>
                        </li>
                    </ul>
                </nav>
                
                <div class="search-container">
                    <button class="search-toggle" aria-label="Toggle search">
                        <svg class="icon"><use xlink:href="assets/svg/sprites.svg#search"></use></svg>
                    </button>
                    <form class="search-form glass-effect" action="search.php" method="get">
                        <input type="search" name="q" placeholder="Search..." aria-label="Search">
                        <button type="submit" aria-label="Submit search">
                            <svg class="icon"><use xlink:href="assets/svg/sprites.svg#search"></use></svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main id="main-content">
        <div class="content-wrapper">
            <?php
            // Output the captured page content
            if (isset($pageContent)) {
                echo $pageContent;
            } else {
                echo "<p>Error: Page content not found.</p>";
            }
            ?>
        </div>
    </main>

    <!-- Footer -->
    <?php include_once 'footer.php'; ?>
    
    <!-- Scripts Section -->
    <!-- Page Specific Scripts -->
    <?php if(isset($pageScripts)): ?>
        <?php foreach ($pageScripts as $script): ?>
            <script src="<?php echo htmlspecialchars($script); ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>

    <!-- Global Scripts (like menu toggle) -->
    <script src="assets/js/main.js"></script>
</body>
</html>