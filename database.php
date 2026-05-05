<?php
$servername = "localhost";
$username = "root"; // Default username for phpMyAdmin in XAMPP/WAMP
$password = ""; // Default password is empty for phpMyAdmin in XAMPP/WAMP
$dbname = "schoolnew";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
