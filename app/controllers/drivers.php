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
    		//rendering index page
			$this->view->render('drivers/list',$model->data,$title);			
		}
	}
?>