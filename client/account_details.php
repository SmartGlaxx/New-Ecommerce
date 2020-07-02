<?php
require('connect.php');
session_start();
$firstname = $_SESSION['first_name'];
$lastname = $_SESSION['last_name'];
$username = $_SESSION['username'];
$email = $_SESSION['email'];
?>
<style>
	.c_dete{
		color:white;
		background: orange;
	}
	.c_dete:hover{
		color:white;
		background: red;
	}
	.c_data{
		color:white;
		background: green;
	}
	.c_data a{
		color:white;
		background: green;
	}
	.c_data a:hover{
		color:white;
		background: darkgreen;
	}
	@media screen and (max-width:500px){
		.dd{margin-top:30px;}
	}
</style>
<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
	<div class='dd container text-center py-2' style='border:2px solid lightgreen; width:100%; font-size:12px'>ACCOUNT DETAILS</div>
	<div class='container 'style='border:1px solid #477A92; '>
	<form method='post' action='profile_setup_function.php'>
		<span class='row'>
			<span class='col-sm-6'>
				<label style='font-size:10px'>First Name<span style='color:red'>*</span></label><br>
				<input type="text" name="first_name" value="<?php echo $firstname;?>" required style='width:100%'>
			</span>
		<span class='col-sm-6'>
				<label style='font-size:10px'>Last Name<span style='color:red'>*</span></label><br>
				<input type="text" name="last_name" value="<?php echo $lastname;?>"required style='width:100%'>
			</span>
		</span>
		<span class='row'>
			<span class='col-sm-6'>
				<label style='font-size:10px'>User Name<span style='color:red'>*</span></label><br>
				<input type="text" name="user_name" value="<?php echo $username;?>"required style='width:100%'>
			</span>
		<span class='col-sm-6'>
				<label style='font-size:10px'>Email<span style='color:red'></span></label><br>
				<input type="email" name="email" value="<?php echo $email;?>"required style='width:100%' readonly>
			</span>
		</span>
		<button type='submit' class='mt-2 mb-2 w-50 c_data'style='margin-left:25%;margin-right:25%' name='submit_setup_profile'>UPDATE DETAILS</button>
	</form>
	<form method='post' action='password_reset_function.php'>
		<div style='border:1px solid #FFE199; margin-top:20px; padding:20px; margin-bottom:0px'>
			<div style='font-size:15px;margin-left:10%;'>RESET PASSWORD</div>
			<label style='font-size:10px;margin-left:10%;'>Previous Password<span style='color:red'>*</span></label><br>
			<input type="password" name="ol_password" style='width:80%;margin-left:10%;margin-right:10%'required ><br>
			<label style='font-size:10px;margin-left:10%;'>New Password<span style='color:red'>*</span></label><br>
			<input type="password" name="password1" style='width:80%;margin-left:10%;margin-right:10%'required><br>
			<label style='font-size:10px;margin-left:10%;'>Comfirm Password<span style='color:red'>*</span></label><br>
			<input type="password" name="password2" style='width:80%;margin-left:10%;margin-right:10%'required><br>
			<button type='submit' class='mt-2 mb-2 w-50 c_dete'style='margin-left:25%;margin-right:25%' name='submit_pw_reset'>RESET PASSWORD</button>
		</div>
	</form>
	</div>
</body>
</html>
