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
			$url = 'https://gate.smsclub.mobi/http/?';
	    $username = $sms_user;    // string User ID (phone number)
	    $password = $sms_pass;        // string Password
	    $from = 'Taxi Joker';        // string, sender id (alpha-name) (as long as your alpha-name is not spelled out, it is necessary to use it)
	    $to = $phone;
	    $text = iconv("UTF-8", "Windows-1251", 'Ваш код для реєстрації: '.$key.' , дійсний протягом 1 години.');       // string Message
	    $url_result = $url.'username='.$username.'&password='.$password.'&from='.urlencode($from).'&to='.$to.'&text='.$text;

	    if($curl = curl_init())
	    {
	        curl_setopt($curl, CURLOPT_URL, $url_result);
	        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
	        curl_exec($curl);
	        curl_close($curl);
					$res['response'] = '1';
			} else {
					$res['response'] = '0';
			}
			//SEND SMS CODE FOR PHONE NUMBER
			/* old one
			$conn = new SoapClient('https://gate.smsclub.mobi/soap/soapGateway.wsdl');
	           $login = $sms_user;
	           $password = $sms_pass;
	           $alphaName = 'Taxi Joker';
	           $text = ;
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
			*/
		} else {
			$res['response'] = '0';
		}
	} else {
		$res['response'] = '0';
	}

	echo json_encode($res);
?>
