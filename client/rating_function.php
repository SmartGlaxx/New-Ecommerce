<?php
require('connect.php');
session_start();
// require('header.php');

if(!empty($_POST['rating']))
{	
	if(!empty($_POST['review_text']))
		{
		$review_title= mysqli_real_escape_string($con,$_POST['review_title']);
		$review_text= mysqli_real_escape_string($con,$_POST['review_text']);
		$code = $_GET['Code'];
		$id = $_GET['id'];
		$rating = $_POST['rating'];
	}
	$username = $_SESSION['username'];
	$code = $_GET['Code'];
	//
	$sql2 = "SELECT * FROM rating WHERE Code = '$code' && User_name= '$username';";
	$result2 = mysqli_query($con, $sql2);
	$check2 = mysqli_num_rows($result2);
	if($check2 ==false)
	{
	if(!empty($_POST['review_title']))
	{
		if(!empty($_POST['review_text']))
		{
		$review_title= mysqli_real_escape_string($con,$_POST['review_title']);
		$review_text= mysqli_real_escape_string($con,$_POST['review_text']);
		$username = $_SESSION['username'];
		
		$code = $_GET['Code'];
		$rating = $_POST['rating'];
		if($rating=='one')
		{
			$rating = 1;
		}
		else if($rating=='two')
		{
			$rating = 2;
		}
		else if($rating=='three')
		{
			$rating = 3;
		}
		else if($rating=='four')
		{
			$rating = 4;
		}
		else if($rating=='five')
		{
			$rating = 5;
		}
		$sql= "INSERT INTO rating (Code, User_name, Rating, Review_title, Review_text) 
		VALUES('$code','$username','$rating','$review_title','$review_text');";
		$result = mysqli_query($con, $sql);
		$id = $_GET['id'];
		$sql3 = "UPDATE orders SET Reviewd ='1' WHERE Id = '$id';";
		$result3 = mysqli_query($con,$sql3);
		if($result3 && $result)
		{
		?>
		<script>
			window.location.href='profile.php?review=success_thanks';
		</script>
		<?php
		}
		else{
		?>
		<script>
			window.location.href='profile.php?review=error';
		</script>
		<?php
		}
		}

		else{
		$review_title= mysqli_real_escape_string($con,$_POST['review_title']);
		$code = $_GET['Code'];
			
		$rating = $_POST['rating'];
		if($rating=='one')
		{
			$rating = 1;
		}
		else if($rating=='two')
		{
			$rating = 2;
		}
		else if($rating=='three')
		{
			$rating = 3;
		}
		else if($rating=='four')
		{
			$rating = 4;
		}
		else if($rating=='five')
		{
			$rating = 5;
		}
		$sql= "INSERT INTO rating (Code, User_name, Rating, Review_title) 
		VALUES('$code','$username','$rating','$review_title');";
		$result = mysqli_query($con, $sql);
		if($result)
		{
			header('Location: profile.php?review=success_thanks');
		}
		else{
			header('Location: profile.php?review=error');	
		}
		}
		}

	else{
		header('Location: profile.php?rewiew_title=not_set');
	}
	}
else{
	$review_title= mysqli_real_escape_string($con,$_POST['review_title']);
	$review_text= mysqli_real_escape_string($con,$_POST['review_text']);
	$rating = $_POST['rating'];
	$row = mysqli_fetch_assoc($result2);
	$id = $row['Id'];?>
	<div class = "container" style="display:flex;text-align:center; text-justify:center">You have reviewed this product already. Do you want to update your review?
		<form style="" action = "rating_function2.php" method = "post">
		<input type = "hidden" name="review_title" value = '<?=$review_title?>'>
		<input type = "hidden" name="review_text" value = '<?=$review_text?>'>
		<input type = "hidden" name = "code" value = '<?=$code?>'>
		<input type = "hidden" name = "Id" value = '<?=$id?>'>
		<input type = "hidden" name = "rating" value = '<?=$rating?>'>
		<button style="color:blue; background:white; border:none" type = "submit" name ="submit_y">YES</button>
		<button style="color:red;background:white; border:none" type = "submit" name ="submit_n">NO</button>
		</form>
		<?php
	}
	
}
else{
	?>
	<script type="text/javascript">
	window.location.href = 'profile.php?rating=not_set';
	</script>
<?php
}

?>