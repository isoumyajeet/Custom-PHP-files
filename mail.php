<?php
require_once 'mailer/class.phpmailer.php';
$mail = new PHPMailer();
$mail->IsSMTP(); 
$mail->Host = '';
$mail->Port = 25;
$mail->SMTPAuth = true;
$mail->Username = '';
$mail->Password = '';
$mail->From       = "";
$mail->FromName   = ""."$_POST[name]"."";

//$mail->AddAddress('sumandas.lnsel@gmail.com', 'Website Admin');
$mail->AddAddress('', 'Website Admin');
$mail->Subject = 'Contact Form';
$mail->IsHTML(false);
$mail->Body = "Name:"." ".$_POST['name']."\n".
"Email:"." ".$_POST['email']."\n".
"Message:"." ".$_POST['message']."\n";

if(!$mail->Send()) {
  echo 'Mailer error: '.$mail->ErrorInfo;
} else {
  //echo "<script>alert('Mail Sent Successfully');</script>";
  echo "<script>window.location='http://';</script>";
}
?>


