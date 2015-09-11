<?php
	class View {
		public function __construct() {
			echo 'default View';
		}
		
		 public function render($name) {
			require 'views/'.$name.'.php';
		 }
	   
		public $msg = 'hello';   
	}
?>