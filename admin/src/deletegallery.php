<?php
include('connect.php');
$id = $_POST['id'];
$imageno = $_POST['imageno'];
$sql = "DELETE FROM photogallery WHERE id=".$id;
$result = mysqli_query($conn,$sql);
$image = dirname(dirname(dirname(__FILE__)))."/static/img/IMG_".$imageno.".JPG";
if($result==true){
	echo "Success";
	unlink($image);
}
else{
	echo "Failure";
}
?>