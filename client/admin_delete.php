<?php
require('connect.php');
session_start();

echo $_SESSION['user_name'];
?>