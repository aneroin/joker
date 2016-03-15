<?php
  class Controller {
   public function __construct() {
   	define('LOCALURL', URL.$_SESSION['local'].'-'.$_SESSION['lang'].'/');
	$this->view = new View();
   }
  }
?>