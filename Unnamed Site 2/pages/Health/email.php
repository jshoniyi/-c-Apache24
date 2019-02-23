<?php
require "C:/php/class.phpmailer.php";

$mail = new PHPMailer();
$mail->Mailer = "smtp";
$mail->Host = "smtp.mydomain.com";  // Specify main and backup server
$mail->Port = "587";
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = "jshoniyi@studentmysqljs.com";                            // SMTP username
$mail->Password = "Wwtwo1832!";                           // SMTP password
$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->SetFrom("jshoniyi@studentmysqljs.com", "John Shoniyi");  // Add a recipient






//$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted


$mail->AddAddress("jshoniyi@yahoo.com");               // Name is optional
$mail->AddReplyTo("jshoniyi@gmail.com", "Information");
//$mail->AddCC('cc@example.com');
//$mail->AddBCC('bcc@example.com');

//$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->AddAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->AddAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
//$mail->IsHTML(true);                                  // Set email format to HTML



     
 
    $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $phone = $_POST['phone']; // not required
    $msg = $_POST['message']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  $site = 'jshoniyi@studentmysqljs.com';
  $request_holder = 'jshoniyi@gmail.com';
  $email_subject = 'Request';

$mail->Body = "Hi! \n\n $name \n  $email \n  $phone \n $msg sent through PHPMailer.";

// create email headers

//$mail($request_holder, $email_subject, $name.$email.$phone.$msg, $headers)->;

//$mail->SMTPDebug = 3;

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}
?>
