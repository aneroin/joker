<?php
 /**
  * Router Class, created by INshadow
  */
  class Router {
	$pregs = array();
	$ends = array();
	$local = '/^(.{2}-.{2})$/';

    public function __construct() {
   	
    }
  	/**
  	* Adds a new route to router
  	*
  	* Can be used to add named routes and check input urls for revelant route
	* or to associate name with method and call them by name
  	*
  	* @param string $name - name of the route
	*
	* @param string $preg - regular pattern to check url with
	*
	* @param array $end <array('ClassName', 'MethodName')> - endpoint to call by name
  	*
  	* @return void
  	*/
    public function add($name, $preg, $end) {
		$val = '/'+$preg+'/';
   		$pregs += [$name => $val];
		$ends += [$name => $end];
    }
	
	/**
  	* Checks a route in router
  	*
  	* Can be used to check a url pattern is vaid for named route
  	*
  	* @param string $name - name of the route
	*
	* @param string $val - url to check
	*
  	* @return boolean
  	*/  
	public function check($name, $val){
		if (preg_match($pregs[$name],$val)==1) 
		return true;
		else return false;
	}
	
	/**
  	* Road a route in router
  	*
  	* Can be used to get route in router
  	*
  	* @param string $name - name of the route
	*
	* @param string $val - url to check
	*
	* @param array $params - parameters to pass into endpoint
	*
  	* @return void
  	*/  
	public function road($name, $val=NULL, $params=NULL){
		if ($val!=NULL){
			if (check($name, $val)){
				if ($params!=NULL) {
					$ends[$name]($params);
				} else {
					$ends[$name]();
				}
			}
		} else {
			if ($params!=NULL) {
					$ends[$name]($params);
				} else {
					$ends[$name]();
				}
		}
	}

	/**
  	* Test a url in Router and call endpoint
  	*
  	* Can be used to work in auto mode and call endpoints like <host>/controller/method
  	*
  	* @param string $url - url to test
	*
  	* @return void
  	*/
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