<?php
session_start();

// Dummy credentials for demonstration purposes
$valid_username = "admin";
$valid_password = "password123"; // Weak password

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vulnerability: No rate limiting or account lockout mechanism
    if ($username == $valid_username && $password == $valid_password) {
        // Vulnerability: Session fixation (reusing the same session)
        $_SESSION['user'] = $username;

        // Vulnerability: No secure session handling (missing secure cookie flags)
        echo "Login successful!<br>";
        echo "Welcome, " . $_SESSION['user'];
    } else {
        // Vulnerability: Information disclosure (detailed error messages)
        echo "Invalid username or password.<br>";
    }
}
?>

<form method="POST" action="login.php">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>
