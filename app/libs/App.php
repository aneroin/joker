<?php
  class App {
   public function __construct() {
    $url = $_GET['url'];
    $url = rtrim($url, '/');
    $url = explode('/', $url);
    $file = 'controllers/'.$url[0].'.php';
    if(file_exists($file)) {
     require $file;
    } else {
     require 'controllers/error.php';
     $controller = new Error();
     return false;
    }
    $controller = new $url[0];
    if(isset($url[2])) {
     $controller->$url[1]($url[2]);
    } else {
     if(isset($url[1])) {
      $controller->$url[1]();
     }
    }
   }
  }
?>