<?php
// profile.php

session_start();
$user_id = $_SESSION['user_id'];

$conn = new mysqli("localhost", "root", "", "hotel_booking");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT username, email FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

echo "Username: " . $user['username'] . "<br>";
echo "Email: " . $user['email'];

$stmt->close();
$conn->close();
?>
