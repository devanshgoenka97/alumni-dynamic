<?php
include('connect.php');
$id = $_POST['identifier'];
$content = $_POST['content'];
$sql = "INSERT INTO general VALUES(NULL,'".$id."','".$content."')";
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