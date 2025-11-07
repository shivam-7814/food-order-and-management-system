<?php

define('SITEURL', 'http://localhost/food-order/');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php'; // path to PHPMailer
session_start();

if(isset($_POST['email'])){
    $email = $_POST['email'];
    $otp = rand(100000,999999); // 6-digit OTP
    

    // Save data in session (not DB)
    $_SESSION['otp'] = $otp;
    $_SESSION['email'] = $email;
    $_SESSION['verified'] = false;

    // Send OTP using Gmail
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = '';  // your Gmail
        $mail->Password = '';   // your 16-digit app password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('onlyforchat7814@gmail.com', 'Food Order System');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = "Your Login OTP";
        $mail->Body    =   '<div style="font-family: Arial, sans-serif; background:#f9f9f9; padding:20px; border-radius:8px; color:#333;">
                            <h2 style="color:#F17228;">🍽Login Verification Otp</h2>
                            <p style="font-size:14px;">Here is your One-Time Password (OTP): </p>

                            <div style="font-size:24px; font-weight:bold; color:#F17228; margin:15px 0;">
                                '. $otp .'
                            </div>
                            <p style="margin:10px 0;">This code is valid for <b>5 minutes</b>.</p>

                            <p>Thanks for logging in!<br>
                           Team Food Order System.<br>
                            </p>
                            </div>';

        $mail->send();
                        $_SESSION['send-otp'] = "<div style='color: green; text-align:center; font-size:12px; '>Otp Send Successfully<br> <b>$email</b></div>";
                        header('location:'.SITEURL.'./user-login.php');
                       

    } catch (Exception $e) {
                        $_SESSION['send-otp'] = "<div style='color: red; text-align:center; font-size:14px;'>Error sending OTP:</div>";
                        header('location:'.SITEURL.'./user-login.php');

        echo "Error sending OTP: {$mail->ErrorInfo}";
    }
}
?>
