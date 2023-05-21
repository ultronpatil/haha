<?php
// Start the session
session_start();

// Store a value in the session
$_SESSION['username'] = 'John Doe';

// Retrieve the value from the session
$username = $_SESSION['username'];

// Display the retrieved value
echo "Username: " . $username;

// Destroy the session
session_destroy();
?>
