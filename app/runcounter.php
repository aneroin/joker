<?php
$pass = $_GET['p'];
$output = 'nope';
if ($pass=='magicpwd'){
	$output = shell_exec('php -f /home/taxijoke/taxijoker.com/www/counter.php');
}
echo($output);
?>