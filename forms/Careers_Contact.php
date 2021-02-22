<?php
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];
    $Location = $_POST['location'];
    $Job_Title = $_POST['Job_title'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    //smtp settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "vazara.website@gmail.com";
    $mail->Password = 'vazara@123';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    //email settings
    $mail->isHTML(true);
    $mail->setFrom($email, $name,);
    $mail->addAddress("vazara.website@gmail.com");
    $mail->Subject = ("$email ($subject)");
    $mail->Body = ('<h1 style="font-family: Arial;">City</h1>' .
     $body.'<h3 style="font-family: Arial;">Location</h3>'.$Location.'<h3 style="font-family: Arial;">Job Title</h3>'.$Job_Title.'<h6>Note:-This Mail regrading for Job Enquirey </h6>');

    $mail->send();

   header('Location: http://vazara.xyz/');
}

?>
      