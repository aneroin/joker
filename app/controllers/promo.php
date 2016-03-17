<?php
//session_start();
	class Promo extends Controller  {
		public function __construct($locale = null) {
			parent::__construct();
		}

		public function Index($locale = null) {
			$title = "Taxi Joker - Promotions";
			//if locale param is set - setting up session variables
			if (isset($locale)) {
				$_SESSION['local'] = $locale;
			} else {
				if (!isset($_SESSION['local']))
					$_SESSION['local'] = 'te';
			}
			//connecting to the model
			require 'models/promo_model.php';
			//model init with locale params from sessing variables
    		$model = new Promo_Model($_SESSION['lang'],$_SESSION['local']);
    		//rendering prices page
			$this->view->render('promo/index',$model->data,$title);
		}

		public function Details($locale = null) {
			$title = "Taxi Joker - Promotions";
			//if locale param is set - setting up session variables
			if (isset($locale)) {
				$_SESSION['local'] = $locale;
			} else {
				if (!isset($_SESSION['local']))
					$_SESSION['local'] = 'te';
			}
			//connecting to the model
			require 'models/promo_details_model.php';
			//model init with locale params from sessing variables
    		$model = new Promo_Details_Model($_SESSION['lang'],$_SESSION['local']);
    		//rendering prices page
			$this->view->render('promo/details',$model->data,$title);
		}
	}
?>