<?php
	class Index extends Controller  {
		public function __construct() {
			parent::__construct();
			$this->view->render('index/index');
		}
	}
?>