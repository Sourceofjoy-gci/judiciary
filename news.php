<?php
$page_title = "News and Updates";
$pageStyles = ['assets/css/news.css', 'assets/css/lightbox.min.css'];
$pageScripts = ['assets/js/news.js', 'assets/js/lightbox.min.js'];

// Include necessary files
require_once 'includes/config.php';
require_once 'includes/db_connect.php';
require_once 'includes/functions.php';

// Get news articles from database
$conn = getDbConnection();
$featured_news = [];

// Check if category filter is applied
$category_filter = '';
$selected_category = isset($_GET['category']) ? $_GET['category'] : '';

// Map URL-friendly category names to database values
$category_map = [
    'announcements' => 'announcement',
    'court-rulings' => 'ruling', 
    'press-releases' => 'press_release'
];

// If a valid category is selected, add it to the query
if (!empty($selected_category) && array_key_exists($selected_category, $category_map)) {
    $db_category = $category_map[$selected_category];
    $category_filter = " AND category = '{$db_category}' ";
}

// Get published news articles with potential category filter
$sql = "SELECT id, title, slug, content, excerpt, category, featured_image, date_published 
        FROM news_posts 
        WHERE status = 'published' $category_filter
        ORDER BY date_published DESC 
        LIMIT 10";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Get additional images for this article
        $article_images = [];
        $images_sql = "SELECT id, image_path, display_order, caption 
                      FROM news_images 
                      WHERE article_id = ? 
                      ORDER BY display_order ASC";
        $images_stmt = $conn->prepare($images_sql);
        $images_stmt->bind_param("i", $row['id']);
        $images_stmt->execute();
        $images_result = $images_stmt->get_result();
        
        if ($images_result && $images_result->num_rows > 0) {
            while ($img_row = $images_result->fetch_assoc()) {
                $article_images[] = $img_row;
            }
        }
        $images_stmt->close();
        
        $featured_news[] = [
            'id' => $row['id'],
            'title' => $row['title'],
            'date' => date('Y-m-d', strtotime($row['date_published'])),
            'category' => CATEGORIES[$row['category']] ?? $row['category'],
            'image' => !empty($row['featured_image']) ? $row['featured_image'] : 'assets/images/default-news.jpg',
            'summary' => !empty($row['excerpt']) ? $row['excerpt'] : substr(strip_tags($row['content']), 0, 150) . '...',
            'link' => 'news-article.php?id=' . $row['id'],
            'gallery_images' => $article_images
        ];
    }
}

// If no articles in database, use placeholder data
if (empty($featured_news)) {
    $featured_news = [
        [
            'id' => 1,
            'title' => 'Chief Justice Unveils Five-Year Judiciary Modernization Plan',
            'date' => '2025-02-15',
            'category' => 'Announcements',
            'image' => 'assets/images/modernization.jpg', // Placeholder image path
            'summary' => 'The Chief Justice has announced a comprehensive five-year plan aimed at modernizing the courts and improving access to justice across Eswatini.',
            'link' => 'news-article.php?id=1', // Link to a detail page
            'gallery_images' => []
        ],
        [
            'id' => 2,
            'title' => 'Supreme Court Rules on Landmark Constitutional Case',
            'date' => '2025-02-12',
            'category' => 'Court Rulings',
            'image' => 'assets/images/supreme-court-building.jpg', // Placeholder image path
            'summary' => 'In a significant ruling, the Supreme Court has delivered a judgment on a constitutional matter that will have far-reaching implications for governance and rights.',
            'link' => 'news-article.php?id=2',
            'gallery_images' => []
        ],
        [
            'id' => 3,
            'title' => 'Judiciary Reports 30% Reduction in Case Backlog',
            'date' => '2025-02-08',
            'category' => 'Press Releases',
            'image' => 'assets/images/case-files.jpg', // Placeholder image path
            'summary' => 'Through concerted efforts and process improvements, the Judiciary has achieved a 30% reduction in case backlog over the past year.',
            'link' => 'news-article.php?id=3',
            'gallery_images' => []
        ]
    ];
}

// Get all news categories from config
$categories = array_values(CATEGORIES);
array_unshift($categories, 'All News');

// Get recent judgments
$recent_judgments = [];
$sql = "SELECT id, case_number, court_type, plaintiff, defendant, judgment_date, eswatinili_url 
        FROM judgments 
        WHERE status = 'published' 
        ORDER BY judgment_date DESC 
        LIMIT 3";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $recent_judgments[] = [
            'id' => $row['id'],
            'case_number' => $row['case_number'],
            'court' => COURT_TYPES[$row['court_type']],
            'plaintiff' => $row['plaintiff'],
            'defendant' => $row['defendant'],
            'judgment_date' => $row['judgment_date'],
            'eswatinili_url' => $row['eswatinili_url']
        ];
    }
}

// If no judgments found, use placeholder data
if (empty($recent_judgments)) {
    $recent_judgments = [
        [
            'id' => 1,
            'case_number' => 'SC 12/25',
            'court' => 'Supreme Court',
            'plaintiff' => 'Party A',
            'defendant' => 'Party B',
            'judgment_date' => '2025-02-10',
            'eswatinili_url' => 'https://eswatinili.org/judgments/sc-12-25'
        ],
        [
            'id' => 2,
            'case_number' => 'HC 45/25',
            'court' => 'High Court',
            'plaintiff' => 'Party C',
            'defendant' => 'Party D',
            'judgment_date' => '2025-02-05',
            'eswatinili_url' => 'https://eswatinili.org/judgments/hc-45-25'
        ],
        [
            'id' => 3,
            'case_number' => 'CC 08/25',
            'court' => 'Commercial Court',
            'plaintiff' => 'Company X',
            'defendant' => 'Company Y',
            'judgment_date' => '2025-01-28',
            'eswatinili_url' => 'https://eswatinili.org/judgments/cc-08-25'
        ]
    ];
}

// Fetch recent speeches
try {
    $conn = getDbConnection();
    $sql = "SELECT * FROM speeches WHERE status = 'published' ORDER BY speech_date DESC LIMIT 3";
    $result = $conn->query($sql);
    $recent_speeches = $result->fetch_all(MYSQLI_ASSOC);
} catch (Exception $e) {
    $recent_speeches = [];
}

// --- Start Output Buffering ---
ob_start();
?>

<!-- Hero Section -->
<section class="page-hero news-hero glass-effect-dark text-center">
    <div class="container">
        <h1 class="text-center">News and Updates</h1>
        <p class="subtitle text-center">Stay Informed About the Latest Developments, Announcements, and Activities of the Eswatini Judiciary</p>
        <div class="hero-actions justify-content-center">
            <a href="#latest-news" class="btn btn-secondary mx-2">Latest News</a>
            <a href="#recent-judgments" class="btn btn-outline-light mx-2">Recent Judgments</a>
        </div>
    </div>
</section>

<!-- Main Content Section -->
<section class="page-content news-content">
    <div class="container">
        <div class="news-layout">

            <!-- Main News Area -->
            <div class="main-news-area">

                <!-- Latest News Section -->
                <article class="content-section latest-news-section" id="latest-news">
                    <div class="section-header">
                        <h2><i class="fas fa-newspaper"></i> Latest News</h2>
                        <div class="filter-categories">
                        <a href="news.php" class="filter-btn active" data-category="all">All News</a>
                        <a href="news.php?category=announcements" class="filter-btn" data-category="announcements">Announcements</a>
                        <a href="news.php?category=court-rulings" class="filter-btn" data-category="court-rulings">Court Rulings</a>
                        <a href="news.php?category=press-releases" class="filter-btn" data-category="press-releases">Press Releases</a>
                        </div>
                    </div>
                    <p>Recent announcements, judgments, and events from the Judiciary of Eswatini.</p>
                    <div class="news-grid">
                        <?php foreach ($featured_news as $news_item): ?>
                        <div class="news-card glass-effect" data-category="<?php echo htmlspecialchars(strtolower(str_replace(' ', '-', $news_item['category']))); ?>">
                            <?php if (!empty($news_item['gallery_images'])): ?>
                            <!-- Card with image gallery -->
                            <div class="news-card-gallery">
                                <div class="gallery-main">
                                    <a href="<?php echo htmlspecialchars($news_item['image']); ?>" data-lightbox="gallery-<?php echo $news_item['id']; ?>" data-title="<?php echo htmlspecialchars($news_item['title']); ?>">
                                        <img src="<?php echo htmlspecialchars($news_item['image']); ?>" alt="<?php echo htmlspecialchars($news_item['title']); ?>" loading="lazy">
                                    </a>
                                    <span class="news-card-category"><?php echo htmlspecialchars($news_item['category']); ?></span>
                                    <?php if (count($news_item['gallery_images']) > 0): ?>
                                    <span class="gallery-count"><i class="fas fa-images"></i> <?php echo count($news_item['gallery_images']) + 1; ?></span>
                                    <?php endif; ?>
                                </div>
                                
                                <?php if (count($news_item['gallery_images']) > 0): ?>
                                <div class="gallery-thumbnails">
                                    <?php 
                                    // Show up to 4 thumbnails
                                    $thumbnail_count = min(count($news_item['gallery_images']), 4);
                                    for ($i = 0; $i < $thumbnail_count; $i++): 
                                        $img = $news_item['gallery_images'][$i];
                                    ?>
                                    <a href="<?php echo htmlspecialchars($img['image_path']); ?>" data-lightbox="gallery-<?php echo $news_item['id']; ?>" data-title="<?php echo htmlspecialchars($img['caption'] ?: $news_item['title']); ?>" class="gallery-thumb">
                                        <img src="<?php echo htmlspecialchars($img['image_path']); ?>" alt="<?php echo htmlspecialchars($img['caption'] ?: 'Gallery image ' . ($i+1)); ?>" loading="lazy">
                                    </a>
                                    <?php endfor; ?>
                                    
                                    <?php if (count($news_item['gallery_images']) > 4): ?>
                                    <div class="more-images">
                                        <span>+<?php echo count($news_item['gallery_images']) - 4; ?> more</span>
                                    </div>
                                    <!-- Hidden links for lightbox -->
                                    <?php for ($i = 4; $i < count($news_item['gallery_images']); $i++): 
                                        $img = $news_item['gallery_images'][$i];
                                    ?>
                                    <a href="<?php echo htmlspecialchars($img['image_path']); ?>" data-lightbox="gallery-<?php echo $news_item['id']; ?>" data-title="<?php echo htmlspecialchars($img['caption'] ?: $news_item['title']); ?>" class="hidden-gallery-link"></a>
                                    <?php endfor; ?>
                                    <?php endif; ?>
                                </div>
                                <?php endif; ?>
                            </div>
                            <?php else: ?>
                            <!-- Standard card with single image -->
                            <div class="news-card-image">
                                <a href="<?php echo htmlspecialchars($news_item['link']); ?>">
                                    <img src="<?php echo htmlspecialchars($news_item['image']); ?>" alt="<?php echo htmlspecialchars($news_item['title']); ?>" loading="lazy">
                                </a>
                                <span class="news-card-category"><?php echo htmlspecialchars($news_item['category']); ?></span>
                            </div>
                            <?php endif; ?>
                            
                            <div class="news-card-content">
                                <h3 class="news-card-title"><a href="<?php echo htmlspecialchars($news_item['link']); ?>"><?php echo htmlspecialchars($news_item['title']); ?></a></h3>
                                <div class="news-card-meta">
                                    <span><i class="far fa-calendar-alt"></i> <?php echo date('M j, Y', strtotime($news_item['date'])); ?></span>
                                    <span><i class="far fa-eye"></i> Read </span>
                                </div>
                                <div class="news-card-summary">
                                    <?php echo htmlspecialchars($news_item['summary']); ?>
                                </div>
                                <div class="news-card-actions">
                                    <a href="<?php echo htmlspecialchars($news_item['link']); ?>" class="btn btn-primary btn-sm">Read More</a>
                                    <div class="card-share">
                                        <button class="share-btn" title="Share"><i class="fas fa-share-alt"></i></button>
                                        <?php if (!empty($news_item['gallery_images'])): ?>
                                        <button class="gallery-btn" title="View Gallery" data-gallery="gallery-<?php echo $news_item['id']; ?>"><i class="fas fa-images"></i></button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <!-- Add more news cards here or implement pagination -->
                    </div>
                    <!-- Pagination Placeholder -->
                    <nav aria-label="News navigation" class="pagination-container">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </article>

                <!-- Recent Judgments Section -->
                <article class="content-section recent-judgments-section" id="recent-judgments">
                    <h2><i class="fas fa-gavel"></i> Recent Judgments</h2>
                    <p>Notable recent decisions from Eswatini courts.</p>
                    <div class="judgment-list">
                        <?php foreach ($recent_judgments as $judgment): ?>
                        <div class="judgment-item glass-effect-light">
                            <div class="judgment-badge"><i class="fas fa-gavel"></i></div>
                            <div class="judgment-header">
                                <h3><?php echo htmlspecialchars($judgment['plaintiff'] . ' v ' . $judgment['defendant'] . ' (' . $judgment['case_number'] . ') [' . date('Y', strtotime($judgment['judgment_date'])) . '] ' . strtoupper($judgment['court']) . ' ' . date('d M Y', strtotime($judgment['judgment_date']))); ?></h3>
                                <span class="court-type"><?php echo htmlspecialchars($judgment['court']); ?></span>
                            </div>
                            <div class="judgment-meta">
                                <span><i class="far fa-calendar-alt"></i> <?php echo date('M j, Y', strtotime($judgment['judgment_date'])); ?></span>
                            </div>
                            <div class="judgment-actions">
                                <a href="<?php echo htmlspecialchars($judgment['eswatinili_url']); ?>" class="btn btn-secondary btn-sm" target="_blank">Read Judgment</a>
                                <a href="<?php echo htmlspecialchars($judgment['eswatinili_url']); ?>" class="btn btn-outline-primary btn-sm" target="_blank">Download PDF</a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="text-center mt-4">
                        <a href="judgments.php" class="btn btn-outline-primary">View All Judgments</a>
                    </div>
                </article>

                <!-- Recent Speeches Section -->
                <section class="recent-speeches">
                    <div class="section-header">
                        <h2>Recent Speeches</h2>
                        <p>Latest speeches and statements from the Judiciary</p>
                    </div>

                    <div class="speech-list">
                        <?php if (!empty($recent_speeches)): ?>
                            <?php foreach ($recent_speeches as $speech): ?>
                                <div class="speech-item glass-effect">
                                    <div class="speech-header">
                                        <h3><?php echo htmlspecialchars($speech['title']); ?></h3>
                                        <span class="speech-date"><?php echo date('d M Y', strtotime($speech['speech_date'])); ?></span>
                                    </div>
                                    <div class="speech-meta">
                                        <span class="speaker"><?php echo htmlspecialchars($speech['speaker']); ?></span>
                                        <span class="topic"><?php echo htmlspecialchars($speech['topic']); ?></span>
                                    </div>
                                    <div class="speech-summary">
                                        <?php echo htmlspecialchars($speech['summary']); ?>
                                    </div>
                                    <div class="speech-actions">
                                        <a href="speech.php?id=<?php echo $speech['id']; ?>" class="btn btn-primary">Read Full Speech</a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="no-speeches">
                                <p>No recent speeches available.</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </section>

            </div> <!-- /.main-news-area -->

            <!-- Sidebar Area -->
            <aside class="sidebar-area">

                <!-- News Categories Section -->
                <div class="sidebar-widget category-widget glass-effect" id="categories">
                    <h3 class="widget-title">Categories</h3>
                    <ul class="category-list">
                        <?php foreach ($categories as $category): ?>
                        <li>
                            <button class="category-filter-btn" data-category="<?php echo htmlspecialchars(strtolower(str_replace(' ', '-', $category))); ?>">
                                <?php echo htmlspecialchars($category); ?>
                            </button>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="widget-footer">
                        <a href="news.php" class="more-link">View All Categories <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- News Archive Section -->
                <div class="sidebar-widget archive-widget glass-effect-light" id="news-archive">
                    <h3 class="widget-title">News Archive</h3>
                    <form id="archive-search-form" action="news.php" method="GET">
                        <div class="form-group">
                            <label for="archive-keyword">Keyword Search</label>
                            <input type="search" id="archive-keyword" name="keyword" placeholder="Search news...">
                        </div>
                        <div class="form-group">
                            <label for="archive-year">Year</label>
                            <select id="archive-year" name="year">
                                <option value="">All Years</option>
                                <option value="2025">2025</option>
                                <option value="2024">2024</option>
                                <!-- Add more years dynamically -->
                            </select>
                        </div>
                         <div class="form-group">
                            <label for="archive-month">Month</label>
                            <select id="archive-month" name="month">
                                <option value="">All Months</option>
                                <!-- Add months 1-12 -->
                                <?php for ($m=1; $m<=12; $m++): ?>
                                <option value="<?php echo $m; ?>"><?php echo date('F', mktime(0, 0, 0, $m, 10)); ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Search Archive</button>
                    </form>
                </div>

                 <!-- Court Calendars Section -->
                <div class="sidebar-widget calendar-widget" id="court-calendars">
                    <h3 class="widget-title">Court Calendars</h3>
                     <ul class="category-list">
                        <li><a href="news.php?category=announcements"><i class="fas fa-bullhorn"></i> Announcements</a></li>
                        <li><a href="news.php?category=court-rulings"><i class="fas fa-gavel"></i> Court Rulings</a></li>
                        <li><a href="news.php?category=press-releases"><i class="fas fa-newspaper"></i> Press Releases</a></li>
                        <li><a href="news.php?category=speeches"><i class="fas fa-microphone-alt"></i> Speeches</a></li>
                        <li><a href="news.php?category=court-notices"><i class="fas fa-landmark"></i> Court Notices</a></li>
                    </ul>
                </div>

                 <!-- Legal Notices Section -->
                <div class="sidebar-widget notices-widget glass-effect-light" id="legal-notices">
                    <h3 class="widget-title">Legal Notices</h3>
                     <ul class="notice-list">
                        <li><a href="legal-notices.php?type=practice-directions"><i class="fas fa-file-contract"></i> Practice Directions</a></li>
                        <li><a href="legal-notices.php?type=court-rules"><i class="fas fa-balance-scale-left"></i> Court Rules Amendments</a></li>
                        <li><a href="legal-notices.php?type=public-notices"><i class="fas fa-bullhorn"></i> Public Notices</a></li>
                    </ul>
                </div>

                 <!-- Publications Section -->
                <div class="sidebar-widget publications-widget" id="publications">
                    <h3 class="widget-title">Publications</h3>
                     <ul class="publication-list">
                        <li><a href="publications.php?type=annual-reports"><i class="fas fa-book-open"></i> Annual Reports</a></li>
                        <li><a href="publications.php?type=strategic-plans"><i class="fas fa-tasks"></i> Strategic Plans</a></li>
                        <li><a href="publications.php?type=newsletters"><i class="fas fa-envelope-open-text"></i> Newsletters</a></li>
                    </ul>
                </div>

                 <!-- Subscribe Section -->
                <div class="sidebar-widget subscribe-widget glass-effect" id="subscribe">
                    <h3 class="widget-title">Stay Updated</h3>
                    <p>Subscribe for news updates.</p>
                    <form id="subscribe-form" action="includes/process_subscription.php" method="POST" novalidate>
                        <div class="form-group">
                            <label for="subscribe-email" class="sr-only">Email Address</label>
                            <input type="email" id="subscribe-email" name="email" placeholder="Enter your email" required>
                            <div class="error-message"></div>
                        </div>
                         <!-- Add preferences/frequency if needed -->
                         <div class="form-group privacy-policy">
                            <input type="checkbox" id="subscribe-privacy" name="privacy" value="accepted" required>
                            <label for="subscribe-privacy">Accept <a href="privacy-policy.php" target="_blank">Privacy Policy</a>.</label>
                             <div class="error-message"></div>
                        </div>
                        <button type="submit" class="btn btn-secondary btn-block">Subscribe</button>
                        <div id="subscribe-status"></div>
                    </form>
                </div>

                 <!-- Media Contacts Section -->
                <div class="sidebar-widget media-contacts-widget" id="media-contacts">
                    <h3 class="widget-title">Media Contacts</h3>
                    <p>For press inquiries:</p>
                    <p><strong>Communications Officer</strong><br>
                       [Name Here]<br>
                       Phone: [Number]<br>
                       Email: [Email Address]</p>
                </div>

            </aside> <!-- /.sidebar-area -->

        </div> <!-- /.news-layout -->

        <!-- Media Gallery Section (Optional - could be separate page) -->
        <!--
        <article class="content-section media-gallery-section" id="media-gallery">
            <h2><i class="fas fa-images"></i> Media Gallery</h2>
            <p>Photos and videos from judicial events and ceremonies.</p>
            <div class="gallery-grid">
                <!-- Gallery items here -->
            </div>
        </article>
        -->

    </div> <!-- /.container -->
</section> <!-- /.page-content -->


<?php
$pageContent = ob_get_clean(); // Capture the output buffer into $pageContent
require_once 'template.php'; // Include the template file
?>