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
	$city_index = '';
}

$counter_report;
$count = 0;
$hot = false;
$cold = false;
//SQLs
$sql_counter= "UPDATE `taxijoke_db`.`locals` SET `eng`=?, `ua`=?, `ru`=? WHERE `name`='orders' AND `local`='".$city_index."';";
$sql_getcounter= "SELECT `eng` FROM `taxijoke_db`.`locals` WHERE `name`='orders' AND `local`='".$city_index."';";
//prepare vars
$stm_update = $pdo->prepare($sql_counter);
//prepare globals
$stm_select = $pdo->prepare($sql_getcounter);

$stm_select->execute();
while ($db_data = $stm_select->fetch(PDO::FETCH_ASSOC)){
	$counter_report = $db_data['eng'];
}

while(TRUE){
	if ($reset) {
		$count = 0;
		$reset = false;
		$stm_update->execute(array($count,$count,$count));
		return false;
	}
	else
		$count = $counter_report;
	$hot = false;
	$cold = false;

	$timeout = ceil(86400 / $limit);

	while ($count < $limit) {
		set_time_limit(0);
		$hour = intval(date('H'));
		$minute = intval(date('i'));

		if ($hour == 4) return false;
		if (($hour > 7 && $hour < 10) || ($hour > 19 && $hour < 21))
			$hot = true;
		else
			$hot = false;

		if ($hour >= 3 && $hour <= 5)
			$cold = true;
		else
			$cold = false;

		$load = $hot?0:rand(1,0.5);

		if (!$cold) {
			$count++;
		}

		//statement executing
		$stm_update->execute(array($count,$count,$count));

		sleep($timeout*$load);

	}

	$count = 0;
}
?>