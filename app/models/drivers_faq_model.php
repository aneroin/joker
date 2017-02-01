<?php
session_start();
  class Drivers_FAQ_Model extends Model {
   public function __construct($lang = 'ua', $city = 'te') {
    parent::__construct();
    //pre init
    $this->data['current_page_url'] = "drivers/faq";
    $this->data['current_page'] = "drivers/drivers_sub_faq";
    $this->data['title'] = 'DataBase is OFFLINE';
     //connecting to db
    require ('dbcon.php');

    //statement preparing
    //SQLs
    $sql_global = "SELECT name, {$lang} FROM globals";
    $sql_locals = "SELECT name, {$lang} FROM locals WHERE locals.local=?";
    $sql_pages = "SELECT name, {$lang} FROM pages";
    $sql_blocks = "SELECT name, {$lang} FROM blocks WHERE blocks.local=? AND blocks.idPages=10";
    $sql_faq = "SELECT id, t{$lang}, a{$lang} FROM faq_drivers WHERE local =?";
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

    //FAQ--------------------------------------------------------------------------------
    //statement preparing
    //prepare faq
    $stm = $pdo->prepare($sql_faq);
    //statement executing
    $stm->execute(array($city));
    //fetching faq array
    while ($db_data = $stm->fetch(PDO::FETCH_NUM)){
        $faq[] = $db_data;
    }

    faq_to_table($faq, $this->data['faq']);

   }
  }

function faq_to_table($faq_data, &$outdata) {
    foreach ($faq_data as $row)
    {
$outdata .= <<<EOT
            <div class="panel panel-accent">
            <a data-toggle="collapse" data-parent="#accordion" href="#{$row[0]}">
                <div class="panel-heading">
                    <h4>{$row[1]}</h4>
                </div>
            </a>
                <div id="{$row[0]}" class="panel-collapse collapse">
                    <div class="panel-body">
                        {$row[2]}
                    </div>
                </div>
            </div>
EOT;
    }
}

?>
