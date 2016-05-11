<?php
require ('dbcon.php');
$reset = false;
if (isset($_GET['reset'])) {
	if ($_GET['reset']=='magicpwd')
		$reset = true;
}
if (isset($_GET['limit'])) {
	$limit = intval($_GET['limit']) + rand(1,100);
} else {
	$limit = 9999;
}
if (isset($_GET['city'])) {
	$city_index = $_GET['city'];
} else {
	$city_index = 'lu';
}

$counter_report;
$count = 0;
$hot = false;
$cold = false;
//SQLs
$sql_counter= "UPDATE `taxijoke_db`.`locals` SET `eng`=?, `ua`=?, `ru`=? WHERE `name`='orders' AND `local`=?;";
$sql_getcounter= "SELECT `eng` FROM `taxijoke_db`.`locals` WHERE `name`='orders' AND `local`=?;";
//prepare vars
$stm_update = $pdo->prepare($sql_counter);
//prepare globals
$stm_select = $pdo->prepare($sql_getcounter);

$stm_select->execute(array($city_index));
while ($db_data = $stm_select->fetch(PDO::FETCH_ASSOC)){
	$counter_report = $db_data['eng'];
}

while(TRUE){
	if ($reset) {
		$count = 0;
		$reset = false;
		$stm_update->execute(array($count,$count,$count,$city_index));
		return false;
	}
	else
		$count = $counter_report;
	$hot = false;
	$cold = false;
	$affect = 0.7;
	$timeout = ceil((86400 / $limit) * $affect);

	while (true) {
		$load = 1.0;
		set_time_limit(0);
		$hour = intval(date('H'));
		$minute = intval(date('i'));

		if ($hour == 4) return false;
		if (($hour > 8 && $hour < 11) || ($hour > 17 && $hour < 19) || ($hour > 22))
			$hot = true;
		else
			$hot = false;

		if ($hour >= 3 && $hour <= 5)
			$cold = true;
		else
			$cold = false;

		$load = $hot?$load:rand(0.5,1);
		$load = $cold?$load:rand(2.5,3);
			
		$count++;

		//statement executing
		$stm_update->execute(array($count,$count,$count,$city_index));

		sleep($timeout*$load);

	}

	$count = 0;
}
?>