<?php
	$phone_pattern = '/(\b(380){1}[0-9]{9}){1}/';
	$req['phone'] = $_POST['phone'];

	if (preg_match($phone_pattern,$req['phone'])) {
		//SEND SMS CODE FOR PHONE NUMBER
		$res['response'] = '1';
		$phone = $req['phone'];
	} else {
		$res['response'] = '0';
	}
	
	echo json_encode($res);
?>