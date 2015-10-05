<?php
session_start();
  class Prices_Model extends Model {
   public function __construct($lang = 'ua', $city = 'te') {
    parent::__construct();
    //pre init
    $this->data['title'] = 'DataBase is OFFLINE';
    //connecting to db
    require ('dbcon.php');
    //statement preparing
    $sql = "SELECT name, ".$lang." FROM blocks WHERE blocks.local=? AND blocks.idPages=2";
    $stm = $pdo->prepare($sql);
    //statement executing
    $stm->execute(array($city));
    //fetching array
    while ($db_data = $stm->fetch(PDO::FETCH_ASSOC)){
      $this->data[$db_data['name']] = $db_data[$lang];    
    }

   }
  }
?>