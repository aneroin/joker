<?php
session_start();
	class Contacts extends Controller  {
		public function __construct($locale = null) {
			parent::__construct();
		}

		public function Index($locale = null) {
			$title = "Taxi Joker - contacts";
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
			require 'models/contacts_model.php';
			//model init with locale params from sessing variables
    		$model = new Contacts_Model($_SESSION['lang'],$_SESSION['local']);
    		//rendering index page
			$this->view->render('contacts/index',$model->data,$title);
		}
	}
?>