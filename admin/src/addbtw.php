<?php
include('../connect.php');
$lectureno = $_POST['imageno'];
$speaker = $_POST['speaker'];
$topic = $_POST['topic'];
$date = $_POST['date'];
$text = $_POST['desc'];
$sql = "INSERT INTO beyondthewall VALUES(NULL,'".$lectureno."','".$topic."','".$date."','".$speaker."','".$text."')";
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