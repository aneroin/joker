<?php
//session_start();
	class Prices extends Controller  {
		public function __construct($locale = null) {
			parent::__construct();
		}

		public function Index($locale = null) {
			$title = "Taxi Joker - Prices";
			//if locale param is set - setting up session variables
			if (isset($locale)) {
				$_SESSION['local'] = $locale;
			} else {
				if (!isset($_SESSION['local']))
					$_SESSION['local'] = 'te';
			}
			//connecting to the model
			require 'models/prices_model.php';
			//model init with locale params from sessing variables
    		$model = new Prices_Model($_SESSION['lang'],$_SESSION['local']);
			$inc = Array("gmap3","price");
    		//rendering prices page
			$this->view->render('prices/index',$model->data,$title,$inc);
		}
	}
?>