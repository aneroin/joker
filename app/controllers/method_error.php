<?php
	class Error extends Controller  {
		public function __construct() {
			parent::__construct();
			$this->view->msg = 'sorry, there are no such method';
			$this->view->render('error/index');
		}
		
	}
?>