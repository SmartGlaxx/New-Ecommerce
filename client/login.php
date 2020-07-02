<?php
require('connect.php');
require('header.php');
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>New E-Commerce</title>
</head>
<body>
	<style>
	    .con{
	        width:500px;
	        margin-left:auto;
	        margin-right:auto;
	    }
		.login{
			column-span: 1/6;
		}
		.signup{
			column-span: 7/12;
		}
		.signup_2{
			display: none;
			margin-top:5vh;
			grid-row:2/3;
			margin-bottom:10vh;
		}
		@media screen and (max-width: 600px)
		{
			.login{column-span: 1/12;}
			.signup_1{display:none;}
			.signup_2{display:block;}
			.con{width:100%;}
		}
		 .bf{
            color:green;
        }
        .bf:hover{
            color:white;
            background-image:linear-gradient(white,green);
        }
	</style>
	<div class = 'con' style=''>
		<div class = 'login' style = ''>
		<h5 style='text-align:center'><i class="fas fa-sign-in-alt"></i>   Login</h5>
			<?php

		$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			if(strpos($fullUrl, "username_or_email=incorrect") == true)
			{
				echo "<div style = 'color:red; font-size:16px' class ='text-center'>Wrong Username or Email. Please try again.</div>";
				
			}
			elseif(strpos($fullUrl, "password=mismatch") == true)
			{
				echo "<div style = 'color:red; font-size:16px' class ='text-center'>Wrong Password. Please try again.</div>";
			}
		?>

			<form method = 'post' action='login_function.php'>
				<label style='margin-left:10%;font-size:12px'>Username or Email <span style='color:red'>*</span></label>
				<input type = 'text' name = 'username_or_email' style='width:80%; margin-left:10%; margin-right:10%; color:#212EDA' class = 'form-control mr-sm-1 mb-1' required max='50'><br>
				<label style='margin-left:10%;font-size:12px'>Password<span style='color:red'>*</span></label>

				<span style='position:relative;overflow:hidden'>
				<input id = 'psw' type = 'password' name = 'password' style='width:80%; margin-left:10%; margin-right:10%;color:#212EDA' class = 'form-control mr-sm-1 mb-1' required min= '10' max='50'>
				<!-- <i id ='seebtn' style='position:absolute; right:0; top:0' class="fas fa-eye"></i> -->
				</span><br>
				
				<input type = 'submit' style ='margin-left:10%;margin-right:10%;  border: 1px solid black; width:80%' name ='submit_login' class='btn bf' value = 'LOG IN'>
			</form>
			<div style='width:80%;margin-left:10%;margin-right:10%;margin-top:10px align-items:center; justify-content:center; text-align:center'>
			<a href = 'login_password_reset.php' style='margin-left:auto;margin-right:auto; color:blue; text-decoration: none:font-weight:bold'>Forgot Your Password?</a></div>
		</div>

		<div class = 'signup_2' style='margin-top:50px; margin-bottom:100px; text-align:center'>Sign Up</h5>
			<p style='text-align:center; font-size:10px; word-break:break-all;width:80%; margin-left:10%; margin-right:10%'>
				Signing up for this website allows you to access your order status and history.
			</p>
			<a href = 'signup.php' class="btn" style='font-size:13px;width:50%;margin-left:25%;margin-right:25%;color:white; background: black'>Sign Up</a>
		</div>

		<div class = 'signup_1' style = 'background: white;height:60vh; margin-top:50px;width:500px; min-width:250px; margin-left:auto; margin-right:auto'>
		<h5 style='text-align:center'>Sign Up</h5>
			<p style='text-align:center; font-size:10px; word-break:break-all;width:80%; margin-left:10%; margin-right:10%'>
				Signing up for this website allows you to access your order status and history.
			</p>
			<a href = 'signup.php' class="btn" style='font-size:13px;width:50%;margin-left:25%;margin-right:25%;color:white; background: black'>Sign Up</a>
		</div>
	</div>
	
</body>
</html>
<?php
require('footer.php');
?>
