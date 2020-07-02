<?php
require('connect.php');
require('header.php');


if($_GET['id']=='mens_clothing'){
	?>
	<div class = 'products' style='margin-left:2vw;margin-right:2vw;margin-top:40px;margin-bottom:200px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
	<?php	

		$sql = "SELECT * FROM products WHERE Category = 'mens_shirts' OR Category ='mens_trousers' OR Category ='mens_sleepwear' OR  Category ='mens_sportwear' OR Category ='mens_traditional' OR Category ='mens_underwear';";
		$result =mysqli_query($con, $sql);
		$check = mysqli_num_rows($result);
		while($row=mysqli_fetch_assoc($result)){
			?>
			<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true" class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
			<div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
				<img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row['Image']?>'>
			</div>
			 <div style="color:darkgary; text-align:center; font-size:12px"><?php echo ucwords($row['Name']);?></div>
        	<div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row['Price']);?></div>
      </a>
		<?php				
		}
		?>
		</div>
		<?php
}

else if($_GET['id']=='mens_shoes'){
	?>
	<div class = 'products' style='margin-left:2vw;margin-right:2vw;margin-top:40px;margin-bottom:200px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
	<?php	$sql = "SELECT * FROM products WHERE Category = 'mens_shoes';";
		$result =mysqli_query($con, $sql);
		$check = mysqli_num_rows($result);
		while($row=mysqli_fetch_assoc($result)){
			?>
			<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true" class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
			<div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
				<img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row['Image']?>'>
			</div>
			 <div style="color:darkgary; text-align:center; font-size:12px"><?php echo ucwords($row['Name']);?></div>
        	<div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row['Price']);?></div>
      </a>
		<?php				
		}
		?>
		</div>
		<?php
}

else if($_GET['id']=='mens_watches'){
	?>
	<div class = 'products' style='margin-left:2vw;margin-right:2vw;margin-top:40px;margin-bottom:200px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
	<?php	$sql = "SELECT * FROM products WHERE Category = 'mens_watches';";
		$result =mysqli_query($con, $sql);
		$check = mysqli_num_rows($result);
		while($row=mysqli_fetch_assoc($result)){
			?>
			<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true"  class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
			<div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
				<img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row['Image']?>'>
			</div>
			 <div style="color:darkgary; text-align:center; font-size:12px"><?php echo ucwords($row['Name']);?></div>
        	<div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row['Price']);?></div>
      </a>
		<?php				
		}
		?>
		</div>
		<?php
}

else if($_GET['id']=='mens_accessories'){
	?>
	<div class = 'products' style='margin-left:2vw;margin-right:2vw;margin-top:40px;margin-bottom:200px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
	<?php	$sql = "SELECT * FROM products WHERE Category = 'mens_accessories';";
		$result =mysqli_query($con, $sql);
		$check = mysqli_num_rows($result);
		while($row=mysqli_fetch_assoc($result)){
			?>
			<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true"  class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
			<div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
				<img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row['Image']?>'>
			</div>
			 <div style="color:darkgary; text-align:center; font-size:12px"><?php echo ucwords($row['Name']);?></div>
        	<div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row['Price']);?></div>
      </a>
		<?php				
		}
		?>
		</div>
		<?php
}

else if($_GET['id']=='mens_jewelry'){
	?>
	<div class = 'products' style='margin-left:2vw;margin-right:2vw;margin-top:40px;margin-bottom:200px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
	<?php	$sql = "SELECT * FROM products WHERE Category = 'mens_jewelry';";
		$result =mysqli_query($con, $sql);
		$check = mysqli_num_rows($result);
		while($row=mysqli_fetch_assoc($result)){
			?>
			<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true" class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
			<div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
				<img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row['Image']?>'>
			</div>
			 <div style="color:darkgary; text-align:center; font-size:12px"><?php echo ucwords($row['Name']);?></div>
        	<div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row['Price']);?></div>
      </a>
		<?php				
		}
		?>
		</div>
		<?php
}

else if($_GET['id']=='mens_jewelry'){
	?>
	<div class = 'products' style='margin-left:2vw;margin-right:2vw;margin-top:40px;margin-bottom:200px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
	<?php	$sql = "SELECT * FROM products WHERE Category = 'mens_jewelry';";
		$result =mysqli_query($con, $sql);
		$check = mysqli_num_rows($result);
		while($row=mysqli_fetch_assoc($result)){
			?>
			<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true"  class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
			<div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
				<img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row['Image']?>'>
			</div>
			 <div style="color:darkgary; text-align:center; font-size:12px"><?php echo ucwords($row['Name']);?></div>
        	<div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row['Price']);?></div>
      </a>
		<?php				
		}
		?>
		</div>
		<?php
}

else if($_GET['id']=='mens_traditional'){
	?>
	<div class = 'products' style='margin-left:2vw;margin-right:2vw;margin-top:40px;margin-bottom:200px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
	<?php	$sql = "SELECT * FROM products WHERE Category = 'mens_traditional';";
		$result =mysqli_query($con, $sql);
		$check = mysqli_num_rows($result);
		while($row=mysqli_fetch_assoc($result)){
			?>
			<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true"  class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
			<div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
				<img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row['Image']?>'>
			</div>
			 <div style="color:darkgary; text-align:center; font-size:12px"><?php echo ucwords($row['Name']);?></div>
        	<div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row['Price']);?></div>
      </a>
		<?php				
		}
		?>
		</div>
		<?php
}

else if($_GET['id']=='mens_underwears'){
	?>
	<div class = 'products' style='margin-left:2vw;margin-right:2vw;margin-top:40px;margin-bottom:200px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
	<?php	$sql = "SELECT * FROM products WHERE Category = 'mens_underwear';";
		$result =mysqli_query($con, $sql);
		$check = mysqli_num_rows($result);
		while($row=mysqli_fetch_assoc($result)){
			?>
			<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true"  class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
			<div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
				<img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row['Image']?>'>
			</div>
			 <div style="color:darkgary; text-align:center; font-size:12px"><?php echo ucwords($row['Name']);?></div>
        	<div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row['Price']);?></div>
      </a>
		<?php				
		}
		?>
		</div>
		<?php
}

else if($_GET['id']=='mens_sleepwears'){
	?>
	<div class = 'products' style='margin-left:2vw;margin-right:2vw;margin-top:40px;margin-bottom:200px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
	<?php	$sql = "SELECT * FROM products WHERE Category = 'mens_sleepwear';";
		$result =mysqli_query($con, $sql);
		$check = mysqli_num_rows($result);
		while($row=mysqli_fetch_assoc($result)){
			?>
			<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true"  class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
			<div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
				<img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row['Image']?>'>
			</div>
			 <div style="color:darkgary; text-align:center; font-size:12px"><?php echo ucwords($row['Name']);?></div>
        	<div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row['Price']);?></div>
      </a>
		<?php				
		}
		?>
		</div>
		<?php
}

else if($_GET['id']=='mens_sportswears'){
	?>
	<div class = 'products' style='margin-left:2vw;margin-right:2vw;margin-top:40px;margin-bottom:200px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
	<?php	$sql = "SELECT * FROM products WHERE Category = 'mens_sportwear';";
		$result =mysqli_query($con, $sql);
		$check = mysqli_num_rows($result);
		while($row=mysqli_fetch_assoc($result)){
			?>
			<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true"  class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
			<div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
				<img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row['Image']?>'>
			</div>
			 <div style="color:darkgary; text-align:center; font-size:12px"><?php echo ucwords($row['Name']);?></div>
        	<div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row['Price']);?></div>
      </a>
		<?php				
		}
		?>
		</div>
		<?php
}

else if($_GET['id']=='women_clothing'){
	?>
	<div class = 'products' style='margin-left:2vw;margin-right:2vw;margin-top:40px;margin-bottom:200px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
	<?php	$sql2 = "SELECT * FROM products WHERE Category = 'womens_tops' OR Category ='womens_skirts' OR Category ='womens_gowns' OR  Category ='womens_sportwear' OR Category ='womens_traditional' OR Category ='womens_underwear' OR   Category ='womens_sleepwear';";
		$result2 =mysqli_query($con, $sql2);
		$check2 = mysqli_num_rows($result2);
		while($row2=mysqli_fetch_assoc($result2)){
			?>
			<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true"  class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row2['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
			<div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
				<img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row2['Image']?>'>
			</div>
			 <div style="color:darkgary; text-align:center; font-size:12px"><?php echo ucwords($row2['Name']);?></div>
        	<div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row2['Price']);?></div>
      </a>
		<?php				
		}
		?>
		</div>
		<?php
}


else if($_GET['id']=='womens_shoes'){
	?>
	<div class = 'products' style='margin-left:2vw;margin-right:2vw;margin-top:40px;margin-bottom:200px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
	<?php	$sql = "SELECT * FROM products WHERE Category = 'womens_shoes';";
		$result =mysqli_query($con, $sql);
		$check = mysqli_num_rows($result);
		while($row=mysqli_fetch_assoc($result)){
			?>
			<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true"  class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
			<div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
				<img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row['Image']?>'>
			</div>
			 <div style="color:darkgary; text-align:center; font-size:12px"><?php echo ucwords($row['Name']);?></div>
        	<div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row['Price']);?></div>
      </a>
		<?php				
		}
		?>
		</div>
		<?php
}

else if($_GET['id']=='womens_watches'){
	?>
	<div class = 'products' style='margin-left:2vw;margin-right:2vw;margin-top:40px;margin-bottom:200px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
	<?php	$sql = "SELECT * FROM products WHERE Category = 'womens_watches';";
		$result =mysqli_query($con, $sql);
		$check = mysqli_num_rows($result);
		while($row=mysqli_fetch_assoc($result)){
			?>
			<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true"  class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
			<div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
				<img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row['Image']?>'>
			</div>
			 <div style="color:darkgary; text-align:center; font-size:12px"><?php echo ucwords($row['Name']);?></div>
        	<div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row['Price']);?></div>
      </a>
		<?php				
		}
		?>
		</div>
		<?php
}

else if($_GET['id']=='womens_accessories'){
	?>
	<div class = 'products' style='margin-left:2vw;margin-right:2vw;margin-top:40px;margin-bottom:200px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
	<?php	$sql = "SELECT * FROM products WHERE Category = 'womens_accessories';";
		$result =mysqli_query($con, $sql);
		$check = mysqli_num_rows($result);
		while($row=mysqli_fetch_assoc($result)){
			?>
			<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true"  class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
			<div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
				<img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row['Image']?>'>
			</div>
			 <div style="color:darkgary; text-align:center; font-size:12px"><?php echo ucwords($row['Name']);?></div>
        	<div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row['Price']);?></div>
      </a>
		<?php				
		}
		?>
		</div>
		<?php
}

else if($_GET['id']=='womens_jewelry'){
	?>
	<div class = 'products' style='margin-left:2vw;margin-right:2vw;margin-top:40px;margin-bottom:200px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
	<?php	$sql = "SELECT * FROM products WHERE Category = 'womens_jewelry';";
		$result =mysqli_query($con, $sql);
		$check = mysqli_num_rows($result);
		while($row=mysqli_fetch_assoc($result)){
			?>
			<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true"  class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
			<div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
				<img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row['Image']?>'>
			</div>
			 <div style="color:darkgary; text-align:center; font-size:12px"><?php echo ucwords($row['Name']);?></div>
        	<div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row['Price']);?></div>
      </a>
		<?php				
		}
		?>
		</div>
		<?php
}

else if($_GET['id']=='womens_jewelry'){
	?>
	<div class = 'products' style='margin-left:2vw;margin-right:2vw;margin-top:40px;margin-bottom:200px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
	<?php	$sql = "SELECT * FROM products WHERE Category = 'womens_jewelry';";
		$result =mysqli_query($con, $sql);
		$check = mysqli_num_rows($result);
		while($row=mysqli_fetch_assoc($result)){
			?>
			<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true"  class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
			<div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
				<img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row['Image']?>'>
			</div>
			 <div style="color:darkgary; text-align:center; font-size:12px"><?php echo ucwords($row['Name']);?></div>
        	<div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row['Price']);?></div>
      </a>
		<?php				
		}
		?>
		</div>
		<?php
}

else if($_GET['id']=='womens_traditional'){
	?>
	<div class = 'products' style='margin-left:2vw;margin-right:2vw;margin-top:40px;margin-bottom:200px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
	<?php	$sql = "SELECT * FROM products WHERE Category = 'womens_traditional';";
		$result =mysqli_query($con, $sql);
		$check = mysqli_num_rows($result);
		while($row=mysqli_fetch_assoc($result)){
			?>
			<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true"  class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
			<div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
				<img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row['Image']?>'>
			</div>
			 <div style="color:darkgary; text-align:center; font-size:12px"><?php echo ucwords($row['Name']);?></div>
        	<div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row['Price']);?></div>
      </a>
		<?php				
		}
		?>
		</div>
		<?php
}

else if($_GET['id']=='womens_underwears'){
	?>
	<div class = 'products' style='margin-left:2vw;margin-right:2vw;margin-top:40px;margin-bottom:200px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
	<?php	$sql = "SELECT * FROM products WHERE Category = 'mens_underwear';";
		$result =mysqli_query($con, $sql);
		$check = mysqli_num_rows($result);
		while($row=mysqli_fetch_assoc($result)){
			?>
			<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true"  class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
			<div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
				<img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row['Image']?>'>
			</div>
			 <div style="color:darkgary; text-align:center; font-size:12px"><?php echo ucwords($row['Name']);?></div>
        	<div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row['Price']);?></div>
      </a>
		<?php				
		}
		?>
		</div>
		<?php
}

else if($_GET['id']=='womens_sleepwears'){
	?>
	<div class = 'products' style='margin-left:2vw;margin-right:2vw;margin-top:40px;margin-bottom:200px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
	<?php	$sql = "SELECT * FROM products WHERE Category = 'womens_sleepwear';";
		$result =mysqli_query($con, $sql);
		$check = mysqli_num_rows($result);
		while($row=mysqli_fetch_assoc($result)){
			?>
			<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true"  class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
			<div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
				<img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row['Image']?>'>
			</div>
			 <div style="color:darkgary; text-align:center; font-size:12px"><?php echo ucwords($row['Name']);?></div>
        	<div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row['Price']);?></div>
      </a>
		<?php				
		}
		?>
		</div>
		<?php
}

else if($_GET['id']=='womens_sportswears'){
	?>
	<div class = 'products' style='margin-left:2vw;margin-right:2vw;margin-top:40px;margin-bottom:200px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
	<?php	$sql = "SELECT * FROM products WHERE Category = 'womens_sportwear';";
		$result =mysqli_query($con, $sql);
		$check = mysqli_num_rows($result);
		while($row=mysqli_fetch_assoc($result)){
			?>
			<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true"  class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
			<div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
				<img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row['Image']?>'>
			</div>
			 <div style="color:darkgary; text-align:center; font-size:12px"><?php echo ucwords($row['Name']);?></div>
        	<div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row['Price']);?></div>
      </a>
		<?php				
		}
		?>
		</div>
		<?php
}

else if($_GET['id']=='boys_clothing'){
	?>
	<div class = 'products' style='margin-left:2vw;margin-right:2vw;margin-top:40px;margin-bottom:200px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
	<?php	$sql2 = "SELECT * FROM products WHERE Category = 'boys_clothing';";
		$result2 =mysqli_query($con, $sql2);
		$check2 = mysqli_num_rows($result2);
		while($row2=mysqli_fetch_assoc($result2)){
			?>
			<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true"  class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row2['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
			<div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
				<img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row2['Image']?>'>
			</div>
			 <div style="color:darkgary; text-align:center; font-size:12px"><?php echo ucwords($row2['Name']);?></div>
        	<div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row2['Price']);?></div>
      </a>
		<?php				
		}
		?>
		</div>
		<?php
}


else if($_GET['id']=='boys_schooling'){
	?>
	<div class = 'products' style='margin-left:2vw;margin-right:2vw;margin-top:40px;margin-bottom:200px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
	<?php	$sql2 = "SELECT * FROM products WHERE Category = 'boys_schooling';";
		$result2 =mysqli_query($con, $sql2);
		$check2 = mysqli_num_rows($result2);
		while($row2=mysqli_fetch_assoc($result2)){
			?>
			<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true"  class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row2['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
			<div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
				<img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row2['Image']?>'>
			</div>
			 <div style="color:darkgary; text-align:center; font-size:12px"><?php echo ucwords($row2['Name']);?></div>
        	<div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row2['Price']);?></div>
      </a>
		<?php				
		}
		?>
		</div>
		<?php
}

else if($_GET['id']=='boys_shoes'){
	?>
	<div class = 'products' style='margin-left:2vw;margin-right:2vw;margin-top:40px;margin-bottom:200px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
	<?php	$sql2 = "SELECT * FROM products WHERE Category = 'boys_shoes';";
		$result2 =mysqli_query($con, $sql2);
		$check2 = mysqli_num_rows($result2);
		while($row2=mysqli_fetch_assoc($result2)){
			?>
			<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true"  class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row2['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
			<div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
				<img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row2['Image']?>'>
			</div>
			 <div style="color:darkgary; text-align:center; font-size:12px"><?php echo ucwords($row2['Name']);?></div>
        	<div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row2['Price']);?></div>
      </a>
		<?php				
		}
		?>
		</div>
		<?php
}


else if($_GET['id']=='girls_clothing'){
	?>
	<div class = 'products' style='margin-left:2vw;margin-right:2vw;margin-top:40px;margin-bottom:200px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
	<?php	$sql2 = "SELECT * FROM products WHERE Category = 'girls_clothing';";
		$result2 =mysqli_query($con, $sql2);
		$check2 = mysqli_num_rows($result2);
		while($row2=mysqli_fetch_assoc($result2)){
			?>
			<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true"  class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row2['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
			<div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
				<img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row2['Image']?>'>
			</div>
			 <div style="color:darkgary; text-align:center; font-size:12px"><?php echo ucwords($row2['Name']);?></div>
        	<div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row2['Price']);?></div>
      </a>
		<?php				
		}
		?>
		</div>
		<?php
}



else if($_GET['id']=='girls_schooling'){
	?>
	<div class = 'products' style='margin-left:2vw;margin-right:2vw;margin-top:40px;margin-bottom:200px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
	<?php	$sql2 = "SELECT * FROM products WHERE Category = 'girls_schooling';";
		$result2 =mysqli_query($con, $sql2);
		$check2 = mysqli_num_rows($result2);
		while($row2=mysqli_fetch_assoc($result2)){
			?>
			<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true"  class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row2['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
			<div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
				<img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row2['Image']?>'>
			</div>
			 <div style="color:darkgary; text-align:center; font-size:12px"><?php echo ucwords($row2['Name']);?></div>
        	<div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row2['Price']);?></div>
      </a>
		<?php				
		}
		?>
		</div>
		<?php
}

else if($_GET['id']=='girls_shoes'){
	?>
	<div class = 'products' style='margin-left:2vw;margin-right:2vw;margin-top:40px;margin-bottom:200px;display:grid;grid-template-columns:repeat(auto-fill, minmax(150px,2fr))'>
	<?php	$sql2 = "SELECT * FROM products WHERE Category = 'girls_shoes';";
		$result2 =mysqli_query($con, $sql2);
		$check2 = mysqli_num_rows($result2);
		while($row2=mysqli_fetch_assoc($result2)){
			?>
			<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true"  class='img-box'id ='img-box' href = 'product_description.php?id=<?php echo $row2['Id']?>' style = 'width:150px; height:250px;margin-left:auto;margin-right:auto;border-radius:5px ;border: 1px solid #E5E5E5; text-decoration:none'>
			<div style='border-bottom:1px solid #E5E5E5;overflow:hidden;width:140px; height:140px; margin-top:5px;margin-left:auto;margin-right:auto'>
				<img class ='img-fluid img-responsive img-rounded grow' style = 'width:150px; height:150px' src = '<?php echo $row2['Image']?>'>
			</div>
			 <div style="color:darkgary; text-align:center; font-size:12px"><?php echo ucwords($row2['Name']);?></div>
        	<div style="color:red; text-align:center; font-size:14px">₦<?php echo Number_format($row2['Price']);?></div>
      </a>
		<?php				
		}
		?>
		</div>
		<?php
}


require('footer.php');
?>



		