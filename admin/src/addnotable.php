<?php
include('../connect.php');
$imageno = $_POST['imageno'];
$name = $_POST['name'];
$text = $_POST['desc'];
$sql = "INSERT INTO notablealumni VALUES(NULL,'".$imageno."','".$name."','".$text."')";
$res = mysqli_query($conn,$sql);
if($res==true){
	echo '<script type="text/javascript">alert("Success");</script>';
	header('Location:../adminhome.php');
}
else{
	echo '<script type="text/javascript">alert("Failure");</script>';
	header('Location:../adminhome.php');
}
?>