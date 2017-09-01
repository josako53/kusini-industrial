<?php

require_once '../phpmailer/PHPMailerAutoload.php';

$errors = [];
if(isset($_POST['name'], $_POST['email'], $_POST['message'])){
 
	$fields = [
		'name' => $_POST['name'],
		'email' => $_POST['email'],
		'message' => $_POST['message']
	];

	foreach($fields as $field => $data){
		if(empty($data)){
			$errors[] = 'This '.$field.' field is required';
		}
	}

	if(empty($errors)){

		$mail = new PHPMailer();

		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->Host = 'smtp.gmail.com';
		$mail->Username = 'johnsabaskomba@gmail.com';
		$mail->Password = 'sabass53';
		$mail->SMTPSecure = 'ssl';
		$mail->Port = 465;

		$mail->isHTML();

		$mail->Subject = 'Contact form submitted';
		$mail->Body = 'From '.$fields['name'].' ('.$fields['email'].') <p>'.$fields['message'].'</p>';

		$mail->FromName = $fields['name'];

		$mail->AddReplyTo($fields['email'], $fields['name']);
		$mail->addAddress('johnsabaskomba@gmail.com', 'John Komba');

		if(!$mail->send()){
			$message[] = 'Your message was not sent, Please try again later.';
		}else{
			$message[] = 'We have got your message, we\'ll get back to you shortly.';
		}


	}

}else{
	$errors[] = 'Something went wrong';
}



header('Location: ../index.php?page=contact');