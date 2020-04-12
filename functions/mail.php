<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
class Mail {
        public static function sendMail($subject, $body, $name) {
                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'ssl';
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = '465';
                $mail->isHTML();
                $mail->Username = 'psahouses@gmail.com';
                $mail->Password = '04011994Flex15'; 
                $mail->setFrom('info@kasimall.co.za', 'Kasi Mall Online');
                $mail->Subject = $subject;
                $mail->Body = 'From:' . $name . '<br>' . $body;
                $mail->AddAddress('sibanyebukani01@gmail.com');
                $mail->addReplyTo('noreply@kasimall.co.za', 'Kasi Mall Online');

                $mail->Send();
        }
}
?>