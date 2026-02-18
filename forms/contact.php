<?php
/**
 * Ecom Squire - Contact Form Handler
 * 
 * Secure form processing with:
 * - CSRF protection
 * - Honeypot spam detection
 * - Input sanitization
 * - JSON response for AJAX handling
 */

// Set JSON content type
header('Content-Type: application/json');

// Security: Prevent direct access
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// CSRF Token Validation
session_start();
$csrf_token = $_POST['csrf_token'] ?? '';
if (!isset($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $csrf_token)) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Invalid request token']);
    exit;
}

// Honeypot Detection (bots fill this hidden field)
$honeypot = $_POST['website_url'] ?? '';
if (!empty($honeypot)) {
    // Silent failure - pretend success to waste bot's time
    echo json_encode(['success' => true, 'message' => 'Thank you! We will be in touch shortly.']);
    exit;
}

// Sanitize and validate input
function sanitize_input($data) {
    return htmlspecialchars(strip_tags(trim($data)), ENT_QUOTES, 'UTF-8');
}

function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validate_url($url) {
    // Add https:// if missing
    if (!preg_match('/^https?:\/\//', $url)) {
        $url = 'https://' . $url;
    }
    return filter_var($url, FILTER_VALIDATE_URL);
}

// Collect and validate form data
$errors = [];
$data = [];

// Required fields
$required_fields = ['first_name', 'last_name', 'email', 'store_url', 'revenue_tier'];

foreach ($required_fields as $field) {
    if (empty($_POST[$field])) {
        $errors[] = ucwords(str_replace('_', ' ', $field)) . ' is required';
    } else {
        $data[$field] = sanitize_input($_POST[$field]);
    }
}

// Validate email
if (!empty($data['email']) && !validate_email($data['email'])) {
    $errors[] = 'Please enter a valid email address';
}

// Validate URL
if (!empty($data['store_url']) && !validate_url($data['store_url'])) {
    $errors[] = 'Please enter a valid store URL';
}

// Validate revenue tier
$valid_tiers = ['under_10k', '10k_50k', '50k_100k', '100k_500k', 'over_500k'];
if (!empty($data['revenue_tier']) && !in_array($data['revenue_tier'], $valid_tiers)) {
    $errors[] = 'Please select a valid revenue tier';
}

// Optional fields
$data['current_acos'] = sanitize_input($_POST['current_acos'] ?? '');
$data['goals'] = sanitize_input($_POST['goals'] ?? '');

// If there are validation errors, return them
if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please fix the following errors:', 'errors' => $errors]);
    exit;
}

// Rate limiting (basic implementation)
$rate_limit_key = $_SERVER['REMOTE_ADDR'];
$rate_limit_file = sys_get_temp_dir() . '/app_rate_' . md5($rate_limit_key);
$rate_limit_window = 300; // 5 minutes
$max_requests = 3;

if (file_exists($rate_limit_file)) {
    $attempts = (int)file_get_contents($rate_limit_file);
    if ($attempts >= $max_requests) {
        http_response_code(429);
        echo json_encode(['success' => false, 'message' => 'Too many requests. Please try again later.']);
        exit;
    }
}

// Send email notification (using PHP mail or PHPMailer)
function send_lead_notification($data) {
    $to = 'Your Email Address Here'; // Replace with your actual email address
    $subject = 'New Lead: ' . $data['first_name'] . ' ' . $data['last_name'] . ' - ' . $data['revenue_tier'];
    
    $message = "New lead received from website:\n\n";
    $message .= "Name: " . $data['first_name'] . ' ' . $data['last_name'] . "\n";
    $message .= "Email: " . $data['email'] . "\n";
    $message .= "Store URL: " . $data['store_url'] . "\n";
    $message .= "Revenue Tier: " . str_replace('_', ' ', $data['revenue_tier']) . "\n";
    if (!empty($data['current_acos'])) {
        $message .= "Current ACOS: " . $data['current_acos'] . "\n";
    }
    if (!empty($data['goals'])) {
        $message .= "Goals: " . $data['goals'] . "\n";
    }
    $message .= "\n---\n";
    $message .= "Submitted: " . date('Y-m-d H:i:s') . "\n";
    
    $headers = [
        'From: Website <noreply@example.com>',
        'Reply-To: ' . $data['email'],
        'X-Mailer: PHP/' . phpversion()
    ];
    
    return mail($to, $subject, implode("\n", $headers) . "\n\n" . $message);
}

function send_confirmation_email($data) {
    $to = $data['email'];
    $subject = 'Thank you for your interest';
    
    $message = "Hi " . $data['first_name'] . ",\n\n";
    $message .= "Thank you for requesting your free growth audit!\n\n";
    $message .= "We've received your information and will be analyzing your account within 24 hours.\n\n";
    $message .= "What happens next:\n";
    $message .= "1. We'll review your store and identify growth opportunities\n";
    $message .= "2. We'll reach out to schedule your 15-minute strategy call\n";
    $message .= "3. Together, we'll create a customized growth roadmap\n\n";
    $message .= "In the meantime, feel free to explore our case studies:\n";
    $message .= "https://example.com/#testimonials\n\n";
    $message .= "Best regards,\n";
    $message .= "The Example Team\n\n";
    $message .= "---\n";
    $message .= "Strategic Amazon Management | engineered for growth\n";
    
    $headers = [
        'From: Example Company <noreply@example.com>',
        'X-Mailer: PHP/' . phpversion()
    ];
    
    return mail($to, $subject, implode("\n", $headers) . "\n\n" . $message);
}

// Process the form
try {
    // Update rate limit counter
    if (!file_exists($rate_limit_file)) {
        file_put_contents($rate_limit_file, '1');
    } else {
        $attempts = (int)file_get_contents($rate_limit_file) + 1;
        file_put_contents($rate_limit_file, (string)$attempts);
    }
    
    // Send emails
    $notification_sent = send_lead_notification($data);
    $confirmation_sent = send_confirmation_email($data);
    
    // Log submission
    $log_file = sys_get_temp_dir() . '/app_leads.log';
    $log_entry = date('Y-m-d H:i:s') . ' | ' . $data['email'] . ' | ' . $data['store_url'] . ' | ' . $data['revenue_tier'] . "\n";
    file_put_contents($log_file, $log_entry, FILE_APPEND);
    
    // Success response
    echo json_encode([
        'success' => true,
        'message' => 'Thank you! Your audit request has been received. We will be in touch within 24 hours to schedule your strategy call.'
    ]);
    
} catch (Exception $e) {
    error_log('Form submission error: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'An error occurred. Please try again later or contact us directly.']);
}

// Cleanup old rate limit files (older than 1 hour)
foreach (glob(sys_get_temp_dir() . '/app_rate_*') as $file) {
    if (filemtime($file) < time() - 3600) {
        unlink($file);
    }
}
