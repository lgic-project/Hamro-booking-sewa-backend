<?php
// bookings.php

session_start();
$user_id = $_SESSION['user_id'];

$conn = new mysqli("localhost", "root", "", "hotel_booking");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT * FROM bookings WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    echo "Booking ID: " . $row['id'] . " - Room ID: " . $row['room_id'] . " - Check-in: " . $row['checkin'] . " - Check-out: " . $row['checkout'] . "<br>";
}

$stmt->close();
$conn->close();
?>
