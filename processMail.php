<?php
$from = $_POST["femail"];
$msg = $_POST["fmsg"];
$fullBody ="Message is from: ";

$fullBody .= $from;
$fullBody .= "\r\n\r\n";
$fullBody .= $msg;

echo $fullBody;

require '/usr/share/php/libphp-phpmailer/class.smtp.php';
require '/usr/share/php/libphp-phpmailer/class.phpmailer.php';

$mail = new PHPMailer;
$mail->setFrom('schrecksen@gmail.com','Pasta i Basta');
$mail->addAddress('bernas.anna@op.pl');
$mail->Subject = 'Pasta i Basta - widomosc od uzytkownika';
$mail->Body = $fullBody;


$mail->IsSMTP();
$mail->SMTPSecure = 'ssl';
$mail->Host = 'ssl://smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Port = 465;
$mail->Username = 'schrecksen@gmail.com';
$mail->Password = 'Alien1998!';
if(!$mail->send()) {
  echo 'notSent';
} else {
  echo 'sent';
}

header("Location: me.html");
?>