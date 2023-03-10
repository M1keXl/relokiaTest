<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'phpmailer/src/Exception.php';
  require 'phpmailer/src/PHPMailer.php'; 

  $mail = new PHPMailer(true);
  
  $mail->CharSet = 'UTF-8';
  $mail->setLanguage('ru', 'phpmailer/language/');
  $mail->IsHTML(true);

  $mail->setFrom('mihayloh.com@gmail.com');

  $mail->addAddress($_POST['email']); 
  $mail->Subject = 'Relokia multi form';


  $body = '<h1>Let`s check what we got!</h1>';

  if(trim(!empty($_POST['name']))) {
    $body.='<p><strong>Имя:</strong> '.$_POST['name'].'</p>';
  }
  if(trim(!empty($_POST['phone']))) {
    $body.='<p><strong>Телефон:</strong> '.$_POST['phone'].'</p>';
  }
  if(trim(!empty($_POST['email']))) {
    $body.='<p><strong>E-mail:</strong> '.$_POST['email'].'</p>';
  }
  if(trim(!empty($_POST['calculate']))){
      $body.='<p><strong>Price: </strong>'.$_POST['calculate'].'</p>';
  }

  $mail->Body = $body;


  if(!$mail->send()) {
        $message = '⚠️ We cannot send you email right now. Use alternative way to contact us';

  } else {
    $message = '✅ Your email was send successfully';

  }

  $response = ['message' => $message];

  header('Content-type: application.json');
  echo json_encode($response);
?>