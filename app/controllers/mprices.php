<?php
//session_start();
	class Mprices extends Controller  {
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
			require 'models/mprices_model.php';
			//model init with locale params from sessing variables
    		$model = new Mprices_Model($_SESSION['lang'],$_SESSION['local']);
    		//rendering index page
			$this->view->display('material/prices/index',$model->data,$title,true,false);
		}
	}
?>