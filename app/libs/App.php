<?php
session_set_cookie_params(0, '/', '.taxijoker.com');
session_start();
//adding environment defines
require 'defines.php';
  class App {
	public $router;
	public $user;
	public $service;  
  	//constructor
	public function __construct() {
		//cheching if lang is empty
		$local = isset($_GET['local']) ? $_GET['local'] : null;
		if ($local != null) {
			$locs = explode('-', $local);
			$_SESSION['local'] = $locs[0];
			$_SESSION['lang'] = $locs[1];
		} else {
			if (!isset($_SESSION['local']))
				($_SESSION['local'] = 'te');
			if (!isset($_SESSION['lang']))
				($_SESSION['lang'] = 'ua');
		}
		
		$this->router = new Router();
		$this->user = new User();
		$this->service = new Service();

		header("Access-Control-Allow-Origin: *");

		//checking if url is empty
		$url = isset($_GET['url']) ? $_GET['url'] : null;
	    $this->router->test($url);
    }
  }
?>