<?php
// admin_rooms.php

$conn = new mysqli("localhost", "root", "", "hotel_booking");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM rooms");

while ($row = $result->fetch_assoc()) {
    echo "Room ID: " . $row['id'] . " - Room Number: " . $row['room_number'] . " - Type: " . $row['type'] . "<br>";
    // Add edit and delete buttons for each room if needed
}

$conn->close();
?>
