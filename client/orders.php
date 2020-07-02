<?php
require('connect.php');
// require('header.php');

$sql="SELECT * FROM orders;";
$result = mysqli_query($con, $sql);
$check = mysqli_num_rows($result);
?>
<style>
	.fd{
		display:none;
	}
	@media screen and (max-width:700px){
		.fd{display:block}
		.df{display:none}
	}
</style>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>New E-cOMMERCE</title>
</head>
<body>

</body>
</html>
<div style='margin-left:5vw;margin-right:5vw;width:90vw'>

<table class='table table-hover table-striped df'>
	<thead>
		<th style = 'width:16%;text-align:center'>Customer</th>
		<th style = 'width:16%; text-align:center'>Item</th>
		<th style = 'width:16%; text-align:center'>Product Name</th>
		<th style = 'width:16%; text-align:center'>Price</th>
		<th style = 'width:16%; text-align:center'>Qunatity</th>
		<th>Date</th>
	</thead>
</table>
<?php
while($row=mysqli_fetch_assoc($result)){
	$id = $row['Id'];
	?>
	<table class='table table-hover table-striped df'>
	<tbody>
		<tr>
		<td style = 'width:16%; text-align:center'><?php echo $row['User_name'] ?></td>
		<td style = 'width:16%; text-align:center'><img style='width:100px;'src = '<?php echo $row['Image'] ?>'></td>
		<td style = 'width:16%; text-align:center'><?php echo $row['Name'] ?></td>
		<td style = 'width:16%; text-align:center'><?php echo $row['Price'] ?></td>
		<td style = 'width:16%; text-align:center'><?php echo $row['Quantity'] ?></td>
		<td style = 'width:16%; text-align:center'><?php echo $row['Date'] ?></td>
		<td style = 'text-align:center'>
		<form method='GET' action='admin_product_delete.php'>
			<input type ='hidden' name='id' value='<?php echo $row['Id']?>'>
			<button name ='del_2' type = 'submit_delete' style='margin-left:auto;border:none;border-radius:50px;width:auto;background:inherit; color:black;text-align:center' name='delete_order_item' onclick=del(<?php echo $id;?>)><span style=''><i style='color:red' class= 'fas fa-trash'></i></span></button>
		</form>
		</td>
		</tr>
	</tbody>
</table>
<div class ='fd ' style='background:#F4F4F4; box-shadow:0px 1px 1px 1px gray; margin-top:20px'>
	<div><span style='font-weight:bold; color:black'>Customer User Name: </span><span style='font-weight:bold; color:darkgray'><?php echo $row['User_name'] ?></span></div>
	<div><span style='font-weight:bold; color:black'>Product: </span><img style='width:70px;'src = '<?php echo $row['Image'] ?>'></div>
	<div><span style='font-weight:bold; color:black'>Name:</span> <span style='font-weight:bold; color:darkgray'><?php echo $row['Name'] ?></span></span></div>
	<div><span style='font-weight:bold; color:black'>Price:</span> <span style='font-weight:bold; color:darkgray'><?php echo $row['Price'] ?></span></div>
<div><span style='font-weight:bold; color:black'>Quantity:</span> <span style='font-weight:bold; color:darkgray'><?php echo $row['Quantity'] ?></span></div>
	<div><span style='font-weight:bold; color:black'>Date:</span> <span style='font-weight:bold; color:darkgray'><?php echo $row['Date'] ?></span></div>
	<div><i class='fa fa-trash' style='color:red'></i></div>
</div>

<?php	
}
?>

</div>

