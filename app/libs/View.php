<?php
	class View {

		private $header;

		public function __construct() {
		$this->header['forms'] = <<<EOD
	<!--forms-->
	<script src="<?php echo URL; ?>jquery/tinycolor.js"></script>
	<script src="<?php echo URL; ?>jquery/colorengine.js"></script>
	<script src="<?php echo URL; ?>jquery/typeahead.js"></script>
	<script src="<?php echo URL; ?>jquery/carvendors.bloodhound.js"></script>
EOD;

		$this->header['uploads'] = <<<EOD
	<!--uploads-->
	<script src="<?php echo URL; ?>jquery/jquery.ui.widget.js"></script>
	<script src="<?php echo URL; ?>jquery/jquery.iframe-transport.js"></script>
	<script src="<?php echo URL; ?>jquery/jquery.fileupload.js"></script>
	<script src="<?php echo URL; ?>jquery/jquery.fileupload-image.js"></script>
EOD;
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