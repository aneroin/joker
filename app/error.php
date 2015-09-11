<?php
	class Error extends Controller  {
		public function __construct() {
			$this->view->msg = 'sorry';
			$this->view->render('error/index');
		}
		
	}
?>