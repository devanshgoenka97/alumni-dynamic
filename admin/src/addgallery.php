<?php
include('../connect.php');
$imageno = $_POST['imageno'];
$caption = $_POST['caption'];
$sql = "INSERT INTO photogallery VALUES(NULL,'".$imageno."','".$caption."')";
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