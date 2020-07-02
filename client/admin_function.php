<?php
require('connect.php');
require('header.php');


if(isset($_POST['submit_product'])){

  	$code = mysqli_real_escape_string($con,$_POST['code']);
    $sql = "SELECT * FROM products WHERE Code = '$code';";
    $result = mysqli_query($con, $sql);
    $check = mysqli_num_rows($result);
  if($check == false)
  {
	$product_name = mysqli_real_escape_string($con,$_POST['product_name']);
	$price = mysqli_real_escape_string($con,$_POST['price']);
	$list_price = mysqli_real_escape_string($con,$_POST['list_price']);
	$size_1 = mysqli_real_escape_string($con,$_POST['size_1']);
	$size_2 = mysqli_real_escape_string($con,$_POST['size_2']);
	$size_3 = mysqli_real_escape_string($con,$_POST['size_3']);
	$size_4 = mysqli_real_escape_string($con,$_POST['size_4']);
	$size_5 = mysqli_real_escape_string($con,$_POST['size_5']);
	$color_1 = mysqli_real_escape_string($con,$_POST['color_1']);
	$color_2 = mysqli_real_escape_string($con,$_POST['color_2']);
	$color_3 = mysqli_real_escape_string($con,$_POST['color_3']);
	$color_4 = mysqli_real_escape_string($con,$_POST['color_4']);
	$color_5 = mysqli_real_escape_string($con,$_POST['color_5']);
	$category = mysqli_real_escape_string($con,$_POST['category']);
	$code = mysqli_real_escape_string($con,$_POST['code']);
	$available = mysqli_real_escape_string($con,$_POST['available']);
	$description = mysqli_real_escape_string($con,$_POST['description']);
	$specifications = mysqli_real_escape_string($con,$_POST['specifications']);
	
	if(!empty($product_name) && !empty($price) && !empty($list_price) && !empty($category) && !empty($code) && !empty($available) && !empty($description) && !empty($specifications))
	{
		if(	!preg_match("/^[\" \"]*$/", $product_name) ||
			!preg_match("/^[0-9]*$/", $price) ||
			!preg_match("/^[0-9]*$/", $list_price) ||
			!preg_match("/^[a-zA-Z0-9]*$/", $code) ||
			!preg_match("/^[0-9]*$/", $available))
		{
			?>
		<script>
			window.location.href='admin.php?numbers_required_or_no_double_quotes';
		</script>
		<?php
		}
		else{
			
			$pic = $_FILES['picture'];
			$pic2 = $_FILES['picture_2'];
			$pic3 = $_FILES['picture_3'];
			$pic4 = $_FILES['picture_4'];
			$pic5 = $_FILES['picture_5'];

			$picName = $_FILES['picture']['name'];
			$picName2 = $_FILES['picture_2']['name'];
			$picName3 = $_FILES['picture_3']['name'];
			$picName4 = $_FILES['picture_4']['name'];
			$picName5 = $_FILES['picture_5']['name'];

			$picTempName = $_FILES['picture']['tmp_name'];
			$picTempName2 = $_FILES['picture_2']['tmp_name'];
			$picTempName3 = $_FILES['picture_3']['tmp_name'];
			$picTempName4 = $_FILES['picture_4']['tmp_name'];
			$picTempName5 = $_FILES['picture_5']['tmp_name'];

			$picError = $_FILES['picture']['error'];
			$picError2 = $_FILES['picture_2']['error'];
			$picError3 = $_FILES['picture_3']['error'];
			$picError4 = $_FILES['picture_4']['error'];
			$picError5 = $_FILES['picture_5']['error'];

			$picSize = $_FILES['picture']['size'];
			$picSize2 = $_FILES['picture_2']['size'];
			$picSize3 = $_FILES['picture_3']['size'];
			$picSize4 = $_FILES['picture_4']['size'];
			$picSize5 = $_FILES['picture_5']['size'];

			$picType = $_FILES['picture']['type'];
			$picType2 = $_FILES['picture_2']['type'];
			$picType3 = $_FILES['picture_3']['type'];
			$picType4 = $_FILES['picture_4']['type'];
			$picType5 = $_FILES['picture_5']['type'];

			$picAllowed = array("jpg", "jpeg", "png") ;

			$picBreaker = explode('.',$picName);
			$picBreaker2 = explode('.',$picName2);
			$picBreaker3 = explode('.',$picName3);
			$picBreaker4 = explode('.',$picName4);
			$picBreaker5 = explode('.',$picName5);

			$picExt = strtolower(end($picBreaker));
			$picExt2 = strtolower(end($picBreaker2));
			$picExt3 = strtolower(end($picBreaker3));
			$picExt4 = strtolower(end($picBreaker4));
			$picExt5 = strtolower(end($picBreaker5));

			if($picError == true || $picError2 == true || $picError3 == true || $picError4 == true || $picError5 == true)
			{
			?>
			<script>
				window.location.href='admin.php?upload=error'
			</script>
			<?php 
			}else{
				if(in_array($picExt, $picAllowed) && in_array($picExt2, $picAllowed) && in_array($picExt3, $picAllowed) && in_array($picExt4, $picAllowed) && in_array($picExt5, $picAllowed))
					{
					if($picSize > 5000000 && $picSize2 > 5000000 && $picSize3 > 5000000 && $picSize4 > 5000000 && $picSize5 > 5000000){
					?>
					<script>
						window.location.href='admin.php?picSize=tooLarge';
					</script>
					<?php
					}
					else{
			
						$picName = uniqId('',true).'.'.$picExt;
						$picName2 = uniqId('',true).'.'.$picExt2;
						$picName3 = uniqId('',true).'.'.$picExt3;
						$picName4 = uniqId('',true).'.'.$picExt4;
						$picName5 = uniqId('',true).'.'.$picExt5;

						$picLocation = 'uploads/'.$picName;
						$picLocation2 = 'uploads/'.$picName2;
						$picLocation3 = 'uploads/'.$picName3;
						$picLocation4 = 'uploads/'.$picName4;
						$picLocation5 = 'uploads/'.$picName5;

						move_uploaded_file($picTempName, $picLocation);
						move_uploaded_file($picTempName2, $picLocation2);
						move_uploaded_file($picTempName3, $picLocation3);
						move_uploaded_file($picTempName4, $picLocation4);
						move_uploaded_file($picTempName5, $picLocation5);

		
						$sql = "INSERT IGNORE INTO `products`(`Name`, `Price`, `List_Price`, `Image`, `Image_1`, `Image_2`, `Image_3`, `Image_4` ,`Size_1` ,`Size_2` ,`Size_3` ,`Size_4` ,`Size_5` ,`Color_1` ,`Color_2` ,`Color_3` ,`Color_4` ,`Color_5` , `Category`, `Description`, `Specifications`, `Available`, `Code`) VALUES ('$product_name','$price','$list_price','$picLocation','$picLocation2','$picLocation3','$picLocation4','$picLocation5','$size_1','$size_2','$size_3','$size_4','$size_5','$color_1','$color_2','$color_3','$color_4','$color_5','$category','$description','$specifications',$available,'$code');";
			            mysqli_query($con, $sql);?>
			            
			            <script>
			            	window.location.href='admin.php?Upload=done';
			            </script>
            			<?php exit();
					}
				}
				else{
					?> 
	            <script>
	            	window.location.href='admin.php?upload=file=unallowed';
	            </script>
    			<?php 
				}

			}
		}




	}
	else{
		?> 
        <script>
        	window.location.href='admin.php?fields_empty';
        </script>
	<?php
	}
	}
	else{
		?>
        <script>
        	window.location.href='admin.php?Upload=done';
        </script>
		<?php
		exit();
	}



}
else if(isset($_POST['submit_delete'])){
	if(isset($_POST['del'])){
		$del=$_POST['del'];?>
		<div style='width:90vw;margin-left:5vw;margin-right:5vw;'>
		<?php $sql = "SELECT * FROM products WHERE Name LIKE '%$del%' OR  Description LIKE '%$del%'";
        $result = mysqli_query($con, $sql);
        $check = mysqli_num_rows($result);
        
        if($check){
        	?>
       		 <div class='text-center' style='color:darkgray'><h6>Select Item to Delete</h6></div>

        	<div style='margin-left:2vw;margin-right:2vw;margin-top:40px;margin-bottom:200px;display:grid; grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
        	<?php 
        	while($row = mysqli_fetch_assoc($result)){
        	$id = $row['Id'];
        	?>
        	<form method='GET' action='admin_product_delete.php?'>
        	<div style='width:200px; margin-bottom:10px;'>
        	<img src='<?php echo $row['Image']?>' style='min-width:100px; width:150px;max-width:150px'><br>
        	<div style='min-width:100px; width:150px;max-width:150px;text-align:center; height:80px; max-height:80px; min-height:50px; overflow:hidden'><?php echo $row['Name']?></div><br>
        	<input type ='hidden' name='id' value='<?php echo $row['Id']?>'>
        	<button name='del_1' class='btn btn-block' style='margin-top:-20px;min-width:100px; width:150px;max-width:150px;background: white;'><i style='color:#BE3841' class= 'fas fa-trash'></i></button>
        	</div>
        	</form>
        <?php
        }
        ?>
        </div>
    	
        <?php
        }
        else{
        	?>
        	<div>No Items March your Search</div>
        <?php
        }
        ?>
    </div>
      <?php  
	}
	else{
		?>
	<script>
		window.location.href='index.php';
	</script>
<?php
	}
}
else{
	?>
<script>
	window.location.href='index.php';
</script>
<?php
}
?>