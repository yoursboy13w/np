<?php
session_start();

$host = 'localhost'; // Change this if your database is hosted elsewhere
$user = 'root'; // Your database username
$password = ''; // Your database password
$database = 'np'; // Replace with your database name

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>