<?php
//session_start();
	class Mcontacts extends Controller  {
		public function __construct($locale = null) {
			parent::__construct();
		}

		public function Index($locale = null) {
			$title = "Таксі Джокер - Контакти";
			//if locale param is set - setting up session variables
			if (isset($locale)) {
				$_SESSION['local'] = $locale;
			} else {
				if (!isset($_SESSION['local']))
					$_SESSION['local'] = 'te';
			}
			//connecting to the model
			require 'models/mcontacts_model.php';
			//model init with locale params from sessing variables
    		$model = new Mcontacts_Model($_SESSION['lang'],$_SESSION['local']);
    		//rendering index page
			$this->view->display('material/contacts/index',$model->data,$title,true,false);
		}
	}
?>