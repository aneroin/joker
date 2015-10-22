<?php
	$errors;
	$messages;
	$data;
	require ('dbcon.php');
		$name = $_GET['name'];
		$surname = $_GET['surname'];
		$middlename = $_GET['middlename'];
		$phone = $_GET['phone'];
		$email = $_GET['email'];

		$phone = '000-0000-0000';

	if(!preg_match("/^[0-9]{10}$/", $phone)) {
  		$errors['900'] = "incorrect phone number";
	}
	if(!preg_match("/([Є-Я]*[а-ї]*){24}/", $name)) {
  		$errors['901'] = "incorrect name";
	}
	if(!preg_match("/([Є-Я]*[а-ї]*){24}", $surname)) {
  		$errors['902'] = "incorrect surname";
	}
	if(!preg_match("/([Є-Я]*[а-ї]*){24}", $middlename)) {
  		$errors['903'] = "incorrect middlename";
	}
	if(!preg_match("/(([0-9]*[A-z])+[.]{0,1})+[@]{1}(([0-9]*[A-z])+[.]{0,1})+/")){
		$errors['904'] = "incorrect email";
	}

		//receiver
		$to = 'ua828ua@gmail.com';
		//topic
		$subject = "Вакансія водія ".$name." тел: ".$phone;
		//message
		$message = "Відправник: ".$name." ".$middlename." ".$surname." \n"."Номер телефону: ".$phone." \n"."Бажає стати водієм таксі Джокер.";
		//headers
		$headers = 'From: <info@taxijoker.com>' . "\r\n";
		$headers .= 'CC: '.$email. "\r\n";

		if (mail($to,$subject,$message,$headers)===false) {
			$errors['800'] = "email error, please, try again later";
		} else {
			$messages["title"] = "email sent";
		}

	$data['errors'] = $errors;
	$data['messages'] = $errors;
	
	header('Content-type: application/json');
	return json_encode($data);

?>