<?php
include('../connect.php');
$id = $_POST['uid'];
$content = $_POST['content'];
$sql = "UPDATE general SET content='".$content."' WHERE id=".$id;
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