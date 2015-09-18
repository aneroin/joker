<?php
session_start();

  class App {
	public function __construct() {
		$url = isset($_GET['url']) ? $_GET['url'] : null;
	    $url = rtrim($url, '/');
	    $url = explode('/', $url);
		
		if(empty($url[0])) {
			require 'controllers/index.php';
			$controller = new Index();
			return false;
		}
		
		$file = 'controllers/'.$url[0].'.php';
		 if(file_exists($file)) {
			require $file;
		} else {
			require 'controllers/error.php';
			$controller = new Error();
			return false;
		}

			$controller = new $url[0];

			
			if(isset($url[2])) {
					if (!(method_exists($controller, $url[1]))){
						require 'controllers/method_error.php';
						$controller = new MethodError();
						return false;
					}
				$args = explode('&', $url[2]);
				$controller->$url[1]($args);
			} else {
				 if(isset($url[1])) {
				 	if (!(method_exists($controller, $url[1]))){
						require 'controllers/method_error.php';
						$controller = new MethodError();
						return false;
					}
					$controller->$url[1]();
				 }
			}
	}
  }
?>