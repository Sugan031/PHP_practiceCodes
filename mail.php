<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "PHPMailer-master/src/Exception.php";
require "PHPMailer-master/src/PHPMailer.php";
require "PHPMailer-master/src/SMTP.php";

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "suganthansurya31@gmail.com";
    $mail->Password = "qtirsjdvrzhohbre";
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;

    $mail->setFrom("suganthansurya31@gmail.com");

    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    $mail->send();

    echo "
    <script> alert('Mail sent successfully') </script>
    ";
}
?>