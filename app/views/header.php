<!DOCTYPE html> 
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="<?php echo URL; ?>jquery/jquery-2.1.4.js"></script>
	<script src="<?php echo URL; ?>bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>bootstrap/css/bootstrap-responsive.min.css">
	

</head>
<body>

	<div class="dropdown">
		<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">мова
		<span class="caret"></span></button>
	  	<ul class="dropdown-menu">
		    <li><a href="language.php?lang=ua" > UA </a></li>
			<li><a href="language.php?lang=ru" > RU </a></li>
			<li><a href="language.php?lang=eng" > ENG </a></li>
	  	</ul>
	</div>
	<div class="dropdown">
		<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">місто
		<span class="caret"></span></button>
	  	<ul class="dropdown-menu">
			<li><a href="language.php?local=te" > Ternopil </a></li>
			<li><a href="language.php?local=lu" > Luck </a></li>
	  	</ul>
	</div>