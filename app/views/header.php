<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#e64a19">
    
    <title>Taxi Joker</title>
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

    <!-- CSS  -->
    <link href="http://taxijoker.com/min/materialize.css" type="text/css" rel="stylesheet">
    <link href="http://taxijoker.com/min/custom.css" type="text/css" rel="stylesheet" >
    <link href="http://taxijoker.com/min/odometer.css" type="text/css" rel="stylesheet" >

    <?php foreach($includes as $includes_entry): ?>
    
		<?php if ($includes_entry=="joinform") : ?>
			<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
			<link href="http://taxijoker.com/min/steps.css" type="text/css" rel="stylesheet" >
		<?php endif; ?>
	
	<?php endforeach; ?>
	
</head>
<body id="top" class="scrollspy">

<!-- Pre Loader -->
<div id="loader-wrapper">
    <div id="loader"></div>
 
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
 
</div>

<!--Navigation-->
 <div class="navbar-fixed">
    <nav id="nav_f" class="default_color" role="navigation" data-current-page="<?php echo $data['current_page']; ?>">
        <div class="container">
            <div class="nav-wrapper">
            <a href="http://taxijoker.com" id="logo-container" class="brand-logo hide-on-large-only">Таксі Джокер</a>
            <a href="http://taxijoker.com" id="logo-container" class="brand-logo show-on-large"></a>
               <ul class="right hide-on-med-and-down">
                    <li><a href="<?php echo LOCALURL ?>"><?php echo $data['Index']; ?></a></li>
                    <li><a href="<?php echo LOCALURL ?>prices"><?php echo $data['Prices']; ?></a></li>
                    <!--li><a href="<?php echo LOCALURL ?>promo">Акції</a></li-->
                    <li><a href="<?php echo LOCALURL ?>drivers"><?php echo $data['Drivers']; ?></a></li>
                    <li><a href="<?php echo LOCALURL ?>dispatchers"><?php echo $data['Dispatchers']; ?></a></li>
                    <li><a href="<?php echo LOCALURL ?>contacts"><?php echo $data['Contacts']; ?></a></li>
                    <li><a href="<?php echo LOCALURL ?>about">Про нас</a></li>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="<?php echo LOCALURL ?>"><?php echo $data['Index']; ?></a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo LOCALURL ?>prices"><?php echo $data['Prices']; ?></a></li>
                    <!--li><a href="<?php echo LOCALURL ?>promo">Акції</a></li-->
                    <li class="divider"></li>
                    <li><a href="<?php echo LOCALURL ?>drivers"><?php echo $data['Drivers']; ?></a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo LOCALURL ?>dispatchers"><?php echo $data['Dispatchers']; ?></a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo LOCALURL ?>contacts"><?php echo $data['Contacts']; ?></a></li>
                    <li><a href="<?php echo LOCALURL ?>about">Про нас</a></li>
                </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </div>

        <div class="fixed-action-btn horizontal click-to-toggle hide-on-med-and-down" style="top: 85px; right: 24px;">
            <a class="btn-floating btn-large deep-orange darken-4">
              <?php echo $_SESSION['lang']; ?><i class="large mdi-action-language"></i>
            </a>
            <ul>
              <a class="btn-floating btn-large deep-orange darken-1" href="http://taxijoker.com/language.php?lang=ua">UA</a>
              <a class="btn-floating btn-large deep-orange darken-2" href="http://taxijoker.com/language.php?lang=ru">RU</a>
              <a class="btn-floating btn-large deep-orange darken-3" href="http://taxijoker.com/language.php?lang=eng">ENG</a>
            </ul>
        </div>
        <div class="fixed-action-btn horizontal click-to-toggle hide-on-med-and-down" style="top: 165px; right: 24px;">
            <a class="btn-floating btn-large amber darken-4">
              <?php echo $_SESSION['local']; ?><i class="large mdi-communication-location-on"></i>
            </a>
            <ul>
              <a class="btn-floating btn-large amber darken-2" href="http://taxijoker.com/language.php?local=te">TE</a>
              <a class="btn-floating btn-large amber darken-3" href="http://taxijoker.com/language.php?local=lu">LU</a>
            </ul>
        </div>
    </nav>
</div>