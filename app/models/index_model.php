<?php
session_start();
  class Index_Model extends Model {
   public function __construct($lang, $city) {
    parent::__construct();
    if ($lang == "ua"){
  		$this->data['title'] = 'таксі джокер';
          if ($city == "te"){
            $this->data['title'] =  $this->data['title'].' в Тернополі';
          } else if ($city == "lu") {
            $this->data['title'] =  $this->data['title'].' в Луцьку';
          } else {
            $this->data['title'] =  $this->data['title'].' місто не обрано';
          }
  	} else if ($lang == "ru") {
  		$this->data['title'] = 'такси джокер';
          if ($city == "te"){
            $this->data['title'] =  $this->data['title'].' в Тернополе';
          } else if ($city == "lu") {
            $this->data['title'] =  $this->data['title'].' в Луцке';
          } else {
            $this->data['title'] =  $this->data['title'].' город не выбран';
          }
  	} else {
      $this->data['title'] = 'мову не обрано';
          if ($city == "te"){
            $this->data['title'] =  $this->data['title'].' в тернополі';
          } else if ($city == "lu") {
            $this->data['title'] =  $this->data['title'].' в луцьку';
          } else {
            $this->data['title'] =  $this->data['title'].' місто не обрано';
          }
    }

    //database
   }
  }
?>