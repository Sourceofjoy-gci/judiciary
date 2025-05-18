<?php
// Include necessary files
require_once 'includes/config.php';
require_once 'includes/db_connect.php';
require_once 'includes/functions.php';

// Get speech ID from URL
$speech_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Fetch speech data
try {
    $conn = getDbConnection();
    $sql = "SELECT * FROM speeches WHERE id = ? AND status = 'published'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $speech_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $speech = $result->fetch_assoc();
    $stmt->close();
    
    // If speech not found, redirect to news page
    if (!$speech) {
        header("Location: news.php");
        exit;
    }
} catch (Exception $e) {
    // Log error and redirect to news page
    error_log("Error fetching speech: " . $e->getMessage());
    header("Location: news.php");
    exit;
}

// Set page title and styles
$page_title = $speech['title'];
$pageStyles = ['assets/css/news.css'];
$pageScripts = ['assets/js/news.js'];

// Start output buffering
ob_start();
?>

<!-- Hero Section -->
<section class="page-hero speech-hero glass-effect-dark">
    <div class="container">
        <h1><?php echo htmlspecialchars($speech['title']); ?></h1>
        <div class="speech-meta">
            <span class="speaker"><i class="fas fa-user"></i> <?php echo htmlspecialchars($speech['speaker']); ?></span>
            <span class="topic"><i class="fas fa-tag"></i> <?php echo htmlspecialchars($speech['topic']); ?></span>
            <span class="date"><i class="far fa-calendar-alt"></i> <?php echo date('F j, Y', strtotime($speech['speech_date'])); ?></span>
        </div>
    </div>
</section>

<!-- Main Content Section -->
<section class="page-content speech-content">
    <div class="container">
        <div class="speech-layout">
            <!-- Main Content Area -->
            <div class="main-speech-area">
                <article class="content-section speech-detail glass-effect">
                    <div class="speech-summary">
                        <h2>Summary</h2>
                        <p><?php echo htmlspecialchars($speech['summary']); ?></p>
                    </div>

                    <div class="speech-body">
                        <h2>Full Speech</h2>
                        <div class="speech-text">
                            <?php echo nl2br(htmlspecialchars($speech['content'])); ?>
                        </div>
                    </div>

                    <?php if (!empty($speech['pdf_document'])): ?>
                    <div class="speech-download">
                        <a href="<?php echo htmlspecialchars($speech['pdf_document']); ?>" class="download-button" target="_blank">
                            <i class="fas fa-file-pdf"></i> Download PDF Version
                        </a>
                    </div>
                    <?php endif; ?>

                    <div class="speech-footer">
                        <a href="news.php" class="back-button">
                            <i class="fas fa-arrow-left"></i> Back to News
                        </a>
                    </div>
                </article>
            </div>

            <!-- Sidebar Area -->
            <aside class="sidebar-area">
                <!-- Related Speeches Widget -->
                <div class="sidebar-widget related-speeches glass-effect-light">
                    <h3 class="widget-title">Related Speeches</h3>
                    <?php
                    // Fetch related speeches (same speaker or topic)
                    $related_sql = "SELECT id, title, speech_date 
                                  FROM speeches 
                                  WHERE status = 'published' 
                                  AND id != ? 
                                  AND (speaker = ? OR topic = ?)
                                  ORDER BY speech_date DESC 
                                  LIMIT 3";
                    $stmt = $conn->prepare($related_sql);
                    $stmt->bind_param("iss", $speech_id, $speech['speaker'], $speech['topic']);
                    $stmt->execute();
                    $related_result = $stmt->get_result();
                    ?>
                    <ul class="related-list">
                        <?php while ($related = $related_result->fetch_assoc()): ?>
                        <li>
                            <a href="speech.php?id=<?php echo $related['id']; ?>">
                                <span class="related-title"><?php echo htmlspecialchars($related['title']); ?></span>
                                <span class="related-date"><?php echo date('M j, Y', strtotime($related['speech_date'])); ?></span>
                            </a>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                </div>

                <!-- Share Widget -->
                <div class="sidebar-widget share-widget glass-effect-light">
                    <h3 class="widget-title">Share This Speech</h3>
                    <div class="share-buttons">
                        <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode($speech['title']); ?>&url=<?php echo urlencode('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>" 
                           class="share-btn twitter" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>" 
                           class="share-btn facebook" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="mailto:?subject=<?php echo urlencode($speech['title']); ?>&body=<?php echo urlencode('Check out this speech: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>" 
                           class="share-btn email">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

<?php
$pageContent = ob_get_clean();
require_once 'template.php';
?> 