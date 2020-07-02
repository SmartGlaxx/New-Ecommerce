<?php
require('connect.php');
session_start();
// $ol_pw = ($_POST['ol_password']);
$pw1 = ($_POST['password1']);
$pw2 = ($_POST['password2']);
$email =$_POST['email'];

if(isset($_POST['submit_pw_reset'])){
	
	if(!empty($email)&&!empty($pw1)&&!empty($pw2))
	{
		if(strlen($pw1)>7 && strlen($pw2)>7){
		$sql="SELECT * FROM user_signup WHERE Email ='$email';";
		$result=mysqli_query($con, $sql);
		$check=mysqli_num_rows($result);
		$row=mysqli_fetch_assoc($result);
		if($check==true)
		{
			
			if($pw1 == $pw2)
			{

			$hassh_pw = password_hash($pw1, PASSWORD_DEFAULT);
			
			$sql1 = "UPDATE user_signup SET Password = '$hassh_pw', Password2 = '$hassh_pw' WHERE Email ='$email';";
			$result1 = mysqli_query($con, $sql1);
			if($result1){
			header('Location: login.php?password=reset');
			}
			else{
				
				header('Location: password_reset_2.php?error_Updating');	
			}

			}
			else{
				header('Location: password_reset_2.php?two_passwords_mismatch');	
			}
		}
		else{
			header('Location: password_reset_2.php?please_signup');	
		}
	}
	else{
		header('Location: password_reset_2.php?password_too_short');	
	}

	}else{
		header('Location: password_reset_2.php?filAllFields');
	}
}
?>