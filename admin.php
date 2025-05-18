<?php
/**
 * Admin Dashboard for Judiciary of Eswatini Website
 * Allows authorized users to manage news articles and other content
 */

// Initialize session
session_start();

// Include necessary files
require_once 'includes/config.php';
require_once 'includes/db_connect.php';
require_once 'includes/functions.php';

// Check if user is logged in, otherwise redirect to login page
if (!isset($_SESSION['user_id']) || !isset($_SESSION['user_role'])) {
    header("Location: login.php");
    exit;
}

// Only admin and editor roles can access this page
if ($_SESSION['user_role'] !== 'admin' && $_SESSION['user_role'] !== 'editor') {
    header("Location: index.php");
    exit;
}

// Set default page view
$current_view = isset($_GET['view']) ? $_GET['view'] : 'dashboard';

// Process form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // CSRF token validation
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        $error_message = "Security token validation failed. Please try again.";
        error_log('CSRF token validation failed');
    } else {
        // Handle news article submissions
        if (isset($_POST['action']) && $_POST['action'] === 'add_news') {
            // Debug: Log the form submission
            error_log('News form submitted with action: ' . $_POST['action']);
            
            $title = trim($_POST['title']);
            $content = trim($_POST['content']);
            $excerpt = trim($_POST['excerpt']);
            $category = $_POST['category'];
            $status = $_POST['status'];
            
            // Generate slug from title
            $slug = createSlug($title);
            
            // Validate input
            $errors = [];
            if (empty($title)) {
                $errors[] = "Title is required";
            }
            if (empty($content)) {
                $errors[] = "Content is required";
            }
            if (empty($category)) {
                $errors[] = "Category is required";
            }
            
            // If no validation errors, process the image upload and save article
            if (empty($errors)) {
                $featured_image = '';
                $gallery_images = [];
                
                // Handle featured image upload if present
                if (isset($_FILES['featured_image']) && $_FILES['featured_image']['size'] > 0) {
                    $upload_result = uploadImage($_FILES['featured_image'], 'news');
                    if ($upload_result['success']) {
                        $featured_image = $upload_result['path'];
                    } else {
                        $errors[] = $upload_result['message'];
                    }
                }
                
                // Handle gallery image uploads if present
                if (isset($_FILES['article_images']) && !empty($_FILES['article_images']['name'][0])) {
                    $file_count = count($_FILES['article_images']['name']);
                    
                    for ($i = 0; $i < $file_count; $i++) {
                        // Create a single file array for each image
                        $file = [
                            'name' => $_FILES['article_images']['name'][$i],
                            'type' => $_FILES['article_images']['type'][$i],
                            'tmp_name' => $_FILES['article_images']['tmp_name'][$i],
                            'error' => $_FILES['article_images']['error'][$i],
                            'size' => $_FILES['article_images']['size'][$i]
                        ];
                        
                        if ($file['size'] > 0) {
                            $upload_result = uploadImage($file, 'news/gallery');
                            if ($upload_result['success']) {
                                $gallery_images[] = [
                                    'path' => $upload_result['path'],
                                    'order' => $i + 1,
                                    'caption' => ''
                                ];
                            } else {
                                $errors[] = "Error uploading image {$file['name']}: " . $upload_result['message'];
                            }
                        }
                    }
                }
                
                // If still no errors, save to database
                if (empty($errors)) {
                    try {
                        $conn = getDbConnection();
                        
                        // Check for duplicate slug
                        $check_sql = "SELECT COUNT(*) FROM news_posts WHERE slug = ?";
                        $stmt = $conn->prepare($check_sql);
                        $stmt->bind_param("s", $slug);
                        $stmt->execute();
                        $stmt->bind_result($count);
                        $stmt->fetch();
                        $stmt->close();
                        
                        if ($count > 0) {
                            // Append a random string to make slug unique
                            $slug .= '-' . substr(md5(uniqid(mt_rand(), true)), 0, 5);
                        }
                        
                        // Start transaction
                        $conn->begin_transaction();
                        
                        try {
                            // Insert the news article
                            $date = date('Y-m-d H:i:s');
                            $sql = "INSERT INTO news_posts (title, slug, content, excerpt, category, featured_image, author_id, status, date_published) 
                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
                            
                            $stmt = $conn->prepare($sql);
                            
                            // Debug: Log the query and parameters
                            error_log('Prepared SQL: ' . $sql);
                            error_log('Title: ' . $title);
                            error_log('Slug: ' . $slug);
                            
                            // Bind parameters to prepared statement
                            $stmt->bind_param("sssssssss", 
                                $title, 
                                $slug, 
                                $content, 
                                $excerpt, 
                                $category, 
                                $featured_image, 
                                $_SESSION['user_id'], 
                                $status,
                                $date
                            );
                            
                            // Execute the statement
                            $stmt->execute();
                            $article_id = $conn->insert_id;
                            $stmt->close();
                            
                            // Insert gallery images if any
                            if (!empty($gallery_images) && $article_id > 0) {
                                $image_sql = "INSERT INTO news_images (article_id, image_path, display_order, caption) VALUES (?, ?, ?, ?)";
                                $image_stmt = $conn->prepare($image_sql);
                                
                                foreach ($gallery_images as $image) {
                                    $image_stmt->bind_param("isis", 
                                        $article_id, 
                                        $image['path'], 
                                        $image['order'], 
                                        $image['caption']
                                    );
                                    $image_stmt->execute();
                                }
                                
                                $image_stmt->close();
                            }
                            
                            // Commit transaction
                            $conn->commit();
                            
                            $success_message = "News article added successfully!";
                            // Reset form values after successful submission
                            $title = $content = $excerpt = '';
                            // Redirect to manage news page to prevent form resubmission
                            header("Location: admin.php?view=manage_news&success=article_added");
                            exit;
                            
                        } catch (Exception $e) {
                            // Rollback transaction on error
                            $conn->rollback();
                            $errors[] = "Database error: " . $e->getMessage();
                            error_log('Transaction error: ' . $e->getMessage());
                        }
                        
                    } catch (Exception $e) {
                        $errors[] = "Database error: " . $e->getMessage();
                    }
                }
            }
        }
        
        // Handle article deletion
        if (isset($_POST['action']) && $_POST['action'] === 'delete_news') {
            $article_id = (int)$_POST['article_id'];
            
            try {
                $conn = getDbConnection();
                
                // Start transaction
                $conn->begin_transaction();
                
                try {
                    // Get image paths before deleting
                    $sql = "SELECT featured_image FROM news_posts WHERE id = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("i", $article_id);
                    $stmt->execute();
                    $stmt->bind_result($featured_image);
                    $stmt->fetch();
                    $stmt->close();
                    
                    // Get gallery images
                    $gallery_sql = "SELECT image_path FROM news_images WHERE article_id = ?";
                    $gallery_stmt = $conn->prepare($gallery_sql);
                    $gallery_stmt->bind_param("i", $article_id);
                    $gallery_stmt->execute();
                    $gallery_result = $gallery_stmt->get_result();
                    
                    $gallery_paths = [];
                    while ($row = $gallery_result->fetch_assoc()) {
                        $gallery_paths[] = $row['image_path'];
                    }
                    
                    $gallery_stmt->close();
                    
                    // Delete gallery images
                    $delete_gallery_sql = "DELETE FROM news_images WHERE article_id = ?";
                    $delete_gallery_stmt = $conn->prepare($delete_gallery_sql);
                    $delete_gallery_stmt->bind_param("i", $article_id);
                    $delete_gallery_stmt->execute();
                    $delete_gallery_stmt->close();
                    
                    // Delete the article
                    $sql = "DELETE FROM news_posts WHERE id = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("i", $article_id);
                    $stmt->execute();
                    $stmt->close();
                    
                    // Commit transaction
                    $conn->commit();
                    
                    // Delete the image files
                    if (!empty($featured_image) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . $featured_image)) {
                        unlink($_SERVER['DOCUMENT_ROOT'] . '/' . $featured_image);
                    }
                    
                    foreach ($gallery_paths as $path) {
                        if (!empty($path) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . $path)) {
                            unlink($_SERVER['DOCUMENT_ROOT'] . '/' . $path);
                        }
                    }
                    
                    $success_message = "News article deleted successfully!";
                    
                } catch (Exception $e) {
                    // Rollback transaction on error
                    $conn->rollback();
                    $errors[] = "Database error: " . $e->getMessage();
                }
                
            } catch (Exception $e) {
                $errors[] = "Database error: " . $e->getMessage();
            }
        }
        
        // Handle article editing
        if (isset($_POST['action']) && $_POST['action'] === 'edit_news') {
            $article_id = (int)$_POST['article_id'];
            $title = trim($_POST['title']);
            $content = trim($_POST['content']);
            $excerpt = trim($_POST['excerpt']);
            $category = $_POST['category'];
            $status = $_POST['status'];
            $current_image = $_POST['current_image'];
            
            // Validate input
            $errors = [];
            if (empty($title)) {
                $errors[] = "Title is required";
            }
            if (empty($content)) {
                $errors[] = "Content is required";
            }
            if (empty($category)) {
                $errors[] = "Category is required";
            }
            
            // If no validation errors, process the image upload and update article
            if (empty($errors)) {
                $featured_image = $current_image;
                $gallery_images = [];
                $existing_images = isset($_POST['existing_images']) ? $_POST['existing_images'] : [];
                $delete_images = isset($_POST['delete_images']) ? $_POST['delete_images'] : [];
                $image_captions = isset($_POST['image_caption']) ? $_POST['image_caption'] : [];
                $image_orders = isset($_POST['image_order']) ? $_POST['image_order'] : [];
                
                // Handle featured image upload if present
                if (isset($_FILES['featured_image']) && $_FILES['featured_image']['size'] > 0) {
                    $upload_result = uploadImage($_FILES['featured_image'], 'news');
                    if ($upload_result['success']) {
                        // Delete old image if it exists
                        if (!empty($current_image) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . $current_image)) {
                            unlink($_SERVER['DOCUMENT_ROOT'] . '/' . $current_image);
                        }
                        $featured_image = $upload_result['path'];
                    } else {
                        $errors[] = $upload_result['message'];
                    }
                }
                
                // Handle gallery image uploads if present
                if (isset($_FILES['article_images']) && !empty($_FILES['article_images']['name'][0])) {
                    $file_count = count($_FILES['article_images']['name']);
                    
                    // Get max display order for existing images
                    $max_order = 0;
                    if (!empty($image_orders)) {
                        $max_order = max(array_values($image_orders));
                    }
                    
                    for ($i = 0; $i < $file_count; $i++) {
                        // Create a single file array for each image
                        $file = [
                            'name' => $_FILES['article_images']['name'][$i],
                            'type' => $_FILES['article_images']['type'][$i],
                            'tmp_name' => $_FILES['article_images']['tmp_name'][$i],
                            'error' => $_FILES['article_images']['error'][$i],
                            'size' => $_FILES['article_images']['size'][$i]
                        ];
                        
                        if ($file['size'] > 0) {
                            $upload_result = uploadImage($file, 'news/gallery');
                            if ($upload_result['success']) {
                                $max_order++;
                                $gallery_images[] = [
                                    'path' => $upload_result['path'],
                                    'order' => $max_order,
                                    'caption' => ''
                                ];
                            } else {
                                $errors[] = "Error uploading image {$file['name']}: " . $upload_result['message'];
                            }
                        }
                    }
                }
                
                // If still no errors, update database
                if (empty($errors)) {
                    try {
                        $conn = getDbConnection();
                        
                        // Start transaction
                        $conn->begin_transaction();
                        
                        try {
                            // Update the article
                            $sql = "UPDATE news_posts SET 
                                    title = ?, 
                                    content = ?, 
                                    excerpt = ?, 
                                    category = ?, 
                                    featured_image = ?, 
                                    status = ?, 
                                    updated_at = CURRENT_TIMESTAMP 
                                    WHERE id = ?";
                            
                            $stmt = $conn->prepare($sql);
                            $stmt->bind_param("ssssssi", 
                                $title, 
                                $content, 
                                $excerpt, 
                                $category, 
                                $featured_image, 
                                $status, 
                                $article_id
                            );
                            
                            $stmt->execute();
                            $stmt->close();
                            
                            // Update existing images
                            if (!empty($existing_images)) {
                                $update_image_sql = "UPDATE news_images SET display_order = ?, caption = ? WHERE id = ? AND article_id = ?";
                                $update_stmt = $conn->prepare($update_image_sql);
                                
                                foreach ($existing_images as $image_id) {
                                    $image_id = (int)$image_id;
                                    $order = isset($image_orders[$image_id]) ? (int)$image_orders[$image_id] : 1;
                                    $caption = isset($image_captions[$image_id]) ? $image_captions[$image_id] : '';
                                    
                                    $update_stmt->bind_param("isii", 
                                        $order,
                                        $caption,
                                        $image_id,
                                        $article_id
                                    );
                                    $update_stmt->execute();
                                }
                                
                                $update_stmt->close();
                            }
                            
                            // Delete images marked for deletion
                            if (!empty($delete_images)) {
                                // First get the paths to delete the actual files
                                $paths_sql = "SELECT image_path FROM news_images WHERE id IN (" . implode(',', array_map('intval', $delete_images)) . ") AND article_id = ?";
                                $paths_stmt = $conn->prepare($paths_sql);
                                $paths_stmt->bind_param("i", $article_id);
                                $paths_stmt->execute();
                                $paths_result = $paths_stmt->get_result();
                                
                                $image_paths = [];
                                while ($row = $paths_result->fetch_assoc()) {
                                    $image_paths[] = $row['image_path'];
                                }
                                
                                $paths_stmt->close();
                                
                                // Now delete from database
                                $delete_sql = "DELETE FROM news_images WHERE id IN (" . implode(',', array_map('intval', $delete_images)) . ") AND article_id = ?";
                                $delete_stmt = $conn->prepare($delete_sql);
                                $delete_stmt->bind_param("i", $article_id);
                                $delete_stmt->execute();
                                $delete_stmt->close();
                                
                                // Delete the physical files
                                foreach ($image_paths as $path) {
                                    if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . $path)) {
                                        unlink($_SERVER['DOCUMENT_ROOT'] . '/' . $path);
                                    }
                                }
                            }
                            
                            // Insert new gallery images if any
                            if (!empty($gallery_images)) {
                                $image_sql = "INSERT INTO news_images (article_id, image_path, display_order, caption) VALUES (?, ?, ?, ?)";
                                $image_stmt = $conn->prepare($image_sql);
                                
                                foreach ($gallery_images as $image) {
                                    $image_stmt->bind_param("isis", 
                                        $article_id, 
                                        $image['path'], 
                                        $image['order'], 
                                        $image['caption']
                                    );
                                    $image_stmt->execute();
                                }
                                
                                $image_stmt->close();
                            }
                            
                            // Commit transaction
                            $conn->commit();
                            
                            $success_message = "News article updated successfully!";
                            $current_view = 'manage_news'; // Switch to news list view
                            header("Location: admin.php?view=manage_news&success=article_updated");
                            exit;
                            
                        } catch (Exception $e) {
                            // Rollback transaction on error
                            $conn->rollback();
                            $errors[] = "Database error: " . $e->getMessage();
                            error_log('Transaction error: ' . $e->getMessage());
                        }
                        
                    } catch (Exception $e) {
                        $errors[] = "Database error: " . $e->getMessage();
                    }
                }
            }
        }
        
        // Handle judgment submissions
        if (isset($_POST['action']) && $_POST['action'] === 'add_judgment') {
            $case_number = trim($_POST['case_number']);
            $court_type = $_POST['court_type'];
            $plaintiff = trim($_POST['plaintiff']);
            $defendant = trim($_POST['defendant']);
            $judgment_date = $_POST['judgment_date'];
            $eswatinili_url = trim($_POST['eswatinili_url']);
            $status = $_POST['status'];
            
            // Validate input
            $errors = [];
            if (empty($case_number)) {
                $errors[] = "Case number is required";
            }
            if (empty($court_type)) {
                $errors[] = "Court type is required";
            }
            if (empty($plaintiff)) {
                $errors[] = "Plaintiff is required";
            }
            if (empty($defendant)) {
                $errors[] = "Defendant is required";
            }
            if (empty($judgment_date)) {
                $errors[] = "Judgment date is required";
            }
            if (empty($eswatinili_url)) {
                $errors[] = "Eswatinili URL is required";
            }
            
            // If no validation errors, save to database
            if (empty($errors)) {
                try {
                    $conn = getDbConnection();
                    
                    $sql = "INSERT INTO judgments (case_number, court_type, plaintiff, defendant, judgment_date, eswatinili_url, status, created_by) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                    
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("sssssssi", 
                        $case_number,
                        $court_type,
                        $plaintiff,
                        $defendant,
                        $judgment_date,
                        $eswatinili_url,
                        $status,
                        $_SESSION['user_id']
                    );
                    
                    if ($stmt->execute()) {
                        $success_message = "Judgment added successfully!";
                        header("Location: admin.php?view=manage_judgments&success=judgment_added");
                        exit;
                    } else {
                        $errors[] = "Error adding judgment: " . $stmt->error;
                    }
                    
                    $stmt->close();
                } catch (Exception $e) {
                    $errors[] = "Database error: " . $e->getMessage();
                }
            }
        }
        
        // Handle judgment deletion
        if (isset($_POST['action']) && $_POST['action'] === 'delete_judgment') {
            $judgment_id = (int)$_POST['judgment_id'];
            
            try {
                $conn = getDbConnection();
                
                $sql = "DELETE FROM judgments WHERE id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $judgment_id);
                
                if ($stmt->execute()) {
                    $success_message = "Judgment deleted successfully!";
                } else {
                    $errors[] = "Error deleting judgment: " . $stmt->error;
                }
                
                $stmt->close();
            } catch (Exception $e) {
                $errors[] = "Database error: " . $e->getMessage();
            }
        }

        // Handle speech submissions
        if (isset($_POST['action']) && $_POST['action'] === 'add_speech') {
            $title = trim($_POST['title']);
            $topic = trim($_POST['topic']);
            $summary = trim($_POST['summary']);
            $content = trim($_POST['content']);
            $speaker = trim($_POST['speaker']);
            $speech_date = $_POST['speech_date'];
            $status = $_POST['status'];
            
            // Validate input
            $errors = [];
            if (empty($title)) {
                $errors[] = "Title is required";
            }
            if (empty($topic)) {
                $errors[] = "Topic is required";
            }
            if (empty($summary)) {
                $errors[] = "Summary is required";
            }
            if (empty($content)) {
                $errors[] = "Content is required";
            }
            if (empty($speaker)) {
                $errors[] = "Speaker is required";
            }
            if (empty($speech_date)) {
                $errors[] = "Speech date is required";
            }
            
            // Handle PDF upload
            $pdf_document = '';
            if (isset($_FILES['pdf_document']) && $_FILES['pdf_document']['size'] > 0) {
                $upload_result = uploadPDF($_FILES['pdf_document'], 'speeches');
                if ($upload_result['success']) {
                    $pdf_document = $upload_result['path'];
                } else {
                    $errors[] = $upload_result['message'];
                }
            }
            
            // If no validation errors, save to database
            if (empty($errors)) {
                try {
                    $conn = getDbConnection();
                    
                    $sql = "INSERT INTO speeches (title, topic, summary, content, speaker, speech_date, pdf_document, status, created_by) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
                    
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("ssssssssi", 
                        $title,
                        $topic,
                        $summary,
                        $content,
                        $speaker,
                        $speech_date,
                        $pdf_document,
                        $status,
                        $_SESSION['user_id']
                    );
                    
                    if ($stmt->execute()) {
                        $success_message = "Speech added successfully!";
                        header("Location: admin.php?view=manage_speeches&success=speech_added");
                        exit;
                    } else {
                        $errors[] = "Error adding speech: " . $stmt->error;
                    }
                    
                    $stmt->close();
                } catch (Exception $e) {
                    $errors[] = "Database error: " . $e->getMessage();
                }
            }
        }

        // Handle speech editing
        if (isset($_POST['action']) && $_POST['action'] === 'edit_speech') {
            $speech_id = (int)$_POST['speech_id'];
            $title = trim($_POST['title']);
            $topic = trim($_POST['topic']);
            $summary = trim($_POST['summary']);
            $content = trim($_POST['content']);
            $speaker = trim($_POST['speaker']);
            $speech_date = $_POST['speech_date'];
            $status = $_POST['status'];
            $current_pdf = $_POST['current_pdf'];
            
            // Validate input
            $errors = [];
            if (empty($title)) {
                $errors[] = "Title is required";
            }
            if (empty($topic)) {
                $errors[] = "Topic is required";
            }
            if (empty($summary)) {
                $errors[] = "Summary is required";
            }
            if (empty($content)) {
                $errors[] = "Content is required";
            }
            if (empty($speaker)) {
                $errors[] = "Speaker is required";
            }
            if (empty($speech_date)) {
                $errors[] = "Speech date is required";
            }
            
            // Handle PDF upload
            $pdf_document = $current_pdf;
            if (isset($_FILES['pdf_document']) && $_FILES['pdf_document']['size'] > 0) {
                $upload_result = uploadPDF($_FILES['pdf_document'], 'speeches');
                if ($upload_result['success']) {
                    // Delete old PDF if it exists
                    if (!empty($current_pdf) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . $current_pdf)) {
                        unlink($_SERVER['DOCUMENT_ROOT'] . '/' . $current_pdf);
                    }
                    $pdf_document = $upload_result['path'];
                } else {
                    $errors[] = $upload_result['message'];
                }
            }
            
            // If no validation errors, update database
            if (empty($errors)) {
                try {
                    $conn = getDbConnection();
                    
                    $sql = "UPDATE speeches SET 
                            title = ?, 
                            topic = ?, 
                            summary = ?, 
                            content = ?, 
                            speaker = ?, 
                            speech_date = ?, 
                            pdf_document = ?, 
                            status = ?, 
                            updated_at = CURRENT_TIMESTAMP 
                            WHERE id = ?";
                    
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("ssssssssi", 
                        $title,
                        $topic,
                        $summary,
                        $content,
                        $speaker,
                        $speech_date,
                        $pdf_document,
                        $status,
                        $speech_id
                    );
                    
                    if ($stmt->execute()) {
                        $success_message = "Speech updated successfully!";
                        header("Location: admin.php?view=manage_speeches&success=speech_updated");
                        exit;
                    } else {
                        $errors[] = "Error updating speech: " . $stmt->error;
                    }
                    
                    $stmt->close();
                } catch (Exception $e) {
                    $errors[] = "Database error: " . $e->getMessage();
                }
            }
        }

        // Handle speech deletion
        if (isset($_POST['action']) && $_POST['action'] === 'delete_speech') {
            $speech_id = (int)$_POST['speech_id'];
            
            try {
                $conn = getDbConnection();
                
                // Get PDF path before deleting
                $sql = "SELECT pdf_document FROM speeches WHERE id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $speech_id);
                $stmt->execute();
                $stmt->bind_result($pdf_path);
                $stmt->fetch();
                $stmt->close();
                
                // Delete the speech
                $sql = "DELETE FROM speeches WHERE id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $speech_id);
                
                if ($stmt->execute()) {
                    // Delete the PDF file if it exists
                    if (!empty($pdf_path) && file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . $pdf_path)) {
                        unlink($_SERVER['DOCUMENT_ROOT'] . '/' . $pdf_path);
                    }
                    $success_message = "Speech deleted successfully!";
                } else {
                    $errors[] = "Error deleting speech: " . $stmt->error;
                }
                
                $stmt->close();
            } catch (Exception $e) {
                $errors[] = "Database error: " . $e->getMessage();
            }
        }
    }
}

// Generate CSRF token if not exists
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Set page title based on current view
$page_title = "Admin Dashboard";
if ($current_view === 'add_news') {
    $page_title = "Add New Article";
} elseif ($current_view === 'edit_news') {
    $page_title = "Edit Article";
} elseif ($current_view === 'manage_news') {
    $page_title = "Manage News Articles";
} elseif ($current_view === 'add_judgment') {
    $page_title = "Add New Judgment";
} elseif ($current_view === 'edit_judgment') {
    $page_title = "Edit Judgment";
} elseif ($current_view === 'manage_judgments') {
    $page_title = "Manage Judgments";
} elseif ($current_view === 'add_speech') {
    $page_title = "Add New Speech";
} elseif ($current_view === 'edit_speech') {
    $page_title = "Edit Speech";
} elseif ($current_view === 'manage_speeches') {
    $page_title = "Manage Speeches";
}

// Additional CSS for admin area
$pageStyles = [
    'assets/css/admin.css'
];

// Additional JS for admin area
$pageScripts = [
    'assets/js/admin.js'
];

// Start output buffering for template
ob_start();
?>

<!-- Admin Dashboard Content -->
<section class="admin-header glass-effect-dark">
    <div class="container">
        <h1><?php echo $page_title; ?></h1>
        <p class="subtitle">Manage website content</p>
    </div>
</section>

<section class="admin-content">
    <div class="container">
        <div class="admin-layout">
            <!-- Sidebar Navigation -->
            <aside class="admin-sidebar glass-effect-light">
                <h3>Navigation</h3>
                <ul>
                    <li><a href="admin.php" class="<?php echo $current_view === 'dashboard' ? 'active' : ''; ?>">Dashboard</a></li>
                    <li><a href="admin.php?view=add_news" class="<?php echo $current_view === 'add_news' ? 'active' : ''; ?>">Add News Article</a></li>
                    <li><a href="admin.php?view=manage_news" class="<?php echo $current_view === 'manage_news' ? 'active' : ''; ?>">Manage News</a></li>
                    <li><a href="admin.php?view=add_judgment" class="<?php echo $current_view === 'add_judgment' ? 'active' : ''; ?>">Add Judgment</a></li>
                    <li><a href="admin.php?view=manage_judgments" class="<?php echo $current_view === 'manage_judgments' ? 'active' : ''; ?>">Manage Judgments</a></li>
                    <li><a href="admin.php?view=add_speech" class="<?php echo $current_view === 'add_speech' ? 'active' : ''; ?>">Add Speech</a></li>
                    <li><a href="admin.php?view=manage_speeches" class="<?php echo $current_view === 'manage_speeches' ? 'active' : ''; ?>">Manage Speeches</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </aside>

            <!-- Main Content Area -->
            <div class="admin-main">
                <?php
                // Display success or error messages
                if (isset($success_message)) {
                    echo '<div class="alert alert-success">' . htmlspecialchars($success_message) . '</div>';
                }
                
                // Handle success messages from redirects
                if (isset($_GET['success']) && $_GET['success'] === 'article_added') {
                    echo '<div class="alert alert-success">News article added successfully!</div>';
                }
                
                if (isset($errors) && !empty($errors)) {
                    echo '<div class="alert alert-danger"><ul>';
                    foreach ($errors as $error) {
                        echo '<li>' . htmlspecialchars($error) . '</li>';
                    }
                    echo '</ul></div>';
                }

                // Display content based on the current view
                switch ($current_view) {
                    case 'dashboard':
                        include 'admin/dashboard.php';
                        break;
                        
                    case 'add_news':
                        include 'admin/news_form.php';
                        break;
                        
                    case 'edit_news':
                        include 'admin/news_form.php';
                        break;
                        
                    case 'manage_news':
                        include 'admin/news_list.php';
                        break;
                        
                    case 'add_judgment':
                        include 'admin/judgment_form.php';
                        break;
                        
                    case 'edit_judgment':
                        include 'admin/judgment_form.php';
                        break;
                        
                    case 'manage_judgments':
                        include 'admin/judgment_list.php';
                        break;
                        
                    case 'add_speech':
                        include 'admin/speech_form.php';
                        break;
                        
                    case 'edit_speech':
                        include 'admin/speech_form.php';
                        break;
                        
                    case 'manage_speeches':
                        include 'admin/speech_list.php';
                        break;
                        
                    default:
                        include 'admin/dashboard.php';
                        break;
                }
                ?>
            </div>
        </div>
    </div>
</section>

<?php
$pageContent = ob_get_clean();
require_once 'template.php';

/**
 * Helper function to upload an image
 */
function uploadImage($file, $type = 'general') {
    $result = [
        'success' => false,
        'path' => '',
        'message' => ''
    ];
    
    // Check for upload errors
    if ($file['error'] !== UPLOAD_ERR_OK) {
        $result['message'] = "Upload failed with error code " . $file['error'];
        return $result;
    }
    
    // Validate file size
    if ($file['size'] > MAX_FILE_SIZE) {
        $result['message'] = "File too large. Maximum size is " . (MAX_FILE_SIZE / 1048576) . "MB";
        return $result;
    }
    
    // Validate file type
    $file_info = pathinfo($file['name']);
    $extension = strtolower($file_info['extension']);
    
    if (!in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) {
        $result['message'] = "Invalid file type. Only JPG, PNG, and GIF are allowed.";
        return $result;
    }
    
    // Create upload directory if it doesn't exist
    $upload_dir = 'uploads/' . $type . '/' . date('Y/m');
    if (!file_exists($upload_dir)) {
        mkdir($upload_dir, 0755, true);
    }
    
    // Generate unique filename
    $filename = uniqid() . '.' . $extension;
    $destination = $upload_dir . '/' . $filename;
    
    // Move file to destination
    if (move_uploaded_file($file['tmp_name'], $destination)) {
        $result['success'] = true;
        $result['path'] = $destination;
    } else {
        $result['message'] = "Failed to save the uploaded file.";
    }
    
    return $result;
}

/**
 * Helper function to upload a PDF file
 */
function uploadPDF($file, $type = 'general') {
    $result = [
        'success' => false,
        'path' => '',
        'message' => ''
    ];
    
    // Check for upload errors
    if ($file['error'] !== UPLOAD_ERR_OK) {
        $result['message'] = "Upload failed with error code " . $file['error'];
        return $result;
    }
    
    // Validate file size (10MB max)
    if ($file['size'] > 10485760) {
        $result['message'] = "File too large. Maximum size is 10MB";
        return $result;
    }
    
    // Validate file type
    $file_info = pathinfo($file['name']);
    $extension = strtolower($file_info['extension']);
    
    if ($extension !== 'pdf') {
        $result['message'] = "Invalid file type. Only PDF files are allowed.";
        return $result;
    }
    
    // Create upload directory if it doesn't exist
    $upload_dir = 'uploads/' . $type . '/' . date('Y/m');
    if (!file_exists($upload_dir)) {
        mkdir($upload_dir, 0755, true);
    }
    
    // Generate unique filename
    $filename = uniqid() . '.pdf';
    $destination = $upload_dir . '/' . $filename;
    
    // Move file to destination
    if (move_uploaded_file($file['tmp_name'], $destination)) {
        $result['success'] = true;
        $result['path'] = $destination;
    } else {
        $result['message'] = "Failed to save the uploaded file.";
    }
    
    return $result;
}
?>
