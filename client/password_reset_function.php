<?php
require('connect.php');
session_start();
$ol_pw = ($_POST['ol_password']);
$pw1 = ($_POST['password1']);
$pw2 = ($_POST['password2']);
$email =$_SESSION['email'];

if(isset($_POST['submit_pw_reset'])){
	if(!empty($ol_pw)&&!empty($pw1)&&!empty($pw2))
	{
		if(strlen($pw1) >= 8 && strlen($pw2) >= 8){
		$sql="SELECT * FROM user_signup WHERE Email ='$email';";
		$result=mysqli_query($con, $sql);
		$check=mysqli_num_rows($result);
		$row=mysqli_fetch_assoc($result);
		if($check==true)
		{
		    
 			$password = $row['Password'];
 			$pw_unhash = password_verify($ol_pw,$password);
			
			
			if($pw_unhash)
			{

				if($pw1 == $pw2)
				{
 					$hassh_pw = password_hash($pw1, PASSWORD_DEFAULT);
					
 					$sql1 = "UPDATE user_signup SET Password = '$hassh_pw', Password2 = '$hassh_pw' WHERE Email ='$email';";
 					$result1 = mysqli_query($con, $sql1);
 					if($result1){
 					header('Location: profile.php?profile=setup');
                    
 					}
 					else{
 						header('Location: profile.php?error_Updating');	
                    
					}
				}
				else{
					header('Location: profile.php?two_passwords_mismatch');	
					
				}
			}
			else{
				header('Location: profile.php?password_mismatch');	
				
			}
		}
		else{
 			header('Location: signup.php?please_signup');	

		}
	}
	else{
		//header('Location: profile.php?password_too_short');
        echo strlen($pw1);
        echo ' is the lenght';
	}

	}else{
		header('Location: profile.php?filAllFields');
		
	}
}
?>