<?php
session_start();

// Vulnerability: Incomplete session termination
unset($_SESSION['user']); // Only unsets the 'user' session variable

// Vulnerability: Session ID is not invalidated
echo "You have been logged out.";
?>
