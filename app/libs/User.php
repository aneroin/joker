<?php
	class User {
		//login in system
		$login;
		//sha-encoded password
		$password;
		//role in system
		$role;
		//personal data as array
		$data = new Array();
		//is logged in?
		$logged = false;

		public function __construct() {
		}
		
		public function make($l,$p) {
		 	$login = $l;
		 	$password = hash('sha256', $p, false);
		}

		public function makenew($l,$p,$e){
			/*TODO*/
			$login = $l;
			$password = hash('sha256', $p, false);
			$data['email'] = $e;
		}

		public function signup(){
			/*TODO*/
			return true;
		}

		public function singin(){
			/*TODO*/
			$logged = true;
			return true;
		}

		public function signout(){
			/*TODO*/
			$logged = false;
		}

		public function chechRole($r){
			return $role === $r;
		}

		public function persist(){
			session_start();
			$_SESSION['USER'] = json_encode($this);
		}

		public function restore(){
			session_start();
			$this = json_decode($_SESSION['USER']);
		}
	}
?>