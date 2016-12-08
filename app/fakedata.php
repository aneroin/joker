<?php
	if (isset($_GET['entity'])) {
		$requestedEntity = $_GET['entity'];
	} else if(isset($_POST['entity'])) {
		$requestedEntity = $_POST['entity'];
	} else {
		die();
	}

	if (isset($_GET['id'])) {
		$requestedId = $_GET['id'];
	} else if(isset($_POST['id'])) {
		$requestedId = $_POST['id'];
	}

	#region dummy data
	$clientDataEntity  = new stdClass();
	$clientDataEntity->fname="John";
	$clientDataEntity->lname="Smith";
	$clientDataEntity->calls=6;
	$clientDataEntity->kilometers=72;
	$clientDataEntity->orders= array(
		array('id'=>'121',
			  'when'=>'21.06.2016',
			  'from'=>'вулиця Живова, 3, Тернопіль',
			  'to'=>'вулиця Ділова, 4, Тернопіль',
			  'callsign'=>'14'),
		array('id'=>'122',
			  'when'=>'21.06.2016',
			  'from'=>'вулиця Ділова, 4, Тернопіль',
			  'to'=>'вулиця Танцорова, 2, Тернопіль',
			  'callsign'=>'14'),
		array('id'=>'127',
			  'when'=>'21.06.2016',
			  'from'=>'вулиця Танцорова, 41, Тернопіль',
			  'to'=>'вулиця Корольова, 1А, Тернопіль',
			  'callsign'=>'75'),
		array('id'=>'151',
			  'when'=>'21.06.2016',
			  'from'=>'вулиця Збаразька, 3, Тернопіль',
			  'to'=>'вулиця Тролейбусна, 15, Тернопіль',
			  'callsign'=>'42'),
		array('id'=>'372',
			  'when'=>'22.06.2016',
			  'from'=>'вулиця Живова, 3, Тернопіль',
			  'to'=>'вулиця Клима Савури, 5А, Тернопіль',
			  'callsign'=>'17'),
		array('id'=>'512',
			  'when'=>'22.06.2016',
			  'from'=>'вулиця Подільська, Тернопіль',
			  'to'=>'вулиця Тернопільська, 44, Тернопіль',
			  'callsign'=>'117')
	);
	#endregion

	switch ($requestedEntity){
		case "clientdata":
			echo json_encode($clientDataEntity);
			break;
		case "route":
			foreach ($clientDataEntity->orders as $order){
				if ($order['id']==$requestedId)
				echo json_encode($order);
			}
			break;
	}
?>