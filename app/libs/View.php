<?php
	class View {

		private $header;

		public function __construct() {
		$this->header['forms'] = <<<EOT
	<!--forms-->
	<script src="http://taxijoker.com/jquery/tinycolor.js"></script>
	<script src="http://taxijoker.com/jquery/colorengine.js"></script>
	<script src="http://taxijoker.com/jquery/typeahead.js"></script>
	<script src="http://taxijoker.com/jquery/carvendors.bloodhound.js"></script>
EOT;

		$this->header['uploads'] = <<<EOT
	<!--uploads-->
	<script src="http://taxijoker.com/jquery/jquery.ui.widget.js"></script>
	<script src="http://taxijoker.com/jquery/jquery.iframe-transport.js"></script>
	<script src="http://taxijoker.com/jquery/jquery.fileupload.js"></script>
	<script src="http://taxijoker.com/jquery/jquery.fileupload-image.js"></script>
EOT;
		}
		
		public function render($name,$data=null,$title="Taxi Joker",$h_forms=false,$h_uploads=false) {
			$header = "<!--additional includes -->";
			if ($h_forms==true) $header .= $this->header['forms'];
			if ($h_uploads==true) $header .= $this->header['uploads']; 
		 	require 'views/header.php';
			require 'views/'.$name.'.php';
			require 'views/footer.php';
		}
	}
?>