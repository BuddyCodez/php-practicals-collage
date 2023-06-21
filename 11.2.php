<?php
//! NOT WORKING PLEASE DONT USE!
$to = 'examplemail@gmail.com';
$subject = 'Test Email';
$message = 'This is a test email.';
$headers = 'From: examplemail@gmail.com' . "\r\n" .
'Reply-To: examplemail@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
ini_set('SMTP', 'smtp.gmail.com');
ini_set('smtp_port', 587);
ini_set('sendmail_from', 'examplemail@gmail.com');
ini_set('sendmail_path', '\"C:\xampp\sendmail\sendmail.exe\" -t');
// Send the email
if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully!';
} else {
    echo 'Email could not be sent.';
}
?>