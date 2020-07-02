<?php
require('connect.php');
require('header.php');
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>New E-Commerce</title>
</head>
<body style='width:100%; background:red'>
    <style>
        .bf{
            color:green;
        }
        .bf:hover{
            color:white;
            background-image:linear-gradient(white,green);
        }
    </style>
	<div class = 'row' style='margin-bottom:100px; width: 100%'>
		<div class = 'col-sm-6 col-md-6 col-lg-6' style = 'background: white;'>
		<h5 style='text-align:center'><i class='far fa-user'></i>   Register</h5>
		<?php

	$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		if(strpos($fullUrl, "signup=successfully") == true)
		{
			echo "<div style = 'color:green; font-size:16px' class ='text-center'>An email has been sent to you. <br>Pleae check your mail box for your login details and instructions for completing your registeration.</div>";
		}
		elseif(strpos($fullUrl, "signup=emailUnavailable") == true)
		{
			echo "<div style = 'color:red; font-size:16px' class ='text-center'>Email Already Registered. Please <a href='login.php' style='text-decoration:none; color:#223399'> Log in.</a></div>";
		}
		elseif(strpos($fullUrl, "signup=tryAgain") == true)
		{
			echo "<div style = 'color:red; font-size:16px' class ='text-center'>We encountered an error while sending your email. Please try again.</div>";
		}
		elseif(strpos($fullUrl, "signup=fillAllField") == true)
		{
			echo "<div style = 'color:red; font-size:16px' class ='text-center'>Please Fill All Required Fields.</div>";
		}
	?>
			<form method ='post' action='signup_function.php'>
				<!--<label style='margin-left:10%;font-size:12px'>First Name<span style='color:red'>*</span></label>-->
				<!--<input type = 'text' name = 'first_name' style='width:80%; margin-left:10%; margin-right:10%; color:#212EDA' class = 'form-control mr-sm-1 mb-1' required max='50'><br>-->
				<!--<label style='margin-left:10%;font-size:12px'>Last Name<span style='color:red'>*</span></label>-->
				<!--<input type = 'text' name = 'last_name' style='width:80%; margin-left:10%; margin-right:10%; color:#212EDA' class = 'form-control mr-sm-1 mb-1' required max='50'><br>-->
				<!--<label style='margin-left:10%;font-size:12px'>User Name<span style='color:red'>*</span></label>-->
				<!--<input type = 'text' name = 'username' style='width:80%; margin-left:10%; margin-right:10%; color:#212EDA' class = 'form-control mr-sm-1 mb-1' required max='50'><br>-->
				<label style='margin-left:10%;font-size:12px'>Email<span style='color:red'>*</span></label>
				<input type = 'email' name = 'email' style='width:80%; margin-left:10%; margin-right:10%; color:#212EDA' class = 'form-control mr-sm-1 mb-1' required max='50'><br>
				<!--<label style='margin-left:10%;font-size:12px'>Password<span style='color:red'>*</span></label>-->
				<!--<input type = 'password' name = 'password' style='width:80%; margin-left:10%; margin-right:10%; color:#212EDA' class = 'form-control mr-sm-1 mb-1' required max='50'><br>-->
				<!--<label style='margin-left:10%;font-size:12px'>Password2<span style='color:red'>*</span></label>-->
				<!--<input type = 'password' name = 'password2' style='width:80%; margin-left:10%; margin-right:10%; color:#212EDA' class = 'form-control mr-sm-1 mb-1' required max='50'><br>-->
				<input type = 'submit' style ='margin-left:10%;margin-right:10%;   border: 1px solid black; width:80%' name ='submit_signup' class='btn bf' value = 'SIGN UP' min ='10' max = '50'>
			</form>

		</div>
		<div class = 'col-sm-6 col-md-6 col-lg-6' style = 'background: white;height:auto; margin-top:50px'>
		<h5 style='text-align:center'>Login</h5>
			<p style='text-align:center; font-size:10px; word-break:break-all;width:80%; margin-left:10%; margin-right:10%'>
				Signing up for this website allows you to access your order status and history.
			</p>
			<a href ='login.php' class="btn" style='font-size:13px;width:50%;margin-left:25%;margin-right:25%;color:white; background: black'>LOGIN </a>
		</div>
	</div>

</body>
</html>
<?php
require('footer.php');
?>

