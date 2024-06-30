<?php
// registration.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $conn = new mysqli("localhost", "root", "", "hotel_booking");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<form method="post" action="registration.php">
    <label>Username:</label>
    <input type="text" name="username" required>
    <label>Email:</label>
    <input type="email" name="email" required>
    <label>Password:</label>
    <input type="password" name="password" required>
    <input type="submit" value="Register">
</form>
