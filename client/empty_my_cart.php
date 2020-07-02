<?php
require('connect.php');
session_start();

$username = $_SESSION['username'];
$sql= "DELETE FROM cart WHERE User_name ='$username';";
mysqli_query($con, $sql);

header('Location: my_cart.php');
?>