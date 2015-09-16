<?php
	class Index extends Controller  {
		public function __construct($locale=array('ua','te')) {
			parent::__construct();
			require 'models/index_model.php';
    		$model = new Index_Model($locale[0],$locale[1]);
			$this->view->render('index/index',$model->data);
		}

		public function language($locale=array('ua','te')) {
			$model = new Index_Model($locale[0],$locale[1]);
			$this->view->render('index/index',$model->data);
		}
	}
?>