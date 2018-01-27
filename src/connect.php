<?php
$servername = "localhost";
$username = "alumni";
$password = "alumni";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . $conn->connect_error);
} 
mysqli_select_db($conn,'alumnicell');
?>