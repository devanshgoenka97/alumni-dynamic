<?php
include('connect.php');
$id = $_POST['uid'];
$lectureno = $_POST['imageno'];
$date = $_POST['date'];
$text = $_POST['desc'];
$sql = "UPDATE newsletter SET lectureno='".$lectureno."',content='".$text."',date='".$date."' WHERE id=".$id;
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