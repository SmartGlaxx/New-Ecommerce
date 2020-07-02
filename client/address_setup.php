<?php
require('connect.php');
require('header.php');


if(isset($_POST['addres_set_up'])){
	$username = $_SESSION['username'];
	?>
	<style>
		.a_a{
			color:#2002BF;
			background: white;
		}
		.a_a:hover{
			color:white;
			background-image: linear-gradient(white,#2002BF);
		}
	</style>
	<h6 style='text-align:center; color:blue'>ADDRES SET UP</h6>
	<div style='text-align:center; font-weight:bold'>Required fields<span style='color:red; font-weight:bold'>*</span></div>
	<div style ='display:flex; align-items:center; justify-content:center; margin-left:7vw; margin-right:7vw; margin-bottom:10vh'>
	<form action ='address_reset.php' method='post' style='text-align: center; margin-top:5vh; border:none; box-shadow: 0px 1px 5px 1px black; padding:10px; width:500px; min-width:200px; max-width:700px'>
		<label>Adress Line 1</label><span style='color:red'>*</span><br>
		<input type="text" name = 'address' style='color:#2002BF'><br>
		<label>Adress Line 2 (Optional)</label><br>
		<input type="text" name = 'address2' style='color:#2002BF'><br>
		<label>Adress Line 3 (Optional)</label><span style='color:red'>*</span><br>
		<input type="text" name = 'address3' style='color:#2002BF'><br>
		<button class = 'a_a' name='submit_addesss' type='submit' style='margin-top:5vh; border:1px solid blue'>ADD ADDRESS</button>
	</form>
	</div>


<?php	
}
else{
	?>
	<script>
		window.location.href='profile.php';
	</script>

	<?php
	
}

require('footer.php');
?>
