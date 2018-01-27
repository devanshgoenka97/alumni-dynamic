<?php
session_start();

if(isset($_SESSION['email'])){
	echo "Already logged in!";
	return;
}

include('connect.php');
$email =  $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='".$email."'";
$result = mysqli_query($conn,$sql);
$res = mysqli_fetch_assoc($result);

if(password_verify($password,$res['password'])){
	$_SESSION['email'] = $email;
	$_SESSION['firstname'] = $res['firstname'];
	echo "Hello, ".$res['firstname'];
}
else{
	echo "Invalid Email/Password";
}
?>