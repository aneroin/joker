<?php
	require '../protected/dbvars.php';
	$pdo = new PDO('mysql:host='.$_dbhost.';dbname='.$_dbname, $_dbusr, $_dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
?>