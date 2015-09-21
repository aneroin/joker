<?php
session_start();
	//getting params
	$lang = $_GET['lang'];
	$local = $_GET['local'];
	//rewriting session vars
	if (isset($lang))
	$_SESSION['lang'] = $lang;
	if (isset($local))
	$_SESSION['local'] = $local;
	//returning
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>