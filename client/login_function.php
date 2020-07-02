<?php
require("connect.php");
session_start();

if($_SERVER["REQUEST_METHOD"])
{
    if(isset($_POST["submit_login"]))
    {
    require_once "connect.php";
    $username_or_email = $_POST['username_or_email'];
    $password = $_POST['password'];
    $sql ="SELECT * FROM user_signup WHERE User_name = '$username_or_email' OR Email = '$username_or_email';";
    $result = mysqli_query($con, $sql);
    $check = mysqli_num_rows($result);

        if($check==false)
        {
            header('Location: login.php?username_or_email=incorrect');
        }else{
            $row=mysqli_fetch_assoc($result);
            $rowPassword = $row['Password'];
            
            $password_unhash = password_verify($password, $rowPassword);
            if($password_unhash==false){
                header('Location: login.php?password=mismatch');
            }else{
                $sql = "SELECT * FROM user_signup WHERE Email = '$username_or_email' OR User_name ='$username_or_email';";
                $result = mysqli_query($con, $sql);
                $check = mysqli_num_rows($result);
                $row = mysqli_fetch_assoc($result);

                $_SESSION['id'] = $row['Id'];
                $_SESSION['first_name'] = $row['First_name'];
                $_SESSION['last_name'] = $row['Last_name'];
                $_SESSION['username'] = $row['User_name'];
                $_SESSION['email'] = $row['Email'];
                $_SESSION['password'] = $password;
                header('Location: index.php?login=success');
            }
        }

        }
    elseif(isset($_POST["submit_change"]))
    {
        header("Location: user_password_reset.php");
        exit();
    }
}
?>