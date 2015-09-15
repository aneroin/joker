<?php
	class Index extends Controller  {
		public function __construct($lang = "ua", $city="te") {
			parent::__construct();
			require 'models/index_model.php';
    		$model = new Index_Model($lang, $city);
			$this->view->render('index/index');
		}
	}
?>