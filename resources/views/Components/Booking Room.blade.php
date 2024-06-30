<?php
// book.php

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $room_id = $_POST['room_id'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $user_id = $_SESSION['user_id'];

    $conn = new mysqli("localhost", "root", "", "hotel_booking");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO bookings (user_id, room_id, checkin, checkout) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiss", $user_id, $room_id, $checkin, $checkout);

    if ($stmt->execute()) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<form method="post" action="book.php">
    <label>Room ID:</label>
    <input type="text" name="room_id" required>
    <label>Check-in:</label>
    <input type="date" name="checkin" required>
    <label>Check-out:</label>
    <input type="date" name="checkout" required>
    <input type="submit" value="Book">
</form>
