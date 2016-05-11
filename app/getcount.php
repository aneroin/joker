<?php
session_start();
require ('dbcon.php');
if (isset($_GET['city'])) {
	$city_index = $_GET['city'];
} else {
	if (isset($_SESSION['local']))
		$city_index = $_SESSION['local'];
	else 
		$city_index = 'te';
}

$counter_report;

//SQLs
$sql_getcounter= "SELECT `eng` FROM `taxijoke_db`.`locals` WHERE `name`='orders' AND `local`=?;";
//prepare globals
$stm_select = $pdo->prepare($sql_getcounter);
$stm_select->execute(array($city_index));
while ($db_data = $stm_select->fetch(PDO::FETCH_ASSOC)){
	$counter_report = $db_data['eng'];
}

echo ($counter_report);
return $counter_report;
?>