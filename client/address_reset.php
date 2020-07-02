<?php
require('connect.php');
session_start();

$username = $_SESSION['username'];
if(isset($_POST['submit_add_change'])){
	if(!empty($_POST['new_add_1']) && !empty($_POST['new_add_2'])){
		$add_1 =  $_POST['new_add_1'];
		$add_2 = $_POST['new_add_2'];
		$all_add = $add_1 .', ' . $add_2;
	
		$sql = "UPDATE user_signup SET Address = '$all_add' WHERE User_name = '$username';";
		mysqli_query($con, $sql);

		header('Location: profile.php?address=changed');
	}else if(!empty($_POST['new_add_1'])){
		$add_1 =  $_POST['new_add_1'];

		$sql1 = "UPDATE user_signup SET Address = '$add_1';";
		mysqli_query($con, $sql1);

		header('Location: profile.php?address=changed');
	}
}
else if(isset($_POST['submit_addesss'])){
	if(!empty($_POST['address']) && !empty($_POST['address2']) && !empty($_POST['address3'])){
		$address = $_POST['address'] .', '. $_POST['address2'].', '. $_POST['address3'];}
	else if(!empty($_POST['address']) && !empty($_POST['address2']) && empty($_POST['address3'])){
		$address = $_POST['address'] .', '. $_POST['address2'];}
	else if(!empty($_POST['address']) && empty($_POST['address2']) && empty($_POST['address3'])){
		$address = $_POST['address'];}
	$sql2 = "UPDATE user_signup SET Address ='$address' WHERE User_name	='$username';";
	mysqli_query($con, $sql2);

	header('Location: profile.php?address=setup');
	
}
?>