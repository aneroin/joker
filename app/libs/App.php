<?php
session_start();
//adding environment defines
require 'defines.php';
  class App {
  	//constructor
	public function __construct() {
		//cheching if url is empty
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
				$controller = new Error();
				return false;
			}

			require $file;
			$controller = new $url[0];

			if(isset($url[2])) {
				$args = explode('&', $url[2]);
				if (!(method_exists($controller, $url[1]))){
					//if no method were found - go to error page
					require 'controllers/method_error.php';
					$controller = new MethodError();
					return false;
				}
				$controller->$url[1]($args);
			} else  if(isset($url[1])) { 
				//else, if url 2 is empty but url 1 is not, calling method withoud param
				if (!(method_exists($controller, $url[1]))){
				 	//if there is no such method - throwing an error
					require 'controllers/method_error.php';
					$controller = new MethodError();
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