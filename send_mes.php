<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
include "php/user.config.php";

//Load Composer's autoloader (created by composer, not included with PHPMailer)

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "PHPMailer/src/Exception.php";
require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/SMTP.php";

$phone = $_POST['phone'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// echo $user["username"]; // Works


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP

    $mail -> Host       =   'smtp.gmail.com';
    $mail -> SMTPAuth   =   true;                               //Enable SMTP authentication
    $mail->Username   = $user['email'];                     //SMTP username
    $mail->Password   = $user['app_pass'];                               //SMTP password

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email, $fullname);
    $mail->addAddress("christianrupisan2722@gmail.com");     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = "
    <h3>New Message</h3>
    <p><strong>Full Name:</strong> $fullname</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Phone:</strong> $phone</p>
    <p><strong>Message:</strong><br>$message</p>
  ";

  if (!empty($fullname) && !empty($phone) && !empty($message) && !empty($subject) && !empty($email))  {
    if(preg_match('/^[0-9]{11}$/', $phone)) {
        $mail->send();
        echo "";
        echo "success";
    } else {
        echo "Please input a valid number!";
    }
    } else {
    echo("All input is required.");
    }
   
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    echo "failed";
}

?>