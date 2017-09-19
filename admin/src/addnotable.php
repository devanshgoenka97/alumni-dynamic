<?php
include('connect.php');
$imageno = $_POST['imageno'];
$name = $_POST['name'];
$text = $_POST['desc'];
$file = $_FILES['img']['tmp_name'];
$$filesavepath= dirname(dirname(dirname(__FILE__)))."/img/NOTABLE_".$imageno.".JPG";
if(is_uploaded_file($file)){
	if(move_uploaded_file($file, $filesavepath)){
	}
	else{
		echo '<script type="text/javascript">alert("Problems in Image Upload");</script>';
	}
}
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