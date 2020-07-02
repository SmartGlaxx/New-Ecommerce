<?php
require('connect.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>New E-Commerce</title>
</head>

<body>
    <style>
        @media screen and (max-width:500px){
            .dd{margin-top:30px;}
        }
        .s_a{
            color:black;
            background: white;
        }
        .s_a:hover{
            color:white;
            background: green;
        }
    </style>
	<?php 
	if(isset($_SESSION['username']))
    {
    $username = $_SESSION['username'];
    $sql= "SELECT * FROM user_signup WHERE User_name = '$username';";
    $result = mysqli_query($con, $sql);
    $check =mysqli_num_rows($result);
     $row=mysqli_fetch_assoc($result);
    if(strlen($row['Address'])>0)
    {
    ?>
     <div class='dd container text-center py-2' style='border:2px solid lightgreen; width:100%; font-size:12px;'>MY SHIPPING ADDRESS</div>
     <div class="container text-center mt-5 mb-5">
     	<span style='font-weight: bold'>Current Address: </span><?php echo $row['Address']; ?>
     </div>
     <div>
     	<div style='font-size:16px'>Reset Address</div>
     	<form method='post' action='address_reset.php'>
     		<label style='font-size:12px'>Address Line 1<span style='color:red'>*</span></label><br>
     		<input style='width:100%' type = text name = 'new_add_1'>
     		<label style='font-size:12px'>Address Line 2</label><br>
     		<input style='width:100%' type = text name = 'new_add_2'> 
     		<div style='text-align:center'>
     		<button class='py-2 mt-4 ' name='submit_add_change' style='min-width:200px;width:40%;border:1px solid black;box-shadow: 0px 2px 2px 1px gray; border-radius:5px; background: white' class='mt-4'>Change Address</button>
     		</div>
     	</form>
     </div>
    <?php
    }
    else
    {
    ?>
     <div class='dd container text-center py-2' style='border:2px solid lightgreen; width:100%; font-size:12px'>NO ADDRESS SET</div>
     <form method = 'post' action = 'address_setup.php' style='text-align: center'>
     <button name = 'addres_set_up' type='submit' style='margin-top:10vh; border:1px solid black; ' class='s_a'>SET UP A SHIPPING ADDRESS</button>
     </form>
    <?php
    }
	}
    ?>
</body>
</html>