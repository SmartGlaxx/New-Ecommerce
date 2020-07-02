<?php
require('connect.php');

if(isset($_POST['delete_order_item'])){
	$id = $_GET['id'];
	$sql = "DELETE FROM orders WHERE Id= '$id';";
	$result = mysqli_query($con, $sql);
	if($result){
		header('Location: profile.php?item=deleted');
	}
	else{
		header('Location: profile.php?delete=error');
	}
}
if(isset($_POST['delete_fav_item'])){
	$id = $_GET['id'];
	$sql1 = "DELETE FROM favorite WHERE Id= '$id';";
	$result1 = mysqli_query($con, $sql1);
	if($result1){
		header('Location: profile.php?fav=deleted');
	}
	else{
		header('Location: profile.php?fav=error2');
	}

}


?>