<?php
require '../../includes/conn.php';
session_start();
ob_start();

// PHPMailer
require '../bed-phpmailer/src/PHPMailer.php';
require '../bed-phpmailer/src/SMTP.php';
require '../bed-phpmailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $getEmail = mysqli_query($conn, "SELECT * FROM tbl_master_key WHERE email = '$email'");
    if (mysqli_num_rows($getEmail) > 0) {
        $code = rand(100000, 999999);
        $insertCode = mysqli_query($conn, "UPDATE tbl_master_key SET activation_code = '$code' WHERE email = '$email'");

        if ($insertCode) {
            $mail = new PHPMailer(true);

            //Server settings                   
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'noreply.SFACBacoor@gmail.com';                     //SMTP username
            $mail->Password   = 'master.12345';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;

            $mail->setFrom('noreply.SFACBacoor@gmail.com');
            $mail->addAddress($email);

            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Password Activation Code';
            $mail->Body    = 'code:' . $code;
            $mail->send();

            if ($mail->send()) {
                $_SESSION['email'] = $email;
                $_SESSION['error-email'] = true;
                $mail->smtpClose();
                header('location: code.ver.php');
            }
        } else {
            $_SESSION['error-mailer'] = true;
            header('location: forgot.pwd.php');
        }
    } else {
        $_SESSION['error_dbase'] = true;
        header('location: forgot.pwd.php');
    }
}