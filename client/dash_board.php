 <?php
    require('connect.php');
    session_start();
        if(isset($_SESSION["username"]))
        { 
        $username = $_SESSION["username"];
        $sql = "SELECT * FROM user_signup WHERE User_name = '$username';";
        $result = mysqli_query($con, $sql);
        $check =mysqli_num_rows($result);

        $roe =mysqli_fetch_assoc($result);
        ?>
        <div class = '' style='background: white' id='profile_nav'>
        <div>
            <div style= 'padding-top:1vh;padding-left:4vw;background:#F1F1F1; height: 5vh;font-size:14px'>Hello <?php echo 
            $roe['First_name'] . ' '. $roe['Last_name'] ?>. <span style='color:gray; font-size:9px'><br>(Not <?php echo 
                $roe['First_name'] . ' '. $roe['Last_name'] ?>? <a href = 'logout.php'>Log Out</a>)</span></div>
        </div>
        <div>
            <div style= 'margin-top:2vh;padding-top:1vh;padding-left:4vw;background:#F1F1F1; height: 6vh;font-size:10px'>From your dashboard you can monitor and manage your account and purchases.</div>
        </div>
        <div style = 'display:grid; grid-template-columns:1fr 1fr 1fr; width:80%; margin-left:10%; margin-right:10%'>
            <div><i class="far fa-edit fa-4x text-center mt-3" style = 'color:lightgray'></i></div>
            <div><i class = 'far fa-comment fa-4x text-center mt-3' style = 'color:lightgray'></i></div>
            <div><i class="far fa-address-card fa-4x text-center mt-3" style = 'color:lightgray'></i></div>

            <div style='align-content: center'><i class="fas fa-map-marked-alt fa-4x text-center mt-3" style = 'color:lightgray'></i></div>
            <div style='background-color: red'><span style = 'width: 30%;margin-left:auto;margin-right:auto;'><i class="fas fa-money-bill-wave fa-4x mt-3" style = 'color:lightgray'></i></span></div>
            <div>w</div>
            
        </div>
    </div>
    <?php
}else{?>
     <div style='font-size:12px; text-align:center;'>YOU NEED TO BE SIGNED IN TO ACCESS THIS PAGE.</div>
     <?php
}
?>


 