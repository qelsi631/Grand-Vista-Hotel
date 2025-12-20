<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require "config.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo "Invalid request";
    exit;
}

$guestName = trim($_POST["guestName"] ?? "");
$email = trim($_POST["email"] ?? "");
$phone = trim($_POST["phone"] ?? "");
$guests = (int)($_POST["guests"] ?? 1);
$checkIn = $_POST["checkIn"] ?? "";
$checkOut = $_POST["checkOut"] ?? "";
$roomType = $_POST["roomType"] ?? "";
$specialRequests = trim($_POST["specialRequests"] ?? "");

if (
    empty($guestName) ||
    empty($email) ||
    empty($phone) ||
    empty($checkIn) ||
    empty($checkOut) ||
    empty($roomType)
) {
    echo "Please fill all required fields";
    exit;
}

if ($checkIn >= $checkOut) {
    echo "Invalid dates";
    exit;
}

$stmt = $conn->prepare("
    INSERT INTO reservations 
    (guest_name, email, phone, guests, check_in, check_out, room_type, special_requests)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)
");

$stmt->bind_param(
    "sssissss",
    $guestName,
    $email,
    $phone,
    $guests,
    $checkIn,
    $checkOut,
    $roomType,
    $specialRequests
);

if ($stmt->execute()) {
    echo "success";
} else {
    echo "Database error";
}

$stmt->close();
$conn->close();
