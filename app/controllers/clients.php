<?php
session_start();
	class Clients extends Controller  {
		public function __construct($locale = null) {
			parent::__construct();
		}

		public function Index($locale = null) {
			$title = "Таксі Джокер - Клієнт";
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
    		//rendering dispatchers page
			$this->view->render('clients/index',$model->data,$title);
		}

		public function dashboard($locale = null,$user = null) {
			if (parent::auth($user)){
				$title = "Таксі Джокер - Кабінет користувача";
				//if locale param is set - setting up session variables
				if (isset($locale)) {
					$_SESSION['local'] = $locale;
				} else {
					if (!isset($_SESSION['local']))
						$_SESSION['local'] = 'te';
				}
				//connecting to the model
				require 'models/clients_dashboard_model.php';
				//model init with locale params from session variables
				$model = new Clients_Dashboard_Model($_SESSION['lang'],$_SESSION['local']);
				$model->data['clientdata'] = json_decode(Service::Instance()->getuser(2));
				$model->data['ordersdata'] = json_decode(Service::Instance()->getorders())
				$inc = Array("chartist");
				//rendering drivers join page
				$this->view->render('clients/dashboard',$model->data,$title,$inc);
			} else {
				http_response_code(401);
				if (isset($_SERVER["HTTP_REFERER"])) {
					header("Location: " . $_SERVER["HTTP_REFERER"]);
				}
			}
		}

		public function route($input = Array(),$locale = null,$user = null) {
			if (parent::auth($user)){
				$title = "Таксі Джокер - Кабінет користувача";
				//if locale param is set - setting up session variables
				if (isset($locale)) {
					$_SESSION['local'] = $locale;
				} else {
					if (!isset($_SESSION['local']))
						$_SESSION['local'] = 'te';
				}
				//connecting to the model
				require 'models/index_model.php';
				//model init with locale params from session variables
				$model = new Index_Model($_SESSION['lang'],$_SESSION['local']);
				$model->data['routedata'] = json_decode(parent::get("http://taxijoker.com/fakedata.php?entity=route&id=".$input[0]));
				$inc = Array("gmap3","route");
				//rendering drivers join page
				$this->view->render('clients/route',$model->data,$title,$inc);
			} else {
				return false;
			}
		}
	}
?>
