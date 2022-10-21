<?php 
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['btnSendMail'])){
    $title = $_POST['title'] ?? null;
    $email = $_POST['email'] ?? null;
    $content = $_POST['content'] ?? null;
    if(
        !empty($title) && !empty($content) && filter_var($email,FILTER_VALIDATE_EMAIL)
    ){
        //khoi tao doi tuong cua class PHPMailer
        $mail = new PHPMailer(true);
        try{
            //Server settings
                // $mail->SMTPDebug  = SMTP::DEBUG_SERVER;                     //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.mailtrap.io';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = '7371e3daf2735f';                       //SMTP username
                $mail->Password   = 'fd052503cdedec';                       //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
                $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
                $mail->setFrom('cavaldos1211@gmail.com', 'T3H-Send-Mail');
                $mail->addAddress($email); 
            //Attachments
                $mail->addAttachment('image/meo.jpg');  // dinh kem file
                $mail->addAttachment('image/meo.jpg');  // dinh kem file
            //Content
                $mail->isHTML(true);                    //tieu de                                 
                $mail->Subject = $title;
                $mail->Body    = $content;              //noi dung
                if($mail->send()){
                    header("Location:../sendmail.php?state=success");
                }else{
                    header("Location:../sendmail.php?state=error");
                }
                      
                          
        }
        catch(Exception $e){
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else{
        //bao loi-khong cho gui mail
        header("Location:../sendmail.php?state=fail");
    }

}