<?php
/**
 * Homepage for Judiciary of Eswatini Website
 * 
 * This file displays the main public landing page with all major sections
 * Including hero slider, welcome section, services, news, and more
 */

// Set page title for template
$page_title = "Home";

// Start output buffering to capture page content
ob_start();
?>
<!-- Main Content Area (will be placed within template.php's main section) -->
<section class="hero-slider">
    <div class="slider-container">
        <div class="slider">
            <!-- Slide 1 -->
            <div class="slide active">
                <div class="slide-bg" style="background-image: url('assets/images/high_court.png');"></div>
                <div class="container">
                    <div class="slide-content glass-effect">
                        <h1>High Court of Eswatini</h1>
                        <p class="tagline">Dispensing Justice Responsibly</p>
                        <a href="about.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="slide">
                <div class="slide-bg" style="background-image: url('assets/images/lutsango.jpg');"></div>
                <div class="container">
                    <div class="slide-content glass-effect">
                        <span class="badge">Law and Traditions</span>
                        <h1>Legal minds embracing traditions</h1>
                        <p class="tagline">The Hon. Chief Justice sending off Lutsango to Buganu Ceremony</p>
                        <a href="modernization.php" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="slide">
                <div class="slide-bg" style="background-image: url('assets/images/mj_2.jpg');"></div>
                <div class="container">
                    <div class="slide-content glass-effect">
                        <span class="badge">Admission of Attorneys</span>
                        <h1>15 Attorneys, 1 advocate Addmitted</h1>
                        <p class="tagline">The Hon. Chief Justice admitting attorneys at the High Court of Eswatini</p>
                        <a href="e-services.php" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slider Navigation -->
        <div class="slider-nav">
            <button class="slider-btn prev" aria-label="Previous slide">
                <i class="fas fa-chevron-left"></i>
            </button>
            <div class="slider-dots">
                <button class="dot active" aria-label="Go to slide 1"></button>
                <button class="dot" aria-label="Go to slide 2"></button>
                <button class="dot" aria-label="Go to slide 3"></button>
            </div>
            <button class="slider-btn next" aria-label="Next slide">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</section>

<!-- Welcome Section -->
<section class="welcome-section">
    <div class="container">
        <div class="welcome-grid">
            <div class="welcome-image">
                <div class="floating-animation">
                    <img src="assets/images/scales-of-justice.jpg" alt="Scales of Justice" class="scales-svg">
                </div>
            </div>
            <div class="welcome-content">
                <h2>Welcome to the Judiciary of Eswatini</h2>
                <h3>Dispensing Justice Responsibly</h3>
                <p>The Judiciary is responsible for the administration of justice in accordance with the Constitution and laws of Eswatini. We maintain fairness and promote constitutional values through professional administration.</p>
                <a href="about.php" class="btn btn-outline">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Access Section -->
<section class="quick-access-section">
    <div class="container">
        <div class="section-header">
            <h2>Quick Access</h2>
            <p>Important services and information</p>
        </div>
        
        <div class="quick-access-grid">
            <!-- Card 1 -->
            <div class="quick-access-card glass-effect">
                <div class="card-icon">
                    <i class="fas fa-landmark"></i>
                </div>
                <h3>Our Courts</h3>
                <p>Information about courts, jurisdictions, and procedures</p>
                <a href="courts.php" class="card-link">
                    <span>Explore</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <!-- Card 2 -->
            <div class="quick-access-card glass-effect">
                <div class="card-icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <h3>Master of High Court</h3>
                <p>Estate administration and related services</p>
                <a href="master.php" class="card-link">
                    <span>Explore</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <!-- Card 3 -->
            <div class="quick-access-card glass-effect">
                <div class="card-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3>Judicial Service Commission</h3>
                <p>Appointments and administration of the judiciary</p>
                <a href="jsc.php" class="card-link">
                    <span>Explore</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <!-- Card 4 -->
            <div class="quick-access-card glass-effect">
                <div class="card-icon">
                    <i class="fas fa-comments"></i>
                </div>
                <h3>Contact Us</h3>
                <p>Get in touch with the judiciary</p>
                <a href="contact.php" class="card-link">
                    <span>Explore</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Judicial Independence Section -->
<section class="independence-section">
    <div class="container">
        <div class="section-header">
            <h2>Judicial Independence</h2>
            <p>Established by the Constitution</p>
        </div>
        
        <div class="independence-content">
            <div class="independence-text">
                <blockquote class="quote">
                    <p>"The essence of judicial independence lies in the freedom to decide cases without external pressure, with only the law and conscience as guides."</p>
                </blockquote>
                <p>In the Kingdom of Eswatini, the Judiciary is vested with judicial power and shall be independent and subject only to the Constitution. Neither the Crown nor Parliament shall have the power to control the exercise of judicial power.</p>
                <a href="about.php#independence" class="btn btn-outline">Learn More</a>
            </div>
            
            <div class="independence-pillars">
                <div class="pillar-grid">
                    <!-- Pillar 1 -->
                    <div class="pillar-card glass-effect">
                        <i class="fas fa-handshake"></i>
                        <h3>Autonomy</h3>
                    </div>
                    
                    <!-- Pillar 2 -->
                    <div class="pillar-card glass-effect">
                        <i class="fas fa-balance-scale-right"></i>
                        <h3>Impartiality</h3>
                    </div>
                    
                    <!-- Pillar 3 -->
                    <div class="pillar-card glass-effect">
                        <i class="fas fa-shield-alt"></i>
                        <h3>Security</h3>
                    </div>
                    
                    <!-- Pillar 4 -->
                    <div class="pillar-card glass-effect">
                        <i class="fas fa-university"></i>
                        <h3>Institutional Independence</h3>
                        <p>The Judiciary as an institution is separate from the executive and legislative branches.</p>
                    </div>
                    
                    <!-- Pillar 5 -->
                    <div class="pillar-card glass-effect">
                        <i class="fas fa-coins"></i>
                        <h3>Financial Autonomy</h3>
                        <p>A separate budget allocation ensures operational independence.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Court Services Section -->
<section class="court-services-section">
    <div class="container">
        <div class="section-header">
            <h2>Our Court Services</h2>
            <p>Specialized legal services designed to meet diverse needs</p>
        </div>
        
        <div class="service-slider">
            <div class="services-container">
                <!-- Service 1 -->
                <div class="service-card glass-effect">
                    <div class="service-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3>Labour Law</h3>
                    <p>Labour law in Eswatini refers to the laws and regulations that govern employment relationships, workers' rights and protections, and workplace safety regulations.</p>
                    <a href="industrial-court.php" class="btn btn-outline btn-sm">Learn More</a>
                </div>
                
                <!-- Service 2 -->
                <div class="service-card glass-effect">
                    <div class="service-icon">
                        <i class="fas fa-coins"></i>
                    </div>
                    <h3>Small Claims</h3>
                    <p>Small Claims court is designed as a legal venue where smaller monetary disputes can be resolved quickly and efficiently without the need for extensive legal procedures.</p>
                    <a href="small-claims-court.php" class="btn btn-outline btn-sm">Learn More</a>
                </div>
                
                <!-- Service 3 -->
                <div class="service-card glass-effect">
                    <div class="service-icon">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <h3>Civil Law</h3>
                    <p>Civil law in Eswatini refers to the legal system that deals with disputes between individuals or entities, such as family disputes and contract disputes.</p>
                    <a href="high-court.php" class="btn btn-outline btn-sm">Learn More</a>
                </div>
                
                <!-- Service 4 -->
                <div class="service-card glass-effect">
                    <div class="service-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Family Law</h3>
                    <p>Family law handles matters relating to family relationships including marriage, divorce, adoption, child custody and support, and protection from domestic violence.</p>
                    <a href="magistrate-court.php" class="btn btn-outline btn-sm">Learn More</a>
                </div>
            </div>
            
            <!-- Service Slider Navigation -->
            <div class="service-nav">
                <button class="service-nav-btn prev" aria-label="Previous service">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="service-nav-btn next" aria-label="Next service">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="values-section">
    <div class="container">
        <div class="section-header">
            <h2>Our Values</h2>
        </div>
        
        <div class="values-tabs glass-effect">
            <div class="tabs-header">
                <button class="tab-btn active" data-tab="vision">
                    <i class="fas fa-eye"></i>
                    <span>Vision</span>
                </button>
                <button class="tab-btn" data-tab="mission">
                    <i class="fas fa-bullseye"></i>
                    <span>Mission</span>
                </button>
                <button class="tab-btn" data-tab="objectives">
                    <i class="fas fa-tasks"></i>
                    <span>Our Objectives</span>
                </button>
            </div>
            
            <div class="tabs-content">
                <div class="tab-pane active" id="vision">
                    <p>To uphold the rule of law and effectively dispense justice to all citizens of the Kingdom, ensuring that the judiciary maintains its independence and respect.</p>
                </div>
                <div class="tab-pane" id="mission">
                    <p>To administer justice fairly and to all members of society regardless of status, to uphold the provisions of the Constitution of the country, and to offer public service of the highest standard.</p>
                </div>
                <div class="tab-pane" id="objectives">
                    <p>To safeguard the independence of Judiciary and protect the constitutional rights and freedoms of the citizens, while ensuring access to justice for all.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="news-section">
    <div class="container">
        <div class="section-header">
            <h2>Latest News & Updates</h2>
            <a href="news.php" class="view-all-link">View All News</a>
        </div>
        
        <div class="news-filter">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="announcements">Announcements</button>
            <button class="filter-btn" data-filter="court-rulings">Court Rulings</button>
            <button class="filter-btn" data-filter="press-releases">Press Releases</button>
        </div>
        
        <div class="news-grid">
            <?php
            // Include database connection if not already included
            if (!isset($pdo)) {
                require_once 'includes/db_connect.php';
            }
            
            // Get latest news from database
            $news_items = [];
            
            try {
                // Query to get the latest 3 published news articles
                $sql = "SELECT id, title, category, featured_image, date_published 
                        FROM news_posts 
                        WHERE status = 'published' 
                        ORDER BY date_published DESC 
                        LIMIT 3";
                
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                
                if ($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch()) {
                        // Map database category to display category
                        $category_display = $row['category'];
                        // Convert database categories to URL-friendly format
                        switch ($row['category']) {
                            case 'announcement':
                                $category_url = 'announcements';
                                break;
                            case 'ruling':
                                $category_url = 'court-rulings';
                                break;
                            case 'press_release':
                                $category_url = 'press-releases';
                                break;
                            default:
                                $category_url = $row['category'];
                        }
                        
                        $news_items[] = [
                            'id' => $row['id'],
                            'title' => $row['title'],
                            'category' => $category_url,
                            'date' => date('F j, Y', strtotime($row['date_published'])),
                            'image' => !empty($row['featured_image']) ? $row['featured_image'] : 'assets/images/default-news.jpg',
                            'url' => 'news-article.php?id=' . $row['id']
                        ];
                    }
                }
            } catch (PDOException $e) {
                // Log error but don't display to users
                error_log('Database Error: ' . $e->getMessage());
                
                // Fallback to static content if database query fails
                $news_items = [
                    [
                        'title' => 'Chief Justice Unveils Five-Year Judiciary Modernization Plan',
                        'category' => 'announcements',
                        'date' => 'February 15, 2025',
                        'image' => 'assets/images/judiciary-modernization.jpg',
                        'url' => 'news-article.php?id=1'
                    ],
                    [
                        'title' => 'Supreme Court Rules on Landmark Constitutional Case',
                        'category' => 'court-rulings',
                        'date' => 'February 12, 2025',
                        'image' => 'assets/images/supreme-court.jpg',
                        'url' => 'news-article.php?id=2'
                    ],
                    [
                        'title' => 'Judiciary Reports 30% Reduction in Case Backlog',
                        'category' => 'press-releases',
                        'date' => 'February 8, 2025',
                        'image' => 'assets/images/case-backlog.jpg',
                        'url' => 'news-article.php?id=3'
                    ]
                ];
            }
            
            foreach ($news_items as $item):
            ?>
            <div class="news-card glass-effect" data-category="<?php echo htmlspecialchars($item['category']); ?>">
                <div class="news-image">
                    <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>">
                    <span class="news-category"><?php echo htmlspecialchars(ucfirst(str_replace('-', ' ', $item['category']))); ?></span>
                </div>
                <div class="news-content">
                    <h3><a href="<?php echo htmlspecialchars($item['url']); ?>"><?php echo htmlspecialchars($item['title']); ?></a></h3>
                    <div class="news-meta">
                        <span class="news-date">
                            <i class="fas fa-calendar-alt"></i>
                            <?php echo htmlspecialchars($item['date']); ?>
                        </span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <div class="news-action">
            <a href="news.php" class="btn btn-primary">Explore All News</a>
        </div>
    </div>
</section>

<!-- JSC Members Section 
<section class="jsc-members-section">
    <div class="container">
        <div class="section-header">
            <h2>Judicial Service Commission Members</h2>
        </div>
        
        <div class="members-slider">
            <div class="members-container">
               
                <div class="member-card glass-effect">
                    <div class="member-photo">
                        <img src="assets/images/chief-justice.jpg" alt="Hon. Chief Justice">
                    </div>
                    <div class="member-info">
                        <h3>Hon. Chief Justice</h3>
                        <p class="member-position">Chairman</p>
                        <a href="jsc.php#chief-justice" class="btn btn-outline btn-sm">View Profile</a>
                    </div>
                </div>
                
              
                <div class="member-card glass-effect">
                    <div class="member-photo">
                        <img src="assets/images/commissioner-1.jpg" alt="Hon. Commissioner">
                    </div>
                    <div class="member-info">
                        <h3>Hon. Commissioner</h3>
                        <p class="member-position">JSC Member</p>
                        <a href="jsc.php#commissioner-1" class="btn btn-outline btn-sm">View Profile</a>
                    </div>
                </div>
                
               
                <div class="member-card glass-effect">
                    <div class="member-photo">
                        <img src="assets/images/commissioner-2.jpg" alt="Hon. Commissioner">
                    </div>
                    <div class="member-info">
                        <h3>Hon. Commissioner</h3>
                        <p class="member-position">JSC Member</p>
                        <a href="jsc.php#commissioner-2" class="btn btn-outline btn-sm">View Profile</a>
                    </div>
                </div>
                
               
                <div class="member-card glass-effect">
                    <div class="member-photo">
                        <img src="assets/images/jsc-secretary.jpg" alt="JSC Secretary">
                    </div>
                    <div class="member-info">
                        <h3>JSC Secretary</h3>
                        <p class="member-position">Secretary</p>
                        <a href="jsc.php#secretary" class="btn btn-outline btn-sm">View Profile</a>
                    </div>
                </div>
            </div> -->
            
            <!-- Members Slider Navigation -->
            <div class="members-nav">
                <button class="members-nav-btn prev" aria-label="Previous member">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="members-nav-btn next" aria-label="Next member">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="newsletter-section">
    <div class="container">
        <div class="newsletter-container glass-effect">
            <div class="newsletter-content">
                <h2>Stay Updated</h2>
                <p>Subscribe to our newsletter to receive the latest news and updates from the Eswatini Judiciary directly to your inbox.</p>
            </div>
            <div class="newsletter-form-container">
                <form class="newsletter-form" action="process/subscribe.php" method="post">
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email Address" required>
                    </div>
                    <div class="form-group consent-check">
                        <input type="checkbox" id="newsletter_consent" name="consent" required>
                        <label for="newsletter_consent">I agree to receive newsletters</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
// Store the buffered content
$pageContent = ob_get_clean();

// Define page-specific scripts
$pageScripts = [
    'assets/js/home.js'
];

// Include additional CSS for homepage
echo '<link rel="stylesheet" href="assets/css/home.css">';

// Include template with header/footer
include 'template.php';
?>
