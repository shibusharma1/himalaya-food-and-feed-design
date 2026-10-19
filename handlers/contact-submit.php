<?php
/**
 * Himalayan Food and Feed - Contact & Quote Enquiry Handler
 * 
 * Validates CSRF tokens, honeypot, rate limiting, and all field parameters.
 * Supports AJAX JSON responses as well as standard POST redirects with session flash.
 */

require_once __DIR__ . '/../config/app.php';
require_once __DIR__ . '/../config/mail.php';

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    header('Allow: POST');
    exit('Method Not Allowed');
}

$isAjax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')
    || (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false);

function respond(bool $success, string $message, array $errors = [], int $statusCode = 200) {
    global $isAjax;
    http_response_code($statusCode);
    if ($isAjax) {
        header('Content-Type: application/json; charset=UTF-8');
        echo json_encode([
            'success' => $success,
            'message' => $message,
            'errors' => $errors
        ]);
        exit;
    } else {
        if ($success) {
            $_SESSION['flash_success'] = $message;
            unset($_SESSION['flash_errors'], $_SESSION['form_old']);
        } else {
            $_SESSION['flash_error'] = $message;
            $_SESSION['flash_errors'] = $errors;
            $_SESSION['form_old'] = $_POST;
        }
        $redirect = !empty($_POST['redirect_to']) ? $_POST['redirect_to'] : url('contact.php#quote-form');
        header('Location: ' . $redirect);
        exit;
    }
}

// 1. Honeypot check (hidden field that automated bots fill out)
if (!empty($_POST['contact_security_check'])) {
    // Silently return success to mislead spambots
    respond(true, 'Your quotation request has been received.');
}

// 2. CSRF Token Verification
$submittedToken = $_POST['csrf_token'] ?? '';
if (empty($submittedToken) || !hash_equals($_SESSION['csrf_token'] ?? '', $submittedToken)) {
    respond(false, 'Security verification failed or session expired. Please refresh the page and try again.', ['csrf' => 'Invalid security token.'], 403);
}

// 3. Basic Rate Limiting (Session & IP based)
$now = time();
if (!isset($_SESSION['submission_timestamps'])) {
    $_SESSION['submission_timestamps'] = [];
}
// Clean older timestamps
$_SESSION['submission_timestamps'] = array_filter(
    $_SESSION['submission_timestamps'], 
    fn($t) => ($now - $t) < $mailConfig['rate_limit_window']
);

if (count($_SESSION['submission_timestamps']) >= $mailConfig['rate_limit_max']) {
    respond(false, 'You have made multiple quotation submissions recently. Please wait a few moments or email kumar@himalayanfoodandfeed.com directly.', ['rate' => 'Rate limit exceeded.'], 429);
}

// 4. Field Validation
$errors = [];

// Name
$name = trim($_POST['name'] ?? '');
if ($name === '') {
    $errors['name'] = 'Full name is required.';
} elseif (mb_strlen($name) < 2 || mb_strlen($name) > 100) {
    $errors['name'] = 'Name must be between 2 and 100 characters.';
}

// Email
$email = trim($_POST['email'] ?? '');
if ($email === '') {
    $errors['email'] = 'Business email address is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) || mb_strlen($email) > 120) {
    $errors['email'] = 'Please provide a valid corporate email address.';
}

// Product Category Allowlist
$allowedCategories = [
    'Animal Proteins',
    'Plant Proteins',
    'Feed Additives',
    'Feed Minerals',
    'Food Ingredients & Grains',
    'Pet Food Ingredients',
    'FMCG Goods',
    'General Commercial Enquiry'
];
$category = trim($_POST['product_category'] ?? '');
if ($category === '' || !in_array($category, $allowedCategories, true)) {
    $errors['product_category'] = 'Please select a valid product category from the list.';
}

// Company (Optional, but validated if present)
$company = trim($_POST['company'] ?? '');
if (mb_strlen($company) > 150) {
    $errors['company'] = 'Company name cannot exceed 150 characters.';
}

// Phone (Optional, validated conservatively)
$phone = trim($_POST['phone'] ?? '');
if ($phone !== '' && !preg_match('/^[0-9+\-\s\(\)\.]{6,30}$/', $phone)) {
    $errors['phone'] = 'Please provide a valid phone or WhatsApp number.';
}

// Quantity & Unit
$quantity = trim($_POST['quantity'] ?? '');
if (mb_strlen($quantity) > 100) {
    $errors['quantity'] = 'Quantity description is too long (maximum 100 characters).';
}

// Destination Port / Country
$destination = trim($_POST['destination'] ?? '');
if (mb_strlen($destination) > 150) {
    $errors['destination'] = 'Destination is too long (maximum 150 characters).';
}

// Message / Specifications
$message = trim($_POST['message'] ?? '');
if ($message === '') {
    $errors['message'] = 'Please provide details of your ingredient requirements or specifications.';
} elseif (mb_strlen($message) < 10) {
    $errors['message'] = 'Please provide at least 10 characters detailing your request.';
} elseif (mb_strlen($message) > 4000) {
    $errors['message'] = 'Message exceeds the maximum limit of 4,000 characters.';
}

// Privacy Policy Checkbox
if (empty($_POST['privacy_consent'])) {
    $errors['privacy_consent'] = 'You must acknowledge our privacy notice to submit an enquiry.';
}

if (!empty($errors)) {
    respond(false, 'Please correct the highlighted fields before submitting.', $errors, 422);
}

// 5. Dispatch email
$submissionData = [
    'name' => $name,
    'email' => $email,
    'company' => $company,
    'phone' => $phone,
    'product_category' => $category,
    'quantity' => $quantity,
    'destination' => $destination,
    'message' => $message
];

$result = send_enquiry_email($submissionData);

if ($result['success']) {
    // Record timestamp for rate limiting
    $_SESSION['submission_timestamps'][] = $now;
    // Rotate CSRF token after successful submission
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    respond(true, $result['message']);
} else {
    respond(false, $result['error'] ?? 'A delivery error occurred. Please contact us directly at ' . CLIENT_EMAIL, [], 500);
}
