<?php
$servername = "localhost";
$username = "root";
$password = "alumnicell@1";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . $conn->connect_error);
} 
mysqli_select_db($conn,'alumnicell')
?>