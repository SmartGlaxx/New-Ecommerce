<style>
	.fd{
		display:none;
	}
	@media screen and (max-width: 500px){
		.df{display:none;}
		.fd{display:block;}
		.dd{margin-top:30px;}
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
		?>
		<table class='table df'>
			<tr>
				<td style='width:25%; text-align:center'><img style='width:100px;min-width:40px;max-width:150px' src=<?php echo $row['Image'] ?>></td>
				<td style='width:25%; text-align:center'><?php echo $row['Name'] ?></td>
				<td style='width:25%; text-align:center'><?php echo '₦'.number_format($row['Price']) ?></td>
				<td style='width:25%; text-align:center'>REMOVE</td>
			</tr>
		</table>

		<div style='margin-top: 30px;font-size: 17px; color:gray' class='fd'>
			<div><img style='width:100px;min-width:40px;max-width:150px' src=<?php echo $row['Image'] ?>></div><br>
			<span style='font-size: 10px; color:black'>Name:</span><div><?php echo $row['Name'] ?></div><br>
			<span style='font-size: 10px; color:black'>Price:</span><div><?php echo '₦'.number_format($row['Price']) ?></div><br>
			<div><i class='fas fa-trash'></i></div>
		</div>

	<?php
	}
}
}else{
	?>
<div class='dd container text-center py-2' style='border:2px solid lightgreen; width:100%; font-size:12px'>NO FAVORITES ADDED</div>

<?php	
}

?>
