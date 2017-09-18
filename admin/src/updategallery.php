<?php
include('connect.php');
$id = $_POST['uid'];
$imageno = $_POST['imageno'];
$caption = $_POST['caption'];
$sql = "UPDATE photogallery SET imageno='".$imageno."',caption='".$caption."' WHERE id=".$id;
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