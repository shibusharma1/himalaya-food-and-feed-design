<?php
// Test script for contact-submit handler
$_SERVER['REQUEST_METHOD'] = 'POST';
$_SERVER['HTTP_X_REQUESTED_WITH'] = 'xmlhttprequest';
$_SERVER['REMOTE_ADDR'] = '127.0.0.1';

// Initialize session first
require_once __DIR__ . '/../config/app.php';

$_SESSION['csrf_token'] = 'validtoken123';
$_POST = [
    'csrf_token' => 'validtoken123',
    'name' => 'B2B Trade Buyer',
    'email' => 'buyer@feedmill-group.dk',
    'company' => 'Nordic Feed Mill Group',
    'phone' => '+45 55 12 34 56',
    'product_category' => 'Animal Proteins',
    'quantity' => '100 Metric Tons',
    'destination' => 'CIF Port of Aarhus',
    'message' => 'Please provide current specification parameters and quote for poultry by-product meal low ash grade.',
    'privacy_consent' => '1'
];

ob_start();
require __DIR__ . '/../handlers/contact-submit.php';
$out2 = ob_get_clean();
echo "Test 2 (Valid Submission): " . $out2 . "\n";
