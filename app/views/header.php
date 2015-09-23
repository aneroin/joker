<!DOCTYPE html> 
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="<?php echo URL; ?>jquery/jquery-2.1.4.js"></script>
	<script src="<?php echo URL; ?>bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>bootstrap/css/bootstrap-responsive.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/markup.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/colors-dark.css">
	

</head>
<body>
	<div id="wrapper"> 
	<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<div class="container-fluid">
				<div class="row-fluid clearfix">
			 		<div class="dropdown col-md-5">
						<button class="btn btn-yellow dropdown-toggle" type="button" data-toggle="dropdown">мова
						<span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li class="dropdown-menu-item"><a href="language.php?lang=ua" > UA </a></li>
							<li class="dropdown-menu-item"><a href="language.php?lang=ru" > RU </a></li>
							<li class="dropdown-menu-item"><a href="language.php?lang=eng" > ENG </a></li>
						</ul>
					</div>
					
					<div class="dropdown col-md-5 offset2">
						<button class="btn btn-yellow dropdown-toggle" type="button" data-toggle="dropdown">місто
						<span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li class="dropdown-menu-item"><a href="language.php?local=te" > Ternopil </a></li>
							<li class="dropdown-menu-item"><a href="language.php?local=lu" > Luck </a></li>
						</ul>
					</div>
				</div>
				</div>

				<li class="sidebar-brand clearfix">
					<a href=""> Taxi Joker </a>
				</li>
				<li>
					<a href="" id="nav-active"> Index </a>
				</li>
				<li>
					<a href=""> Drivers </a>
				</li>
			</ul>
	</div>

	<div id="page-content-wrapper">
		<div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">