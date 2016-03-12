<?php
session_start();
	class Index extends Controller  {
		public function __construct($locale = null) {
			parent::__construct();
		}

		public function Index($locale = null) {
			header("Link: <http://".$_SESSION['lang'].".taxijoker.com/>; rel=canonical");
			$title = "Taxi Joker";
			//if locale param is set - setting up session variables
			if (isset($locale)) {
				$_SESSION['local'] = $locale;
			} else {
				if (!isset($_SESSION['local']))
					$_SESSION['local'] = 'te';
			}
			//connecting to the model
			require 'models/index_model.php';
			//model init with locale params from sessing variables
    		$model = new Index_Model($_SESSION['lang'],$_SESSION['local']);
    		//rendering index page
			$this->view->render('index/index',$model->data,$title,true,false);
		}
	}
?>