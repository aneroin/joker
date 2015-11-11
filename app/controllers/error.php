<?php
	class Error extends Controller  {
		public function __construct($input) {
			http_response_code($input[0]);
			if ( !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' )
			{
			    echo $input[1];
			    return false;
			}
			parent::__construct();
			$this->view->errcode = "error {$input[0]}";
			$this->view->msg = $input[1];
			$title = "Taxi Joker - ERROR: {$input[0]}";
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