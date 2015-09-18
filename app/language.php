<?php
session_start();
	$lang = $_GET['lang'];
	$local = $_GET['local'];
	if (isset($lang))
	$_SESSION['lang'] = $lang;
	if (isset($local))
	$_SESSION['local'] = $local;
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>