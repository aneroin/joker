<?php
	$phone_pattern = '/(\b(380){1}[0-9]{9}){1}/';
	$smscode_pattern = '/([A-Z]*[0-9]*){4}/';
	$req['phone'] = $_POST['phone'];
	$req['smscode'] = $_POST['smscode'];
	
	if (preg_match($phone_pattern,$req['phone'])) {
		$phone = $req['phone'];
	}

	if (preg_match($smscode_pattern,$req['smscode'])) {
		$smscode = $req['smscode'];
	}

	if(isset($phone) && isset($smscode)) {
		//CHECK SMS CODE FOR PHONE NUMBER
		if($smscode == '1234') {
			$res['response'] = '1';
		}
	} else {
		$res['response'] = '0';
	}
	
	echo json_encode($res);
?>