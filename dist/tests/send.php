<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'php_mailer/Exception.php';
require 'php_mailer/PHPMailer.php';
require 'php_mailer/SMTP.php';

if( isset($_POST) ){

	function send_mail($html, $emails){
		$mail = new PHPMailer;

		$mail->CharSet = 'UTF-8';
		$mail->Encoding = 'base64';

		$mail->isSMTP(); 
		$mail->Host = 'smtp.yandex.ru'; 
		$mail->SMTPAuth = true; 
		$mail->Username = 'LeeMeinMail@yandex.ru';
		$mail->Password = 'gfAjkNy7hajWwb'; // Ваш пароль
		$mail->SMTPSecure = 'ssl'; 
		$mail->Port = 465;

		$mail->setFrom('LeeMeinMail@yandex.ru'); // Ваш Email

		foreach ($emails as $email) {
			$mail->addAddress($email);
		}
		
		$mail->isHTML(true); 

		$mail->Subject = "Тестирование верстки писем";
		//$mail->Body = $html;
		$mail->msgHTML($html, $_SERVER['DOCUMENT_ROOT'] . "/img");

		$mail->send();
	}

	foreach($_POST['templates'] as $key => $templ){
		$template = file_get_contents('../' . $templ . '.html');
		$emls = explode(",", $_POST['emails']);
		send_mail($template, $emls);
	}
}