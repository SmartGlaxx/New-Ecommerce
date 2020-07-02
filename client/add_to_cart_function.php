<?php
require('connect.php');
session_start();
$id = $_GET['id'];
if(isset($_POST['submit_to_cart'])){

if(isset($_GET['id'])){

if(isset($_SESSION['username'])){
	$username= $_SESSION['username'];
	$name= $_GET['name'];
	$code =$_GET['code'];
	$size =$_POST['size'];
	$color =$_POST['color'];
	$image =$_GET['img'];
	$quantity= $_POST['quantity'];
	$price= $_GET['price'];

	$name = str_replace("'", "`", $name);

	if(!empty($_GET['name']) && !empty($_POST['quantity']) && !empty($_POST['size']) && !empty($_POST['color'])){
		if($_POST['size']!='Select' && $_POST['color']!='Select'){
		$sql = "SELECT * FROM cart WHERE User_name ='$username' AND Code ='$code';";
		$result = mysqli_query($con, $sql);
		$check = mysqli_num_rows($result);
		if($check ==true){
			$row = mysqli_fetch_assoc($result);
			$qty = $row['Quantity'];
			$qtyTotal = $qty + $quantity;
			$sql1 = "UPDATE cart SET Quantity= '$qtyTotal' WHERE User_name ='$username' AND Code ='$code';";
			$result1 = mysqli_query($con, $sql1);
			header('Location: product_description.php?id='.$id);
		}
		else {
			$sql ="INSERT IGNORE INTO cart (User_name,Name,Code,Size,Color,Image,Quantity,Price) VALUES('$username','$name','$code','$size','$color','$image','$quantity','$price');";
			$result = mysqli_query($con,$sql);
			header('Location: product_description.php?id='.$id);
		}

	}else{
		header("Location: product_description.php?id=$id&&please_select_option");
	}

	}
	else{
		header("Location: product_description.php?id=$id&&inputs=incomplete");
	}
}
else{
	header("Location: product_description.php?id=$id&&user=not_signedin");
}
}
else{
	header('Location: index.php?error_loading_page');
}
}

else{
	header('Location: index.php?error_loading_page');	
}
?>