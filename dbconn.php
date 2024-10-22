<?php
session_start();

// Database connection details
$dbservername = "localhost";
$dbusername = "root";            // Default MySQL username for XAMPP
$dbpassword = "your_password";   // Add your MySQL password here, or leave it as '' if there is no password

// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword);

// Check connection
if (!$conn) {
    echo "Connected unsuccessfully";
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}
?>
