<?php
include('../connect.php');
$dd = $_POST['dd'];
$mm = $_POST['mm'];
$yy = $_POST['yy'];
$text = $_POST['desc'];
$sql = "INSERT INTO upcomingevents VALUES(NULL,'".$dd."','".$mm."','".$yy."','".$text."')";
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