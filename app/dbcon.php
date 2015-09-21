<?php
	require '../protected/dbvars.php';
	$pdo = new PDO('mysql:host='.$_dbhost.';dbname='.$_dbname, $_dbusr, $_dbpass);
?>