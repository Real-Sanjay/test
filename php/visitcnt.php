<?php
session_start(); // Start the session

// Check if the visitor count session variable is set
if (!isset($_SESSION['visitor_count'])) {
    $_SESSION['visitor_count'] = 1; // Initialize visitor count to 1
} else {
    $_SESSION['visitor_count']++; // Increment the visitor count
}

echo "<h1>Visitor Count</h1>";
echo "<p>Total number of visitors: {$_SESSION['visitor_count']}</p>";
?>

