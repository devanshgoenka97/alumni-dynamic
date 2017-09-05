<?php
session_start();
$username = $_POST['id'];
$password = $_POST['pwd'];
if($username=='admin' && $password=='admin123'){
	$_SESSION['admin']=1;
    header('Location: adminhome.php');
}
else{
    header('Location: logout.php');
}
?>