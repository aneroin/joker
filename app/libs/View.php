<?php
	class View {
		public function __construct() {
			
		}
		
		 public function render($name) {
			require 'views/'.$name.'.php';
		 }
	   
		public $msg = 'hello';   
	}
?>