<?php
	require ('dbcon.php');
	$driverdata['phone'] = $_POST['phone'];
	$driverdata['fname'] = $_POST['fname'];
	$driverdata['mname'] = $_POST['mname'];
	$driverdata['lname'] = $_POST['lname'];
	$driverdata['carvendor'] = $_POST['carvendor'];
	$driverdata['carmodel'] = $_POST['carmodel'];
	$driverdata['carcolor'] = $_POST['carcolor'];
	$driverdata['carnumber'] = $_POST['carnumber'];
	$driverdata['city'] = $_POST['city'];
	$driverdata['street'] = $_POST['street'];
	$driverdata['house'] = $_POST['house'];
	$driverdata['carhex'] = $_POST['carhex'];

	//SQLs
	$sql_join = "CALL `taxijoke_db`.`driver_join`(?,?,?,?,?,?,?,?,?,?);";
	//prepare globals
	$stm = $pdo->prepare($sql_join);
	//statement executing
	if ($stm->execute(array($driverdata['fname'],$driverdata['mname'],$driverdata['lname'],$driverdata['city'],$driverdata['street'],$driverdata['house'],$driverdata['carvendor'],$driverdata['carmodel'],$driverdata['carcolor'],$driverdata['carhex']))) {
	   	$res['response'] = '1';
	} else {
	   	$res['response'] = '0';
	}

	echo json_encode($res);
?>