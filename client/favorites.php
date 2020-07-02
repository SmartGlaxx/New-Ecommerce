<style>
	.fd{
		display:none;
	}
	@media screen and (max-width: 500px){
		.df{display:none;}
		.fd{display:block;}
		.dd{margin-top:30px;}
	}
	.cl_fav{
		color:red;
		background: white;
		border:1px solid red;
	}
	.cl_fav:hover{
		color:white;
		background-image: linear-gradient(white, red) ;
		border:none;
	}
	.cl_fav_2{
		color:blue;
		background: white;
		border:1px solid blue;
	}
	.cl_fav_2:hover{
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
$sql="SELECT * FROM favorite WHERE User_name ='$username';";
$result=mysqli_query($con, $sql);
$check =mysqli_num_rows($result);

if($check==true)
{

?>

<div class='dd container text-center py-2' style='border:2px solid lightgreen; width:100%; font-size:12px'>MY FAVORITES</div>
<table class='table table-danger df'>
	<tr>
		<th style='width:25%; text-align:center'>Item</th>
		<th style='width:25%; text-align:center'>Name</th>
		<th style='width:25%; text-align:center'>Price</th>
		<th style='width:25%; text-align:center'></th>
	</tr>
</table>
<?php
	while($row=mysqli_fetch_assoc($result)){

		$code = $row['Code'];
		$id = $row['Id'];
		$sql2="SELECT * FROM products WHERE Code ='$code';";
		$result2=mysqli_query($con, $sql2);
		$check2 =mysqli_num_rows($result2);
		if($check2==true)
		{
		$row2=mysqli_fetch_assoc($result2);
				// echo $row2['Id'];
		?>
		<table class='table df'>
			<tr>
				<td style='width:25%; text-align:center'>
				<a data-aos="fade-left" data-aos-duration="2000" data-aos-delay="50" class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row2['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
				<img style='width:100px;min-width:40px;max-width:150px' src=<?php echo $row['Image'] ?>></a></td>
				<td style='width:25%; text-align:center'><?php echo $row['Name'] ?></td>
				<td style='width:25%; text-align:center'><?php echo '₦'.number_format($row['Price']) ?></td>
					
				<td>
					<form method='post' action='del_order_function.php?id=<?php echo $id?>'>
						<button name ='delete_fav_item' style='background: white; border:3px solid red'  onclick=del(<?php echo $id;?>)>		
					<i class='fas fa-trash' style='color:#BE3841' ></i></td>
						</button>
					</form>
				
			</tr>
		</table>
		<div style='text-align:center;margin-top: 30px;font-size: 17px; color:black' class='fd'>
			<div>
				<a data-aos="fade-left" data-aos-duration="2000" data-aos-delay="50" class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row2['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
				<img style='margin-top:10px;width:100px;min-width:40px;max-width:150px' src=<?php echo $row['Image'] ?>>
			</div><br>
			<span style='font-size: 10px; color:black'>Name:</span>
			<div><?php echo $row['Name'] ?></div><br>
			<span style='font-size: 10px; color:black'>Price:</span>
			<div><?php echo '₦'.number_format($row['Price']) ?>
			</div><br>
			</a>
			<div>
			<form method='post' action='del_order_function.php?id=<?php echo $id?>'>
				<button name ='delete_fav_item' style='background: white; border:3px solid red'  onclick=del(<?php echo $id;?>)>		
			<i class='fas fa-trash' style='color:#BE3841' ></i></td>
				</button>
			</form>
			</div>

		</div>
		
			
	<?php
	}
	}
	?>
	<button type="button" class="btn cl_fav" data-toggle="modal" data-target="#myModal">
  CLEAR FAVORITES
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
      	
      <button name='clear_fav' style='width:40%;text-align: center;margin:5%' class='cl_fav' >CLEAR FAVORITES</button>
      <button name='clear_fav_2' data-dismiss="modal" style='float:right;width:40%;text-align: center;margin:5%' class='cl_fav_2' >CANCEL</button>     
        </form>
     <div class='modal-footer'>
     	
     </div>

    </div>
  </div>
</div>

<?php
}
else{

	?>
<div class='dd container text-center py-2' style='border:2px solid lightgreen; width:100%; font-size:12px'>NO FAVORITES ADDED</div>

<?php	

}
}
?>
