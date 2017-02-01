<?php
session_start();
  class Drivers_Model extends Model {
   public function __construct($lang = 'ua', $city = 'te') {
    parent::__construct();
    //pre init
    $this->data['current_page_url'] = "drivers";
    $this->data['current_page'] = "drivers";
    $this->data['title'] = 'DataBase is OFFLINE';
     //connecting to db
    require ('dbcon.php');
    //statement preparing
    //SQLs
    $sql_global = "SELECT name, {$lang} FROM globals";
    $sql_locals = "SELECT name, {$lang} FROM locals WHERE locals.local=?";
    $sql_pages = "SELECT name, {$lang} FROM pages";
    $sql_blocks = "SELECT name, {$lang} FROM blocks WHERE blocks.local=? AND blocks.idPages=3";
    //prepare globals
    $stm = $pdo->prepare($sql_global);
    //statement executing
    $stm->execute(array($city));
    //fetching globals array
    while ($db_data = $stm->fetch(PDO::FETCH_ASSOC)){
      $this->data[$db_data['name']] = $db_data[$lang];
    }
    //prepare locals
    $stm = $pdo->prepare($sql_locals);
    //statement executing
    $stm->execute(array($city));
    //fetching locals array
    while ($db_data = $stm->fetch(PDO::FETCH_ASSOC)){
      $this->data[$db_data['name']] = $db_data[$lang];
    }
    //prepare pages
    $stm = $pdo->prepare($sql_pages);
    //statement executing
    $stm->execute(array($city));
    //fetching pages array
    while ($db_data = $stm->fetch(PDO::FETCH_ASSOC)){
      $this->data[$db_data['name']] = $db_data[$lang];
    }
    //prepare blocks
    $stm = $pdo->prepare($sql_blocks);
    //statement executing
    $stm->execute(array($city));
    //fetching blocks array
    while ($db_data = $stm->fetch(PDO::FETCH_ASSOC)){
      $this->data[$db_data['name']] = $db_data[$lang];
    }
   }
  }
?>
