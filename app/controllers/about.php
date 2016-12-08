<?php
//session_start();
	class About extends Controller  {
		public function __construct($locale = null) {
			parent::__construct();
		}

		public function Index($locale = null) {
			$title = "Taxi Joker - About";
			//if locale param is set - setting up session variables
			if (isset($locale)) {
				$_SESSION['local'] = $locale;
			} else {
				if (!isset($_SESSION['local']))
					$_SESSION['local'] = 'te';
			}
			//connecting to the model
			require 'models/about_model.php';
			//model init with locale params from sessing variables
    		$model = new About_Model($_SESSION['lang'],$_SESSION['local']);
    		//rendering prices page
			$this->view->render('about/index',$model->data,$title);
		}
	}
?>