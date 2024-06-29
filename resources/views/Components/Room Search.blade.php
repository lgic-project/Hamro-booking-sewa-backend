<?php
// search.php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $checkin = $_GET['checkin'];
    $checkout = $_GET['checkout'];

    $conn = new mysqli("localhost", "root", "", "hotel_booking");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT * FROM rooms WHERE id NOT IN (SELECT room_id FROM bookings WHERE (checkin <= ? AND checkout >= ?))");
    $stmt->bind_param("ss", $checkout, $checkin);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        echo "Room: " . $row['room_number'] . " - " . $row['type'] . "<br>";
    }

    $stmt->close();
    $conn->close();
}
?>

<form method="get" action="search.php">
    <label>Check-in:</label>
    <input type="date" name="checkin" required>
    <label>Check-out:</label>
    <input type="date" name="checkout" required>
    <input type="submit" value="Search">
</form>
