<?php
require_once '../protected/gvars.php';
session_start();
	//getting params
	$lang = $_GET['lang'];
	$local = $_GET['local'];
	$ref = $_GET['ref'];
	$lat = $_GET['lat'];
	$lon = $_GET['lon'];
	//rewriting session vars
	if (isset($lang)) {
		$_SESSION['lang'] = $lang;
		$geoValue = "true";
	}
	if (isset($local)) {
		$_SESSION['local'] = $local;
		$geoValue = "true";
	}
	//returning
	if (!(isset($lang) || isset($local))) {
		if (isset($lat) && isset($lon)) {
			//Now build the actual lookup
	        $address_url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng=' . $lat . ',' . $lon . '&sensor=false';
	        $address_json = json_decode(file_get_contents($address_url));

	        $address_data = $address_json->results[0]->address_components;

	        $distr = $address_data[3]->long_name;    
	        $country = $address_data[4]->short_name;

	        if (preg_match($regions['ua'],$country)) {
	        	$_SESSION['lang']="ua";
	        	$geoValue = "true";
	        } else if (preg_match($regions['ru'],$country)) {
	        	$_SESSION['lang']="ru";
	        	$geoValue = "true";
	        } else if (preg_match($regions['eng'],$country)) {
	        	$_SESSION['lang']="eng";
	        	$geoValue = "true";
	        } else {
	        	$_SESSION['lang']="ua";
	        	$geoValue = "false";
	        }

	        if (preg_match($regions['te'],$distr)) {
	        	$_SESSION['local'] ="te";
	        	$geoValue = "true";
	        } else if (preg_match($regions['lu'],$distr)) {
				$_SESSION['local'] ="lu";
				$geoValue = "true";
	        } else {
	        	$_SESSION['local'] ="te";
	        	$geoValue = "false";
	        }
	    }
	}

	$lang = $_SESSION['lang'];
	$local = $_SESSION['local'];
	
	if (isset($geoValue)) {
		if ($geoValue=="false") 
		    setcookie("GeoLocated", $geoValue, '/', '.taxijoker.com');
		else 
		    setcookie("GeoLocated", $geoValue, time()+3600*24*365, '/', '.taxijoker.com');
	}

	if (isset($ref)) {
		if ($ref=="no") {
			echo "town ".$town." county ".$county."<br>";
			echo "<pre>";
			print_r($address_data);
			echo "</pre>";
		}
		else {
			header('Location: ' . 'http://taxijoker.com/'.$local.'-'.$lang.'/'.$ref);
		}
		
	} else {
		preg_match('/^([0-9a-zA-Z]+:\/\/)?[0-9a-zA-Z]+\.[0-9a-zA-Z]+\/{1}([0-9a-zA-Z]+\-[0-9a-zA-Z]+)?(.*)$/', $_SERVER['HTTP_REFERER'], $matches);
		header('Location: ' .$local.'-'.$lang.'/'.ltrim($matches[3],'/'));
		return false;
	}
?>