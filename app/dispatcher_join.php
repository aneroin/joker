<?php
	require ('dbcon.php');
	require ('defines.php');
	$dispatcherdata['phone'] = $_POST['phone'];
	$dispatcherdata['fname'] = $_POST['fname'];
	$dispatcherdata['mname'] = $_POST['mname'];
	$dispatcherdata['lname'] = $_POST['lname'];
	$dispatcherdata['city'] = $_POST['city'];
	$dispatcherdata['street'] = $_POST['street'];
	$dispatcherdata['house'] = $_POST['house'];
	$dispatcherdata['apartment'] = $_POST['apartment'];

	if (isset($_POST['photoportrait'])) {
		$p_portrait = $_POST['photoportrait'];
	} else {
		$p_portrait = "http://taxijoker.com/img/drivers/driver_placeholder.png";
	}

	if (isset($_POST['photocar'])) {
		$p_car = $_POST['photocar'];
	} else {
		$p_car = "http://taxijoker.com/img/drivers/driver_placeholder.png";
	}

		$res['photo'] = $p_portrait;
	   	$res['phone'] = $_POST['phone'];

	//SQLs
	//$sql_join = "CALL `taxijoke_db`.`driver_join`(?,?,?,?,?,?,?,?,?,?,?);";
	//prepare globals
	//$stm = $pdo->prepare($sql_join);
	//statement executing
	//if ($stm->execute(array($dispatcherdata['fname'],$dispatcherdata['mname'],$dispatcherdata['lname'],$p_portrait,$dispatcherdata['city'],$dispatcherdata['street'],$dispatcherdata['house'],$dispatcherdata['carvendor'],$dispatcherdata['carmodel'],$dispatcherdata['carcolor'],$dispatcherdata['carhex']))) {
	   	$res['response'] = '1';
	   	//receiver
		$to = 'ua828ua@gmail.com';
		//topic
		$subject = "Вакансія диспетчера {$dispatcherdata['lname']} {$dispatcherdata['fname']} тел: {$dispatcherdata['phone']}";
		//message
		$message = "<html><body>";
		$message.= "<h2> Відправник: <strong>{$dispatcherdata['lname']} {$dispatcherdata['fname']} {$dispatcherdata['mname']}</strong> </h2> <br>";
		$message.= "<img src='{$p_portrait}' style='height: 300px; width: auto;'> фото диспетчера </img> <br>";
		$message.= "<h3> Номер телефону: <strong>{$dispatcherdata['phone']} </strong> <br> Бажає стати диспетчером таксі Джокер.<hr style='color:#333; background-color:#333'>";
		$message.= "Адреса проживання: <ul> <li> місто: {$dispatcherdata['city']}</li><li> вулиця: {$dispatcherdata['street']}</li><li> будинок: {$dispatcherdata['house']}</li><li> квартира: {$dispatcherdata['apartment']}</li></ul> </h3>";
		$message.= "</html></body>";
		//headers
		$headers = "From: <info@taxijoker.com>\r\n";
		$headers.= "MIME-Version: 1.0\r\n";
		$headers.= "Content-Type: text/html; charset=UTF-8\r\n";
		//send
		mail($to,$subject,$message,$headers);

	//} else {
	//   	$res['response'] = '0';
	//}

	echo json_encode($res);
?>