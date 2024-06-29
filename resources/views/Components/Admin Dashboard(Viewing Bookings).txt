<?php
// admin.php

$conn = new mysqli("localhost", "root", "", "hotel_booking");
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM bookings");

while ($row = $result->fetch_assoc()) {
    echo "Booking ID: " . $row['id'] . " - Room ID: " . $row['room_id'] . " - Check-in: " . $row['checkin'] . " - Check-out: " . $row['checkout'] . "<br>";
}

$conn->close();
?>
