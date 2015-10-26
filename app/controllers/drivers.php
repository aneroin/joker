<?php
session_start();
	class Drivers extends Controller  {
		public function __construct($locale = null) {
			parent::__construct();
		}

		public function Index($locale = null) {
			$title = "Taxi Joker - drivers";
			//if locale param is set - setting up session variables
			if (isset($locale)) {
				$_SESSION['lang'] = $locale['0'];
				$_SESSION['local'] = $locale['1'];
			} else {
				if (!isset($_SESSION['lang']))
					$_SESSION['lang'] = 'ua';
				if (!isset($_SESSION['local']))
					$_SESSION['local'] = 'te';
			}
			//connecting to the model
			require 'models/drivers_model.php';
			//model init with locale params from sessing variables
    		$model = new Drivers_Model($_SESSION['lang'],$_SESSION['local']);
    		//rendering index page
			$this->view->render('drivers/index',$model->data,$title);
		}

		public function all($locale = null) {
			$title = "Taxi Joker - drivers list";
			parent::__construct();
			//if locale param is set - setting up session variables
			if (isset($locale)) {
				$_SESSION['lang'] = $locale['0'];
				$_SESSION['local'] = $locale['1'];
			} else {
				if (!isset($_SESSION['lang']))
					$_SESSION['lang'] = 'ua';
				if (!isset($_SESSION['local']))
					$_SESSION['local'] = 'te';
			}
			//connecting to the model
			require 'models/drivers_list_model.php';
			//model init with locale params from sessing variables
    		$model = new Drivers_List_Model($_SESSION['lang'],$_SESSION['local']);
    		//rendering list page
			$this->view->render('drivers/list',$model->data,$title);			
		}

		public function join($locane = null) {
			$title = "Taxi Joker - join us";
			parent::__construct();
			//if locale param is set - setting up session variables
			if (isset($locale)) {
				$_SESSION['lang'] = $locale['0'];
				$_SESSION['local'] = $locale['1'];
			} else {
				if (!isset($_SESSION['lang']))
					$_SESSION['lang'] = 'ua';
				if (!isset($_SESSION['local']))
					$_SESSION['local'] = 'te';
			}
			//connecting to the model
			require 'models/drivers_join_model.php';
			//model init with locale params from session variables
    		$model = new Drivers_Join_Model($_SESSION['lang'],$_SESSION['local']);
    		//rendering join page
			$this->view->render('drivers/join',$model->data,$title);				
		}

		public function faq($locale = null) {
			$title = "Taxi Joker - driver's FAQ";
			parent::__construct();
			//if locale param is set - setting up session variables
			if (isset($locale)) {
				$_SESSION['lang'] = $locale['0'];
				$_SESSION['local'] = $locale['1'];
			} else {
				if (!isset($_SESSION['lang']))
					$_SESSION['lang'] = 'ua';
				if (!isset($_SESSION['local']))
					$_SESSION['local'] = 'te';
			}
			//connecting to the model
			require 'models/drivers_faq_model.php';
			//model init with locale params from sessing variables
    		$model = new Drivers_FAQ_Model($_SESSION['lang'],$_SESSION['local']);
    		//rendering list page
			$this->view->render('drivers/faq',$model->data,$title);			
		}
	}
?>