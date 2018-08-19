
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "./PHPMailer-master/src/Exception.php";
require_once "./PHPMailer-master/src/PHPMailer.php";
require_once "./PHPMailer-master/src/SMTP.php";



function sendEmail($sender, $receiver, $receiverName, $subject, $body, $altBody){
    
    $mail = new PHPMailer(true); 

    $mail->isSMTP();
    $mail->Host = 'mail.ammeletricistas.com.br';
    $mail->SMTPAuth = true;
    $mail->Username = $sender;
    $mail->Password = 'senha1636';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom($sender, 'AMM Eletricistas');
    $mail->addAddress($receiver, $receiverName); 
    $mail->addReplyTo($sender, 'AMM Eletricistas');

    // $mail->addAttachment('vendas@ammeletricistas.com.br', 'NomeAmigavel.extenção');

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AltBody = $altBody;
    try {
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}
?>