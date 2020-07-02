<?php
require('connect.php');
require('header.php');
// session_start();

if(isset($_POST['clear_ord']))
{
	$username = $_SESSION['username'];
	$sql = "DELETE FROM orders WHERE User_name ='$username';";
	mysqli_query($con,$sql);
  ?>
  <script>
    window.location.href='profile.php';
  </script>
  <?php
	
}

if(isset($_POST['clear_fav']))
{
  $username = $_SESSION['username'];
  $sql = "DELETE FROM favorite WHERE User_name ='$username';";
  mysqli_query($con,$sql);
  ?>
  <script>
    window.location.href='profile.php';
  </script>
  <?php
  
}

?>
