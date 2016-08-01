<?php
	class User {
		//login in system
		public $login;
		//sha-encoded password
		public $password;
		//role in system
		public $role;
		//personal data as array
		public $data = array();
		//is logged in?
		public $logged = false;

		public function __construct() {
		}
		
		public function make($l,$p) {
		 	$this->login = $l;
		 	$this->password = hash('sha256', $p, false);
		}

		public function makenew($l,$p,$e){
			/*TODO*/
			$this->login = $l;
			$this->password = hash('sha256', $p, false);
			$this->data['email'] = $e;
		}

		public function signup(){
			/*TODO*/
			return true;
		}

		public function singin(){
			/*TODO*/
			$this->logged = true;
			return true;
		}

		public function signout(){
			/*TODO*/
			$this->logged = false;
			return true;
		}

		public function chechRole($r){
			return $this->role === $r;
		}

		public function persist(){
			session_start();
			$_SESSION['USER'] = json_encode($this);
		}

		public function restore(){
			session_start();
			return json_decode($_SESSION['USER']);
		}
	}
?>