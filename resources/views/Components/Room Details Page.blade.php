<?php
// room.php

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $room_id = $_GET['id'];

    $conn = new mysqli("localhost", "root", "", "hotel_booking");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT * FROM rooms WHERE id = ?");
    $stmt->bind_param("i", $room_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $room = $result->fetch_assoc();

    echo "Room Number: " . $room['room_number'] . "<br>";
    echo "Type: " . $room['type'] . "<br>";
    echo "Description: " . $room['description'] . "<br>";
    echo "Price: $" . $room['price'] . " per night";

    $stmt->close();
    $conn->close();
}
?>
