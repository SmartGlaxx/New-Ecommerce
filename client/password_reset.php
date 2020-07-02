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
		<form method='post' action='password_reset_function.php'>
		<div style='border:1px solid #FFE199; margin-top:20px; padding:20px; margin-bottom:20px'>
			<div style='font-size:15px;margin-left:10%;'>RESET PASSWORD</div>
			<label style='font-size:10px;margin-left:10%;'>Previous Password<span style='color:red'>*</span></label><br>
			<input type="password" name="ol_password" style='width:80%;margin-left:10%;margin-right:10%'required><br>
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