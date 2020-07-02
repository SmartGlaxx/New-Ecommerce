<?php 
require("connect.php");
require("header.php");

$username = $_SESSION["username"];
$sql = "SELECT * FROM user_signup WHERE User_name = '$username';";
$result = mysqli_query($con, $sql);
$check =mysqli_num_rows($result);
$roe =mysqli_fetch_assoc($result);
?> 
<style>
    .chng_pic a{
        color:black;
         background-image: linear-gradient( white, #FFE292);
    }
    .chng_pic a:hover{
        color:black;
         background-image: linear-gradient( white, orange);
    }

    .upload_pic a{
        color:black;
         background-image: linear-gradient( white, lightgreen);
    }
    .upload_pic a:hover{
        color:white;
         background-image: linear-gradient( white, green);
    }
    @media screen and (max-width: 500px){
        .dd{margin-top:30px;}
    }
    .prof_ic{
    color:lightgray;
        }
    .prof_ic:hover{
    color:orange;
        }
    .prof_ic_2{
    color:lightgray;
        }
    .prof_ic_2:hover{
    color:red;
        }
</style>

<!DOCTYPE html>
<html>
<head>
    <title>Smart E-commerce</title>
</head>
<body style = "color:black">
    <?php

        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            if(strpos($fullUrl, "input_error") == true)
            {
                echo "<div style = 'color:red; font-size:16px' class ='text-center'>Please Imput only Alphabets..</div>";
            }
            else if(strpos($fullUrl, "error_Updating") == true)
            {
                echo "<div style = 'color:red; font-size:16px' class ='text-center'>We Encountered An Error While Fetching Your Data. Please try again</div>";
            }
             else if(strpos($fullUrl, "two_passwords_mismatch") == true)
            {
                echo "<div style = 'color:red; font-size:16px' class ='text-center'>Your Two Passwords Do Not Match. Please try again</div>";
            }
             else if(strpos($fullUrl, "password_mismatch") == true)
            {
                echo "<div style = 'color:red; font-size:16px' class ='text-center'>Your Previous Password Could Not Be Verified. Please try again</div>";
            }
            else if(strpos($fullUrl, "please_signup") == true)
            {
                echo "<div style = 'color:red; font-size:16px' class ='text-center'>Your Email Could Not Be Verified. Please <a href='signup.php' style='color:#2233DD; text-decoration:none'>Sign up</a></div>";
            }
             else if(strpos($fullUrl, "password_too_short") == true)
            {
                echo "<div style = 'color:red; font-size:16px' class ='text-center'>Please Use A Minimum of 8 Alphabets, Numbers or Characters for Your Password</div>";
            }

        ?>
<div class ='row' style ='padding-top:30px;background:white; padding-bottom: 10vh; margin-bottom: 10vh; padding-left:5vw;padding-right:5vw'>
    <div class= 'col-sm-4'style='z-index:10;box-shadow: 0px 3px 3px 2px gray; word-break:break-all;'>
        <div class='py-2' style = 'color:white; background:black;width:100%; font-size:12px; text-align:center'>MY ACCOUNT</div>
        <div id = '' class='py-2' style = 'cursor:pointer; ;text-align:center;color:black;background:#F1F1F1;width:100%; font-size:11px'><a href='profile.php' style='text-decoration:none;color:orange; font-weight: bold'>DASHBOARD</a></div>
        <div id = 'orders' class='py-2 btn btn-mute' style = 'text-align:center;color:black;width:100%; font-size:11px'>ORDERS</div>

        <div id='favorites' class='py-2 btn btn-mute' style = 'color:black;text-align:center;color:black;width:100%; font-size:11px'>MY FAVORITES</div>

        <div id='account_details' class='py-2 btn btn-mute' style = 'color:black;text-align:center;color:black;width:100%; font-size:11px'>ACCOUNT DETAILS</div>

        <div id ='address' class='py-2 btn btn-mute' style = 'color:black;text-align:center;color:black;width:100%; font-size:11px'>SHIPPING ADDRESS</div>

        <div  id='product_reviews' class='py-2 btn btn-mute' style = 'color:black;text-align:center;color:black;width:100%; font-size:11px'>PRODUCT REVIEWS</div>

        <a href = 'signout.php' class='btn btn block btn-mute' style = 'width:100%; color:red;font-size:13px'>LOG OUT</a>
        <?php
        if(isset($_SESSION["username"]))
        { 

        // $roe =mysqli_fetch_assoc($result);
        if($roe["Profile_pic"] == false)
        {?>
           <span style='width:50%;margin-right:25%;margin-left:25%;display: flex'> <i class = 'text-secondary far fa-user fa-4x text-success text-center' style = 'font-size:70px;margin-right:auto;;margin-left:auto;border-radius:50%;margin-top:3vh;'></i></span>
           <br>
           <div style='width:100%;text-align:center' class='upload_pic'><a href = 'profile_pic_upload.php' style='text-decoration:none; padding:15px; border:1px solid black;font-size:11px'>UPLOAD PICTURE</a></div><br>
            <?php
        }else if($roe["Profile_pic"] == true)
        {
            ?>

            <img src = "<?php echo $roe['Profile_pic'];?>" style = 'width:100px;margin-left:auto;margin-right:auto;margin-top:1vh; height:auto; border-radius:50%; display: block' alt = 'Picture' class= 'img-responsive img-thumbnail'>
            <div style='width:100%;text-align:center' class='chng_pic'><a href = 'profile_pic_upload.php' style='text-decoration:none; padding:15px; border:1px solid black;font-size:8px'>CHANGE PICTURE</a></div>
            <?php echo "<div class='text-center mt-4'>".$roe['Email']."</div>";?>
        <?php
        }
        ?>
<?php
}
?>
    </div>

    <?php
    if(isset($_SESSION["username"]))
    {?>
    <div class = 'col-sm-8' style='background: white' id='profile_nav'>
        <div>
            <div class='dd' style= 'z-index:10;box-shadow: 0px 3px 6px 2px gray;padding-top:1vh;padding-left:4vw;color:white;background:gray; height: 5vh;font-size:14px'>Hello <?php echo strtoupper($roe['First_name']) . ' '. strtoupper($roe['Last_name']) ?></div>
        </div>
        <div>
            <div style= 'z-index:10;box-shadow: 0px 3px 6px 2px gray;margin-top:2vh;padding-top:1vh;padding-left:4vw;background:#F1F1F1; height: 6vh;font-size:10px;'>Account Management</div>
        </div>
        <div style = 'display:grid; grid-template-columns:1fr 1fr 1fr; width:80%; margin-left:10%; margin-right:10%'>
            <div><i id = 'orders2' class="far fa-edit fa-4x text-center mt-3 prof_ic"></i></div>
            <div><i id ='favorites2'class="fas fa-heart fa-4x mt-3 prof_ic" style = ''></i></div>
            <div><i id = 'account_details2' class="far fa-address-card fa-4x text-center mt-3 prof_ic" style = ''></i></div>

            <div style='align-content: center'><i id = 'address2' class="fas fa-map-marked-alt fa-4x text-center mt-3 prof_ic" style = ''></i></div>
            <div><i id='product_reviews2' class = "far fa-comment fa-4x text-center mt-3 prof_ic" style = ''></i></div>          
            <div><a href = 'signout.php'><i class="fas fa-sign-out-alt fa-4x mt-3 prof_ic_2" style = ''></i></a></div>
            
        </div>
    </div>
    <?php
    }else{
        ?>
        <div style='font-size:12px; text-align:center;'>TO GET FULL ACCES TO YOUR PAGE,<br> YOU'LL NEED TO SET UP YOUR ACCOUNT.<br> <a href = 'profile_setup.php' style='text-decoration: none'>CLCK HERE</a> TO SET UP.</div>
        <?php
    }
    ?>

</div>

<script>
    let profile_nav = document.getElementById('profile_nav');
    // document.getElementById('dash_board').addEventListener('click', show_dash_board);
    document.getElementById('orders').addEventListener('click', show_order);
    document.getElementById('orders2').addEventListener('click', show_order);
    document.getElementById('product_reviews').addEventListener('click', show_product_reviews);
     document.getElementById('product_reviews2').addEventListener('click', show_product_reviews);
    document.getElementById('account_details').addEventListener('click', show_account_details);
    document.getElementById('account_details2').addEventListener('click', show_account_details);
    document.getElementById('address').addEventListener('click', show_address);
    document.getElementById('address2').addEventListener('click', show_address);
    document.getElementById('favorites').addEventListener('click', show_favorites);
    document.getElementById('favorites2').addEventListener('click', show_favorites);
    var o = document.getElementById('orders');   
    var pr = document.getElementById('product_reviews');
    var acd = document.getElementById('account_details');   
    var ad = document.getElementById('address');
    var sc = document.getElementById('favorites');


    function show_order(){
        this.style.color='white';
        this.style.background='gray';
        pr.style.color='black';
        pr.style.background='white';
        acd.style.color='black';
        acd.style.background='white';
        ad.style.color='black';
        ad.style.background='white';
        sc.style.color='black';
        sc.style.background='white';
        let xhr= new XMLHttpRequest();
        xhr.open('GET','my_orders.php',true);
        xhr.onload = function(){
            if(this.status==200)
            {
                profile_nav.innerHTML = this.responseText;

            }
        }
        xhr.send();
    }

    function show_product_reviews(){
        this.style.color='white';
        this.style.background='gray';
        o.style.color='black';
        o.style.background='white';
        acd.style.color='black';
        acd.style.background='white';
        ad.style.color='black';
        ad.style.background='white';
        sc.style.color='black';
        sc.style.background='white';
        let xhr= new XMLHttpRequest();
        xhr.open('GET','product_reviews.php',true);
        xhr.onload = function(){
            if(this.status==200)
            {
                profile_nav.innerHTML = this.responseText;

            }
        }
        xhr.send();
    }

    function show_account_details(){
        this.style.color='white';
        this.style.background='gray';
        o.style.color='black';
        o.style.background='white';
        pr.style.color='black';
        pr.style.background='white';
        ad.style.color='black';
        ad.style.background='white';
        sc.style.color='black';
        sc.style.background='white';
        let xhr= new XMLHttpRequest();
        xhr.open('GET','account_details.php',true);
        xhr.onload = function(){
            if(this.status==200)
            {
                profile_nav.innerHTML = this.responseText;

            }
        }
        xhr.send();
    }

    function show_address(){
        this.style.background='gray';
        this.style.color='white';
        o.style.color='black';
        o.style.background='white';
        pr.style.color='black';
        pr.style.background='white';
        acd.style.color='black';
        acd.style.background='white';
        sc.style.color='black';
        sc.style.background='white';
        let xhr= new XMLHttpRequest();
        xhr.open('GET','address.php',true);
        xhr.onload = function(){
            if(this.status==200)
            {
                profile_nav.innerHTML = this.responseText;

            }
        }
        xhr.send();
    }

    function show_favorites(){
        this.style.background='gray';
        this.style.color='white';
        o.style.color='black';
        o.style.background='white';
        pr.style.color='black';
        pr.style.background='white';
        acd.style.color='black';
        acd.style.background='white';
        ad.style.color='black';
        ad.style.background='white';
        let xhr= new XMLHttpRequest();
        xhr.open('GET','favorites.php',true);
        xhr.onload = function(){
            if(this.status==200)
            {
                profile_nav.innerHTML = this.responseText;

            }
        }
        xhr.send();
    }
</script>
</body>
</html>
<?php
require("footer.php");
?>

