<?php
/**
 * Individual News Article Page
 * Displays a single news article with full content
 */

// Initialize the page
$page_title = "News Article";
$pageStyles = ['assets/css/news.css', 'assets/css/lightbox.min.css'];
$pageScripts = ['assets/js/news.js', 'assets/js/lightbox.min.js'];

// Include database connection
require_once 'includes/config.php';
require_once 'includes/db_connect.php';
require_once 'includes/functions.php';

// Get article ID from URL
$article_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$article = null;
$error = '';
$gallery_images = [];

// Get article from database
if ($article_id > 0) {
    $conn = getDbConnection();
    
    $sql = "SELECT np.*, u.full_name as author_name 
            FROM news_posts np
            LEFT JOIN users u ON np.author_id = u.id 
            WHERE np.id = ? AND np.status = 'published'";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $article_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result && $row = $result->fetch_assoc()) {
        $article = $row;
        $page_title = $article['title'] . " - News";
        
        // Get additional images for this article
        $images_sql = "SELECT id, image_path, display_order, caption 
                      FROM news_images 
                      WHERE article_id = ? 
                      ORDER BY display_order ASC";
        $images_stmt = $conn->prepare($images_sql);
        $images_stmt->bind_param("i", $article_id);
        $images_stmt->execute();
        $images_result = $images_stmt->get_result();
        
        if ($images_result && $images_result->num_rows > 0) {
            while ($img_row = $images_result->fetch_assoc()) {
                $gallery_images[] = $img_row;
            }
        }
        $images_stmt->close();
    } else {
        $error = "Article not found or not published.";
    }
    
    $stmt->close();
    
    // Get related articles
    if ($article) {
        $related_articles = [];
        
        $sql = "SELECT id, title, date_published, featured_image, category
                FROM news_posts 
                WHERE id != ? AND category = ? AND status = 'published'
                ORDER BY date_published DESC
                LIMIT 3";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("is", $article_id, $article['category']);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $related_articles[] = $row;
            }
        }
        
        $stmt->close();
    }
} else {
    $error = "Invalid article ID.";
}

// Start output buffering
ob_start();
?>

<!-- Article Page Content -->
<?php if ($article): ?>
    <!-- Hero Section -->
    <section class="page-hero article-hero" <?php if (!empty($article['featured_image'])): ?>style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7)), url('<?php echo htmlspecialchars($article['featured_image']); ?>'); background-size: cover; background-position: center;"<?php endif; ?>>
        <div class="container">
            <div class="hero-content">
                <div class="article-meta">
                    <span class="article-category"><?php echo htmlspecialchars(CATEGORIES[$article['category']] ?? $article['category']); ?></span>
                    <span class="article-date"><?php echo date('F j, Y', strtotime($article['date_published'])); ?></span>
                    <?php if (!empty($gallery_images)): ?>
                    <span class="article-gallery-count"><i class="fas fa-images"></i> <?php echo count($gallery_images) + 1; ?> Photos</span>
                    <?php endif; ?>
                </div>
                <h1 class="article-title"><?php echo htmlspecialchars($article['title']); ?></h1>
                <?php if (!empty($article['excerpt'])): ?>
                    <p class="article-subtitle"><?php echo htmlspecialchars($article['excerpt']); ?></p>
                <?php endif; ?>
                <div class="article-author">
                    <?php if (!empty($article['author_name'])): ?>
                        <i class="fas fa-user-circle"></i> <span><?php echo htmlspecialchars($article['author_name']); ?></span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Article Content -->
    <section class="page-content article-content">
        <div class="container">
            <div class="article-layout">
                <!-- Main Article Area -->
                <div class="main-article-area">
                    <?php if (!empty($gallery_images)): ?>
                    <!-- Image Gallery Section -->
                    <div class="article-gallery">
                        <div class="featured-image-container">
                            <a href="<?php echo htmlspecialchars($article['featured_image']); ?>" data-lightbox="article-gallery" data-title="<?php echo htmlspecialchars($article['title']); ?>">
                                <img src="<?php echo htmlspecialchars($article['featured_image']); ?>" alt="<?php echo htmlspecialchars($article['title']); ?>" class="main-featured-image">
                                <div class="image-overlay">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </a>
                        </div>
                        
                        <div class="gallery-grid">
                            <?php foreach ($gallery_images as $index => $img): ?>
                            <div class="gallery-item">
                                <a href="<?php echo htmlspecialchars($img['image_path']); ?>" data-lightbox="article-gallery" data-title="<?php echo htmlspecialchars($img['caption'] ?: $article['title']); ?>">
                                    <img src="<?php echo htmlspecialchars($img['image_path']); ?>" alt="<?php echo htmlspecialchars($img['caption'] ?: 'Gallery image ' . ($index+1)); ?>">
                                    <div class="image-overlay">
                                        <i class="fas fa-search-plus"></i>
                                    </div>
                                </a>
                                <?php if (!empty($img['caption'])): ?>
                                <span class="image-caption"><?php echo htmlspecialchars($img['caption']); ?></span>
                                <?php endif; ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php elseif (!empty($article['featured_image'])): ?>
                    <!-- Single Featured Image -->
                    <div class="article-featured-image">
                        <a href="<?php echo htmlspecialchars($article['featured_image']); ?>" data-lightbox="featured" data-title="<?php echo htmlspecialchars($article['title']); ?>">
                            <img src="<?php echo htmlspecialchars($article['featured_image']); ?>" alt="<?php echo htmlspecialchars($article['title']); ?>">
                            <div class="image-overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </a>
                    </div>
                    <?php endif; ?>
                    
                    <article class="content-section">
                        <div class="article-body">
                            <?php echo $article['content']; ?>
                        </div>
                        
                        <!-- Social Sharing -->
                        <div class="article-actions">
                            <div class="share-buttons">
                                <span>Share this article:</span>
                                <div class="social-icons">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>" target="_blank" class="share-btn facebook" title="Share on Facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>&text=<?php echo urlencode($article['title']); ?>" target="_blank" class="share-btn twitter" title="Share on Twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="mailto:?subject=<?php echo urlencode($article['title']); ?>&body=<?php echo urlencode('I thought you might be interested in this article: ' . 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>" class="share-btn email" title="Share via Email">
                                        <i class="fas fa-envelope"></i>
                                    </a>
                                    <button class="share-btn print" title="Print Article" onclick="window.print();">
                                        <i class="fas fa-print"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Related Articles -->
                    <?php if (!empty($related_articles)): ?>
                        <div class="related-articles">
                            <h3 class="section-heading">Related Articles</h3>
                            <div class="related-grid">
                                <?php foreach ($related_articles as $related): ?>
                                    <div class="related-card">
                                        <?php if (!empty($related['featured_image'])): ?>
                                            <div class="related-image">
                                                <a href="news-article.php?id=<?php echo $related['id']; ?>">
                                                    <img src="<?php echo htmlspecialchars($related['featured_image']); ?>" alt="<?php echo htmlspecialchars($related['title']); ?>">
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                        <div class="related-content">
                                            <h4><a href="news-article.php?id=<?php echo $related['id']; ?>"><?php echo htmlspecialchars($related['title']); ?></a></h4>
                                            <div class="related-meta">
                                                <span class="related-category"><?php echo htmlspecialchars(CATEGORIES[$related['category']] ?? $related['category']); ?></span>
                                                <span class="related-date"><i class="far fa-calendar-alt"></i> <?php echo date('M j, Y', strtotime($related['date_published'])); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Back to News -->
                    <div class="article-nav">
                        <a href="news.php" class="btn btn-primary">
                            <i class="fas fa-arrow-left"></i> Back to News
                        </a>
                    </div>
                </div>

                <!-- Sidebar Area -->
                <aside class="sidebar-area">
                    <!-- Categories Widget -->
                    <div class="sidebar-widget categories-widget">
                        <h3 class="widget-title">News Categories</h3>
                        <ul class="category-list">
                            <?php foreach (CATEGORIES as $value => $label): ?>
                                <li>
                                    <a href="news.php?category=<?php echo urlencode($value); ?>">
                                        <i class="fas fa-angle-right"></i> <?php echo htmlspecialchars($label); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Recent News Widget -->
                    <div class="sidebar-widget recent-news-widget">
                        <h3 class="widget-title">Recent News</h3>
                        <ul class="recent-news-list">
                            <?php
                            $recent_sql = "SELECT id, title, date_published FROM news_posts 
                                          WHERE status = 'published' AND id != ? 
                                          ORDER BY date_published DESC LIMIT 5";
                            $stmt = $conn->prepare($recent_sql);
                            $stmt->bind_param("i", $article_id);
                            $stmt->execute();
                            $recent_result = $stmt->get_result();
                            
                            if ($recent_result && $recent_result->num_rows > 0):
                                while ($recent = $recent_result->fetch_assoc()):
                            ?>
                                <li>
                                    <a href="news-article.php?id=<?php echo $recent['id']; ?>">
                                        <span class="recent-title"><?php echo htmlspecialchars($recent['title']); ?></span>
                                        <span class="recent-date"><i class="far fa-clock"></i> <?php echo date('M j, Y', strtotime($recent['date_published'])); ?></span>
                                    </a>
                                </li>
                            <?php
                                endwhile;
                            endif;
                            $stmt->close();
                            ?>
                        </ul>
                    </div>

                    <!-- Subscribe Widget -->
                    <div class="sidebar-widget subscribe-widget">
                        <h3 class="widget-title">Stay Updated</h3>
                        <p>Subscribe for news updates.</p>
                        <form id="subscribe-form" action="includes/process_subscription.php" method="POST" class="news-subscribe-form" novalidate>
                            <input type="hidden" name="article_id" value="<?php echo $article_id; ?>">
                            <div class="form-group">
                                <label for="subscribe-email" class="sr-only">Email Address</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" id="subscribe-email" name="email" placeholder="Enter your email" required>
                                </div>
                                <div class="error-message"></div>
                            </div>
                            <div class="form-group privacy-policy">
                                <input type="checkbox" id="subscribe-privacy" name="privacy" value="accepted" required>
                                <label for="subscribe-privacy">Accept <a href="privacy-policy.php" target="_blank">Privacy Policy</a>.</label>
                                <div class="error-message"></div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Subscribe</button>
                            <div id="subscribe-status"></div>
                        </form>
                    </div>
                </aside>
            </div>
        </div>
    </section>
<?php else: ?>
    <!-- Error Section -->
    <section class="page-hero error-hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.8)), url('assets/images/news-bg.jpg'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="error-hero-content">
                <i class="fas fa-exclamation-circle error-icon"></i>
                <h1>Article Not Found</h1>
                <p class="error-subtitle"><?php echo htmlspecialchars($error); ?></p>
                <div class="hero-actions">
                    <a href="news.php" class="btn btn-primary">Return to News</a>
                    <a href="index.php" class="btn btn-outline">Go to Homepage</a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="page-content">
        <div class="container">
            <div class="error-content">
                <h2>Looking for something?</h2>
                <p>The article you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
                <p>Here are some helpful options:</p>
                <ul class="error-options">
                    <li><i class="fas fa-check-circle"></i> Check the URL for typing errors</li>
                    <li><i class="fas fa-newspaper"></i> Visit our <a href="news.php">News page</a> for the latest articles</li>
                    <li><i class="fas fa-search"></i> Use the search function at the top of the page</li>
                    <li><i class="fas fa-envelope"></i> <a href="contact.php">Contact us</a> if you believe this is an error</li>
                </ul>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php
$pageContent = ob_get_clean();
require_once 'template.php';
?>
