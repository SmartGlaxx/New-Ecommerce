<?php
require('connect.php');
session_start();



if(isset($_GET['heart'])){
	if(isset($_SESSION['username'])){
	$id = $_GET['id'];
	$name = $_GET['name'];
	$code = $_GET['code'];
	$image = $_GET['image'];
	$price = $_GET['price'];
	$username = $_SESSION['username'];

	$name = str_replace("'", "`", $name);

	$sql = "SELECT * FROM favorite WHERE User_name = '$username' AND Code ='$code';";
	$result = mysqli_query($con, $sql);
	$check=mysqli_num_rows($result);
	$row = mysqli_fetch_assoc($result);
	if($check==true)//if item exists
	{
		if($row['Status']==0)// if removed status 
		{
			$sql ="UPDATE favorite SET Status ='1' WHERE User_name = '$username' AND Code ='$code';";
			mysqli_query($con, $sql);//add it here

			header('Location: product_description.php?item_readded&&id='.$id);
		}else if($row['Status']==1){
			$sql ="UPDATE favorite SET Status ='0' WHERE User_name = '$username' AND Code ='$code';";
			mysqli_query($con, $sql);//remove it here

			header('Location: product_description.php?item_removed&&id='.$id);
			
		}
	}else // if not yet added 
	{
		// $name = str_replace("'", "`", $name);
		// echo $name;
		$sql ="INSERT INTO favorite (User_name, Name, Image, Price, Code, Status) VALUES('$username','$name','$image','$price','$code',1);";
		mysqli_query($con, $sql); // add it here

		header('Location: product_description.php?item_addedd&&id='.$id);
	}
	}
}

?>