<?php
session_start();
  class Index_Model extends Model {
   public function __construct($lang = 'ua', $city = 'te') {
    parent::__construct();
    //pre init
    $this->data['title'] = 'DataBase is OFFLINE';
    //connecting to db
    require ('dbcon.php');
    //statement preparing
    $sql = "SELECT * FROM Blocks WHERE Blocks.local=? AND Blocks.idPages=1";
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