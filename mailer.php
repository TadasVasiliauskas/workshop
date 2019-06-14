<?php
require("/home/emailwor/public_html/src/Exception.php");
require("/home/emailwor/public_html/src/PHPMailer.php");
require("/home/emailwor/public_html/src/SMTP.php");

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'email-workshops.tech';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'no8@email-workshops.tech';
$mail->Password = '1a@uwYxJ%y{w';
$mail->setFrom('no8@email-workshops.tech', 'Tadas');
$mail->addReplyTo('reply-box@hostinger-tutorials.com', 'Your Name');
$mail->addAddress('tadas.vasiliauskas15@gmail.com', 'Receiver Name');
$mail->Subject = 'PHPMailer SMTP message';
$mail->msgHTML(file_get_contents('test.php'), __DIR__);
$mail->AltBody = 'This is a plain text message body';
$mail->addAttachment('test.php');
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}
?>