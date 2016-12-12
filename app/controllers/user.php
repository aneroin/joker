<?php
//session_start();
	class User extends Controller  {
		public function __construct($locale = null) {
			parent::__construct();
		}

		public function Index($locale = null) {
			die();
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
	}
?>
