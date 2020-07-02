<?php
session_start();
use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

require('connect.php');
	$email = $_POST['email'];
	$uniqid = uniqid();


// Load Composer's autoloader

// require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'smartphpmailer@gmail.com';                     // SMTP username
    $mail->Password   = 'Smart1984#';                               // SMTP password
    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('smartphpmailer@gmail.com', 'Smart Egbuchulem');
    $mail->addAddress($email);     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'FIRST PHP EMAIL';
    $mail->Body    = '<h5>Hi Smart</h5><p>Password temporary is:'. $uniqid. '. You can change it late here:...</p></b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->SMTPOptions = array(
    'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
    )
    );

    $uniqid_hash = password_hash($uniqid, PASSWORD_DEFAULT);
    $sql1 = "SELECT * FROM user_signup WHERE Email = '$email';";
    $result1 = mysqli_query($con, $sql1);
    $check1= mysqli_num_rows($result1);
    if($check1==true){
        header('Location: login.php?user=exists_please_login');
    }
    else{
    $mail->send();

    $sql = "INSERT INTO user_signup(Email,Password) VALUES('$email','$uniqid_hash');";
    mysqli_query($con, $sql);

    header('Location: password_reset.php?signup=check_email');
    $_SESSION['email']=$email;
    }

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    // header('Location: index.php?eror_signing_in.');
}

// }
// else{
// 	echo '';
// }




?>