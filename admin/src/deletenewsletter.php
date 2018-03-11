<?php
include('connect.php');
$id = $_POST['id'];
$lno = $_POST['lno'];
$sql = "DELETE FROM newsletter WHERE id=".$id;
$image = dirname(dirname(dirname(__FILE__)))."/static/img/NEWS_".$lno.".JPG";
$result = mysqli_query($conn,$sql);
if($result==true){
	echo "Success";
	unlink($image);
}
else{
	echo "Failure";
}
?>