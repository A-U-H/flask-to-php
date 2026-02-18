<?php
/**
 * Example Company - Header Include
 * 
 * Fixed navigation with transparent-to-solid transition
 */

// Start session for CSRF protection (must be before any output)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Generate CSRF token if not exists
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Example Company - Strategic e-commerce agency. We help brands grow using data-driven strategies and creative optimization.">
  <meta name="keywords" content="Amazon management, PPC management, brand protection, A+ content, e-commerce growth, Amazon SEO">
  <meta name="robots" content="index, follow">
  
  <title>Example Company | Strategic e-commerce Agency</title>
  
  <!-- Preload Critical Assets -->
  <link rel="preload" as="style" href="assets/css/style.css">
  <link rel="preload" as="script" href="assets/js/main.js">
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Jost:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
  
  <!-- Stylesheets -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/sections.css">
  
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="assets/img/icons/sprite.png">
  
  <!-- Security Headers -->
  <meta http-equiv="X-Content-Type-Options" content="nosniff">
  <meta http-equiv="X-Frame-Options" content="DENY">
  <meta http-equiv="X-XSS-Protection" content="1; mode=block">
  
  <!-- Scroll to Top on Page Load -->
  <script>
    // Prevent browser from remembering scroll position (fallback for older browsers)
    if ('scrollRestoration' in history) {
      history.scrollRestoration = 'manual';
    }
    // Scroll to top immediately on page load
    window.scrollTo(0, 0);
  </script>
</head>
<body>
  <!-- Skip Link for Accessibility -->
  <a href="#main" class="visually-hidden" style="position:absolute;top:-40px;left:0;background:var(--primary);color:var(--text-white);padding:8px;z-index:9999;">Skip to main content</a>
  
  <!-- Header -->
  <header class="header" id="header">
    <div class="header-inner">
      <a href="#hero" class="logo" aria-label="Example Company - Home">
        <span class="logo-text">Example<span class="logo-accent">Co</span></span>
      </a>
      
      <nav class="nav" id="nav" aria-label="Main navigation">
        <ul class="nav-list">
          <li><a href="#services" class="nav-link">Services</a></li>
          <li><a href="#process" class="nav-link">Process</a></li>
          <li><a href="#pricing" class="nav-link">Pricing</a></li>
          <li><a href="#faq" class="nav-link">FAQ</a></li>
        </ul>
      </nav>
      
      <div class="header-actions">
        <a href="#contact" class="btn btn-primary">Book Your Audit</a>
        
        <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle navigation" aria-expanded="false">
          <span class="hamburger"></span>
        </button>
      </div>
    </div>
  </header>
  
  <!-- Mobile Navigation Drawer -->
  <div class="mobile-nav" id="mobileNav" aria-hidden="true">
    <nav>
      <ul class="mobile-nav-list">
        <li><a href="#services" class="mobile-nav-link">Services</a></li>
        <li><a href="#process" class="mobile-nav-link">Process</a></li>
        <li><a href="#pricing" class="mobile-nav-link">Pricing</a></li>
        <li><a href="#faq" class="mobile-nav-link">FAQ</a></li>
        <li><a href="#contact" class="mobile-nav-link btn btn-primary" style="display:inline-flex;margin-top:var(--space-md);">Book Your Audit</a></li>
      </ul>
    </nav>
  </div>
  
  <!-- Overlay -->
  <div class="nav-overlay" id="navOverlay"></div>
