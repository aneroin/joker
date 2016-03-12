<?php
//session_start();

  class Prices_Model extends Model {
   public function __construct($lang = 'ua', $city = 'te') {
    parent::__construct();
    //pre init
    $this->data['current_page'] = "prices";
    $this->data['title'] = 'DataBase is OFFLINE';

    $pricetype;
    $tpricedata;
    $tinpricedata;
    $toutpricedata;
    $pricesdetail;

    //connecting to db
    require ('dbcon.php');
    //statement preparing
    //SQLs
    $sql_global = "SELECT name, ".$lang." FROM globals";
    $sql_locals = "SELECT name, ".$lang." FROM locals WHERE locals.local=?";
    $sql_pages = "SELECT name, ".$lang." FROM pages";
    $sql_blocks = "SELECT name, ".$lang." FROM blocks WHERE blocks.local=? AND blocks.idPages=2";
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


    //PRICES-------------------------------------------------------------------------------- 
    //statement preparing
    //SQLs
    $sql_pricest = "SELECT id, ".$lang." FROM pricetype WHERE local =?;";
    $sql_pricesd = "SELECT id, ".$lang." FROM pricedetail WHERE idPriceType=?;";
    $sql_pricesin = "SELECT ".$lang." FROM priceInCity WHERE idPriceDetail=?;";
    $sql_pricesout = "SELECT ".$lang." FROM priceOutCity WHERE idPriceDetail=?;";

    //prepare types
    $stm = $pdo->prepare($sql_pricest);
    //statement executing
    $stm->execute(array($city));
    //fetching globals array
    while ($db_data = $stm->fetch(PDO::FETCH_NUM)){
      $pricetype[] = $db_data;    
    }


    //LONG LONG FETCHING
    foreach ($pricetype as $typeid) {
        unset($tpricedata);
        unset($tinpricedata);
        unset($toutpricedata);
        unset($pricesdetail);

        //prepare types
        $stm = $pdo->prepare($sql_pricesd);
        //statement executing
        $stm->execute(array($typeid[0]));
        //fetching globals array
        while ($db_data = $stm->fetch(PDO::FETCH_NUM)){
          $tpricedata[] = $db_data;    
        }
    
        //nested foreach
        foreach ($tpricedata as $detailid) {
            //prepare types
            $stm = $pdo->prepare($sql_pricesin);
            //statement executing
            $stm->execute(array($detailid[0]));
            //fetching globals array
            while ($db_data = $stm->fetch(PDO::FETCH_NUM)){
              $tinpricedata[] = $db_data;    
            }

            //prepare types
            $stm = $pdo->prepare($sql_pricesout);
            //statement executing
            $stm->execute(array($detailid[0]));
            //fetching globals array
            while ($db_data = $stm->fetch(PDO::FETCH_NUM)){
              $toutpricedata[] = $db_data;    
            }
        }
    for ($i = 0; $i < count($tpricedata); $i++){
        $pricesdetail[] = array($tpricedata[$i], $tinpricedata[$i], $toutpricedata[$i]);
    }
    
    prices_to_table($typeid,$pricesdetail,$this->data,$this->data['table']);
    }
   }

  }

function prices_to_table($title, $tdata, $local, &$outdata){
$outdata.= <<<EOT
        <li>
            <div class="collapsible-header">
                {$title[1]}
            </div>
            <div class="collapsible-body">
                <table class="striped responsive-table">
                    <thead>
                        <tr>
                            <th data-field="name">{$title[1]}</th>
                            <th data-field="incity">{$local['incity_title']}</th>
                            <th data-field="outcity">{$local['outcity_title']}</th>
                        </tr>
                    </thead>
                    <tbody>
EOT;

foreach ($tdata as $row) {
    $outdata.=  <<<EOT
                        <tr>
                            <td>{$row[0][1]}</td>
                            <td>{$row[1][0]}</td>
                            <td>{$row[2][0]}</td>
                        </tr>
EOT;
}

$outdata.=  <<<EOT
                    </tbody>
                </table>
            </div>                 
        </li>
EOT;
}
?>