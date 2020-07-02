<?php
require('connect.php');
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	if(isset($_POST['submit_setup_profile']))
	{
		
		$first_name = mysqli_real_escape_string($con,$_POST['first_name']);
		$last_name = mysqli_real_escape_string($con,$_POST['last_name']);
		$user_name =mysqli_real_escape_string($con,$_POST['user_name']);
		

		if(!preg_match("/^[a-z A-Z]*$/", $first_name) || !preg_match("/^[a-z A-Z]*$/", $last_name) || !preg_match("/^[a-z A-Z]*$/", $user_name) ){
            header('location: profile.php?input_error');
            
		}
		else{
		    
				$email = $_SESSION['email'];
				$sql = "SELECT * FROM user_signup WHERE Email ='$email';";
				$result = mysqli_query($con, $sql);
				$check = mysqli_num_rows($result);
					if($check==true){
					
							$sql = "UPDATE user_signup SET First_name = '$first_name', Last_name = '$last_name', User_name = '$user_name' WHERE Email = '$email';";
							mysqli_query($con, $sql);

			                $_SESSION['first_name'] = $first_name;
			                $_SESSION['last_name'] = $last_name;
			                $_SESSION['username'] = $user_name;
                
							header('location: profile.php?profile=setup');
							
						
					}
			
		}
	}
	else{
		header('location: profile.php?profile_update=an_error');
	}
}
?>
