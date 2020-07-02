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
	<div style='width:40vw;margin-left:auto; margin-right:auto;font-size:12px; margin-bottom: 20vh;'>
	<form method = 'POST' action='profile_setup_function.php'>
		<h6 class='text-center' style = 'color:#3C349B'>Profile Setup</h6>
		<span style = 'font-size:13px; color:gray'>First Name</span><br>
		<input type = 'text' name = 'first_name' class ='py-1 px-1' style='border: 1px solid #3C349B; width:40vw;margin-left:auto; margin-right:auto;font-size:15px; color:#3C349B'><br>

		<span style = 'font-size:13px; color:gray'>Last Name</span><br>
		<input type = 'text' name = 'last_name' class ='py-1 px-1' style='border: 1px solid #3C349B; width:40vw;margin-left:auto; margin-right:auto;font-size:15px; color:#3C349B'><br>

		<span style = 'font-size:13px; color:gray'>User Name</span><br>
		<input type = 'text' name = 'user_name' class ='py-1 px-1' style='border: 1px solid #3C349B; width:40vw;margin-left:auto; margin-right:auto;font-size:15px; color:#3C349B'><br>
		
		<!--<span style='font-size:13px; color:navy'>-->
			
		<!--	<span style = 'font-size:13px; color:gray'>Reset Password</span><br>-->
		<!--	<span style='position:relative; overflow:hidden'>-->
		<!--	<input id = 'psw' type = 'password' name = 'password' class ='py-1 px-1' style='border: 1px solid #3C349B; width:40vw;margin-left:auto; margin-right:auto;font-size:15px; color:#3C349B'>-->
		<!--	<i id ='seebtn' style='position:absolute; right:0; top:0' class="fas fa-eye"></i>-->
		<!--	</span><br>-->
		<!--	<span style = 'font-size:13px; color:gray'>Comfirm Password</span><br>-->
		<!--	<span style='position:relative;overflow:hidden'>-->
		<!--	<input id = 'psw2' type = 'password' name = 'password2'class ='py-1 px-1' style='border: 1px solid #3C349B; width:40vw;margin-left:auto; margin-right:auto;font-size:15px; color:#3C349B'>-->
		<!--	<i id ='seebtn2' style='position:absolute; right:0; top:0' class="fas fa-eye"></i>-->
		<!--	</span><br>-->

		<!--</span>-->
		<button name = 'submit_setup_profile' type = 'submit' class = 'py-2 px-3 my-3' style= 'width:50%; margin-left:25%; margin-right:25%;border:1px solid gray; color:green; background:white'>UPDATE PROFILE</button>
	</form>
	</div>
	<script>
		document.getElementById('seebtn').addEventListener('mouseenter', see);
		document.getElementById('seebtn').addEventListener('mouseleave', dis);
		document.getElementById('seebtn2').addEventListener('mouseenter', see2);
		document.getElementById('seebtn2').addEventListener('mouseleave', dis2);
		function see(){
			document.getElementById('psw').type = 'text';
		}
		function dis(){
			document.getElementById('psw').type = 'password';
		}
		function see2(){
			document.getElementById('psw2').type = 'text';
		}
		function dis2(){
			document.getElementById('psw2').type = 'password';
		}
	</script>
</body>
</html>



<?php
require('footer.php');
?>