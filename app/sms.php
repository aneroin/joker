<?php
	require ('../protected/smsvars.php');
	require ('dbcon.php');

	function getkey() {
		$string1="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$string2="1234567890";
		$string=$string2;
		$string= str_shuffle($string);
		$random_key= substr($string,0,4);
		return $random_key;
	}

	function writekey($phone,$key,$_pdo){
		//SQLs
		$sql_sms= "CALL `taxijoke_db`.`write_smskey`(?,?);";
		//prepare globals
		$stm = $_pdo->prepare($sql_sms);
		//statement executing
		if ($stm->execute(array($phone,$key))) {
		   	return true;
		} else {
		    return false;
		}
	} 

	$phone_pattern = '/(\b(380){1}[0-9]{9}){1}/';
	$req['phone'] = $_POST['phone'];

	if (preg_match($phone_pattern,$req['phone'])) {
		$phone = $req['phone'];
		$key = getkey();
		if (writekey($phone,$key,$pdo)){
			//SEND SMS CODE FOR PHONE NUMBER
			$conn = new SoapClient('https://gate.smsclub.mobi/soap/soapGateway.wsdl');
	           $login = $sms_user;
	           $password = $sms_pass;
	           $alphaName = 'Taxi Joker';
	           $text = 'Ваш код для реєстрації: '.$key.' , дійсний протягом 1 години.';
	           // SINGLE MESSAGE
	           $destAddr = $phone;
	           try
	           {
	               $smscIds = $conn->sendSms($login,$password,$alphaName,$destAddr,$text);
	               $res['response'] = '1';
	           }    
	           catch (SoapFault $exception)
	           {
	               $res['response'] = '0';
	               $res['exception'] = $exception;
	               $res['credits']['user'] = $sms_user;
	               $res['credits']['pass'] = $sms_pass;
	           }  
		} else {
			$res['response'] = '0';
		}
	} else {
		$res['response'] = '0';
	}
	
	echo json_encode($res);
?>