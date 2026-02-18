<?php
/**
 * Security Check - Include this at the top of all PHP files
 */

// Define constant when file is included (not accessed directly)
if (!defined('ECOM_SQUIRE')) {
    // Check if this is a direct access attempt
    $current_script = $_SERVER['SCRIPT_NAME'] ?? '';
    if (strpos($current_script, '/includes/') !== false || 
        strpos($current_script, '/forms/') !== false) {
        // This is a direct access attempt to includes/forms - block it
        header('HTTP/1.0 403 Forbidden');
        exit('Direct access forbidden');
    }
    // Define the constant for legitimate includes
    define('ECOM_SQUIRE', true);
}
