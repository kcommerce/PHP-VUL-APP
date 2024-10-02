<?php
session_start();

if (!isset($_SESSION['user'])) {
    echo "You must be logged in to view this page.";
    exit();
}

// Vulnerability: No access control check for admin role
echo "Welcome to the Admin Page, " . $_SESSION['user'] . "!<br>";
echo "Only admins should be able to see this page.";
?>
