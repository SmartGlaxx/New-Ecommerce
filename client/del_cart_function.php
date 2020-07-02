<?php
require('connect.php');

if(isset($_POST['delete_cart_item'])){
	$id = $_GET['id'];
	$sql = "DELETE FROM cart WHERE Id= '$id';";
	$result = mysqli_query($con, $sql);
	if($result){
		header('Location: my_cart.php?item=deleted');
	}
	else{
		header('Location: my_cart.php?delete=error');
	}
}


?>