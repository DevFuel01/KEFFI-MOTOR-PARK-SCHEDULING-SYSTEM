<?php
ob_start(); // Prevents header errors

require_once 'session.php';
require_once '../constants.php';

// Make sure session has the needed values
if (!isset($_SESSION['amount'], $_SESSION['email'])) {
    @session_destroy();
    header("Location: ../");
    exit;
}

// Clean and prepare the variables
$email = $_SESSION['email'];
$amount = preg_replace("/[^0-9]/", "", $_SESSION['amount']) . "00"; // Convert to kobo

// Initialize cURL request
$pay = curl_init();
curl_setopt_array($pay, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode([
        'amount' => $amount,
        'email' => $email,
        'callback_url' => 'http://localhost/Transport/pro/verify.php', // ✅ Replace with your real domain/route
    ]),
    CURLOPT_HTTPHEADER => [
        "Authorization: Bearer $paystack", // Your secret key
        "Content-Type: application/json",
        "Cache-Control: no-cache"
    ],
));

// Execute cURL request
$response = curl_exec($pay);
$err = curl_error($pay);
curl_close($pay);

// Handle cURL error
if ($err) {
    header("Location: individual.php?page=pay&error=payment&access=0");
    exit();
}

// Decode the response
$tranx = json_decode($response);

// Handle API error
if (!$tranx || !$tranx->status || empty($tranx->data->authorization_url)) {
    header("Location: individual.php?page=pay&error=payment&access=1");
    exit();
}

// Redirect user to Paystack payment page
header('Location: ' . $tranx->data->authorization_url);
exit;

ob_end_flush();