<?php
session_start();
	class Index extends Controller  {
		public function __construct($locale = null) {
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
			require 'models/index_model.php';
			//model init with locale params from sessing variables
    		$model = new Index_Model($_SESSION['lang'],$_SESSION['local']);
    		//rendering index page
			$this->view->render('index/index',$model->data);
		}
	}
?>