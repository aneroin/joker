<?php
session_start();
	class Clients extends Controller  {
		public function __construct($locale = null) {
			parent::__construct();
		}

		public function Index($locale = null) {
			require 'controllers/error.php';
			return new Error(array(403,'move along'));
		}

		public function dashboard($locale = null,$user = null) {
			if (parent::auth()){
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
				$model->data['clientdata'] = json_decode(Service::Instance()->getuser(JokerUser::Instance()->id));
				$phone = $model->data['clientdata']->MobilePhone;
				$model->data['ordersdata'] = array_filter(json_decode(Service::Instance()->getorders()), function ($order)use (&$phone){
						if (isset($order->Phone))
							return $order->Phone == $phone;
						return false;
				});
				usort($model->data['ordersdata'], function($a, $b)
				{
				    return -strcmp($a->Id, $b->Id);
				});
				$inc = Array("chartist");
				//rendering clients join page
				$this->view->render('clients/dashboard',$model->data,$title,$inc);
			} else {
				http_response_code(401);
				if (isset($_SERVER["HTTP_REFERER"])) {
					header("Location: " . $_SERVER["HTTP_REFERER"]);
				} else {
					header("Location: " . URL);
				}
			}
		}

		public function route($input = Array(),$locale = null,$user = null) {
			if (parent::auth()){
				$title = "Таксі Джокер - Огляд замовлення";
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
				$model->data['clientdata'] = json_decode(Service::Instance()->getuser(JokerUser::Instance()->id));
				$phone = $model->data['clientdata']->MobilePhone;
				$model->data['routedata'] = json_decode(Service::Instance()->getorder($input[0]));
				$model->data['routedata'] = $model->data['routedata']->Phone == $phone ? $model->data['routedata'] : null;
				$inc = Array("gmap3","route");
				//rendering drivers join page
				$this->view->render('clients/route',$model->data,$title,$inc);
			}  else {
				http_response_code(401);
				if (isset($_SERVER["HTTP_REFERER"])) {
					header("Location: " . $_SERVER["HTTP_REFERER"]);
				} else {
					header("Location: " . URL);
				}
			}
		}

		public function profile($input = Array(),$locale = null,$user = null){
			if (parent::auth()){
				$title = "Таксі Джокер - Профіль користувача";
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
				$model->data['clientdata'] = json_decode(Service::Instance()->getuser(JokerUser::Instance()->id));
				$inc = Array("profile");
				$this->view->render('clients/profile',$model->data,$title,$inc);
			} else {
				http_response_code(401);
				if (isset($_SERVER["HTTP_REFERER"])) {
					header("Location: " . $_SERVER["HTTP_REFERER"]);
				} else {
					header("Location: " . URL);
				}
			}
		}
	}
?>
