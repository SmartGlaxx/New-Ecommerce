<?php
require('connect.php');
require('header.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>New E-Commerce</title>
</head>
<style>
    .r_b{
        color:green;
        background: white;
        
    }
    .r_b:hover{
        color:white;
        background-image:linear-gradient(white, green);
    }
</style>
<body>
	<div style='margin-left:7vw;margin-right:7vw; text-align:center ; margin-top:10vh'>
	<form method='post' action='<?php echo $_SERVER['PHP_SELF']?>'>
        <label style='left:0; color:gray; font-size:13px'>E-mail<span style='color:red'>*</span></label><br>
		<input type = 'email' name='email'><br>
		<button type = 'submit' name = 'submit_forgot_pass' class='r_b' style='border:1px sold green '>RESET PASSWORD</button>
	</form>
	</div>
</body>
</html>
<?php
	if(isset($_POST['submit_forgot_pass'])){


// Load Composer's autoloader
// require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
require('connect.php');
    $email = $_POST['email'];
    // $username = $_SESSION["username"];

$mail = new PHPMailer(true);

try {
    //Server settings
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'smartphpmailer@gmail.com';                     // SMTP username
    $mail->Password   = 'Smart1984#';                               // SMTP password
    $mail->SMTPSecure = "ssl";         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('smartphpmailer@gmail.com', 'Mailer');
    $mail->addAddress($email,);     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Password Reset';
    $mail->Body    = '<p style="background:#DADAFF">
    <div style="padding-bottom:20px;padding-top:20px;background:#DADAFF; font-family:verdana">You requested a password reset. Please follow this link to reset your password: <a href ="http://localhost/new_e_commerce_tesing/password_reset_2.php">here</a></div>
    </p>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    // echo 'Message has been sent';
    
    ?>
    <script>
    window.location.href='login.php?username=$username&&check_email';
    </script>
    <?php

} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    ?>
    <script>
    window.location.href='login.php?login=error';
    </script>
    <?php
}


	}
    require('footer.php');
?>