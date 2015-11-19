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

	$p_portrait = "driver_placeholder.png";
	$p_car = "driver_placeholder.png";

	$uploaddir = URL.'/img/drivers/';
	foreach ($_FILES["photo-portrait"]["error"] as $key => $error) {
	    if ($error == UPLOAD_ERR_OK) {
	        $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
	        $name = $_FILES["pictures"]["name"][$key];
	        $p_portrait = $name;
	        move_uploaded_file($tmp_name, "$uploads_dir/$name");

	    }
	}
	foreach ($_FILES["photo-car"]["error"] as $key => $error) {
	    if ($error == UPLOAD_ERR_OK) {
	        $tmp_name = $_FILES["photo-car"]["tmp_name"][$key];
	        $name = $_FILES["photo-car"]["name"][$key];
	        $p_car = $name;
	        move_uploaded_file($tmp_name, "$uploads_dir/$name");
	    }
	}

	//SQLs
	$sql_join = "CALL `taxijoke_db`.`driver_join`(?,?,?,?,?,?,?,?,?,?,?);";
	//prepare globals
	$stm = $pdo->prepare($sql_join);
	//statement executing
	if ($stm->execute(array($driverdata['fname'],$driverdata['mname'],$driverdata['lname'],$p_portrait,$driverdata['city'],$driverdata['street'],$driverdata['house'],$driverdata['carvendor'],$driverdata['carmodel'],$driverdata['carcolor'],$driverdata['carhex']))) {
	   	$res['response'] = '1';
	   	//receiver
		$to = 'ua828ua@gmail.com';
		//topic
		$subject = "Вакансія водія {$driverdata['lname']} {$driverdata['fname']} тел: {$driverdata['phone']}";
		//message
		$message = "<html><body>";
		$message.= "<h2> Відправник: <strong>{$driverdata['lname']} {$driverdata['fname']} {$driverdata['mname']}</strong> </h2> <br>";
		$message.= "<h3> Номер телефону: <strong>{$driverdata['phone']} </strong> <br> Бажає стати водієм таксі Джокер.<hr style='color:#333; background-color:#333'>";
		$message.= "Автомобіль марки: <strong>{$driverdata['carvendor']} - {$driverdata['carmodel']}</strong>, колір кузова {$driverdata['carcolor']}  <pre style='background-color:{$driverdata['carhex']}; border-color: #333; border-style: solid; border-width: 1px;'>        </pre>";
		$message.= " Номерний знак <strong>{$driverdata['carnumber']}</strong><hr style='color:#333; background-color:#333'>";
		$message.= "Адреса проживання: <ul> <li> місто: {$driverdata['city']}</li><li> вулиця: {$driverdata['street']}</li><li> будинок: {$driverdata['house']}</li></ul> </h3>";
		$message.= "</html></body>";
		//headers
		$headers = "From: <info@taxijoker.com>\r\n";
		$headers.= "MIME-Version: 1.0\r\n";
		$headers.= "Content-Type: text/html; charset=UTF-8\r\n";
		//send
		mail($to,$subject,$message,$headers);

	} else {
	   	$res['response'] = '0';
	}

	echo json_encode($res);
?>