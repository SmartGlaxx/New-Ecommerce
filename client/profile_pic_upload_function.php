<?php
require("connect.php");
session_start();

if(isset($_POST["submit_pic"]))
{
    $pic = $_FILES['profile_pic'];
    $img_name = $_FILES['profile_pic']['name'];
    $temp_name = $_FILES['profile_pic']['tmp_name'];
    $img_type = $_FILES['profile_pic']['type'];
    $img_err = $_FILES['profile_pic']['error'];
    $img_size = $_FILES['profile_pic']['size']; 

    $img_brake = explode(".",$img_name);
    $img_ext = strtolower(end($img_brake));
    
    $allowed = array("png", "jpg", "jpeg");
    if(in_array($img_ext,$allowed))
    {
        if($img_size>5000000)
        {
            echo "File size should be less than 5mb";
        }
        else
        {
            if($img_err>0)
            {
                echo "An error occured while uploading";
            }
            else
            {
                $id = $_SESSION["id"];
                
                $img_new_name = uniqid("",true).".".$img_ext;
                $img_location = "uploads/".$img_new_name;
                move_uploaded_file($temp_name,$img_location);

                $sql = "SELECT * FROM user_signup WHERE Id = '$id';";
                $result = mysqli_query($con, $sql);
                $check = mysqli_num_rows($result);

                if($check ==true)
                {
                    while($roe = mysqli_fetch_assoc($result))
                    {
                    $id = $roe["Id"];
                    $sql = "UPDATE user_signup SET Profile_pic = '$img_location'
                     WHERE Id ='$id' ;";
                    mysqli_query($con, $sql);
                    if(true)
                    {
                        
                    $_SESSION["profile_pic"] = $roe["Profile_pic"];
                    header("Location: profile.php?profile=uploaded");
                    }
                    }
                }
                else 
                {
                    echo '';
                }
                
            }
        }
    
    }
    else{
        echo 'File type unallowed';
    }

}
else if(isset($_POST['delete_pic'])){
    $username = $_SESSION['username'];
    $sql = "UPDATE user_signup SET Profile_pic = null WHERE User_name = '$username';";
    $result = mysqli_query($con, $sql);
    header('Location: profile.php?image=deleted');
}
elseif(isset($_POST['submit_address'])){
    if(!empty($_POST['address']))
    {
        $POST['address'] = mysqli_real_escape_string($con, $_POST['address']);
        $address = $POST['address'];
        $username = $_SESSION['username'];
        $sql = "UPDATE user_signup SET Address = '$address' WHERE User_name = '$username ';";
        mysqli_query($con, $sql);
        header("Location: profile.php?address=change");
    }
    else{
        header('Location: profile.php?address=empty');
    }
}
elseif(isset($_POST['submit_address2'])){
    if(!empty($_POST['address']))
    {
        $POST['address'] = mysqli_real_escape_string($con, $_POST['address']);
        $address = $POST['address'];
        $username = $_SESSION['username'];
        $sql = "UPDATE user_signup SET Address = '$address' WHERE User_name = '$username ';";
        mysqli_query($con, $sql);
        header("Location: paypage/checkout.php?address=change");
    }
    else{
        header('Location: paypage/checkout..php?address=empty');
    }
}
?>