<?php

$mysqli = new mysqli("localhost", "username", "password", "database_name");


if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}


if(isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

  
    $check_query = "SELECT * FROM users WHERE username='$username'";
    $result = $mysqli->query($check_query);
    if($result->num_rows > 0) {
        echo "Username already exists.";
    } else {
   
        $insert_query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if ($mysqli->query($insert_query) === TRUE) {
            echo "Signup successful.";
        } else {
            echo "Error: " . $mysqli->error;
        }
    }
}


if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $login_query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $mysqli->query($login_query);
    if($result->num_rows > 0) {
        echo "Login successful.";
    } else {
        echo "Invalid username or password.";
    }
}

$mysqli->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login and Signup</title>
</head>
<body>
    <h2>Signup</h2>
    <form method="post" action="">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="signup" value="Signup">
    </form>

    <h2>Login</h2>
    <form method="post" action="">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
