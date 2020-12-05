<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class sendEmail {
public function send($userName, $email, $subject, $body){
require 'PHPMailer/vendor/autoload.php';
$mail = new PHPMailer(true);
try {
    $mail->SMTPDebug = 0;                                      
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                      
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = '****@gmail.com';         
    $mail->Password   = '*****';                         
    $mail->SMTPSecure = 'tls';                           
    $mail->Port       = 587;      

    $mail->addReplyTo('****@gmail.com', 'vaachaal');
    $mail->setFrom('****@gmail.com', 'vaachaal');
    $mail->addAddress($email, $userName);
    $mail->AddEmbeddedImage('img/logo.png', 'logoimg');

    $mail->Subject = $subject;
    $mail->Body    = "<center><p><img width=\"200\" height=\"95\" src=\"cid:logoimg\" /></p>".$body."</center>";
    $mail->AltBody = "<center><p><img width=\"200\" height=\"95\" src=\"cid:logoimg\" /></p>".$body."</center>";
    $mail->isHTML(true);
    $mail->send();

    return true;
} catch (Exception $e) {
    return false;
}
    }

 }