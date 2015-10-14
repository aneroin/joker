<?php
session_start();
  class Contacts_Model extends Model {
   public function __construct($lang = 'ua', $city = 'te') {
    parent::__construct();
    //pre init
    $this->data['current_page'] = "contacts";
    $this->data['title'] = 'DataBase is OFFLINE';
    //connecting to db
    require ('dbcon.php');
    //statement preparing
    //SQLs
    $sql_global = "SELECT name, ".$lang." FROM globals";
    $sql_locals = "SELECT name, ".$lang." FROM locals WHERE locals.local=?";
    $sql_pages = "SELECT name, ".$lang." FROM pages";
    $sql_blocks = "SELECT name, ".$lang." FROM blocks WHERE blocks.local=? AND blocks.idPages=6";
    $sql_contacts = "SELECT name, type, value, ".$lang." FROM contacts WHERE contacts.local=?";
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
    //prepare contacts
    $stm = $pdo->prepare($sql_contacts);
    //statement executing
    $stm->execute(array($city));
    //fetching contacts array
    while ($db_data = $stm->fetch(PDO::FETCH_ASSOC)){
      $this->data['contacts'][$db_data['name']] = $db_data[$lang]." - <a href=".$db_data['type'].":".$db_data['value'].">".$db_data['value']."</a>";    
    }
 
   }
  }
?>