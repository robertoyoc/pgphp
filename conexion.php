<?php
$servername = "localhost";
$username = "phpyoc";
$password = "phpyoc";
$db = "phpyoc";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
