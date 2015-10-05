<?php
	class MethodError extends Controller  {
		public function __construct() {
			$title = "sorry";
			parent::__construct();
			$this->view->msg = 'sorry, there are no such method';
			$this->view->render('error/index',null,$title);
		}
		
	}
?>