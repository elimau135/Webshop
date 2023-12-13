<?php 


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../../vendor/autoload.php';

 
//gut35pw_v0n_3L145.M

$mail = new PHPMailer(true);

 // Server settings
try{
  $mail->isSMTP(); // Set mailer to use SMTP
  $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
  $mail->SMTPAuth = true; // Enable SMTP authentication
  $mail->Username = 't35tm41l3l145@gmail.com'; // SMTP username
  $mail->Password = 'kerx vbpv xccr rbit'; // SMTP password
  $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 587; // TCP port to connect to   

  //Email content

  $mail->setFrom('t35tm41l3l145@gmail.com', 'Elias Maurer');
  $mail->addAddress('elias_maurer@gmx.net','Elias Maurer');



    // Content
    $mail->isHTML(true);                                   // Set email format to HTML
    $mail->Subject = 'HTML Email Example';
    
    // Read the HTML content from a file or include it directly
    $htmlContent = file_get_contents('../HTML/emails/registrierungsmaildesign.html');
    // Or you can set the HTML content directly:
    // $htmlContent = '<html><body><p>Hello, this is HTML content!</p></body></html>';
    
    $mail->Body = $htmlContent;

    // Send the email
    $mail->send();
    echo 'Message has been sent';
}catch(Exception $e){
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
