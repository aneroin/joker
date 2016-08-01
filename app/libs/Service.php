<?php
	class Service {
		
		public function get($uri){
			$response = \Httpful\Request::get($uri)
    		->send();
			return $response->body;
		}
		
		public function post($uri,$body){
			$response = \Httpful\Request::post($uri)
			->sendsJson()
			->body($body)
			->send();
			return $response->body;
		}
		
		public function put($uri,$body,$username,$password){
			$response = \Httpful\Request::put($uri)   
			->sendsJson()                             
			->authenticateWith($username, $password)
			->body($body)           
			->send(); 
			return $response->body;
		}
		
		public function delete($uri,$username,$password){
			$response = \Httpful\Request::delete($url)
			->authenticateWith($username, $password)
			->send();
			return $response->body;
		}
	
	}
?>