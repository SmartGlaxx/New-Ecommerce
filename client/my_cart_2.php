<?php
require('connect.php');
require('header.php');

if(isset( $_SESSION['username'])){
	$username = $_SESSION['username'];
	$sql = "SELECT * FROM cart WHERE User_name = '$username';";
	$result = mysqli_query($con,$sql);
	$check = mysqli_num_rows($result);
	
	if($check==true){
		?>
		<style>
			.paybtn:hover{
				background:green;
				color:white;
			}
		</style>
		<div style='min-height:55vh; margin-bottom:10vh'>
		<div class = '' style='margin-top:10vh; font-size:8px;margin-left:7vw; margin-right:7vw'>
			<div style='padding-bottom:5px;font-size:13px; color:gray'> MY CART (<?php echo $check?> ITEMS)</div>
	<table class= 'table df' style='background: #1C8D8D; color:white'>
		<tr class = 'df'>
			<td class = 'df' style='width:17%; text-align:center; font-size:15px'>ITEM</td>
			<td class = 'df' style='width:17%;text-align:center;font-size:15px'>NAME</td>
			<td class = 'df' style='width:17%;text-align:center;font-size:15px'>QUANTITY</td>
			<td class = 'df' style='width:17%;text-align:center;font-size:15px'>PRICE</td>
			<td class = 'df' style='width:17%;text-align:center;font-size:15px'>SUB TOTAL</td>
			<td></td>
		</tr>
	</table>
</div>
<style>
	.df{
		
	}
	.fd{
		display:none;
		width:400px;
	}
	@media screen and (max-width:500px){
		.df{display:none}
		.fd{display:block}
		.im{width:40vw;}
		.nam_2{width:60vw;}
	}
</style>

		<?php
		$Total=0;
		 while($row = mysqli_fetch_assoc($result)){
			$id =$row['Id'];
			$name =$row['Name'];
			$size =$row['Size'];
			$color =$row['Color'];
			$image =$row['Image'];
			$quantity =$row['Quantity'];
			$price =$row['Price'];
			$code =$row['Code'];
			$subTotal =0;

			$sql2 = "SELECT * FROM products";
			$result2 = mysqli_query($con,$sql2);
			$row2 = mysqli_fetch_assoc($result2);
			
			?>
		<div class = '' style='margin-left:7vw; margin-right:7vw'> 
		<table class='table table-hover'>
			<tr style= 'margin-top:5vh'>
				
				<div class='df'>
				<td class='df' style='width:17%; align-items:center; justify-content:center'>
				<!-- <a data-aos="fade-left" data-aos-duration="2000" data-aos-delay="50" class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'> -->	
				
				<img data-aos="fade-right" data-aos-duration="2000" data-aos-delay="50" style = 'width:80%;margin-right:10%; margin-left:10%' src = "<?php echo $row['Image']?>">
				
				<!-- </a> -->
				</td>

				<td data-aos="fade-up" data-aos-duration="2000"  class='df' style=';width:17%;text-align:center'><?php echo $row['Name']?>
				</td>
				<td data-aos="fade-up" data-aos-duration="2000" class='df' style=';width:17%;text-align:center'><?php echo $row['Quantity']?></td>				
				<td data-aos="fade-up" data-aos-duration="2000" class='df' style=';width:17%;text-align:center'><?php echo '₦'. Number_format($row['Price'])?></td>
				<td data-aos="fade-up" data-aos-duration="2000" class='df' style='width:17%;text-align:center; font-weight:bold'><?php $subTotal = ($price*$quantity); echo '₦'.  Number_format($subTotal)?></td>
				<td data-aos="fade-up" data-aos-duration="2000" class='df' style='width:15%;'>
					<form method='post' action='del_cart_function.php?id=<?php echo $id?>'>
					<button class='df'type = 'submit_delete' style='margin-left:auto;border:none;border:3px solid red;width:auto;background:inherit; color:white;text-align:center' name='delete_cart_item' onclick=del(<?php echo $id;?>)><span style=''><i style='color:#BE3841' class= 'fas fa-trash'></i></span></button>
					</form>
				</td>

				</div>
				

				<!-- <a data-aos="fade-left" data-aos-duration="2000" data-aos-delay="50" class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'> -->
				<div class='fd'>
				<img data-aos="fade-right" data-aos-duration="2000" data-aos-delay="50" class='fd' style = 'width:100px;min-width:40px;max-width:150px'src = "<?php echo $row['Image']?>">
				</div>
					<?php echo "<span data-aos='fade-up' data-aos-duration='2000' class='fd' style='width:65%;float:right'>".$row['Name']."</span>"?>
					</div>
					<br>
				<span data-aos='fade-up' data-aos-duration='2000' class = 'fd' style='max-width:250px; min-width:70px; width:200px;text-align:left'><?php echo '₦'. Number_format($row['Price'])?></span>
				<span data-aos='fade-up' data-aos-duration='2000' class = 'fd' style='max-width:250px; min-width:70px; width:200px;text-align:left; color:gray; margin-top:2vh; font-size:10px;font-weight:bold'><?php echo 'Subtotal:';?><br><?php echo '₦'.  Number_format($subTotal)?></span>
				<div data-aos='fade-up' data-aos-duration='2000' style='margin-top:2px;'>
					<form method='post' action='del_cart_function.php?id=<?php echo $id?>'>
						<button class='fd'type = 'submit_delete' style='margin-left:auto;border:none;border:3px solid red;width:auto;background:inherit; color:white;text-align:center' name='delete_cart_item' onclick=del(<?php echo $id;?>)><span style=''><i style='color:#BE3841' class= 'fas fa-trash' ></i></span></button>
					</form>
				</div>
			
				<!-- </a> -->
			</tr>
		</table>

	<div><?php $Total+=$subTotal;?></div>
</div><hr class='container'>
	<?php	
		$names = '';
		$sizes = '';
		$colors = '';
		$images = '';
		$quantities = '';
		$prices = '';
		$codes = '';
		$sql5 = "SELECT * FROM cart WHERE User_name = '$username';";
		$result5 = mysqli_query($con,$sql5);
		$check5 = mysqli_num_rows($result5);
		while($row5=mysqli_fetch_assoc($result5)){
			$names .= $row5['Name'].',';
			$sizes .= $row5['Size'];
			$colors .= $row5['Color'].',';
			$images .= $row5['Image'].',';
			$quantities .= $row5['Quantity'].',';
			$prices .= $row5['Price'].',';
			$codes .= $row5['Code'].',';
		}

	}?>
	<div class='container' style='display:flex'>
	<div style='font-weight:bolder; color:green;'>TOTAL : <?php echo '₦'. Number_format($Total); ?></div>
	<form method='post' action='payPage.php?names=<?php echo $names;?>&&sizes=<?php echo $sizes;?>&&colors=<?php echo $colors;?>&&images=<?php echo $images;?>&&quantities=<?php echo $quantities;?>&&codes=<?php echo $codes;?>&&check=<?php echo $check;?>' style='margin-left:auto'>
		<input type ='hidden' name = 'prices' value ='<?php echo $prices ?>'>
		<input type ='hidden' name = 'total' value ='<?php echo $Total ?>'>
		<button type ='submit_pay' class= 'btn btn-mute paybtn' style='border:1px solid green; font-size:15px'><i class='fa fa-shopping-cart'></i>CHECKOUT</button>
	</form>
	</div>
	<?php

	}
	else if($check==false){
		?>
		<div class ='container' style=' text-align:center;justify-content: center'>
			<div style='margin-top:10vh;margin-bottom:10vh; position: relative;height: 200px;border: 3px solid #423BD3;align-content: center'>
				<div style='margin-left:25%;position:sticky;width: 50%;bottom: 10px;text-align:center; font-size:25px; color:darkgray;'>No items in your Cart<br>
					<a href='index.php' style=''><div style='font-size:19px; text-decoration:none; padding:10px;margin-top:15px;background:orange; color:white'>Start Shopping</div></a>
				</div>
			</div>
		</div>
	<?php
}
}
else{?>
	<div class='container' style='min-height:70vh; display:flex'>
		<div style='margin:auto; width:50%; text-align: center; font-size:21px; color:darkgray'>To Access Your Cart, Please Sign In <a href='login.php' style='text-decoration:none'>Here</a></div>
	</div>
<?php
}
?>
</div>
	
<!-- <script>
	document.getElementById('delete').addEventListener('click',del);

	function del(id){
		<?php
		echo id;
		// $sql = "DELETE * FROM cart WHERE Id ='id';";
		// $result = mysqli_query($result);
		?>
	}
</script> -->
</body>
</html>
<?php
require('footer.php');
?>