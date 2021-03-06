<?php
session_set_cookie_params(0, '/', '.taxijoker.com');
session_start();
//adding environment defines
require 'defines.php';
  class App {
  	//constructor
  	//avi,bmp,png,css,doc,gif,htm,html,ico,jpeg,jpg,js,mp3,swf,txt,xls,zip,wml,wmlc,wmls,wmlsc,wbmp,fla,flv,xml,mpg,mpeg,pdf,woff,eot,otf,svg,ttf
	public function __construct() {
		//cheching if lang is empty
		$lang = isset($_GET['lang']) ? $_GET['lang'] : null;
		if ($lang != null) {
			$_SESSION['lang'] = $lang;
		} else {
			if (!isset($_SESSION['lang']))
			($_SESSION['lang'] = 'ua');
		}

		preg_match('/([^.]+)\.taxijoker\.com/', $_SERVER['SERVER_NAME'], $matches);
		if(!isset($matches[1])) {
			$subdomain = $_SESSION['lang'].".";
			header("Location: http://".$subdomain.$_SERVER[HTTP_HOST].$_SERVER[SCRIPT_URL],true,302);
			return false;
		}

		header("Access-Control-Allow-Origin: *");

		//checking if url is empty
		$url = isset($_GET['url']) ? $_GET['url'] : null;
	    $url = rtrim($url, '/');
	    $url = explode('/', $url);

		if (empty($url[0])){
			//if empty url - redirects to index
			require 'controllers/index.php';
			$controller = new Index();
			$controller->Index();
			return false;
		} else {
			//if not empty - search for controller that is called
			$file = 'controllers/'.$url[0].'.php';
			if(!file_exists($file)) {
				//if no controller were found - go to error page
				require 'controllers/error.php';
				$controller = new Error(array(404,'sorry, there are no such file'));
				return false;
			}

			require $file;
			$controller = new $url[0];

			if(isset($url[2])) {
				$args = explode('&', $url[2]);
				if (!(method_exists($controller, $url[1]))){
					//if no method were found - go to error page
					require 'controllers/error.php';
					$controller = new Error(array(406,'wrong method'));
					return false;
				}
				$controller->$url[1]($args);
			} else  if(isset($url[1])) { 
				//else, if url 2 is empty but url 1 is not, calling method withoud param
				if (!(method_exists($controller, $url[1]))){
				 	//if there is no such method - throwing an error
					require 'controllers/error.php';
					$controller = new Error(array(406,'wrong method'));
					return false;
				}
				$controller->$url[1]();
			} else {
				$controller->Index();
			}

		}
    }
  }
?>