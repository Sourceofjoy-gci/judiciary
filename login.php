<?php
/**
 * Login Page for Admin Access
 * Provides authentication for the admin panel
 */

// Initialize session
session_start();

// Include configuration
require_once 'includes/config.php';
require_once 'includes/db_connect.php';
require_once 'includes/functions.php';

// Check if already logged in
if (isset($_SESSION['user_id']) && isset($_SESSION['user_role'])) {
    header("Location: admin.php");
    exit;
}

$error_message = '';
$success_message = '';

// Process login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate CSRF token
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        $error_message = "Security token validation failed. Please try again.";
    } else {
        $username = trim($_POST['username']);
        $password = $_POST['password'];
        
        // Basic validation
        if (empty($username) || empty($password)) {
            $error_message = "Username and password are required.";
        } else {
            try {
                $conn = getDbConnection();
                
                // Get user from database
                $sql = "SELECT id, username, password, full_name, role FROM users WHERE username = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $username);
                $stmt->execute();
                $result = $stmt->get_result();
                
                if ($user = $result->fetch_assoc()) {
                    // Verify password - in a real system this would use password_verify()
                    // For demonstration, we're just checking against the stored password
                    if ($password === $user['password']) {
                        // Password is correct, create session
                        $_SESSION['user_id'] = $user['id'];
                        $_SESSION['username'] = $user['username'];
                        $_SESSION['user_role'] = $user['role'];
                        $_SESSION['full_name'] = $user['full_name'];
                        
                        // Redirect to admin panel
                        header("Location: admin.php");
                        exit;
                    } else {
                        $error_message = "Invalid username or password.";
                    }
                } else {
                    $error_message = "Invalid username or password.";
                }
                
                $stmt->close();
            } catch (Exception $e) {
                $error_message = "Login failed: " . $e->getMessage();
            }
        }
    }
}

// Generate CSRF token if not exists
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Set page title
$page_title = "Login - Admin Panel";
$pageStyles = ['assets/css/admin.css'];

// Start output buffering for template
ob_start();
?>

<section class="login-section">
    <div class="container">
        <div class="login-container glass-effect">
            <div class="login-header">
                <h1><i class="fas fa-lock"></i> Admin Login</h1>
                <p>Enter your credentials to access the admin panel</p>
            </div>
            
            <div class="login-body">
                <?php if (!empty($error_message)): ?>
                    <div class="alert alert-danger"><?php echo htmlspecialchars($error_message); ?></div>
                <?php endif; ?>
                
                <?php if (!empty($success_message)): ?>
                    <div class="alert alert-success"><?php echo htmlspecialchars($success_message); ?></div>
                <?php endif; ?>
                
                <form action="login.php" method="POST" class="login-form">
                    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                    
                    <div class="form-group">
                        <label for="username">Username</label>
                        <div class="input-group">
                            <span class="input-icon"><i class="fas fa-user"></i></span>
                            <input type="text" id="username" name="username" placeholder="Enter your username" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <span class="input-icon"><i class="fas fa-key"></i></span>
                            <input type="password" id="password" name="password" placeholder="Enter your password" required>
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </button>
                    </div>
                </form>
            </div>
            
            <div class="login-footer">
                <p><a href="index.php"><i class="fas fa-home"></i> Return to Homepage</a></p>
            </div>
        </div>
    </div>
</section>

<?php
$pageContent = ob_get_clean();
require_once 'template.php';
?>
