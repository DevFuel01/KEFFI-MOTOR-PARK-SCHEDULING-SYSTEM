<?php
require_once 'session.php';
require_once '../conn.php';
require_once '../constants.php';

if (!isset($_GET['reference'])) {
    header("Location: individual.php?page=pay&error=missing_ref");
    exit();
}

$reference = $_GET['reference'];
$email = $_SESSION['email'] ?? '';
$user_id = $_SESSION['user_id'] ?? '';
$paid = $_SESSION['original'] ?? '';
$schedule_id = $_SESSION['schedule'] ?? '';
$number = $_SESSION['no'] ?? '';
$class = $_SESSION['class'] ?? '';
$amount = preg_replace("/[^0-9]/", "", $_SESSION['amount'] ?? '0') . "00"; // Kobo

if (empty($email) || empty($user_id) || empty($paid) || empty($schedule_id)) {
    header("Location: individual.php?page=pay&error=session_missing");
    exit();
}

// Initialize Paystack verification
$pay = curl_init();
curl_setopt_array($pay, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_HTTPHEADER => [
        "accept: application/json",
        "authorization: Bearer $paystack",
        "cache-control: no-cache"
    ],
));

$response = curl_exec($pay);
$err = curl_error($pay);
curl_close($pay);

if ($err || !$response) {
    header("Location: individual.php?page=pay&error=network");
    exit();
}

// Decode the API response
$result = json_decode($response, true);
$data = $result['data'] ?? [];

if (
    isset($data['status']) && 
    $data['status'] === 'success' &&
    ((string)$data['amount'] === $amount || (string)$data['requested_amount'] === $amount)
) {
    $paid_naira = substr($paid, 0, -2); // remove .00
    $ref_upper = strtoupper($reference);
    $date = date("Y-m-d H:i:s");

    // Insert into `payment` table
    $ins = $conn->query("INSERT INTO payment (passenger_id, schedule_id, amount, ref, date) VALUES ('$user_id', '$schedule_id', '$paid_naira', '$ref_upper', '$date')");

    if ($conn->insert_id > 0) {
        $payment_id = $conn->insert_id;
        $code = genCode($schedule_id, $user_id, $class);
        $seat = genSeat($schedule_id, $class, $number);

        $conn->query("INSERT INTO booked (payment_id, schedule_id, user_id, code, class, no, date, seat) VALUES ('$payment_id', '$schedule_id', '$user_id', '$code', '$class', '$number', '$date', '$seat')");

        // Clear sensitive session data
        unset($_SESSION['discount'], $_SESSION['amount'], $_SESSION['original'], $_SESSION['schedule'], $_SESSION['no'], $_SESSION['class']);

        // Set flags
        $_SESSION['pay_success'] = 'true';
        $_SESSION['has_paid'] = 'true';

        // Redirect to success page
        header("Location: individual.php?page=paid&now=true");
        exit();
    }
}

// If verification fails or insert fails
header("Location: individual.php?page=pay&error=payment_failed");
exit();