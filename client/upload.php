<?php
require('connect.php');
// require('header_admin.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>New E-Commerce</title>
	<meta name ='viewport' content='width=device-width; initial-scale=1.0'>
	<link rel='stylesheet' href= 'styles/style.css'>
</head>
<body style='color:blue'>

	<div  class='row' style='display:flex;margin-left:5vw; margin-right:5vw;margin-bottom:10vh' id ='first'>
	<div class='col' style='padding:20px'>
		<span style='padding:20px;font-size:17px; background:lightgray'>UPLOAD PRODUCT</span><br><br>
			<span style='color:gray; font-size:9px; margin-bottom:1vh'>(<span style='color:red; font-size:12px'>* </span>Required fields)</span><br><br>
		<form method = 'post' action='admin_function.php' enctype='multipart/form-data'>
			<label style='font-size:13px'>Product Name<span style='color:red'>*</span></label><br>
			<input type = 'text' style ='font-size:15px' name ='product_name' required><br><br>

			<label style='font-size:13px'>Price<span style='color:red'>*</span></label><br>
			<input type = 'text' style ='font-size:15px' name ='price' required><br><br>

			<label style='font-size:13px'>List Price<span style='color:red'>*</span></label><br>
			<input type = 'text' style ='font-size:15px' name ='list_price' required><br><br>

			<label style='min-width:200px;font-size:13px'>Size<span style='color:red'>*</span></label><br>
			
			XL:<input type = 'checkbox' value='XL' name='size_1'>
			L:<input type = 'checkbox' value='L' name='size_2'>
			M:<input type = 'checkbox' value='M' name='size_3'>
			S:<input type = 'checkbox' value='S' name='size_4' >
			XS:<input type = 'checkbox' value='XS' name='size_5'><br><br>

			<label style='min-width:200px;font-size:13px'>Color<span style='color:red'>*</span></label><br>
			White:<input type = 'checkbox' value='white' name='color_1'>
			Yellow:<input type = 'checkbox' value='yellow' name='color_2'>
			Blue:<input type = 'checkbox' value='blue' name='color_3'><br>
			Red:<input type = 'checkbox' value='red' name='color_4' >
			Black:<input type = 'checkbox' value='black' name='color_5'><br><br>

			<label style='font-size:13px'>Category<span style='color:red'>*</span></label><br>
			<select name = 'category' style='min-width:200px'>
				<option style='font-size:15px'></option>
				<option style='font-size:15px;color:gray' value='mens_shirts'>Men's Shirts</option>
				<option style='font-size:15px;color:gray' value='mens_trousers'>Men's Trousers</option>
				<option style='font-size:15px;color:gray' value='mens_shoes'>Men's Shoes</option>
				<option style='font-size:15px;color:gray' value='mens_watches'>Men's Watches</option>
				<option style='font-size:15px;color:gray' value='mens_accessories'>Men's Accessories</option>
				<option style='font-size:15px;color:gray' value='mens_jewelry'>Men's Jewelry</option>
				<option style='font-size:15px;color:gray' value='mens_sleepwear'>Men's Sleepwear</option>
				<option style='font-size:15px;color:gray' value='mens_sportwear'>Men's Sportwear</option>
				<option style='font-size:15px;color:gray' value='mens_traditional'>Men's Traditional</option>
				<option style='font-size:15px;color:gray' value='mens_underwear'>Men's Underwear</option>
				<option style='font-size:15px;color:gray' value='womens_tops'>Women's Tops</option>
				<option style='font-size:15px;color:gray' value='womens_skirts'>Women's Skirts</option>
				<option style='font-size:15px;color:gray' value='womens_gowns'>Women's Gowns</option>
				<option style='font-size:15px;color:gray' value='womens_shoes'>Women's Shoes</option>
				<option style='font-size:15px;color:gray' value='womens_watches'>Women's Watches</option>
				<option style='font-size:15px;color:gray' value='womens_accessories'>Women's Accessories</option>
				<option style='font-size:15px;color:gray' value='womens_jewelry'>Women's Jewelry</option>
				<option style='font-size:15px;color:gray' value='womens_sleepwear'>Women's Sleepwear</option>
				<option style='font-size:15px;color:gray' value='womens_sportwear'>Women's Sportwear</option>
				<option style='font-size:15px;color:gray' value='womens_traditional'>Women's Traditional</option>
				<option style='font-size:15px;color:gray' value='womens_underwear'>Women's Underwear</option>
				<option style='font-size:15px;color:gray' value='boys_clothing'>Boy's Clothes</option>
				<option style='font-size:15px;color:gray' value='boys_schooling'>Boy's School Kits</option>
				<option style='font-size:15px;color:gray' value='boys_shoes'>Boy's Shoes</option>
				<option style='font-size:15px;color:gray' value='girls_clothing'>Girl's Clothes</option>
				<option style='font-size:15px;color:gray' value='girls_schooling'>Girl's School Kits</option>
				<option style='font-size:15px;color:gray' value='girls_shoes'>Girl's Shoes</option>
			</select><br><br>

			<label style='font-size:13px'>Product Code<span style='color:red'>*</span></label><br>
			<input type = 'text' style ='font-size:15px' name ='code' required><br><br>

			<label style='font-size:13px'>Available<span style='color:red'>*</span></label><br>
			<input type = 'text' style ='font-size:15px' name ='available' required><br><br>

			<label style='font-size:13px'>Picture<span style='color:red'>*</span></label><br>
			<input type = 'file' style ='font-size:13px' name ='picture' required><br><br>

			<label style='font-size:13px' class='mt-2'>Supporting Picture 1<span style='color:red'>*</span></label><br>
			<input type = 'file' style ='font-size:13px' name ='picture_2' ><br><br>

			<label style='font-size:13px' class='mt-2'>Supporting Picture 2<span style='color:red'>*</span></label><br>
			<input type = 'file' style ='font-size:13px' name ='picture_3' ><br><br>

			<label style='font-size:13px' class='mt-2'>Supporting Picture 3<span style='color:red'>*</span></label><br>
			<input type = 'file' style ='font-size:13px' name ='picture_4' ><br><br>

			<label style='font-size:13px' class='mt-2'>Supporting Picture 4<span style='color:red'>*</span></label><br>
			<input type = 'file' style ='font-size:13px' name ='picture_5' ><br><br>

			<label style='font-size:13px'>Desription<span style='color:red'>*</span></label><br>
			<textarea style ='border:1px solid gray;font-size:13px; width:200px; height:200px' name ='description' required></textarea><br><br>

			<label style='font-size:13px'>Specifications<span style='color:red'>*</span></label><br>
			<textarea style ='border:1px solid gray;font-size:13px; width:200px; height:200px' name ='specifications' required></textarea><br></br>

			<input type='submit' name='submit_product' value='UPLOAD' style="font-size:13px; border:1px solid black; color:white; background: #41878B; width:200px">
		</form>
	</div>
	
	<div class='col' style='background:#329A9A;height:30vh;text-align:center'>
		<span style='font-size:17px; color:white'>DELETE PRODUCT</span>
		<form method='post'action='admin_function.php?'>
			<input type = 'text' style ='border:1px solid gray; font-size:13px;color:red;width:80%;margin-left:10%; margin-right:10%;text-align:center' name ='del' placeholder='Product Name' required><br>

			<input type='submit' name='submit_delete' value='SEARCH & DELETE' style="font-size:13px; border:1px solid black; font-weight:bold;color:red; background: white;margin-top:10px; width:auto;margin-left:auto; margin-right:auto">
		</form>
	</div>
</div>


</body>
</html>