<?php
require('connect.php');
// require('header.php');
session_start();
echo $_POST['code'];
echo '_';
echo $_POST['rating'];
echo '_';
echo $_POST['review_text'];
echo '_';
echo $_POST['review_title'];
echo '_';
echo $_SESSION['username'];
echo '_';
echo $_POST['Id'];
echo '_';
if(!empty($_POST['rating']))
{	
	$username = $_SESSION['username'];
	$code = $_POST['code'];
	$id = $_POST['Id'];
	
	if(!empty($_POST['review_title']))
	{
		if(!empty($_POST['review_text']))
		{
		$review_title= mysqli_real_escape_string($con,$_POST['review_title']);
		$review_text= mysqli_real_escape_string($con,$_POST['review_text']);
		$username = $_SESSION['username'];
		
		// $code = $_GET['Code'];
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
		echo $id;
		// "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

		$sql2 = "UPDATE rating SET Rating='$rating',Review_title = '$review_title', Review_text = '$review_text' WHERE Id = '$id';";
		$result2 = mysqli_query($con, $sql2);
		


		// $sql= "INSERT INTO rating (Code, User_name, Rating, Review_title, Review_text) 
		// VALUES('$code','$username','$rating','$review_title','$review_text');";
		// $result = mysqli_query($con, $sql);
		if($result2)
		{
			// header('Location: profile.php?review=success_thanks');
			echo '';
		}
		else{
			header('Location: profile.php?review=error');	
		}
		}

		else{
		$review_title= mysqli_real_escape_string($con,$_POST['review_title']);
		$code = $_POST['code'];
			
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
		$sql2 = "UPDATE rating SET Rating='$rating',Review_title = '$review_title' WHERE Id = '$id';";
		$result = mysqli_query($con, $sql2);
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
	echo 'non';
}

?>