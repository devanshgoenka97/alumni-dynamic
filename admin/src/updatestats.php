<?php
include('connect.php');
$id = $_POST['id'];
$year = $_POST['year'];
$btech = $_POST['btech'];
$mtech = $_POST['mtech'];
$others = $_POST['others'];
$phd = $_POST['phd'];
$sql = "UPDATE stats SET year='".$year."',btech='".$btech."',mtech='".$mtech."', others='".$others."', phd='".$phd."' WHERE id=".$id;
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