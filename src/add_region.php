<?php
include('connect.php');
$city=$_POST['city'];
$name=$_POST['name'];
$contact=$_POST['contact'];
$sql = "INSERT INTO region VALUES(NULL,'".$city."','".$name."','".$contact."')";
$res = mysqli_query($conn,$sql);
header("Location: ../index.php");
?>