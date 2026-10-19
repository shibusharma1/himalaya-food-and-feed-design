<?php
/**
 * Himalayan Food and Feed - Application Configuration
 * 
 * Central configuration file for brand identity, verified business information,
 * routing helpers, navigation, and security settings.
 */

// Strict error reporting for development, production-safe error suppression
error_reporting(E_ALL);
ini_set('display_errors', '0');
ini_set('log_errors', '1');

// Start session securely if not already started
if (session_status() === PHP_SESSION_NONE) {
    // Only send cookie over HTTPS if connection is secure
    $isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443);
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'domain' => '',
        'secure' => $isHttps,
        'httponly' => true,
        'samesite' => 'Lax'
    ]);
    session_start();
}

// Generate CSRF token if not exists
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// App & Brand Definitions
define('APP_NAME', 'Himalayan Food and Feed');
define('APP_TAGLINE', 'Reliable Food & Feed Ingredients for Global B2B Markets');
define('APP_CANONICAL_DOMAIN', 'https://www.himalayanfoodandfeed.com');

// Verified Business Contact Information (Preserved from client references)
define('CLIENT_DIRECTOR', 'Kumar Dhungel');
define('CLIENT_EMAIL', 'kumar@himalayanfoodandfeed.com');
define('CLIENT_PHONE', '+45 52 17 56 66');
define('CLIENT_PHONE_RAW', '4552175666');
define('CLIENT_WHATSAPP_URL', 'https://wa.me/4552175666');
define('CLIENT_OFFICE_DENMARK', 'Saven 2630, Denmark');
define('CLIENT_PRESENCE', 'Denmark and Singapore');

// Base URL helper
function get_base_url(): string {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    
    // Determine subdirectory if running locally (e.g. /himalaya-food-and-feed-design)
    $scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
    // If in root, scriptDir is '/' or ''
    $subDir = rtrim($scriptDir, '/');
    // If scriptDir ends with /products or /handlers, strip that subfolder
    $subDir = preg_replace('#/(products|handlers|docs|tests)$#', '', $subDir);

    return $protocol . $host . $subDir;
}

// URL builder helper supporting clean URLs or fallback .php
function url(string $path = ''): string {
    $base = rtrim(get_base_url(), '/');
    $cleanPath = ltrim($path, '/');
    if ($cleanPath === '' || $cleanPath === '/') {
        return $base . '/';
    }
    return $base . '/' . $cleanPath;
}

// Asset URL helper with versioning for cache busting
function asset(string $path): string {
    $base = rtrim(get_base_url(), '/');
    $cleanPath = ltrim($path, '/');
    $fullPath = __DIR__ . '/../' . $cleanPath;
    $v = file_exists($fullPath) ? filemtime($fullPath) : '1.0';
    return $base . '/' . $cleanPath . '?v=' . $v;
}

// Output escaping helper
function e(?string $string): string {
    return htmlspecialchars($string ?? '', ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML5, 'UTF-8');
}

// Navigation structure
$mainNavigation = [
    [
        'label' => 'Home',
        'url' => 'index.php',
        'key' => 'home'
    ],
    [
        'label' => 'About Us',
        'url' => 'about-us.php',
        'key' => 'about'
    ],
    [
        'label' => 'Products',
        'url' => 'products.php',
        'key' => 'products',
        'children' => [
            ['label' => 'Animal Proteins', 'url' => 'products/animal-proteins.php', 'key' => 'animal-proteins'],
            ['label' => 'Plant Proteins', 'url' => 'products/plant-proteins.php', 'key' => 'plant-proteins'],
            ['label' => 'Feed Additives', 'url' => 'products/feed-additives.php', 'key' => 'feed-additives'],
            ['label' => 'Feed Minerals', 'url' => 'products/minerals.php', 'key' => 'minerals'],
            ['label' => 'Food Ingredients & Grains', 'url' => 'products/food-ingredients.php', 'key' => 'food-ingredients'],
            ['label' => 'Pet Food Ingredients', 'url' => 'products/pet-food.php', 'key' => 'pet-food'],
            ['label' => 'FMCG Goods', 'url' => 'products/fmcg.php', 'key' => 'fmcg'],
        ]
    ],
    [
        'label' => 'Services',
        'url' => 'services.php',
        'key' => 'services'
    ],
    [
        'label' => 'Why Choose Us',
        'url' => 'why-choose-us.php',
        'key' => 'why-choose-us'
    ],
    [
        'label' => 'Quality & Specs',
        'url' => 'quality.php',
        'key' => 'quality'
    ],
    [
        'label' => 'Global Markets',
        'url' => 'markets.php',
        'key' => 'markets'
    ],
    [
        'label' => 'FAQ',
        'url' => 'faq.php',
        'key' => 'faq'
    ],
    [
        'label' => 'Contact',
        'url' => 'contact.php',
        'key' => 'contact'
    ],
];
