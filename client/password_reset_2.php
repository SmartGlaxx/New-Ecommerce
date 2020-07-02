<?php
require('connect.php');
require('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>New E-Commerce</title>
</head>
<body>
	<div class='container' style='margin-top:10vh'>
			  <?php

        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            
            if(strpos($fullUrl, "error_Updating") == true)
            {
                echo "<div style = 'color:red; font-size:16px' class ='text-center'>We Encountered An Error While Fetching Your Data. Please try again</div>";
            }
             else if(strpos($fullUrl, "two_passwords_mismatch") == true)
            {
                echo "<div style = 'color:red; font-size:16px' class ='text-center'>Your Two Passwords Do Not Match. Please try again</div>";
            }
            else if(strpos($fullUrl, "please_signup") == true)
            {
                echo "<div style = 'color:red; font-size:16px' class ='text-center'>Your Email Could Not Be Verified. Please <a href='signup.php' style='color:#2233DD; text-decoration:none'>Sign up</a></div>";
            }
             else if(strpos($fullUrl, "password_too_short") == true)
            {
                echo "<div style = 'color:red; font-size:16px' class ='text-center'>Please Use A Minimum of 8 Alphabets, Numbers or Characters for Your Password</div>";
            }

        ?>

		<form method='post' action='password_reset_function_2.php'>
		<div style='border:1px solid #FFE199; margin-top:20px; padding:20px; margin-bottom:20px'>
			<div style='font-size:15px;margin-left:10%;'>RESET PASSWORD</div>
			<label style='font-size:10px;margin-left:10%;'>Email<span style='color:red'>*</span></label><br>
			<input type="email" name="email" style='width:80%;margin-left:10%;margin-right:10%'required><br>
			<label style='font-size:10px;margin-left:10%;'>New Password<span style='color:red'>*</span></label><br>
			<input type="password" name="password1" style='width:80%;margin-left:10%;margin-right:10%' required><br>
			<label style='font-size:10px;margin-left:10%;'>Comfirm Password<span style='color:red'>*</span></label><br>
			<input type="password" name="password2" style='width:80%;margin-left:10%;margin-right:10%' required><br>
			<button type='submit' class='mt-2 mb-2 w-50 c_dete'style='margin-left:25%;margin-right:25%' name='submit_pw_reset'>RESET PASSWORD</button>
		</div>
	</form>
	</div>
</body>
</html>

<?php
require('footer.php');
?>