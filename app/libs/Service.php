<?php
	class Service {

		private $testUri = "http://google.com/";
		private $serverUri = "http://5.58.83.13:8094/JokerWebService";
		private $localUri = "http://taxijoker.com";

		private $restEndPoint = array(
			'login' => "/Login",
			'user' => array(
				"get" => "/GetUser/",
				"getall" => "/GetUsers",
				"add" => "/AddUser",
				"update" => "/UpdateUser",
				"delete" => "/DeleteUser"
			),
			'order' => array(
				"get" => "/GetOrder/",
				"getall" => "/GetOrders",
				"add" => "/AddOrder",
				"update" => "/UpdateOrder",
				"delete" => "/DeleteOrder"
			),
			'orderstate' => array(
				"get" => "/GetOrderState/",
				"getall" => "/GetOrderStates",
				"add" => "/AddOrderState",
				"update" => "/UpdateOrderState",
				"delete" => "/DeleteOrderState"
			)
		);

		private $funcEndPoint = array(
			'smscheck' => "/sms_check.php"
		);

		private $codes = array(
			'server_error' => 500,
			'wrong_credits' => 422,
			'token_expired' => 400,
			'wrong token' => 401,
			'sms_wrong_data' => 901,
			'sms_code_expired' => 902
		);

		private function __clone() {}
		private function __construct() {}
		private static $instance = null;
		public static function Instance()
		{
			if (null === self::$instance)
			{
				self::$instance = new self();
			}

			return self::$instance;
		}

		public function get($uri,$headers = null){
			if ($headers==null){
				$response = \Httpful\Request::get($uri)
				->send();
				return $response;
			} else {
				$response = \Httpful\Request::get($uri)
				->addHeaders($headers)
				->send();
				return $response;
			}
		}

		public function post($uri,$body,$headers = null){
			if ($headers==null){
				$response = \Httpful\Request::post($uri)
				->sendsJson()
				->body($body)
				->send();
				return $response;
			} else {
				$response = \Httpful\Request::post($uri)
				->sendsJson()
				->body(json_encode($body))
				->addHeaders($headers)
				->send();
				return $response;
			}
		}

		public function put($uri,$body,$headers = null){
			if ($headers==null){
				$response = \Httpful\Request::put($uri)
				->sendsJson()
				->body($body)
				->send();
				return $response;
			} else {
				$response = \Httpful\Request::put($uri)
				->sendsJson()
				->body($body)
				->addHeaders($headers)
				->send();
				return $response;
			}
		}


		public function delete($uri,$headers = null){
			if ($headers==null){
				$response = \Httpful\Request::delete($url)
				->send();
				return $response;
			} else {
				$response = \Httpful\Request::delete($url)
				->addHeaders($headers)
				->send();
				return $response;
			}
		}

		/*
		*
		*
		*
		*/
		public function smsCheck($data){
			$smsdata = array(
				'phone' => $data->phone,
				'key' => $data->code
			);
			$res = $this->post($this->localUri.$this->funcEndPoint['smscheck'],$smsdata);
			return $res;
		}

		public function tokenUpdate($data){
			/*TODO:define token renew procedure
			*
			* Make a token update mechanism
			* 1) reLogin using stored login and password hash
			* 2) renew token by providing expired token and obtaining new one
			*/
			if ($data->logged && $data->token!=null){
				$res = $this->signin($data);
				if ($res->code == 200){
					$data->token = $res->body['token'];
					//$data->tokenTime = $res->body['tokenTime'];
					return true;
				} else {
					//user provided wrong credentials and should login from scratch
					return false;
				}
			} else {
				//user has no token and should login from scratch
				return false;
			}
		}

		public function signin($user){
			$login_headers = array(
				"login" => $user->login,
				"password" => $user->password
			);
			return $this->post($this->serverUri.$this->restEndPoint['login'],"",$login_headers);
		}

		public function test(){
			return \Httpful\Request::get($this->serverUri)->send();
		}

		public function signup($user){
			return $this->post($this->serverUri.$this->restEndPoint['user']['add'],$user);
		}

		public function makeorder($order){
			return $this->withAuth($this->serverUri.$this->restEndPoint['order']['add'], function($uri, $token) use (&$order){return Service::Instance()->post($uri,$order,$token);});
		}

		public function getorder($id){
			return $this->withAuth($this->serverUri.$this->restEndPoint['order']['get'].$id, function($uri, $token){return Service::Instance()->get($uri,$token);});
		}

		public function getorders(){
			return $this->withAuth($this->serverUri.$this->restEndPoint['order']['getall'], function($uri,$token){return Service::Instance()->get($uri,$token);});
		}

		public function getorderstate($id){
			return $this->withAuth($this->serverUri.$this->restEndPoint['orderstate']['get'].$id, function($uri,$token){return Service::Instance()->get($uri,$token);});
		}

		public function getuser($id){
			return $this->withAuth($this->serverUri.$this->restEndPoint['user']['get'].$id, function($uri,$token){return Service::Instance()->get($uri,$token);});
		}


		//TODO: token renew procedure
		private function withAuth($uri,callable $func){
			$token = Array(
				"token" => JokerUser::Instance()->token
			);
			$res = $func($uri,$token);
			echo("res1 : ".$res->code);
			if ($res->code == 200){
				return $res;
			} else if ($res->code == 400 || $res->code == 401){
				if ((JokerUser::Instance()->signin())){
					$token = Array(
						"token" => JokerUser::Instance()->token
					);
					$res = $func($uri,$token);
					echo("res2 : ".$res->code);
					if ($res->code == 200){
						return $res;
					} else if ($res->code == 400 || $res->code == 401){
						JokerUser::Instance()->signout();
						header("Location: " . URL);
						return null;
					}
				}	else {
					JokerUser::Instance()->signout();
					header("Location: " . URL);
					return null;
				}
			}
			else {
				JokerUser::Instance()->signout();
				header("Location: " . URL);
				return null;
			}
		}

		//TODO: token renew procedure
		private function hasAccess($access){
			return JokerUser::Instance()->checkRole($access);
		}


		//endclass
	}
?>
