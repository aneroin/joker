<!DOCTYPE html> 
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="<?php echo URL; ?>jquery/jquery-2.1.4.js"></script>
	<script src="<?php echo URL; ?>jquery/scroll.js"></script>
	<script src="<?php echo URL; ?>jquery/formprocess.js"></script>
	<script src="<?php echo URL; ?>bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/markup.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/colors-dark.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/buttons3d.css">
	

</head>
<body style="background-image: url('/../img/<?php echo $_SESSION['local'] ?>.png')">
	<div id="wrapper"> 
	<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<div class="container" style="width: 250px; margin: 0px; display: block;">
				<div class="row">
				<div class="col-xs-12">
				<div class="row">
			 		<div class="dropdown col-xs-4">
						<button class="btn btn-yellow dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $_SESSION['lang'] ?>
						<span class="caret"></span></button>
						<ul class="dropdown-menu  col-xs-12">
							<li class="dropdown-menu-item"><a href="language.php?lang=ua" > UA </a></li>
							<li class="dropdown-menu-item"><a href="language.php?lang=ru" > RU </a></li>
							<li class="dropdown-menu-item"><a href="language.php?lang=eng" > ENG </a></li>
						</ul>
					</div>
					
					<div class="dropdown col-xs-8">
						<button class="btn btn-yellow dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $data['title'] ?>
						<span class="caret"></span></button>
						<ul class="dropdown-menu col-xs-12">
							<li class="dropdown-menu-item"><a href="language.php?local=te" > TERNOPIL </a></li>
							<li class="dropdown-menu-item"><a href="language.php?local=lu" > LUTSK </a></li>
						</ul>
					</div>
				</div>
				</div>
				</div>
				</div>

				<li class="sidebar-brand clearfix">
					<a href=""> <img src="img/logo.png" style="min-width: 80%; width: 80%; min-height: auto; height: auto; padding: 0px 20px;"> </a>
				</li>
				<li>
					<a href="index"> Index </a>
				</li>
				<li>
					<a href="prices"> Prices </a>
				</li>
				<li>
					<a href="drivers"> Drivers </a>
				</li>
				<li>
					<a href="vacancies"> Vacancies </a>
				</li>
			</ul>
	</div>

	<div id="page-content-wrapper">
		<div class="container-fluid" id="top">
            <div class="row">
                <div class="col-xs-12  col-sd-8  col-md-10 col-md-offset-1">
                	<!-- toggle buttons -->
					<a href="#menu-toggle" class="btn btn-yellow" id="menu-toggle-wrapper">
						<img border="0" alt="toggle menu" src="<?php echo URL; ?>img/sidebar.gif" width="100%" height="auto">
					</a>
