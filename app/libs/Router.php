<?php
  class Router {
	$pregs = array();
	$local = '/^(.{2}-.{2})$/';

    public function __construct() {
   	
    }

    public function add($name, $preg) {
		$val = '/'+$preg+'/';
   		$pregs += [$name => $val];
    }
	  
	public function check($name, $val){
		if (preg_match($pregs[$name],$val)==1) 
		return true;
		else return false;
	}

    public function test($url){
		$url = rtrim($url, '/');
	    $url = ltrim($url, '/');
	    $url = explode('/', $url);

		if (if (preg_match($local,$val)==1)) {
			array_splice($url,0,1);
		}
		
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