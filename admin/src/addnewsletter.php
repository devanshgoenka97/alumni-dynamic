<?php
include('connect.php');
$lectureno = $_POST['imageno'];
$date = $_POST['date'];
$text = $_POST['desc'];
$file = $_FILES['img']['tmp_name'];
$filesavepath= dirname(dirname(dirname(__FILE__)))."/static/img/NEWS_".$lectureno.".JPG";
if(is_uploaded_file($file)){
	if(move_uploaded_file($file, $filesavepath)){
	}
	else{
		echo '<script type="text/javascript">alert("Problems in Image Upload");</script>';
	}
}
$sql = "INSERT INTO newsletter VALUES(NULL,'".$lectureno."','".$date."','".$text."')";
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