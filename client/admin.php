<?php
require('connect.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>New E-Commerce</title>
	<link rel = 'stylesheet' href = 'styles/css/bootstrap.css'>
	<link rel = 'stylesheet' href = 'styles/style.css'>
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
<body styel='background:red'>
	<div style='top:0;color:white;background:orange;padding:3px;text-align:right;width:100vw;position:relative;'>
<?php
if(!isset($_SESSION['email'])){
?>
<span class =  '' style =''><a href = 'login.php' style='text-decoration:none;font-size:12px;color:white'>LOGIN</a> | <a href = 'signup.php' style='text-decoration:none; font-size:12px;color:black'>SIGN UP</a></span>
<?php
}
else{
	?>
	<span style=''>Welcome <?php if(isset($_SESSION['first_name'])){echo strtoupper($_SESSION['first_name']);}else{
		?>
		<span>New User <a style="font-size:14px; color:#DEDEDE;text-decoration:none" href="profile.php">(Set Up Account Here)<a/></span>
		<?php
		}?>
	</span>
	<a href = 'profile.php'><i class ='fa fa-user' style ='margin-right:10vw; color: white'></i></a>
	<a href = 'signout.php' style='text-decoration:none; font-size:12px;color:white'>SIGN OUT</a>
<?php
}
?>

		<!-- <span id = 'openbtn' onclick='opening()' style='color:black;font-size:20px;right:0;top:0'>&#9783</span> -->

	<span class="dropleft" style = 'background:orange'>
		  <!-- <button type="button" class="btn btn-danger"style='font-size:12px'>MENU</button> -->
		  <button type="button" class=" dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style='border:none;background:orange;border:none'>
		    <!-- <span class="sr-only">Toggle Dropdown</span> -->
		    <span id = 'openbtn' onclick='opening()' style='color:black;font-size:20px;right:0;top:0'>&#9776</span>
		  </button>
		  <div class="dropdown-menu" style='background:black;color:white; min-width:220px; min-height: 300px; box-shadow: 2px 2px 8px 1px gray'>

			<div style='position:relative;overflow-x:hidden;width:98%;margin-left:1%;margin-right:1%'>
				<form method='post' action='' style=''>
				<input id = 'menu_search' type = 'search' name = 'search' id ='search' style='border:none;font-size:11px;width:100%; height:30px;overflow-x:hidden;color:black;padding-left:1vw'oninput = 'searcher()' placeholder='Search in Menu'>
				<!-- <button type ='submit' name = 'submit_search' id='search_btn' style='position:absolute; top:0; right:0;height:30px; border:none;z-index:1; background:white'><i class='fa fa-search'></i></button> -->
				</form>
			</div>
			<span id = 'search_result' style='width:98%;'></span>
			<!-- <span style =''  id = 'menu_items'></span> -->
			<div id = ''>
		    <a  href="#"style='text-align:center; color:white; text-decoration:none; margin-left:2vw;font-size:12px ;color:white'>STORE</a><br>
		    <a  href="#"style='text-align:center; color:white; text-decoration:none; margin-left:2vw;font-size:12px; color:white'>SHOP BY CATEGORY</a><br>
		    <a  href="#"style='text-align:center; color:white; text-decoration:none; margin-left:2vw;font-size:12px; color:white'>TRACK YOUR ORDER</a><br>
		    <div class="dropdown-divider"></div>
		    <a  href="#"style='text-align:center; color:white; text-decoration:none;margin-left:2vw;font-size:12px; color:white'>Action</a>
			</div>
		  </div>
		</span>

	</div>
<div class ='' style = 'margin-top:1vh;margin-left:5vw; display:grid;grid-template-columns:repeat(auto-fill,minmax(300px, 1fr))'>
<div class=''style=''><H3 style ='text-align:left;font-family:"Beautiful People Personal Use";'><a style ='text-decoration:none;color:red' href = 'index.php'>HEADER<span style ='color:red'><i class="fas fa-shopping-cart fa-1x"></i></span></a></H3></div>

<div style='width:200px;position:relative;display: inline-block;' class='dropdown'>
	<form method='GET' action='search.php' style='position:relative'>
	<input oninput = 'searcher2()' type = 'search' name = 'search' id ='search' style='width:100%;border:1px solid black;height:30px; font-size:15px;overflow-x:hidden; color:#212EDA; font-weight:bold; text-align:center;position:relative' placeholder='' >
	<button type ='submit' name = 'submit_search' id='search_btn' style='position:absolute; top:0; right:0;height:30px; border:none;border-left:1px groove black;z-index:1'><i class='fa fa-search'></i></button>
	</form>
	<span id = 'search_result2' class= 'dropdown-content' style='margin-left:0px;
  margin-top:0px;position: absolute;background-color: #f9f9f9;min-width: 200px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);padding: 12px 16px;z-index: 50;'></span>
</div>
<?php
	if(isset($_SESSION['username'])){
	$username = $_SESSION['username'];
	$sql = "SELECT * FROM cart WHERE User_name = '$username';";
	$result = mysqli_query($con,$sql);
	$check = mysqli_num_rows($result);
	}
?>
<!-- <a href = 'my_cart.php'><span style="min-width:10px;max-width:1200px;text-align-last:right" class=''><i class="fas fa-shopping-cart fa-2x"><span style='position:absolute;font-size:12px; color:white' class="badge badge-warning"> -->
	<!-- <?php if(isset($check)){echo $check;}else{echo '0';};?></span></i></span></a> -->
</div>
<div class="dropdown cate2" style='width:200px;z-index:10; margin-left:5vw;'>
  <button class="dropbtn dpt" style='font-size:12px'>CATEGORIES <i class="fas fa-caret-down"></i></button>
  <div class="dropdown-content">
  	<div class='dropbtn2'>
	    <div class="bot">MEN'S<i class=""></i></div>
	    <div class="dropdown-content2">
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
   <!--  <div class='dropbtn2'>
	    <div class="bot">Link 1 <i class=""></i></div>
	    <div class="dropdown-content2">
	    	<a href="#">Link 2</a>
	    	<a href="#">Link 3</a>
	    </div>
	</div>
    <div class='dropbtn2'>
	    <div class="bot">Link 1 <i class=""></i></div>
	    <div class="dropdown-content2">
	    	<a href="#">Link 2</a>
	    	<a href="#">Link 3</a>
	    </div>
	</div>
    <div class='dropbtn2'>
	    <div class="bot">Link 1 <i class=""></i></div>
	    <div class="dropdown-content2">
	    	<a href="#">Link 2</a>
	    	<a href="#">Link 3</a>
	    </div>
	</div>
    <div class='dropbtn2'>
	    <div class="bot">Link 1 <i class=""></i></div>
	    <div class="dropdown-content2">
	    	<a href="#">Link 2</a>
	    	<a href="#">Link 3</a>
	    </div>
	</div>
    <div class='dropbtn2'>
	    <div class="bot">Link 1 <i class=""></i></div>
	    <div class="dropdown-content2">
	    	<a href="#">Link 2</a>
	    	<a href="#">Link 3</a>
	    </div>
	</div> -->
  </div>

</div>
<div class= "container" style ="z-index:20" <?php if(isset($_SESSION["first_name"])) {echo "style = 'margin-top:-5%;margin-left:-22%'";} ?> style = "Margin-top:0%"> 
	<ul class = "nav nav-tabs"style ="z-index:20">
		<li class = "" ><a href = "header_admin.php" class = "" data-toggle = "" style = "color:blue;font-size:15px; margin-left:20px;color:black;font-weight:bolder">ADMIN HOME</a>
		</li>
		<li id='admin' style = "font-weight:bolder;color:black"><span style='color:#753EDA;font-size:15px; margin-left:20px'>UPLOAD</span></li>
		<li id='orders' style = "font-weight:bolder;color:black"><span style='color:#753EDA;font-size:15px; margin-left:20px'>ORDERS</span></li>
	</ul>
</div>
<div id='adm'>
	<h6 style='color:#553EEA; text-align:center; margin-top:10vh'>Welcome to the Admin Panel</h6>
	<p style='color:#653EEA;text-align:center ;margin-top:10vh'>Navigate to either Management Pages</p>
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
	// document.getElementById('search_result2').style.display = 'block';
			var xhr = new XMLHttpRequest();
			xhr.open('GET','index_search_dropdown.php?search='+inp_val2,true);
			xhr.onload=function(){
				if(this.status==200){
					document.getElementById('search_result2').innerHTML=this.responseText;
				}
			}
			xhr.send();
		}
</script>
<script>
	document.getElementById('admin').addEventListener('click',admin_page);
	var adm = document.getElementById('adm');

	function admin_page(){
		var xhr = new XMLHttpRequest();
		xhr.open('GET','upload.php',true);
		xhr.onload=function(){
			if(this.status=true){
				adm.innerHTML=this.responseText;
			}
		}
		xhr.send();
		
	}
	document.getElementById('orders').addEventListener('click',order_page);
	var adm = document.getElementById('adm');

	function order_page(){
		var xhr = new XMLHttpRequest();
		xhr.open('GET','orders.php',true);
		xhr.onload=function(){
			if(this.status=true){
				adm.innerHTML=this.responseText;
			}
		}
		xhr.send();
		
	}
</script>
<?php
require('footer.php');
?>
</body>
</html>



