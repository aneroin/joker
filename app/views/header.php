<!DOCTYPE html> 
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta name="description" content="<?php echo $data['meta_desc']; ?>"/>
	<link rel="icon" type="image/png" href="<?php echo URL; ?>img/favicon_light.png"/>

    <meta property="og:title" content="<?php echo $data['meta_title']; ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?php echo URL; ?>"/>
    <meta property="og:image" content="<?php echo URL; ?>img_m/social.png"/>
    <meta property="og:description" content="<?php echo $data['meta_desc']; ?>"/>
    <meta property="og:site_name" content="Taxi Joker"/>
    <meta property="fb:app_id" content="966242223397117 "/> 
    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="<?php echo URL; ?>">
    <meta name="twitter:title" content="<?php echo $data['meta_title']; ?>">
    <meta name="twitter:description" content="<?php echo $data['meta_desc']; ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=0" />
	<!--link href='https://fonts.googleapis.com/css?family=Roboto:400,100&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'-->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
	<script src="<?php echo URL; ?>jquery/jquery-2.1.4.js"></script>
	<script src="<?php echo URL; ?>jquery/jquery.validate.js"></script>
	<script src="<?php echo URL; ?>jquery/jquery.validate.additional-methods.js"></script>
	<script src="<?php echo URL; ?>jquery/scroll.js"></script>
	<script src="<?php echo URL; ?>bootstrap/js/bootstrap.min.js"></script>

	<?php 
		echo $header;
	?>

	<!--styles-->
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/markup.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/colors_outline.css">
	<link id="theme" data-theme-dark="<?php echo URL; ?>css/colors-light.css" data-theme-light="<?php echo URL; ?>css/colors-light.css" data-theme-xsdark="<?php echo URL; ?>css/colors-light-xs.css" data-theme-xslight="<?php echo URL; ?>css/colors-light-xs.css" rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/colors-dark.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/buttons3d.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/checkbox.css">

</head>
<body style="background-image: url('<?php echo URL; ?>img/<?php echo $_SESSION['local'] ?>.png')">
	<div id="wrapper"> 
	<div id="sidebar-wrapper" data-current-page="<?php echo $data['current_page']; ?>">
			<ul class="sidebar-nav">

				<li class="sidebar-brand clearfix">
					<a href="/"> <img src="<?php echo URL; ?>img/logo.png" alt="таксі джокер" style="min-width: 80%; width: 80%; min-height: auto; height: auto; padding: 0px 20px;"> </a>
				</li>
				<li id="index">
					<a href="/index"> <?php echo $data['Index']; ?> </a>
				</li>
				<li id="prices">
					<a href="/prices"> <?php echo $data['Prices']; ?> </a>
				</li>
				<li id="drivers" data-target="#drivers_sub">
					<a href="/drivers"> <?php echo $data['Drivers']; ?> </a>
				</li>
					<ul id="drivers_sub" class="nav nav-list collapse">
						<li id="drivers_sub_all">
							<a href="/drivers/all"> <?php echo $data['Drivers_All']; ?> </a>
						</li>
						<li id="drivers_sub_join">
							<a href="/drivers/join"> <?php echo $data['Drivers_Join']; ?> </a>
						</li>
						<li id="drivers_sub_faq">
							<a href="/drivers/faq"> <?php echo $data['Drivers_FAQ']; ?> </a>
						</li>
					</ul>
				<li id="dispatchers" data-target="#dispatchers_sub">
					<a href="/dispatchers"> <?php echo $data['Dispatchers']; ?> </a>
				</li>
					<ul id="dispatchers_sub" class="nav nav-list collapse">
						<li id="dispatchers_sub_all">
							<a href="/dispatchers/all"> <?php echo $data['Dispatchers_All']; ?> </a>
						</li>
						<li id="dispatchers_sub_join">
							<a href="/dispatchers/join"> <?php echo $data['Dispatchers_Join']; ?> </a>
						</li>
						<li id="dispatchers_sub_faq">
							<a href="/dispatchers/faq"> <?php echo $data['Dispatchers_FAQ']; ?> </a>
						</li>
					</ul>
				<li id="contacts">
					<a href="/contacts"> <?php echo $data['Contacts']; ?> </a>
				</li>
				
					<a href="http://taxiadmin.com.ua/"><img border="0" src="<?php echo URL; ?>img/taxiadmin.png" style="max-width: 150px; max-height: auto; margin-top: 48px; margin-left: 50px; opacity: 0.6;"></img></a>
				
			</ul>
							
	</div>
	<!--img class="hidden-xs hidden-sm" id="special" src="<?php echo URL; ?>img/moroz<?php $special_n = rand(1,2); echo $special_n;?>.png"></img>
	<img class="hidden-xs hidden-sm" id="special_text" src="<?php echo URL; ?>img/moroz_text<?php echo $special_n; unset ($special_n);?>.png"></img-->
	<div id="page-content-wrapper">
		<div class="container-fluid" id="top">
            <div class="row">
                <div class="col-xs-12 col-sd-10 col-md-10 col-xl-8 col-offset-xl-2">
                	<!-- toggle buttons -->
					<a href="#menu-toggle" class="btn btn-yellow" id="menu-toggle-wrapper">
						<img border="0" alt="toggle menu" src="<?php echo URL; ?>img/sidebar.gif" width="100%" height="auto">
					</a>
					<!--phone numbers-->
						<div class="row rounded contacts" id="accent-row" style="">
							<?php echo $data['our_phone']; ?>  &nbsp; <a href="tel:828" style=""><span class="glyphicon glyphicon-earphone"  style="font-size: 0.8em !important;"></span> 828 </a>&nbsp; <?php echo $data['free_phone']; ?>
						</div>
						<p class="whitespace-h"> </p>
