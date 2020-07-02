<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>New E-Comerce</title>
</head>
<body style=' background: #F1F1F1'>
<?php
require('connect.php');
require('header.php');

$Id = $_GET['id'];
$sql = "SELECT * FROM products WHERE Id = '$Id';";
$result = mysqli_query($con, $sql);
$check = mysqli_num_rows($result);

if($check == true)

{
	while($row=mysqli_fetch_assoc($result)){
		$code = $row['Code'];
	?>
	<div class= ''style='font-size:12px;display:grid; grid-gap:10px;grid-template-columns:repeat(auto-fill, minmax(180px, 1fr));padding-left:7vw;padding-right:7vw;grid-template-rows:1fr; background-color:#F1F1F1;padding-top:10px'>

		<div style="background-color:white;grid-column:span 2; grid-row:1/3; border-radius:5px;padding:10px;margin-bottom:10px"  class='img_cont' >
			<div class = ''style='background:white ' >
			<div id = 'desc_img'>
				<img  class = 'd_img' style = ''src='<?php echo $row['Image']?>'>
			</div>

			<div  style='margin-top:7px;width:95%;height: auto;border:none;overflow: hidden;display:flex;margin-left:5px'>
			<div class="swiper-container " style='height:70px;width:300px;margin-left:1px'>
			<div class="swiper-wrapper" style='height:70px'>
		        <!-- Slides -->
		        <img style = 'width:70px;height:70px' id = 'Image' class='desc_imgs swiper-slide' src='<?php echo $row['Image']?>' >
		        <img style = 'width:70px;height:70px' id = 'Image_1' class='desc_imgs swiper-slide' src='<?php echo $row['Image_1']?>'>
		        <img style = 'width:70px;height:70px' id = 'Image_2' class='desc_imgs swiper-slide' src='<?php echo $row['Image_2']?>'>
		        <img style = 'width:70px;height:70px' id = 'Image_3' class='desc_imgs swiper-slide' src='<?php echo $row['Image_3']?>'>
		        <img style = 'width:70px;height:70px' id = 'Image_4' class='desc_imgs swiper-slide' src='<?php echo $row['Image_4']?>'>
		    </div>
		    <div class="swiper-button-next" ></div>
		    <div class="swiper-button-prev" ></div>
			</div>
			</div>

		</div>
		</div>
		<div class='prod_att' style="background-color:white;grid-column:span 2; grid-row: span 1;padding:10px; padding-left:20px;border-radius:5px">
		<div style='text-align:center'>
				<?php

		$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			if(strpos($fullUrl, "inputs=incomplete") == true)
			{
				echo "<div style = 'color:red; font-size:14px' class ='text-center'>Please Select Product Details</div>";
				
			}
			elseif(strpos($fullUrl, "please_select_option") == true)
			{
				echo "<div style = 'color:red; font-size:14px' class ='text-center'>Please Make A Selection of Size and Color, or Choose 'No Option'</div>";
			}
			elseif(strpos($fullUrl, "user=not_signedin") == true)
			{
				echo "<div style = 'color:red; font-size:14px' class ='text-center'>Please Sign In First</div>";
			}
			elseif(strpos($fullUrl, "error_loading_page") == true)
			{
				echo "<div style = 'color:red; font-size:14px' class ='text-center'>We Encountered An Error Updating Your Selection. Please try again</div>";
			}
		?>
			</div>
		<span style='display:flex'>
		<h6 style='text-align:center; width:90%'>
		<?php 
		echo $row['Name'];
		?>
		</h6>
		<span>
		<?php
		if(isset($_SESSION['username']))
		{


			$username = $_SESSION['username'];
			$sql16 = "SELECT * FROM favorite WHERE User_name ='$username' AND Code = '$code';";
			$result16=mysqli_query($con, $sql16);
			$check16=mysqli_num_rows($result16);
			$row16=mysqli_fetch_assoc($result16);
			if($check16==true)// user has this item as favourite
			{
				
					if($row16['Status']==1){
						$name = $row['Name'];
						$name= str_replace("'", "`", $name);
					?>
				<form method = 'GET' action='add_to_fav.php'>
					<input type ='hidden' value='<?php echo $row['Id']?>' name='id'>
					<input type ='hidden' value='<?php echo $name;?>' name='name'>
					<input type ='hidden' value='<?php echo $row['Code']?>' name='code'>
					<input type ='hidden' value='<?php echo $row['Image']?>' name='image'>
					<input type ='hidden' value='<?php echo $row['Price']?>' name='price'>
					<button  name = 'heart' style='background:inherit;border:none;top:0; right:0' id='wl'><i class='fas fa-heart hover_one' style='color:red;' id ='alert_1'></i></button>
				</form>
				
					<?php
					}
					else if($row16['Status']==0){
						$name = $row['Name'];
						$name= str_replace("'", "`", $name);
					?>
				<form method = 'GET' action='add_to_fav.php'>
					<input type ='hidden' value='<?php echo $row['Id']?>' name='id'>
					<input type ='hidden' value='<?php echo $name;?>' name='name'>
					<input type ='hidden' value='<?php echo $row['Code']?>' name='code'>
					<input type ='hidden' value='<?php echo $row['Image']?>' name='image'>
					<input type ='hidden' value='<?php echo $row['Price']?>' name='price'>
					<button name = 'heart' style='background:inherit;border:none;top:0; right:0' id='wl'><i class='fas fa-heart hover_one' style='color:gray;' id ='alert_2'></i></button>
				</form>
				
					<?php
					}
				}
				else if($check16==false)//user doesnt have this item in favorite
				{
					$name = $row['Name'];
					$name= str_replace("'", "`", $name);
					?>
			<form method = 'GET' action='add_to_fav.php'>
				<input type ='hidden' value='<?php echo $row['Id']?>' name='id'>
				<input type ='hidden' value='<?php echo $name;?>' name='name'>
				<input type ='hidden' value='<?php echo $row['Code']?>' name='code'>
				<input type ='hidden' value='<?php echo $row['Image']?>' name='image'>
				<input type ='hidden' value='<?php echo $row['Price']?>' name='price'>
				<button name = 'heart' style='background:inherit; border:none;top:0; right:0' id='wl'><i class='fas fa-heart hover_one' style='color:gray;' id ='alert_3'></i></button>
			</form>
				
				<?php
				}
			}
			else if(!isset($_SESSION['username']))
			{
			    echo '';
			}
			?>
		<!-- <script>
			document.getElementById('alert_1').addEventListener('click',alert_10);
			document.getElementById('alert_2').addEventListener('click',alert_20);
			document.getElementById('alert_3').addEventListener('click',alert_30);
			document.getElementById('alert_4').addEventListener('click',alert_40);

		function alert_10(){
			alert('Item Added to Your Favorite.');
			
		}
		function alert_20(){
			alert('Item Removed from Your Favorite'.);
			
		}
		function alert_30(){
			alert('Item Added to Your Favorite.');
			
		}
		function alert_40(){
			alert('Please Sign in to Add to Favorite List.');
			
		}
		</script> -->
		</span>
		</span>

		<form  method='post' action="add_to_cart_function.php?price=<?=$row["Price"]?>&&img=<?=$row["Image"]?>&&id=<?php echo $_GET["id"] ?>&&code=<?=$row["Code"]?>&&name=<?=$row["Name"]?>">
		<div class ='' style='margin-bottom:10px'>
		<div style='display:flex;width:100%; margin-bottom:30px'>
			<span style='width:25%;text-align:right; margin-right:20px'>Rating:</span>
			<span style='text-align:left'>
				<?php
		$code = $row['Code'];
		$sql2 = "SELECT * FROM rating WHERE Code = '$code';";
		$result2 = mysqli_query($con, $sql2);
		$check = mysqli_num_rows($result2);
		$sum = 0;
		$count=0;
		$rating = 0;
		if($check==true){
		while($row2=mysqli_fetch_array($result2)){
			$sum+=$row2['Rating'];
			$count++;
		}
		$rating = $sum/$count;
		// echo $rating;
		require('rating.php');
		}
		else{
			echo 'No ratings yet. Purchase to leave a rating.';
			$id=$_GET['id'];
		}
		?>
			</span>
		</div>
		<div style='display:flex;width:100%;margin-bottom:30px'>
			<span style='width:25%;text-align:right;margin-right:20px'>Price:</span>
			<span style='text-align:left;'><span style='font-size:20px; color:red'><?php echo '₦'.Number_format($row['Price'])?></span><span style='font-size:15px; color:darkgray'><s><?php echo ' '. '₦'.Number_format($row['List_Price'])?></s></span></span>
		</div>
		<div style='display:flex;width:100%;margin-bottom:30px'>
			<span style='width:25%;text-align:right;margin-right:20px'>Size:</span>
			<span style='text-align:left'>
				<select style='min-width:120px;max-width:120px;' name='size'>
			<option>Select</option>
			<?php if($row['Size_1']==null && $row['Size_2']==null && $row['Size_3']==null && $row['Size_4']==null && $row['Size_5']==null)
			{
				?>
				<option>No Options</option>
			<?php
			}else{  ?>
			<option><?php if($row['Size_1']==null){echo 'Unvailable';}else{echo $row['Size_1'];}?></option>
			<option><?php if($row['Size_2']==null){echo 'Unvailable';}else{echo $row['Size_2'];}?></option>
			<option><?php if($row['Size_3']==null){echo 'Unvailable';}else{echo $row['Size_3'];}?></option>
			<option><?php if($row['Size_4']==null){echo 'Unvailable';}else{echo $row['Size_4'];}?></option>
			<option><?php if($row['Size_5']==null){echo 'Unvailable';}else{echo $row['Size_5'];}?></option>
			<?php
		}?>
		</select>
			</span>
		</div>
		<div style='display:flex;width:100%;margin-bottom:30px'>
			<span style='width:25%;text-align:right;margin-right:20px'>Color:</span>
			<span style='text-align:left'>
				<select style='min-width:120px;max-width:120px' name='color'>
			<option>Select</option>
			<?php if($row['Color_1']==null && $row['Color_2']==null && $row['Color_3']==null && $row['Color_4']==null && $row['Color_5']==null)
			{
				?>
				<option >No Options</option>
			<?php
			}else{  ?>
			<option><?php if($row['Color_1']==null){echo 'Unvailable';}else{echo $row['Color_1'];}?></option>
			<option><?php if($row['Color_2']==null){echo 'Unvailable';}else{echo $row['Color_2'];}?></option>
			<option><?php if($row['Color_3']==null){echo 'Unvailable';}else{echo $row['Color_3'];}?></option>
			<option><?php if($row['Color_4']==null){echo 'Unvailable';}else{echo $row['Color_4'];}?></option>
			<option><?php if($row['Color_5']==null){echo 'Unvailable';}else{echo $row['Color_5'];}?></option>
			<?php
		}?>
		</select>
			</span>
		</div>
		<div style='display:flex;width:100%;margin-bottom:30px'>
			<span style='width:25%;text-align:right;margin-right:20px'>Quantity:</span>
			<span style='text-align:left'>
				<div class="input-group" style=''>
			<div onclick='minus()' style='background:#F4F4F4;;border-radius:30px; min-width:30px; max-width: 30px;text-align: center; justify-content:center;align-content: center;z-index:20;box-shadow: 0px 2px 1px 1px grey; cursor:pointer'><i class='fas fa-minus'></i></div>
             <input id ='qty' type="text" id="quantity" name="quantity" class=" input-number" value="1" min="1" max="100" style ='width:20px;border:none; text-align:center; font-size:12px'>
             
             <div onclick='plus()' style='background:#F4F4F4;border-radius:30px;min-width:30px; max-width: 30px;text-align: center; justify-content:center;align-content: center; z-index:20; box-shadow: 0px 2px 1px 1px grey; cursor:pointer' ><i class='fas fa-plus'></i></div>
         	</div>
			</span>
		</div>
		
		</div>
		<input type = 'hidden' name = 'id' value=<?php echo $_GET["id"] ?>>
		<button style ='font-size:13px;width:100%;background:orange;color:white; border:none; box-shadow:2px 2px 5px 0px gray' class = 'btn border-dark' name= 'submit_to_cart'><i class='far fa-shopping-cart'></i>ADD TO CART</button>
		<button style ='margin-top:3px;font-size:13px;width:100%; border:none; box-shadow:2px 2px 5px 0px gray;background: #462C98;color:white' class = 'btn border-dark'><a href='my_cart.php' style='text-decoration:none; color:white'>CHECK OUT</a></button>
		</form>
		</div>
		<div class = 'delivery_details' style = 'min-height:200px;font-size:15px;'>
			<span style='padding:10px; font-size:15px;'> DELIVERY</span>
			 <hr style='width:75%'>
			 <span style='min-height:8vh' class ='col-sm-12'>Delivey Details</span><br>
			<div style='width:90%; margin-left:5%; margin-top:15px;margin-bottom:15px;'><i class="fas fa-shipping-fast fax3" style='color:purple'></i>
				Delivery before:
				<?php 

				$date = new DateTime();
				$date->modify("+3 day");
				echo $date->format("l, jS F,Y");?>
			</div>
			 <hr style='width:75%'>
			 <span style='min-height:8vh' class ='col-sm-12'>Product Returns</span><br>
			 <div style='width:90%; margin-left:5%; margin-top:15px;margin-bottom:15px;'><i class="fas fa-undo fax3"></i>
			 	For unsuitable purchases, see details of our <a href='return_policy.php' style='text-decoration:none'>Return Policy</a>
			 </div>
			 <hr style='width:75%'>
			 
		</div>

	</div>
	
	<div style='background: #F1F1F1'>
	<div class='prod_desc_2' style='background: #F1F1F1;margin-left:7vw;margin-right:7vw'>
		<div style='font-size:15px;box-sizing:border-box;padding:10px;background:white; min-height:20vh'>
			<h6>Product Description</h6>
			<hr>
			<p><?php echo $row['Description']?></p>
		</div>
		<div style='font-size:15px;box-sizing:border-box;padding:10px;background:white; margin-top:10px; min-height:20vh'>
			<h6>Specifications</h6>
			<hr>
			<p><?php echo $row['Specifications']?></p>
		</div>
		<div style='font-size:15px;box-sizing:border-box; padding:10px;background:white; margin-top:10px; min-height:20vh;padding-bottom: 80px' >
			<h6>Customer Reviews</h6>
			<hr>
			<span class='row'>
			<div style = '' class='col-sm-7'>
				
			<?php 
				$code = $row['Code'];
				$sql3 = "SELECT * FROM rating WHERE Code = '$code' LIMIT 7;";
				$result3 = mysqli_query($con, $sql3);
				$check3 = mysqli_num_rows($result3);
				if($check3==true){
					while($row3=mysqli_fetch_array($result3)){
					?>
				<div class = 'container' style='margin-top:5px; min-height:150px;height:150px;overflow: auto'>
					<div style='font-family:verdana; color:purple'><?php echo strtoupper($row3['User_name']);?></div> 
					<div><?php $rating = $row3['Rating'];?></div> 
					<?php require('rating.php');?>
					<div style='font-weight:bold;'><?php echo $row3['Review_title'];?></div> 
					<div style=''><?php echo $row3['Review_text'];?></div>
					<hr>

				 </div>
			<?php
			}
			?>
			<a href='see_all.php?Code=<?=$code?>' class = ''style=';padding:10px;background:white; border:none;float:right; color:'>See All<i class="fa fa-caret-right"></i></a>
			<?php
		}
		else{?>
			<div class = 'container' style='margin-top:5px; min-height:150px;height:150px;overflow: auto'>No ratings yet. Purchase to leave a rating.</div>
		<?php
		}
					
				?>
				</div>	
				<span class='col-sm-4'>
				<div class ='row' style='margin-left:10px;max-width:200px;min-height:400px;height:400px; '>
				<div class ='col-sm-12' style='background:white; margin:1px;min-height:150px;height:150px; border:none; background: #efefef'>
				<div style='text-align:center'>PRODUCT RATING </div>
				<!-- <br> -->
					<div>
					<?php 
					$sql4 = "SELECT * FROM rating WHERE Code = '$code';";
					$result4 = mysqli_query($con, $sql4);
					$check = mysqli_num_rows($result4);
					$sum4 = 0;
					$count4=0;
					$rating = 0;
					if($check==true){
					while($row4=mysqli_fetch_array($result4)){
						$sum4+=$row4['Rating'];
						$count4++;
					}		
					$rating = $sum4/$count4;?>
					<div style= 'margin-left:10px;font-size:25px;color:lightsteelblue'><?php echo $rating . '/5';?></div>


					<div style='margin-left:10px'> <?php require('rating.php');}?></div>
					 <div style='text-align:center; font-size:19px'><?php echo $check;?> ratings</div>
					</div>
					<?php if($rating){?>
					<div class ='' style='border-top:1px solid gray;background:white; margin:1px;min-height:200px; max-width:200px;'>
						<?php 
						$sql5 = "SELECT * FROM rating WHERE Code ='$code' AND Rating = '5' ;";
						$result5 = mysqli_query($con, $sql5);
						$check5 =mysqli_num_rows($result5);
						$row5 = mysqli_fetch_assoc($result5);
						$rating = $row5['Rating'];
						?>
						<div style='margin-left:10px; font-size:15px'><?=$check5?> Customers <?php require('rating_2.php')?></div>
						<?php 
						$sql6 = "SELECT * FROM rating WHERE Code ='$code' AND Rating = '4' ;";
						$result6 = mysqli_query($con, $sql6);
						$check6 =mysqli_num_rows($result6);
						$row6 = mysqli_fetch_assoc($result6);
						$rating = $row6['Rating'];
						?>
						<div style='margin-left:10px; font-size:15px'><?=$check6?> Customers <?php require('rating_2.php')?></div>
						<?php 
						$sql7 = "SELECT * FROM rating WHERE Code ='$code' AND Rating = '3' ;";
						$result7 = mysqli_query($con, $sql7);
						$check7 =mysqli_num_rows($result7);
						$row7 = mysqli_fetch_assoc($result7);
						$rating = $row7['Rating'];
						?>
						<div style='margin-left:10px; font-size:15px'><?=$check7?> Customers <?php require('rating_2.php')?></div>
						<?php 
						$sql8 = "SELECT * FROM rating WHERE Code ='$code' AND Rating = '2' ;";
						$result8 = mysqli_query($con, $sql8);
						$check8 =mysqli_num_rows($result8);
						$row8 = mysqli_fetch_assoc($result8);
						$rating = $row8['Rating'];
						?>
						<div style='margin-left:10px; font-size:15px'><?=$check8?> Customers <?php require('rating_2.php')?></div>
						<?php 
						$sql9 = "SELECT * FROM rating WHERE Code ='$code' AND Rating = '1' ;";
						$result9 = mysqli_query($con, $sql9);
						$check9 =mysqli_num_rows($result9);
						$row9 = mysqli_fetch_assoc($result9);
						$rating = $row9['Rating'];
						?>
						<div style='margin-left:10px; font-size:15px'><?=$check9?> Customers <?php require('rating_2.php')?></div>
					</div>
					<?php }
					else{
						echo '';
					}?>
				</div>
				</div>
				</span>		
				
				</span>		
			
		</div>
	</div>
	</div>
	<?php

	}
}
else{
	echo '';
}
?>

<script>
	document.getElementById('Image').addEventListener('click',show);
	document.getElementById('Image_1').addEventListener('click',show1);
	document.getElementById('Image_2').addEventListener('click',show2);
	document.getElementById('Image_3').addEventListener('click',show3);
	document.getElementById('Image_4').addEventListener('click',show4);

	let img = 'Image';
	let img1 = 'Image_1';
	let img2 = 'Image_2';
	let img3 = 'Image_3';
	let img4 = 'Image_4';
	
		function show(){
			console.log('show');
			xhr = new XMLHttpRequest();
			xhr.open('GET','show_pic.php?id=<?php echo $Id?>&&img=Image',true);
			xhr.onload=function(){
				if(this.status==200)
				{
					console.log(this.status);
					document.getElementById('desc_img').innerHTML = this.responseText;
				}
			}
			xhr.send();
		}
		function show1(){
			console.log('show');
			xhr = new XMLHttpRequest();
			xhr.open('GET','show_pic.php?id=<?php echo $Id?>&&img1=Image_1',true);
			xhr.onload=function(){
				if(this.status==200)
				{
					console.log(this.status);
					document.getElementById('desc_img').innerHTML = this.responseText;
				}
			}
			xhr.send();
		}
		function show2(){
			console.log('show');
			xhr = new XMLHttpRequest();
			xhr.open('GET','show_pic.php?id=<?php echo $Id?>&&img2=Image_2',true);
			xhr.onload=function(){
				if(this.status==200)
				{
					console.log(this.status);
					document.getElementById('desc_img').innerHTML = this.responseText;
				}
			}
			xhr.send();
		}		
		function show3(){
			console.log('show');
			xhr = new XMLHttpRequest();
			xhr.open('GET','show_pic.php?id=<?php echo $Id?>&&img3=Image_3',true);
			xhr.onload=function(){
				if(this.status==200)
				{
					console.log(this.status);
					document.getElementById('desc_img').innerHTML = this.responseText;
				}
			}
			xhr.send();
		}
		function show4(){
			console.log('show');
			xhr = new XMLHttpRequest();
			xhr.open('GET','show_pic.php?id=<?php echo $Id?>&&img4=Image_4',true);
			xhr.onload=function(){
				if(this.status==200)
				{
					console.log(this.status);
					document.getElementById('desc_img').innerHTML = this.responseText;
				}
			}
			xhr.send();
		}
		
</script>
<script>
	// document.getElementById('wl').addEventListener('click',wish_list);
	// document.getElementById('add').addEventListener('click', plus);
	// document.getElementById('minus').addEventListener('click', minus);
	// function plus(){
	// 	// e.preventDefault();
	// 	document.getElementById('qty').value++;
	// }
	// function minus(){
	// 	// e.preventDefault();
	// 	q = document.getElementById('qty').value;
	// 	if(q > 1)
	// 	{
	// 		document.getElementById('qty').value--;
	// 	}
	// 	else
	// 	{
	// 		document.getElementById('qty').value=1;
	// 	}
		
	// }
	function wish_list{
		wl.style.color:'gold';
	}

</script>
 <script>
 	// document.getElementById('heart').addEventListener('click', add_to_fav);

 	// function add_to_fav(){
 	// 	document.getElementById('heart').style.color='red';
 		
 	// }


 	function plus(){
 		document.getElementById('qty').value++;
 	}
     function minus(){
	q = document.getElementById('qty').value;
		if(q>1)
		{
		document.getElementById('qty').value--;
		}
		else
		{
			document.getElementById('qty').value=1;
		}
	
	}

     </script>

<script>
    var swiper2 = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 1,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: '.swiper-pagination',
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },      
    });
  </script>

<?php
require('footer.php');
?>

</body>
</html>