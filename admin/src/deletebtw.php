<?php
include('connect.php');
$id = $_POST['id'];
$lno = $_POST['lno'];
$sql = "DELETE FROM beyondthewall WHERE id=".$id;
$image = dirname(dirname(dirname(__FILE__)))."/img/L".$lno.".JPG";
$result = mysqli_query($conn,$sql);
if($result==true){
	echo "Success";
	unlink($image);
}
else{
	echo "Failure";
}
?>