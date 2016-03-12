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
	
	if (isset($geoValue)) {
		if ($geoValue=="false") 
		    setcookie("GeoLocated", $geoValue, time()+3600*24*7, '/', '.taxijoker.dev');
		else 
		    setcookie("GeoLocated", $geoValue, 0, '/', '.taxijoker.dev');
	}

	if (isset($ref)) {
		if ($ref=="no") {
			echo "town ".$town." county ".$county."<br>";
			echo "<pre>";
			print_r($address_data);
			echo "</pre>";
		}
		else {
			header('Location: ' . 'http://'.$_SESSION['lang'].'.taxijoker.dev/'.$ref);
		}
		
	} else {
		preg_match('/http:\/\/([^.]+)\.taxijoker\.dev/', $_SERVER['HTTP_REFERER'], $matches);
		if(isset($matches[1])) {
			preg_match('/(\..+$)/', $_SERVER['HTTP_REFERER'], $submatches);
			if(isset($submatches[1])) {
				$subdomain = $_SESSION['lang'];
				$query = $submatches[1];
				header("Location: http://".$subdomain.$query);
				return false;
			}
		}
		header('Location: ' . "http://".$_SESSION['lang'].'.taxijoker.dev/');
		return false;
	}
?>