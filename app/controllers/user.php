<?php
//session_start();
	class User extends Controller  {
		public function __construct($locale = null) {
			parent::__construct();
		}

		public function Index($locale = null) {
			require 'controllers/error.php';
			return new Error(array(403,'move along'));
		}

		public function test($locale = null){
			echo JokerUser::Instance()->test();
		}

		public function signin($locale = null){
			$login = isset($_POST['login']) ? $_POST['login'] : null;
			$pass = isset($_POST['pass']) ? $_POST['pass'] : null;
			if ($login!=null && $pass!=null){
				$result = JokerUser::Instance()->make($login, $pass);
				if ($result){
					http_response_code(200);
				} else {
					http_response_code(401);
				}
			} else {
				http_response_code(400);
			}
			if (isset($_SERVER["HTTP_REFERER"])) {
				header("Location: " . $_SERVER["HTTP_REFERER"]);
			}
			return($result);
		}

		public function signup($locale = null){
			$smscode = isset($_POST['code']) ? $_POST['code'] : null;
			$login = isset($_POST['login']) ? $_POST['login'] : null;
			$phone = isset($_POST['phone']) ? $_POST['phone'] : null;
			$pass = isset($_POST['pass']) ? $_POST['pass'] : null;
			$response = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : null;

			$capdata = array(
				'secret' => $_recaptcha_key,
				'response' => $response,
				'remoteip' => $_SERVER['REMOTE_ADDR']
			);

			$cap = Service::Instance()->captchaCheck($capdata);
			if ($cap['success'] == false){
				http_response_code(419);
			}

			$smsdata = array(
				'phone' => $phone,
				'code' => $smscode
			);

			$res = Service::Instance()->smsCheck($smsdata);
			if($res['response'] == '0'){
				if ($res['code'] == '901')
					http_response_code(422);
				else if ($res['code'] == '902')
					http_response_code(419);
				else
					http_response_code(500);
			}

			if ($login!=null && $pass!=null && $phone!=null){
				$result = JokerUser::Instance()->makenew($login, $pass, $phone);
				if ($result){
					http_response_code(200);
				} else {
					http_response_code(401);
				}
			} else {
				http_response_code(400);
			}
			if (isset($_SERVER["HTTP_REFERER"])) {
				header("Location: " . $_SERVER["HTTP_REFERER"]);
			}
			return($result);
		}

		public function signout($locale = null){
			JokerUser::Instance()->signout();
			http_response_code(200);
			header("Location: " . URL);
		}

		public function update($locale = null){
			if (parent::auth()){
				$firstName = isset($_POST['firstname']) ? $_POST['firstname'] : null;
				$middleName = isset($_POST['middlename']) ? $_POST['middlename'] : null;
				$lastName = isset($_POST['surname']) ? $_POST['surname'] : null;
				$birthDate = isset($_POST['birthdate']) ? $_POST['birthdate'] : null;
				$address = isset($_POST['address']) ? $_POST['address'] : null;

				$data = array();
				if (!is_null($firstName)){
					$data['FirstName'] = $firstName;
				}
				if (!is_null($middleName)){
					$data['MiddleName'] = $middleName;
				}
				if (!is_null($lastName)){
					$data['Surname'] = $lastName;
				}
				if (!is_null($birthDate)){
					$data['BirthDate'] = $birthDate;
				}
				if (!is_null($address)){
					$data['Address'] = $address;
				}
				$json_data = json_encode($data);

				$result = Service::Instance()->updateuser(JokerUser::Instance()->id,$json_data);
				http_response_code($result->code);
				return true;
			} else {
				http_response_code(400);
				if (isset($_SERVER["HTTP_REFERER"])) {
					header("Location: " . $_SERVER["HTTP_REFERER"]);
				} else {
					header("Location: " . URL);
				}
				return false;
			}
		}
	}
?>
