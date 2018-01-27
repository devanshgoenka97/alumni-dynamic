<?php
include('connect.php');
$id = $_POST['uid'];
$imageno = $_POST['imageno'];
$name = $_POST['name'];
$text = $_POST['desc'];
$sql = "UPDATE notablealumni SET imageno='".$imageno."',name='".$name."',description='".$text."' WHERE id=".$id;
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