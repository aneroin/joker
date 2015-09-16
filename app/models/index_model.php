<?php
  class Index_Model extends Model {
   public function __construct($lang, $city) {
    parent::__construct();
    if ($lang == "ua"){
  		$this->data['title'] = 'таксі джокер';
  	} else if ($lang == "ru") {
  		$this->data['title'] = 'такси джокер';
  	} else {
      $this->data['title'] = 'таксі джокер _ мову не обрано';
    }
    //database
   }
  }
?>