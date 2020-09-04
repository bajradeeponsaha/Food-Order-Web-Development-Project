<?php
include 'dbconnect.php';
$oid=$_GET['id'];
$s=$_GET['s'];

$sql="UPDATE `orders` SET status='$s' WHERE id='$oid'";
$qry=mysqli_query($con, $sql);
if($qry){
	header("location: view_order.php");
}else{
	echo mysqli_error($con);
}
?>