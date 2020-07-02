<?php
require('connect.php');
require('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body class=''>
	<div class='container'style='min-height:70vh'>

<?php

if(isset($_GET['Code'])){
	
			$code = $_GET['Code'];
			$sql3 = "SELECT * FROM rating WHERE Code = '$code';";
			$result3 = mysqli_query($con, $sql3);
			$check3 = mysqli_num_rows($result3);
			if($check3==true){?>
				<div style='margin-bottom:30px;margin-top:30px; text-align: center; font-size:20px'><?php echo $check3?> Reviews</div>
				<?php while($row3=mysqli_fetch_array($result3)){
				?>
			<div class = 'container' style='margin-top:5px; min-height:150px; width:75%'>
				<div style='font-family:verdana; color:purple'><?php echo strtoupper($row3['User_name']);?></div> 
				<div><?php $rating = $row3['Rating'];?></div> 
				<?php require('rating.php');?>
				<div style='font-weight:bold;'><?php echo $row3['Review_title'];?></div> 
				<div style=''><?php echo $row3['Review_text'];?></div>
				<hr style='width:75%;'>

			 </div>

<?php
}
}
}

else{
	echo 'no code';
}
?>
</div>
</body>
</html>
<?php
require('footer.php');
?>