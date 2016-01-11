<?php
session_start();
	class Index extends Controller  {
		public function __construct($locale = null) {
			parent::__construct();
		}

		public function Index($locale = null) {
			require_once '../protected/ipvars.php';
			require_once 'ipInfo.inc.php';
			
			$ipInfo = new ipInfo ($ip_key, 'json');
			
					
			$title = "Taxi Joker";
			//if locale param is set - setting up session variables
			if (isset($locale)) {
				$_SESSION['lang'] = $locale['0'];
				$_SESSION['local'] = $locale['1'];
			} else {
				if (!isset($_SESSION['lang'])) {
					$userIP = $ipInfo->getIPAddress();
					$location = json_decode($ipInfo->getCity($userIP),true);
					if (preg_match($regions['ua'],$location['countryCode'])) {
						$_SESSION['lang'] = 'ua';
					} else if (preg_match($regions['ru'],$location['countryCode'])) {
						$_SESSION['lang'] = 'ru';
					} else {
						$_SESSION['lang'] = 'eng';
					}
				}
				if (!isset($_SESSION['local'])) {
					$userIP = $ipInfo->getIPAddress();
					$location = json_decode($ipInfo->getCity($userIP),true);
					if (preg_match($regions['te'],$location['regionName'])) {
						$_SESSION['local'] = 'te';
					} else if (preg_match($regions['lu'],$location['regionName'])) {
						$_SESSION['local'] = 'lu';
					} else {
						$_SESSION['local'] = 'te';
					}
				}
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