<?php
require('connect.php');
session_start();

$id = $_GET['id'];
if(isset($_GET['del_1'])){
	$sql = "SELECT * FROM products WHERE Id ='$id';";
	$result = mysqli_query($con, $sql);
	$check = mysqli_num_rows($result);

	if($check==true){
		$sql1 = "DELETE FROM products WHERE Id ='$id';";
		mysqli_query($con, $sql1);
		header('location: admin.php?item_deleted');
	}
}
else if(isset($_GET['del_2'])){
	$sql2 = "SELECT * FROM orders WHERE Id ='$id';";
	$result2 = mysqli_query($con, $sql2);
	$check2 = mysqli_num_rows($result2);

	if($check2==true){
		$sql3 = "DELETE FROM orders WHERE Id ='$id';";
		mysqli_query($con, $sql3);
		header('location: orders.php?order_deleted');
	}
}
?>