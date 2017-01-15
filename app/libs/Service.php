<?php
	class Service {

		//TODO: move configuration to protected level
		private $serverUri = "http://5.58.83.13:8094/JokerWebService";
		private $localUri = "http://taxijoker.com";

		//TODO: remove on RESTful implementation
		private $restEndPoint = array(
			'login' => "/Login",
			'user' => array(
				"get" => "/GetUser/",
				"getall" => "/GetUsers",
				"add" => "/AddUser",
				"update" => "/UpdateUser/",
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

		/**
		* funcEndPoint
		* array of key => script
		* wraps local features that should be called outside of MVC Engine
		*/
		private $funcEndPoint = array(
			'smscheck' => "/sms_check.php"
		);

		/**
		* codes
		* array of key => int
		* wraps http and custom response codes to introduce them in consistent and meaningful way
		*/
		private $codes = array(
			'server_error' => 500,
			'wrong_credits' => 422,
			'token_expired' => 400,
			'wrong token' => 401,
			'sms_wrong_data' => 901,
			'sms_code_expired' => 902
		);

		/* singleton construction start	*/
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
		/* singleton construction end */

		/* CRUD start */
		/**
		* Get Method
		* uri -> address to call
		* headers -> optional array of headers to send
		*/
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

		/**
		* Post Method
		* uri -> address to call
		* body -> data to send
		* headers -> optional array of headers to send
		*/
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
				->body($body)
				->addHeaders($headers)
				->send();
				return $response;
			}
		}

		/**
		* Put Method
		* uri -> address to call
		* body -> data to send
		* headers -> optional array of headers to send
		*/
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

		/**
		* Delete Method
		* uri -> address to call
		* headers -> optional array of headers to send
		*/
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
		/* CRUD end */

		/**
		* smsCheck
		* internal service call
		* checks given code received from sms
		*/
		public function smsCheck($data){
			$smsdata = array(
				'phone' => $data->phone,
				'key' => $data->code
			);
			$res = $this->post($this->localUri.$this->funcEndPoint['smscheck'],$smsdata);
			return $res;
		}

		/**
		* captchaCheck
		* internal service call
		* checks given code received from recaptcha
		*/
		public function captchaCheck($data){
			$res = $this->post("https://www.google.com/recaptcha/api/siteverify", $data);
			return $res;
		}

		/**
		* tokenUpdate
		* automatically handled token renew procedure
		* TODO: REMOVE!!!
		*/
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

		/*
		* test
		* test connection to server
		*/
		public function test(){
			return \Httpful\Request::get($this->serverUri)->send();
		}

		public function signin($user){
			$login_headers = array(
				"login" => $user->login,
				"password" => $user->password
			);
			return $this->post($this->serverUri.$this->restEndPoint['login'],"",$login_headers);
		}

		public function signup($user){
			return $this->post($this->serverUri.$this->restEndPoint['user']['add'],$user);
		}

		public function makeorder($order){
			return $this->withAuth(function($token, $uri) use (&$order){return Service::Instance()->post($uri,$order,$token);}, $this->serverUri.$this->restEndPoint['order']['add']);
		}

		public function getorder($id){
			return $this->withAuth(function($token, $uri){return Service::Instance()->get($uri,$token);}, $this->serverUri.$this->restEndPoint['order']['get'].$id);
		}

		public function getorders(){
			return $this->withAuth(function($token, $uri){return Service::Instance()->get($uri,$token);}, $this->serverUri.$this->restEndPoint['order']['getall']);
		}

		public function getorderstate($id){
			return $this->withAuth(function($token, $uri){return Service::Instance()->get($uri,$token);}, $this->serverUri.$this->restEndPoint['orderstate']['get'].$id);
		}

		public function getuser($id){
			return $this->withAuth(function($token, $uri){return Service::Instance()->get($uri,$token);}, $this->serverUri.$this->restEndPoint['user']['get'].$id);
		}

		public function updateuser($id,$data){
			return $this->withAuth(function($token, $uri, $data){return Service::Instance()->post($uri,$data,$token);}, $this->serverUri.$this->restEndPoint['user']['update'].$id, $data);
		}


		/**
		* withAuth
		* wrapper for CRUD operations with Authentication
		* func -> callable CRUD operation
		* uri -> address to call
		* data -> data to send
		* includes current user's token into headers section of requests
		* 1 invariant: response code 200 - all OK, return data
		* 2 invariant: response code 400 or 401 - wrong or obsolete token, try sign in from stored user data, obtain new token and retry
		* 2.1 if response code 200 - all OK, return data
		* 2.2 if response code 400 or 401 - wrong or obsolete stored user data, remove user, go to main page
		* 3 invariant: another response code - remove user, go to main page
		*/
		private function withAuth(callable $func, $uri, $data){
			$token = Array(
				"token" => JokerUser::Instance()->token
			);
			$res = $func($token,$uri,$data);
			if ($res->code == 200){
				return $res;
			} else if ($res->code == 400 || $res->code == 401){
				if ((JokerUser::Instance()->signin())){
					$token = Array(
						"token" => JokerUser::Instance()->token
					);
					$res = $func($token,$uri,$data);
					if ($res->code == 200){
						return $res;
					} else if ($res->code == 400 || $res->code == 401){
						JokerUser::Instance()->signout();
						header("Location: " . URL);
						return $res;
					}
				}	else {
					JokerUser::Instance()->signout();
					header("Location: " . URL);
					return $res;
				}
			}
			else {
				JokerUser::Instance()->signout();
				header("Location: " . URL);
				return $res;
			}
		}

		//TODO: intergate AccessTable
		/**
		* hasAccess
		* checks if user has enough rights
		*/
		private function hasAccess($access){
			return JokerUser::Instance()->checkRole($access);
		}


		//endclass
	}
?>
