<!DOCTYPE html> 
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="<?php echo URL; ?>jquery/jquery-2.1.4.js"></script>
	<script src="<?php echo URL; ?>bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>bootstrap/css/bootstrap-responsive.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/colors-dark.css">
	

</head>
<body>
	<div class="container-fluid" style="margin-left: 0px; padding-left: 0px;">
 	<div class="row-fluid">
	<div class="span2 menu">

		<div class="row-fluid clearfix">

			<div class="dropdown span6">
				<button class="btn btn-default dropdown-toggle span12" type="button" data-toggle="dropdown">мова
				<span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li class="dropdown-menu-item"><a href="language.php?lang=ua" > UA </a></li>
					<li class="dropdown-menu-item"><a href="language.php?lang=ru" > RU </a></li>
					<li class="dropdown-menu-item"><a href="language.php?lang=eng" > ENG </a></li>
				</ul>
			</div>

			<div class="dropdown span6 row-fluid">
				<button class="btn btn-default dropdown-toggle span12" type="button" data-toggle="dropdown">місто
				<span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li class="dropdown-menu-item"><a href="language.php?local=te" > Ternopil </a></li>
					<li class="dropdown-menu-item"><a href="language.php?local=lu" > Luck </a></li>
				</ul>
			</div>
		</div>	
	<hr> </hr>
	    <div class="nav-tabs nav-stacked">
	      <div class="navbar navbar-fixed" role="navigation">

				    <div class="navbar-header">
				        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
				            <span class="sr-only">+</span>
				        </button>
				        <a href="" class="navbar-brand">Brand</a>
				    </div>
				    
				    <div id="navbarCollapse" class="collapse navbar-collapse">
				        <ul class="sidebar-nav span9 offset3">
				            <li id="nav-index"><a href="index" class="menu">Index</a></li>
				            <li id="nav-error"><a href="error" class="menu">404</a></li>
				        </ul>
				    </div>

	  	  </div>
	    </div>
	</div>
	<div class="span10 body">