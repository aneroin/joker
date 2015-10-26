<?php
	class Error extends Controller  {
		public function __construct() {
			parent::__construct();
			$this->view->msg = 'ERROR: 404 <br> sorry, there are no such file';

			$title = "Taxi Joker - ERROR: 404";
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
			require 'models/error_model.php';
			//model init with locale params from sessing variables
    		$model = new Error_Model($_SESSION['lang'],$_SESSION['local']);
    		//rendering index page
			$this->view->render('error/index',$model->data,$title);
		}
		
	}
?>