<?php
require("connect.php"); 
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    if(isset($_POST['submit_signup']))
    {
if(!empty($_POST["email"]))
{
    
    $email = mysqli_real_escape_string($con,$_POST['email']);
   
     if(!filter_var($email, FILTER_VALIDATE_EMAIL))
             {
                header("Location: signup.php?signup=emailError"); 
                exit();
             }
             else
             {  $sql = "SELECT * FROM user_signup WHERE Email = '$email';";
                $result = mysqli_query($con, $sql);
                $check = mysqli_num_rows($result);

                 if($check == false)
                 {
                     
                $randomPassword = rand(100000,1000000);
                $hashedPwd = password_hash($randomPassword, PASSWORD_DEFAULT);
                 
                 
               $from = 'admin@client.smartegbuchulem.com';
               $to = 'smartegbuchulem@gmail.com';
 
               $sql= "INSERT INTO user_signup(Email, Password) VALUES('$email','$hashedPwd')";
               mysqli_query($con, $sql);



            // To send HTML mail, the Content-type header must be set
             $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
            // Create email headers
            $headers .= 'From: '.$from."\r\n".
           'Reply-To: '.$from."\r\n" .
           'X-Mailer: PHP/' . phpversion();
 
 
           // Compose a simple HTML email message
            $message = '<html><body>';
            $message .= '<h3 style="color:#444;">Welcome to a demo e-commerce website by Smart Egbuchulem</h3>';
            $message .= '<p style="color:black;font-size:13px;">You just signed up for an accout. Please ignore this email if you did not.</p>';
            $message .= '<p style="color:#080;font-size:13px;"><div>Use the following password to login </div>';
            $message .= '<div style="color:#080;font-size:13px;">' .$randomPassword. '<div></p>';
            $message .= '</body></html>';
             
            // Sending email
            if(mail($to, $subject, $message, $headers)){
                header('Location: signup.php?signup=successfully');
            } else{
                header('Location: signup.php?signup=tryAgain');
            }

                     
                 }else{
                     header('Location: signup.php?signup=emailUnavailable');
                 }
             }
    
    

}
else
{
    header("Location: signup.php?signup=fillAllField");
    exit();
}
}
elseif(isset($_POST["log_in"]))
{
    header("Location: login.php?");
}
}
?>

