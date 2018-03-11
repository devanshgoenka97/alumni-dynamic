<?php
include('connect.php');
$id = $_POST['id'];
$lno = $_POST['ino'];
$sql = "DELETE FROM notablealumni WHERE id=".$id;
$image = dirname(dirname(dirname(__FILE__)))."/static/img/NOTABLE_".$lno.".JPG";
$result = mysqli_query($conn,$sql);
if($result==true){
	echo "Success";
	unlink($image);
}
else{
	echo "Failure";
}
?>