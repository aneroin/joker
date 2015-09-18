<?php
session_start();
	class Index extends Controller  {
		public function __construct($locale = null) {
			parent::__construct();
			if (isset($locale)) {
				$_SESSION['lang'] = $locale['0'];
				$_SESSION['local'] = $locale['1'];
			} else {
				if (!isset($_SESSION['lang']))
					$_SESSION['lang'] = 'ua';
				if (!isset($_SESSION['local']))
					$_SESSION['local'] = 'te';
			}
				echo $_SESSION['lang'];
				echo '<br>';
				echo $_SESSION['local'];
			require 'models/index_model.php';
    		$model = new Index_Model($_SESSION['lang'],$_SESSION['local']);
			$this->view->render('index/index',$model->data);
		}
	}
?>