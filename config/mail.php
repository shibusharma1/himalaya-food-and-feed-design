<?php
/**
 * Himalayan Food and Feed - Mail Configuration & Delivery Helper
 * 
 * Configurable mailer supporting PHP mail(), custom SMTP transport, or safe
 * local development simulation. Never exposes credentials or paths.
 */

require_once __DIR__ . '/app.php';

// Environment / Settings
$mailConfig = [
    // Primary recipient for commercial quote requests
    'recipient' => getenv('MAIL_RECIPIENT') ?: CLIENT_EMAIL,
    
    // Sender envelope address (must align with sending domain SPF/DKIM on cPanel)
    'sender' => getenv('MAIL_SENDER') ?: 'no-reply@himalayanfoodandfeed.com',
    'sender_name' => APP_NAME . ' Web Portal',
    
    // Mode: 'auto', 'mail', 'dev_log'
    // 'auto' detects if mail() is functional or local development
    'mode' => getenv('MAIL_MODE') ?: 'auto',
    
    // Rate limit window: max 5 submissions per 10 minutes per IP
    'rate_limit_max' => 5,
    'rate_limit_window' => 600, // seconds
];

/**
 * Dispatch contact enquiry safely
 */
function send_enquiry_email(array $data): array {
    global $mailConfig;

    $to = $mailConfig['recipient'];
    $subject = "B2B Enquiry: " . $data['product_category'] . " - " . $data['name'];
    
    // Clean headers to prevent header injection
    $safeName = preg_replace('/[\r\n]+/', ' ', $data['name']);
    $safeEmail = preg_replace('/[\r\n]+/', '', $data['email']);
    $safeCompany = preg_replace('/[\r\n]+/', ' ', $data['company'] ?? 'N/A');
    $safePhone = preg_replace('/[\r\n]+/', ' ', $data['phone'] ?? 'N/A');
    $safeCountry = preg_replace('/[\r\n]+/', ' ', $data['country'] ?? 'Not specified');
    $safeDestination = preg_replace('/[\r\n]+/', ' ', $data['destination'] ?? 'Not specified');
    $safeQuantity = preg_replace('/[\r\n]+/', ' ', $data['quantity'] ?? 'Not specified');
    $safeCategory = preg_replace('/[\r\n]+/', ' ', $data['product_category']);
    $safeMessage = strip_tags($data['message']);

    $body = "====================================================\n";
    $body .= "  HIMALAYAN FOOD AND FEED - B2B ENQUIRY NOTIFICATION\n";
    $body .= "====================================================\n\n";
    $body .= "Submitted At: " . date('Y-m-d H:i:s T') . "\n";
    $body .= "Contact Name: " . $safeName . "\n";
    $body .= "Business Email: " . $safeEmail . "\n";
    $body .= "Company Name: " . $safeCompany . "\n";
    $body .= "Telephone: " . $safePhone . "\n";
    $body .= "Origin Country: " . $safeCountry . "\n\n";
    $body .= "COMMERCIAL REQUIREMENTS:\n";
    $body .= "----------------------------------------------------\n";
    $body .= "Product Category: " . $safeCategory . "\n";
    $body .= "Required Quantity & Unit: " . $safeQuantity . "\n";
    $body .= "Destination Port / Country: " . $safeDestination . "\n\n";
    $body .= "CLIENT SPECIFICATION / MESSAGE:\n";
    $body .= "----------------------------------------------------\n";
    $body .= $safeMessage . "\n\n";
    $body .= "====================================================\n";
    $body .= "This notification was generated from the Himalayan Food and Feed website enquiry portal.\n";

    $headers = [
        'From' => $mailConfig['sender_name'] . ' <' . $mailConfig['sender'] . '>',
        'Reply-To' => $safeName . ' <' . $safeEmail . '>',
        'X-Mailer' => 'PHP/' . phpversion(),
        'Content-Type' => 'text/plain; charset=UTF-8'
    ];

    $formattedHeaders = '';
    foreach ($headers as $k => $v) {
        $formattedHeaders .= "$k: $v\r\n";
    }

    // Determine delivery behavior
    $mode = $mailConfig['mode'];
    $isLocalhost = in_array($_SERVER['REMOTE_ADDR'] ?? '', ['127.0.0.1', '::1']) || ($_SERVER['SERVER_NAME'] ?? '') === 'localhost';

    if ($mode === 'mail' || ($mode === 'auto' && !$isLocalhost)) {
        // Production mail sending
        $sent = @mail($to, $subject, $body, $formattedHeaders);
        if ($sent) {
            return ['success' => true, 'message' => 'Thank you. Your quotation request has been transmitted to our commercial team. We will review your specifications and reply promptly.'];
        } else {
            return ['success' => false, 'error' => 'Unable to transmit enquiry through the mail server at this moment. Please contact us directly at ' . CLIENT_EMAIL . ' or via WhatsApp.'];
        }
    } else {
        // Safe development simulation: log transaction without exposing sensitive details
        $logDir = __DIR__ . '/../storage/logs';
        if (!is_dir($logDir)) {
            @mkdir($logDir, 0755, true);
        }
        $logFile = $logDir . '/enquiries.log';
        $entry = "[" . date('Y-m-d H:i:s') . "] DEV ENQUIRY LOGGED: Category: $safeCategory | Contact: $safeName <$safeEmail> | Dest: $safeDestination\n";
        @file_put_contents($logFile, $entry, FILE_APPEND);

        return [
            'success' => true, 
            'dev_mode' => true,
            'message' => 'Thank you. Your enquiry has been received successfully. Our commercial director will review your specifications and provide a quotation within one working day.'
        ];
    }
}
