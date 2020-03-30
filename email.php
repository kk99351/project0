<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (include 'mail/Exception.php')
{
$included = "yes";
include 'mail/PHPMailer.php';
include 'mail/SMTP.php';

function sendmailuser($emailto,$body,$sbody,$subject,$imgpath,$msg)
{
$mail = new PHPMailer();
if ($imgpath)
{
    $mail->AddAttachment($imgpath,'poshimg.png');
    $mail->AddEmbeddedImage($imgpath,"usercid", "poshimg.png");
    
}
$email_from = "support@poshproduction.in";
$mail->IsSMTP();
$mail->Host = "ssl://smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "kk99351@gmail.com";
$mail->Password = "01&|^~\kK>><<";
$mail->SMTPSecure = "tls";
$mail->Port = 465;
$mail->IsHTML(true);
$mail->From = $email_from;
$mail->FromName = "Posh Entertainment";
$mail->Sender = $email_from;
$mail->AddReplyTo($email_from, "No Reply");
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AltBody = $sbody;
$mail->AddAddress($emailto);
 if ($mail->Send())
 {
    echo $msg;
 }
 else
 {
    trigger_error("err");
 }
}
function sendmaildev($body,$sbody,$subject)
{
$mail = new PHPMailer();
$email_from = "support@poshproduction.in";
$mail->IsSMTP();
$mail->Host = "ssl://smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "kk99351@gmail.com";
$mail->Password = "01&|^~\kK>><<";
$mail->SMTPSecure = "tls";
$mail->Port = 465;
$mail->IsHTML(true);
$mail->From = $email_from;
$mail->FromName = "Posh Entertainment";
$mail->Sender = $email_from;
$mail->AddReplyTo($email_from, "No Reply");
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AltBody = $sbody;
$mail->AddAddress('kk99351@gmail.com');
$mail->Send();
}
}
else
{
    $included = "";
}
?>