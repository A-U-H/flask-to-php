-- Example Company - Growth Audits Table Migration

CREATE TABLE IF NOT EXISTS growth_audits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    amazon_url VARCHAR(255) NOT NULL,
    monthly_revenue VARCHAR(50) NOT NULL,
    current_acos VARCHAR(20),
    goals TEXT,
    submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_email (email),
    INDEX idx_submission (submission_date)
);

-- Optional: Add this to your index.php header to include CSRF token
/*
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
*/
