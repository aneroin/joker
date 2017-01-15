<?php
	class JokerUser {
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


		/*members*/
		//PERSONAL ID
		public $id = null;

		//login in system
		public $login = null;
		//sha-encoded password
		public $password = null;

		//sha-encoded password
		public $accessTable = null;

		//first name
		public $firstName = null;
		//middle name
		public $middleName = null;
		//surname
		public $surName = null;
		//mobile phone
		public $phone = null;

		//land line phone
		public $llphone = null;
		//date of birth
		public $birthDate = null;
		//address
		public $address = null;
		//commentary
		public $commentary = null;
		//photo
		public $photo = null;

		//token
		public $token = null;
		//last token issue time
		public $tokenTime = null;


		//role in system TODO: change to access table
		public $role = null;
		//personal data as array
		public $data = array();
		//is logged in?
		public $logged = false;

		public function test(){
			return Service::Instance()->test();
		}

		/*authentication*/
		//make a new user instance by signin
		public function make($l,$p) {
			/*TODO:define signup and signin data sets*/
			$this->login = $l;
		 	$this->password = hash('sha512', $p, false);
			return $this->signin();
		}

		//make a new user instance by signup
		public function makenew($l,$p,$f){
			/*TODO:define signup and signin data sets*/
			$this->login = $l;
			$this->password = hash('sha512', $p, false);
			$this->phone = $f;
			return $this->signup();
		}

		//signup
		public function signup(){
			$res = Service::Instance()->signup($this);
			if ($res->code == 200){
				/*TODO:confirmation*/
				return true;
			}
			else return false;
		}

		//signin
		public function signin(){
			$res = Service::Instance()->signin($this);
			if ($res->code == 200){
				$this->logged = true;
				$this->token = $res->body->Token;
				$this->tokenTime = $res->body->TokenExpirationDate;
				$this->id = $res->body->Id;
				$this->persist();
				return true;
			} else {
				$this->logged = false;
				return false;
			}
		}

		//signout
		public function signout(){
			$this->logged = false;
			$this->remove();
			return true;
		}

		//check if user has a role
		public function checkRole($r){
			if ($this->role==null)
				return false;
			if ($this->role[$r]==null)
				return false;
			return $this->role[$r];
		}


		/*persistence*/
		//persist instance in session
		public function persist(){
			session_start();
			$_SESSION['USER'] = new self();
			$_SESSION['USER'] = self::$instance;
		}

		//restore instance from session
		public function restore(){
			session_start();
			self::$instance = new self();
			if (isset($_SESSION['USER'])){
				self::$instance = $_SESSION['USER'];
			}
		}

		//remove instance from session
		public function remove(){
			session_start();
			self::$instance = new self();
			if (isset($_SESSION['USER']))
			unset($_SESSION['USER']);
		}

		//endclass
	}

?>
