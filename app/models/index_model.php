<?php
session_start();
  class Index_Model extends Model {
   public function __construct($lang = 'ua', $city = 'te') {
    parent::__construct();

    $this->data['title'] = 'DataBase is OFFLINE';

    require ('dbcon.php');
    $sql = "SELECT * FROM Blocks WHERE Blocks.local=? AND Blocks.name = 'title' AND Blocks.idPages=1";
    $stm = $pdo->prepare($sql);
    $stm->execute(array($city));
    while ($db_data = $stm->fetch(PDO::FETCH_ASSOC)){
      $this->data['title'] = $db_data[$lang];    
    }

   }
  }
?>