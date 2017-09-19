<?php
include('connect.php');
$id = $_POST['id'];
$lno = $_POST['lno'];
$sql = "DELETE FROM iiiprogramme WHERE id=".$id;
$result = mysqli_query($conn,$sql);
$image = dirname(dirname(dirname(__FILE__)))."/img/II".$lno.".JPG";
if($result==true){
	echo "Success";
	unlink($image);
}
else{
	echo "Failure";
}
?>