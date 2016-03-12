<?php
	class View {

		public function __construct() {
		}
		
		public function render($name,$data=null,$title="Taxi Joker",$includes=Array()) {
		 	require 'views/header.php';
			require 'views/'.$name.'.php';
			require 'views/footer.php';
		}

		public function display($name,$data=null,$title="Taxi Joker",$h_forms=false,$h_uploads=false) {
			require 'views/'.$name.'.php';
		}
	}
?>