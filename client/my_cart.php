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
		<div class = 'container' style='margin-top:10vh; font-size:8px;'>
			<div style='padding-bottom:5px;font-size:13px; color:gray'> MY CART (<?php echo $check?> ITEMS)</div>
	<table class = 'table table-hover table-dark' style='box-shadow:0px 1px 3px 1px #676767'>
		<thead>
			<th style= 'width:20%;colspan:1; text-align:center' class='df'>
				ITEM
			</th>
			<th style= 'width:20%;colspan:1; text-align:center' class='df'>
				QUANTITY
			</th>
			<th style= 'width:20%;colspan:1; text-align:center' class='df'>
				PRICE
			</th>
			<th style= 'width:20%;colspan:1; text-align:center' class='df'>
				SUB TOTAL
			</th>
			<th style= 'width:20%;colspan:1; text-align:center' class='df'>
				
			</th>
		</thead>
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
			
			?>
		<div class = 'container'> 
		<table class = 'table'style='background: #f1f1f1; box-shadow:0px 1px 2px 1px #676767'>
		<tbody>
			<tr style='height:10px; overflow:auto'>
				<td style= 'colspan:2; width:20%'class='im'>
				 <img style = 'display:block; margin-left:auto; margin-right: auto;width:70px;height:70px'src='<?php echo $row['Image']?>' >
				<span class='df'><?php echo'<span style="text-align:center">'.$name.'</span>'?></span>
				</td>
				<td class='fd' style='width:75%'>
				<span class='row'>
				
				<span style="text-align:left; width:60%; " class='fd nam_2 col-sm-8'><?php echo $name?></span>
				</span>
				<span style="text-align:right;width:50%;float:right" class='fd '><?php echo Number_format($price)?></span>
				<span style='font-size:12px; width:50%'></span><?php echo'<span class="fd" style="width:40px;"><span style="font-weight:bolder;font-size:9px">QUANTITY:</span>'.$quantity.'</span>'?>
				<form method='post' action='del_cart_function.php?id=<?php echo $id?>'>
					<button class='fd'type = 'submit_delete' style='margin-left:auto;border:none;border-radius:50px;width:auto;background:inherit; color:white;text-align:center' name='delete_cart_item' onclick=del(<?php echo $id;?>)><span style=''><i style='color:#BE3841' class= 'fas fa-trash'></i></span></button>
				</form>
				</td>
				
				<td style= 'colspan:2; width:20%; text-align:center' class='df'>
				<span><?php echo $quantity?></span>
				</td>
				<td class='df' style= 'colspan:2; width:20%; text-align:center'>
					<?php echo Number_format($price)?>
				</td>
				<td style= 'colspan:2; width:20%; text-align:center'>
				<span class='df'><?php $subTotal= $price * $quantity; echo Number_format($subTotal)?></span><br>		
				</td>
				<td style= 'colspan:2; width:20%; text-align:center'>
				<form method='post' action='del_cart_function.php?id=<?php echo $id?>'>
				<button class='df'type = 'submit_delete' style='margin-left:auto;border:none;border-radius:50px;width:auto;background:inherit; color:white;text-align:center' name='delete_cart_item' onclick=del(<?php echo $id;?>)><span><i style='color:#BE3841' class= 'fas fa-trash'></i></span></button>
				</form>
				</td>
			</tr>
		</tbody>
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