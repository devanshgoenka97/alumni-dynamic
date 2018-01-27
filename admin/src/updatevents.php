<?php
include('connect.php');
$id = $_POST['id'];
$dd = $_POST['dd'];
$mm = $_POST['mm'];
$yy = $_POST['yy'];
$text = $_POST['desc'];
$sql = "UPDATE upcomingevents SET dd='".$dd."',mm='".$mm."',yyyy='".$yy."', text='".$text."' WHERE id=".$id;
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