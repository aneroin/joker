<!DOCTYPE html> 
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="icon" type="image/png" href="<?php echo URL; ?>img/favicon_light.png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--link href='https://fonts.googleapis.com/css?family=Roboto:400,100&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'-->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
	<script src="<?php echo URL; ?>jquery/jquery-2.1.4.js"></script>
	<script src="<?php echo URL; ?>jquery/scroll.js"></script>
	<script src="<?php echo URL; ?>bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/markup.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/colors.css">
	<link id="theme" data-theme-dark="<?php echo URL; ?>css/colors-dark.css" data-theme-light="<?php echo URL; ?>css/colors-light.css" rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/colors-dark.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/buttons3d.css">

</head>
<body style="background-image: url('/../img/<?php echo $_SESSION['local'] ?>.png')">
	<div id="wrapper"> 
	<div id="sidebar-wrapper" data-current-page=<?php echo $data['current_page']; ?>>
			<ul class="sidebar-nav">
				<div class="container" style="width: 250px; margin: 0px; display: block;">
				<div class="row">
				<div class="col-xs-12">
				<div class="row">
			 		<div class="dropdown col-xs-6">
						<button class="btn btn-yellow dropdown-toggle fill_h" type="button" data-toggle="dropdown">
						<span class="selection"><?php echo $data['lang_title']; ?></span>
						<span class="caret"></span></button>
						<ul class="dropdown-menu  col-xs-12">
							<li class="dropdown-menu-item"><a href="language.php?lang=ua" ><?php echo $data['lang_ua']; ?></a></li>
							<li class="dropdown-menu-item"><a href="language.php?lang=ru" ><?php echo $data['lang_ru']; ?></a></li>
							<li class="dropdown-menu-item"><a href="language.php?lang=eng" ><?php echo $data['lang_en']; ?></a></li>
						</ul>
					</div>
					
					<div class="dropdown col-xs-6">
						<button class="btn btn-yellow dropdown-toggle fill_h" type="button" data-toggle="dropdown">
						<span class="selection"><?php echo $data['local_title']; ?></span>
						<span class="caret"></span></button>
						<ul class="dropdown-menu col-xs-12">
							<li class="dropdown-menu-item"><a href="language.php?local=te" ><?php echo $data['local_te']; ?></a></li>
							<li class="dropdown-menu-item"><a href="language.php?local=lu" ><?php echo $data['local_lu']; ?></a></li>
						</ul>
					</div>
				</div>
				</div>
				</div>
				</div>

				<li class="sidebar-brand clearfix">
					<a href=""> <img src="img/logo.png" alt="таксі джокер" style="min-width: 80%; width: 80%; min-height: auto; height: auto; padding: 0px 20px;"> </a>
				</li>
				<li id="index">
					<a href="index"> <?php echo $data['Index']; ?> </a>
				</li>
				<li id="prices">
					<a href="prices"> <?php echo $data['Prices']; ?> </a>
				</li>
				<li id="drivers">
					<a href="drivers"> Водії </a>
				</li>
				<li id="contacts">
					<a href="contacts"> <?php echo $data['Contacts']; ?> </a>
				</li>
			</ul>
							<a href="http://taxiadmin.com.ua/"><img border="0" src="<?php echo URL; ?>img/taxiadmin.png" style="max-width: 150px; max-height: auto; position: relative; bottom: -90%; left: 50px; opacity: 0.7;"></img></a>
	</div>

	<div id="page-content-wrapper">
		<div class="container-fluid" id="top">
            <div class="row">
                <div class="col-xs-12  col-sd-8  col-md-10 col-md-offset-1">
                	<!-- toggle buttons -->
					<a href="#menu-toggle" class="btn btn-yellow" id="menu-toggle-wrapper">
						<img border="0" alt="toggle menu" src="<?php echo URL; ?>img/sidebar.gif" width="100%" height="auto">
					</a>
					<!--phone numbers-->
						<div class="row rounded contacts" id="accent-row" style="">
							<?php echo $data['our_phone']; ?>  &nbsp; <a href="tel:828" style=""><span class="glyphicon glyphicon-earphone"  style="font-size: 0.8em !important;"></span> 828 </a>&nbsp; <?php echo $data['free_phone']; ?>
						</div>
						<p class="whitespace-h"> </p>
