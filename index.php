<?php
include('db.php');
include('templates/header.php');

// SQL Injection vulnerability
$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = '$id'";
$result = $conn->query($query);

while ($row = $result->fetch_assoc()) {
    // XSS vulnerability
    echo "User: " . $row['username'] . "<br>";
    echo "Email: " . $row['email'] . "<br>";
}
?>
