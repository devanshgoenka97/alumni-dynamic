<?php
include('connect.php');
$id = $_POST['uid'];
$lectureno = $_POST['imageno'];
$speaker = $_POST['speaker'];
$topic = $_POST['topic'];
$date = $_POST['date'];
$text = $_POST['desc'];
$sql = "UPDATE iiiprogramme SET lectureno='".$lectureno."',speaker='".$speaker."',content='".$text."',topic='".$topic."',date='".$date."' WHERE id=".$id;
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