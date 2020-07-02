<?php
require('connect.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>New E-Commerce</title>
	<link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Sail">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel = 'stylesheet' href = 'styles/css/bootstrap.css'>
	<link rel = 'stylesheet' href = 'styles/style.css'>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	  <script>
	    AOS.init();
	  </script>
	<link rel = 'stylesheet' href = 'styles/fontawesome.min.css'>
	<script src="https://kit.fontawesome.com/1d2fd3a785.js" crossorigin="anonymous"></script>
	<link rel = "stylesheet" href ="https://cdnjs.cloudflare.com/ajax/libs/tachyons/4.11.1/tachyons.min.css">
	<link rel = 'stylesheet' href = 'styles/swiper.min.css'>
	<meta name = 'viewport' content = 'width=device-width; initial-scale=1.0'>
	<script src = 'scripts/js/bootstrap.js'></script>
	<script src = 'scripts/swiper.min.js'></script>
	<script src = 'scripts/fontawesome.min.js'></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<style>
		.dropdown:hover{
			color:red;
			/*.menus{display:block}*/
		}
		.menus{
			display:none;
		}
		.sidebar{
			dispaly:none;
		}
	</style>
</head>
<body style='width:100%;'>
	<div style='top:0;color:white;background:orange; padding:7px;text-align:right;width:99vw;position:relative; box-sizing:border-box;'>
		<div style='float:left'>
	<div class="dropdown cate2" style='background:inherit; float: left; '>
  <button class="" style='font-size:20px; background: inherit; border:none; margin-top:'>&#9776;<i class="fas fa-caret-right" style='color:orange'></i></button>
  <div class="dropdown-content" style=''>
  	<div class='dropbtn2' >
	    <div class="bot">MEN'S<i class=""></i></div>
	    <div class="dropdown-content2" >
	    <div style='text-align:center; font-family: century_gothic; font-size:17px'>MEN'S</div>
	    <a href="categories.php?id=mens_clothing">CLOTHING</a>
		<a href="categories.php?id=mens_shoes">SHOES</a>
		<a href="categories.php?id=mens_watches">WATCHES</a>
		<a href="categories.php?id=mens_accessories">ACCESSORIES</a>
		<a href="categories.php?id=mens_jewelry">JEWELRY</a>
		<a href="categories.php?id=mens_traditional">TRADITIONAL</a>
		<a href="categories.php?id=mens_underwears">UNDERWARES</a>
		<a href="categories.php?id=mens_sleepwears">SLEEPWARES</a>
		<a href="categories.php?id=mens_sportswears">SPORTSWARES</a>
	    </div>
	</div>
    <li class='dropbtn2'>
	    <div class="bot">WOMEN'S<i class=""></i></div>
	    <div class="dropdown-content2">
	    <div style='text-align:center; font-family: century_gothic; font-size:17px'>WOMEN'S</div>
	    <a href="categories.php?id=women_clothing">CLOTHING</a>
	    <a href="categories.php?id=womens_shoes">SHOES</a>
	    <a href="categories.php?id=womens_watches">WATCHES</a>
	    <a href="categories.php?id=womens_accessories">HAND BAGS & WALLETS</a>
	    <a href="categories.php?id=womens_jewelry">JEWELRY</a>
	    <a href="categories.php?id=womens_traditional">TRADITIONAL</a>
	    <a href="categories.php?id=womens_underwears">UNDERWARES</a>
	    <a href="categories.php?id=womens_sleepwears">SLEEPWARES</a>
	    <a href="categories.php?id=mens_sportswears">SPORTSWARES</a>
	    </div>
	</li>
    <li class='dropbtn2'>
	    <div class="bot">BOY'S<i class=""></i></div>
	    <div class="dropdown-content2">
	    <div style='text-align:center; font-family: century_gothic; font-size:17px'>BOY'S</div>
	    <a href="categories.php?id=boys_clothing">CLOTHING</a>
	    <a href="categories.php?id=boys_shoes">SHOES</a>
	    <a href="categories.php?id=boys_schooling">SCHOOL ACCESSORIES</a>
	    </div>
	</li>
    <div class='dropbtn2'>
	    <div class="bot">GIRL'S<i class=""></i></div>
	    <div class="dropdown-content2">
	    <div style='text-align:center; font-family: century_gothic; font-size:17px'>GIRL'S</div>
	    <a href="categories.php?id=girls_clothing">CLOTHING</a>
	    <a href="categories.php?id=girls_shoes">SHOES</a>
	    <a href="categories.php?id=girls_schooling">SCHOOL ACCESSORIES</a>
	    </div>
	</div>
  
  </div>
</div>

	<div class='cart_cont2' style='max-width:30px; float:right'>
	<a href = 'my_cart.php'><span style="min-width:10px;max-width:30px;text-align-last:right;" class=''><i class="fas fa-shopping-cart fa-2x" style='color:#0404BD'><span style='position:absolute;font-size:12px; color:orange' class="badge badge-light">
		<?php if(isset($check)){echo $check;}else{echo '0';};?></span></i></span></a>
	</div>

</div>
<?php
if(!isset($_SESSION['email'])){
?>
<span class =  '' style =''><a href = 'login.php' style='text-decoration:none;font-size:12px;color:white; margin-right:15px'>LOGIN</a> | <a href = 'signup.php' style='text-decoration:none; font-size:12px;color:black; margin-left:15px'>SIGN UP</a></span>
<?php
}
else{
	?>
	<span style=''>Welcome <?php if(isset($_SESSION['first_name'])){echo strtoupper($_SESSION['first_name']);}else{
		?>
		<span>New User <a style="font-size:16px; color:blue;text-decoration:none; font-weight: bold" href="profile.php">(Set Up And Manage Your Account Here)<a/></span>
		<?php
		}?>
	</span>
	<a href = 'profile.php'><i class ='fa fa-user' style ='margin-right:10vw; color: white'></i></a>
	<a href = 'signout.php' style='text-decoration:none; font-size:12px;color:white'>SIGN OUT</a>
<?php
}
?>

		<!-- <span id = 'openbtn' onclick='opening()' style='color:black;font-size:20px;right:0;top:0'>&#9783</span> -->

	<div class="dropleft" style = 'background:orange; float:right;	'>
		  
		  <button type="button" class=" dropdown-toggle dropdown-toggle-split index_search_form2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style='border:none;color:orange;background:inherit;border:none; margin-top:-5px' >
		    
		    <span id = 'openbtn' onclick='opening()' style='color:black;font-size:20px;right:0;top:0'><i class='fa fa-search '></i></span>
		  </button>
		  <div class="dropdown-menu "  style='background:black;color:white; min-width:220px; min-height: 300px; box-shadow: 2px 2px 8px 1px gray'>

			<div style='position:relative;overflow-x:hidden;width:98%;margin-left:1%;margin-right:1%'>
				<form method='post' action='' style=''>
				<input id = 'menu_search' type = 'search' name = 'search' id ='search' style='border:none;font-size:11px;width:100%; height:30px;overflow-x:hidden;color:black;padding-left:1vw'oninput = 'searcher()' placeholder='Search'>
				
				</form>
			</div>
			<span id = 'search_result' style='width:98%;'></span>
			<!-- <span style =''  id = 'menu_items'></span> -->
			<div id = ''>
			<div style='text-align:center'>MAJOR CATEGORIES</div>
			
			<div style='margin-left: 10%; margin-top:15px'>
		    <a  href="categories.php?id=mens_clothing"style='text-align:center; color:white; text-decoration:none; margin-left:2vw;font-size:12px ;color:white'>MEN'S FASHION</a><br>
		    <a  href="categories.php?id=women_clothing"style='text-align:center; color:white; text-decoration:none; margin-left:2vw;font-size:12px; color:white'>WOMEN'S FASHION</a><br>
		    <a  href="categories.php?id=boys_clothing"style='text-align:center; color:white; text-decoration:none; margin-left:2vw;font-size:12px; color:white'>BOY'S FASHION</a><br>
		    <a  href="categories.php?id=girls_clothing"style='text-align:center; color:white; text-decoration:none; margin-left:2vw;font-size:12px; color:white'>GIRL'S FASHION</a><br>
		    <!--<div class="dropdown-divider"></div>-->
		    </div>
			</div>
		  </div>
		</div>

	</div>
<div class ='' style = 'margin-top:1vh;margin-left:5vw; display:grid;grid-template-columns:repeat(auto-fill,minmax(300px, 1fr))'>
<div data-aos="fade-in" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" class=''style=''><H1 style ='text-align:left;font-family:"Cabin";'><a style ='text-decoration:none;color:red' href = 'index.php'>SMART<span style ='color:red'><i class="fas fa-shopping-cart fa-1x"></i></span></a></H1></div>

<div style='' class='home_search_input_cont' >
	<form method='GET' action='search.php' style='position:relative'>
	<input oninput = 'searcher2()' class='home_search_input' type = 'search' name = 'search' id ='search' style='' placeholder='' >
	<button type ='submit' name = 'submit_search' id='search_btn' class='home_submit_search'><i class='fa fa-search '></i></button>
	</form>
	<span id = 'search_result2' class= 'dropdown-content home_search_result' style='z-index:100'></span>
</div>
<?php 
	if(isset($_SESSION['username'])){
	$username = $_SESSION['username'];
	$sql = "SELECT * FROM cart WHERE User_name = '$username';";
	$result = mysqli_query($con,$sql);
	$check = mysqli_num_rows($result);
	}
?>
<div class='cart_cont' style='max-width:70px;'>
<a href = 'my_cart.php'><span style="min-width:10px;max-width:70px;text-align-last:right" class=''><i class="fas fa-shopping-cart fa-2x" style='color:#0404BD'><span style='position:absolute;font-size:12px; color:white' class="badge badge-warning">
	<?php if(isset($check)){echo $check;}else{echo '0';};?></span></i></span></a>
</div>
</div>

<script>
	function searcher(){
	let inp_val = document.getElementById('menu_search').value;
			
			var xhr = new XMLHttpRequest();
			xhr.open('GET','menu_search.php?search='+inp_val,true);
			xhr.onload=function(){
				if(this.status==200){
					document.getElementById('search_result').innerHTML=this.responseText;
				}
			}
			xhr.send();
		}
	function searcher2(){
	let inp_val2 = document.getElementById('search').value;
			var xhr = new XMLHttpRequest();
			xhr.open('GET','index_search_dropdown.php?search='+inp_val2,true);
			xhr.onload=function(){
				if(this.status==200){
					document.getElementById('search_result2').style.display='block';
					document.getElementById('search_result2').innerHTML=this.responseText;
					if(document.getElementById('search').value == ''){
						document.getElementById('search_result2').style.display='none';
					}
				}
			}
			xhr.send();
		}
</script>

</body>
</html>



