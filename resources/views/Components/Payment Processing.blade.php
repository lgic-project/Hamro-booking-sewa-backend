<?php
// payment.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $booking_id = $_POST['booking_id'];
    $amount = $_POST['amount'];
    $card_number = $_POST['card_number'];
    $expiry_date = $_POST['expiry_date'];
    $cvv = $_POST['cvv'];

    $conn = new mysqli("localhost", "root", "", "hotel_booking");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO payments (booking_id, amount, card_number, expiry_date, cvv) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("iisss", $booking_id, $amount, $card_number, $expiry_date, $cvv);

    if ($stmt->execute()) {
        echo "Payment successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<form method="post" action="payment.php">
    <label>Booking ID:</label>
    <input type="text" name="booking_id" required>
    <label>Amount:</label>
    <input type="text" name="amount" required>
    <label>Card Number:</label>
    <input type="text" name="card_number" required>
    <label>Expiry Date:</label>
    <input type="text" name="expiry_date" required>
    <label>CVV:</label>
    <input type="text" name="cvv" required>
    <input type="submit" value="Pay">
</form>
