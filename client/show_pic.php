<?php
require('connect.php');
if(isset($_GET['id'])){

$Id = $_GET['id'];

if(isset($_GET['img']))
{
	$img =$_GET['img'];
	if($img == 'Image')
{
	$sql = "SELECT * FROM products WHERE Id = '$Id' ;";
	$result = mysqli_query($con, $sql);
	$check = mysqli_num_rows($result);
	$row=mysqli_fetch_assoc($result);
		if($check == true)
		{?>
		<img class = 'd_img' style = ''src='<?php echo $row['Image']?>'>	 
		
		<?php
		}
	}
}

if(isset($_GET['img1']))
{
	$img1 =$_GET['img1'];
	if($img1 == 'Image_1')
{
	$sql = "SELECT * FROM products WHERE Id = '$Id' ;";
	$result = mysqli_query($con, $sql);
	$check = mysqli_num_rows($result);
	$row=mysqli_fetch_assoc($result);
		if($check == true)
		{?>
		<img class = 'd_img' style = ''src='<?php echo $row['Image_1']?>'>	 
		
		<?php
		}
	}
}

if(isset($_GET['img2']))
{
	$img2 =$_GET['img2'];
	if($img2 == 'Image_2')
{
	$sql = "SELECT * FROM products WHERE Id = '$Id' ;";
	$result = mysqli_query($con, $sql);
	$check = mysqli_num_rows($result);
	$row=mysqli_fetch_assoc($result);
		if($check == true)
		{?>
		<img class = 'd_img' style = ''src='<?php echo $row['Image_2']?>'>	 
		
		<?php
		}
	}
}
if(isset($_GET['img3']))
{
	$img3 =$_GET['img3'];
	if($img3 == 'Image_3')
{
	$sql = "SELECT * FROM products WHERE Id = '$Id' ;";
	$result = mysqli_query($con, $sql);
	$check = mysqli_num_rows($result);
	$row=mysqli_fetch_assoc($result);
		if($check == true)
		{?>
		<img class = 'd_img' style = ''src='<?php echo $row['Image_3']?>'>	 
		
		<?php
		}
	}
}

if(isset($_GET['img4']))
{
	$img4 =$_GET['img4'];
	if($img4 == 'Image_4')
{
	$sql = "SELECT * FROM products WHERE Id = '$Id' ;";
	$result = mysqli_query($con, $sql);
	$check = mysqli_num_rows($result);
	$row=mysqli_fetch_assoc($result);
		if($check == true)
		{?>
		<img class = 'd_img' style = ''src='<?php echo $row['Image_4']?>'>	 
		
		<?php
		}
	}
}


}
?>