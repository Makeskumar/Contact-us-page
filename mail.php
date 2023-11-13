
<?php


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// use PHPMailer\PHPMailer\SMTP;



//Load Composer's autoloader
if(isset($_POST["submit"])){
require 'vendor/autoload.php';

$name=$_POST["Name"];

$phone=$_POST["Phone"];
$email=$_POST["Email"];

$subject=$_POST["Subject"];
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
 
  
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'makeskumar5882@gmail.com';                     //SMTP username
    $mail->Password   = 'sbbdyiisvkhaunzd';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                     //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

   //Recipients
   $mail->setFrom('makeskumar5882@gmail.com', 'Makesh');
   $mail->addAddress('makeskumar5882@gmail.com', 'Max');     //Add a recipient
   $mail->addReplyTo('makeskumar5882@gmail.com', 'Makesh');

    //Attachments
    // $mail->addAttachment('assest/1.jpg',"welcome");         //Add attachments
   
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Mail From Protofolio';
    $mail->Body    = 'Name : '.$name .'<br>Phone : '.$phone .'<br>Email : '.$email .'<br>Subject : '.$subject;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

    $thankYouMail = new PHPMailer(true);
    $thankYouMail->isSMTP();
    $thankYouMail->Host = 'smtp.gmail.com';
    $thankYouMail->SMTPAuth = true;
    $thankYouMail->Username = 'makeskumar5882@gmail.com'; // Your Gmail address
    $thankYouMail->Password = 'sbbdyiisvkhaunzd';  // Your Gmail password
    $thankYouMail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $thankYouMail->Port = 465;

    $thankYouMail->setFrom('makeskumar5882@gmail.com', 'Makeskumar');
    $thankYouMail->addAddress($email, $name); // Use the email submitted in the contact form
    $thankYouMail->isHTML(true);
    $thankYouMail->Subject = 'Thank you for contacting us';
    $thankYouMail->Body = 'Dear ' . $name . ',<br><br>Thank you for contacting us. We will get back to you as soon as possible.';
    
    $thankYouMail->send();

    echo '<center style="margin-top: 50px;
    background: lightgreen;
    margin-right: 20%;
    margin-left: 20%;
    color: white;
    padding: 10px;
    border-radius: 6px;
    font-size: 19px;
"> Message has been sent </center>';
} catch (Exception $e) {
    echo '<center style="margin-top: 50px;
    background: lightred;
    margin-right: 20%;
    margin-left: 20%;
    color: white;
    padding: 10px;
    border-radius: 6px;
    font-size: 19px;
"> Message could not be sent. Mailer Error: {$mail->ErrorInfo} </center>';
}
}

?>