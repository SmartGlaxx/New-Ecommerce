<style>
	.fd{
		display:none;
	}
	@media screen and (max-width: 500px){
		.df{display:none;}
		.fd{display:block;}
		.dd{margin-top:30px;}
	}
	.cl_ord{
		color:red;
		background: white;
		border:1px solid red;
	}
	.cl_ord:hover{
		color:white;
		background-image: linear-gradient(white, red) ;
		border:none;
	}
	.cl_ord_2{
		color:blue;
		background: white;
		border:1px solid blue;
	}
	.cl_ord_2:hover{
		color:white;
		background-image: linear-gradient(white, blue) ;
		border:none;
	}
</style>

<?php
 require('connect.php');
 session_start();
if(isset($_SESSION['username'])){
$username = $_SESSION['username'];
$sql = "SELECT * FROM orders WHERE User_name = '$username';";
$result = mysqli_query($con, $sql);
$check = mysqli_num_rows($result);
	
	if($check == true){
		?>
	<div class='dd container text-center py-2' style='border:2px solid lightgreen; width:100%; font-size:12px'>MY ORDERS</div>
	<table class= 'table df' style='background: #1C8D8D; color:white'>
		<tr class = 'df'>
			<td class = 'df' style='max-width:80px; min-width:70px; width:200px; text-align:left'>ITEM</td>
			<td class = 'df' style='max-width:250px; min-width:70px; width:200px;text-align:left'>NAME</td>
			<td class = 'df' style='max-width:250px; min-width:70px; width:200px;text-align:left'>PRICE</td>
			<td class = 'df' style='max-width:250px; min-width:70px; width:200px;text-align:left'>DATE</td>
			<td></td>
		</tr>
	</table>
	<?php
		while($row = mysqli_fetch_assoc($result)){
			$img = $row['Image'];
			$id = $row['Id'];
			$code = $row['Code'];

			$sql2="SELECT * FROM products WHERE Code ='$code';";
			$result2=mysqli_query($con, $sql2);
			$check2 =mysqli_num_rows($result2);
			if($check2==true)
			{
			$row2=mysqli_fetch_assoc($result2);
			?>

			<table class='table table-hover'>
			<tr style= 'margin-top:5vh'>
				<td style='max-width:80px; min-width:70px; width:200px;'>
					<a data-aos="fade-left" data-aos-duration="2000" data-aos-delay="50" class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row2['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
					<img class='' style = 'width:100px;min-width:40px;max-width:150px'src = "<?php echo $row['Image']?>">
				</a>
					<?php echo "<span class='fd' style='width:65%;float:right'>".$row['Name']."</span>"?>
					<br>
				<span class = 'fd' style='max-width:250px; min-width:70px; width:200px;text-align:left'><?php echo '₦'. Number_format($row['Price'])?></span>
				<span class = 'fd' style='max-width:250px; min-width:70px; width:200px;text-align:left; color:gray; margin-top:2vh; font-size:10px'><?php echo $row['Date']?></span>
				<!-- <form method='post' action='del_order_function.php?id=<?php echo $id?>'>
						<button class='fd'type = 'submit_delete' style='margin-left:auto;border:none;border:3px solid red;width:auto;background:inherit; color:white;text-align:center' name='delete_order_item' onclick=del(<?php echo $id;?>)><span style=''><i style='color:#BE3841' class= 'fas fa-trash' ></i></span></button>
				</form> -->
				</td>
				

				<td class = 'df' style=';max-width:250px; min-width:70px; width:200px;text-align:left'><?php echo $row['Name']?>
				</td>
								
				<td class='df' style=';max-width:250px; min-width:70px; width:200px;text-align:left'><?php echo '₦'. Number_format($row['Price'])?></td>
				<td class='df' style='max-width:250px; min-width:70px; width:200px;text-align:left'><?php echo ($row['Date'])?></td>
				<td class='df'>
						<!-- <form method='post' action='del_order_function.php?id=<?php echo $id?>'>
						<button class='df'type = 'submit_delete' style='margin-left:auto;border:none;border:3px solid red;width:auto;background:inherit; color:white;text-align:center' name='delete_order_item' onclick=del(<?php echo $id;?>)><span style=''><i style='color:#BE3841' class= 'fas fa-trash'></i></span></button>
						</form> -->
				</td>
			</tr>
		</table>

		<?php
		}
	}?>
	
	  <button type="button" class="btn cl_ord" data-toggle="modal" data-target="#myModal">
  CLEAR ORDERS
</button>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h6 class="modal-title text-center">CLEAR TABLE?</h6>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form action='clear_table.php' method='post'>
      	
      <button name='clear_ord' style='width:40%;text-align: center;margin:5%' class='cl_ord' >CLEAR ORDERS</button>
      <button name='clear_ord_2' data-dismiss="modal" style='float:right;width:40%;text-align: center;margin:5%' class='cl_ord_2' >CANCEL</button>     
        </form>
     <div class='modal-footer'>
     	
     </div>

    </div>
  </div>
</div>



	<?php

	}
	else{?>
		<div class='dd container text-center py-2' style='border:2px solid lightgreen; width:100%; font-size:12px'>NO ORDERS YET</div>
	<?php
}
}
?>