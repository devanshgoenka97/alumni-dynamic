<?php
include('connect.php');
$id = $_POST['id'];
$sql = "DELETE FROM beyondthewall WHERE id=".$id;
$result = mysqli_query($conn,$sql);
if($result==true){
	echo "Success";
}
else{
	echo "Failure";
}
?>