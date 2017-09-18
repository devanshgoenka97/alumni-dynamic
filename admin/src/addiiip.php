<?php
include('connect.php');
$lectureno = $_POST['imageno'];
$speaker = $_POST['speaker'];
$topic = $_POST['topic'];
$date = $_POST['date'];
$text = $_POST['desc'];
$file = $_FILES['img']['tmp_name'];
$filesavepath= "/var/www/html/alumni-dynamic/img/II".$lectureno.".JPG";
if(is_uploaded_file($file)){
	if(move_uploaded_file($file, $filesavepath)){
	}
	else{
		echo '<script type="text/javascript">alert("Problems in Image Upload");</script>';
	}
}
$sql = "INSERT INTO iiiprogramme VALUES(NULL,'".$lectureno."','".$topic."','".$date."','".$speaker."','".$text."')";
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