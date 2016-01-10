<?php
	require ('dbcon.php');

	function checkkey($phone,$key,$_pdo){
		//SQLs
		$sql_sms= "CALL `taxijoke_db`.`check_smskey`(?,?);";
		//prepare globals
		$stm = $_pdo->prepare($sql_sms);
		//statement executing
		$stm->execute(array($phone,$key));
		
		if ($stm->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	} 

	$phone_pattern = '/(\b(380){1}[0-9]{9}){1}/';
	$req['phone'] = $_POST['phone'];
	$key_pattern = '/\b[0-9A-Z]{4}/';
	$req['key'] = $_POST['smscode'];

	if (preg_match($phone_pattern,$req['phone']) && preg_match($key_pattern,$req['key'])) {
		$phone = $req['phone'];
		$key = $req['key'];
		if (checkkey($phone,$key,$pdo)){
			 $res['response'] = '1';  
			 $res['code'] = '200'; //200 - OK         
		} else {
			$res['response'] = '0';
			$res['code'] = '902'; //902 - code expired
		}
	} else {
		$res['response'] = '0';
		$res['code'] = '901'; //901 - wrong data
	}
	echo json_encode($res);
?>