  <?php
include("class.phpmailer.php");
include("class.smtp.php"); 
$mail= new PHPMailer();

$body = 'HI This is Sample Email Test.............';

//$mail->SMTPSecure = "ssl";  
$mail->Host='smtpcorp.com';  
$mail->Port='587';   
$mail->Username   = 'ashraful.sec01@gmail.com'; 
$mail->Password   = 'ashrafulseccse09';  
$mail->SMTPKeepAlive = true;  
$mail->Mailer = "smtp"; 
$mail->IsSMTP(); 
$mail->SMTPAuth   = true;               
$mail->CharSet = 'utf-8';  
$mail->SMTPDebug  = 0;         

$mail->From       = "ashraful.sec01@gmail.com";
$mail->FromName   = " From: SEC Library";
$mail->Subject    = "This is the subject";
$mail->AltBody    = "This is the body when user views in plain text format"; //Text Body
$mail->WordWrap   = 50; 

$mail->MsgHTML($body);
$mail->AddAddress("ashraful.sec01@gmail.com","First Last");

$mail->IsHTML(true); 

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message has been sent";
}

?>
