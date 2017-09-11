<?php
include('connect.php');
$email =  $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='".$email."'";
$result = mysqli_query($conn,$sql);
$res = mysqli_fetch_assoc($result);

if(password_verify($password,$res['password'])){
	echo "Welcome ".$res['firstname']."!";
	return;
}
else{
	echo "Invalid Email/Password";
}
?>