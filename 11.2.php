<?php
  require 'PHPMailer/src/Exception.php';
  require 'PHPMailer/src/PHPMailer.php';
  require 'PHPMailer/src/SMTP.php';
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  $mail = new PHPMailer();
  $mail->IsSMTP();


  $mail->SMTPAuth   = TRUE;
  $mail->SMTPSecure = "ssl";
  $mail->Port       = 465;
  $mail->Host       = " ssl://smtp.gmail.com";
  $mail->Username   = "your gmail id";
  $mail->Password   = "get ur app token and place here";

  $mail->IsHTML(true);
  $mail->AddAddress("Gmail id to send ", "Yash Jadav");
  $mail->SetFrom("your gmail id", "Udit Vegad");
  $mail->AddReplyTo("Gmail id to send ", "Yash Jadav");
  $mail->AddCC("cc-yash999jadav@gmail.com", "cc-Yash Jadav");
  $mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
  $content = "<b>This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>";

  $mail->MsgHTML($content); 
  if(!$mail->Send()) {
    echo "Error while sending Email.";
    var_dump($mail->ErrorInfo);
  } else {
    echo "Email sent successfully";
  }
