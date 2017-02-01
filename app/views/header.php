<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#e64a19">

    <title>Taxi Joker</title>

    <meta name="description" content="<?php echo $data['meta_desc']; ?>"/>
    <link rel="icon" type="image/png" href="<?php echo URL; ?>img/favicon_light.png"/>


    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?php echo URL.$data['current_page_url']; ?>"/>
    <meta property="og:image" content="<?php echo URL; ?>img_m/social.png"/>
	  <meta property="og:title" content="<?php echo $data['meta_title']; ?>"/>
    <meta property="og:description" content="<?php echo $data['meta_desc']; ?>"/>
    <meta property="og:site_name" content="Taxi Joker"/>

    <meta property="fb:app_id" content="966242223397117 "/>

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="<?php echo URL; ?>">
    <meta name="twitter:title" content="<?php echo $data['meta_title']; ?>">
    <meta name="twitter:description" content="<?php echo $data['meta_desc']; ?>">
	  <meta name="twitter:url" content="<?php echo URL.$data['current_page_url']; ?>">

    <!-- CSS  -->
    <link href="http://taxijoker.com/min/materialize.css" type="text/css" rel="stylesheet">
    <link href="http://taxijoker.com/min/custom.css" type="text/css" rel="stylesheet" >
    <!--link href="http://taxijoker.com/min/odometer.css" type="text/css" rel="stylesheet"-->

    <!-- ReCaptcha -->
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>

    <?php foreach($includes as $includes_entry): ?>

		<?php if ($includes_entry=="joinform") : ?>
			<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
			<link href="http://taxijoker.com/min/steps.css" type="text/css" rel="stylesheet" >
		<?php endif; ?>
        <?php if ($includes_entry=="chartist") : ?>
            <link href="http://taxijoker.com/min/chartist.min.css" type="text/css" rel="stylesheet" >
        <?php endif; ?>

	<?php endforeach; ?>
</head>
<body id="top" class="scrollspy"
data-lang="<?php echo $data['cur_lang']; ?>"
data-idtaxi="<?php echo $data['id_taxi']; ?>"
data-city="<?php echo $data['cur_city']; ?>">

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
               <ul class="right hide-on-med-and-down">
          				  <ul id="cabinets" class="dropdown-content">
                      <li><a href="<?php echo LOCALURL ?>clients/dashboard"><?php echo $data['Clients_Cabinet']; ?></a></li>
                      <li><a href="<?php echo LOCALURL ?>drivers/dashboard"><?php echo $data['Drivers_Cabinet']; ?></a></li>
          					</ul>
                    <li><a href="<?php echo LOCALURL ?>"><?php echo $data['Index']; ?></a></li>
                    <li><a href="<?php echo LOCALURL ?>prices"><?php echo $data['Prices']; ?></a></li>
                    <!--li><a href="<?php echo LOCALURL ?>promo">Акції</a></li-->
                    <li><a href="<?php echo LOCALURL ?>drivers"><?php echo $data['Drivers']; ?></a></li>
                    <li><a href="<?php echo LOCALURL ?>dispatchers"><?php echo $data['Dispatchers']; ?></a></li>
                    <li><a href="<?php echo LOCALURL ?>contacts"><?php echo $data['Contacts']; ?></a></li>
                    <?php if ((JokerUser::Instance()->logged)): ?>
				              <li><a class="dropdown-button" href="#!" data-activates="cabinets"><?php echo $data['Cabinet']; ?><i class="small right mdi-navigation-expand-more"></i></a></li>
                    <?php endif; ?>
                    <li><a href="<?php echo LOCALURL ?>about"><?php echo $data['About']; ?></a></li>
                    <?php if (!(JokerUser::Instance()->logged)): ?>
                      <li><a class="modal-trigger" href="#modal_in"><?php echo $data['login']; ?></a></li>
                		<?php endif; ?>
                		<?php if ((JokerUser::Instance()->logged)): ?>
                      <li><a href="../user/signout"><?php echo $data['logout']; ?></a></li>
                		<?php endif; ?>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                  <?php if (!(JokerUser::Instance()->logged)): ?>
                    <li><a class="modal-trigger" href="#modal_in"><?php echo $data['login']; ?></a></li>
                  <?php endif; ?>
                  <?php if ((JokerUser::Instance()->logged)): ?>
                    <li><a href="../user/signout"><?php echo $data['logout']; ?></a></li>
                  <?php endif; ?>
                    <li><a href="<?php echo LOCALURL ?>"><?php echo $data['Index']; ?></a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo LOCALURL ?>prices"><?php echo $data['Prices']; ?></a></li>
                    <!--li><a href="<?php echo LOCALURL ?>promo">Акції</a></li-->
                    <li class="divider"></li>
                    <li><a href="<?php echo LOCALURL ?>drivers"><?php echo $data['Drivers']; ?></a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo LOCALURL ?>dispatchers"><?php echo $data['Dispatchers']; ?></a></li>
                    <li class="divider"></li>
                    <?php if ((JokerUser::Instance()->logged)): ?>
					            <li><a href="<?php echo LOCALURL ?>clients/dashboard"><?php echo $data['Clients_Cabinet']; ?></a></li>
					            <li><a href="<?php echo LOCALURL ?>drivers/dashboard"><?php echo $data['Drivers_Cabinet']; ?></a></li>
                      <li class="divider"></li>
                    <?php endif; ?>
					<li><a href="<?php echo LOCALURL ?>contacts"><?php echo $data['Contacts']; ?></a></li>
                    <li><a href="<?php echo LOCALURL ?>about"><?php echo $data['About']; ?></a></li>
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
			  <a class="btn-floating btn-large amber darken-4" href="http://taxijoker.com/language.php?local=vn">VN</a>
            </ul>
        </div>
		<?/*php if (!(JokerUser::Instance()->logged)): ?>
        <a class="btn-floating btn-large red darken-4 modal-trigger hide-on-med-and-down" style="position: fixed; top: 245px; right: 24px; z-index: 998;" href="#modal_in">
			<i class="large mdi-action-account-circle"></i>
		</a>
		<?php endif; ?>
		<?php if ((JokerUser::Instance()->logged)): ?>
        <a class="btn-floating btn-large red darken-4 modal-trigger hide-on-med-and-down" style="position: fixed; top: 245px; right: 24px; z-index: 998;" href="../user/signout">
			<i class="large mdi-action-exit-to-app"></i>
		</a>
		<?php endif; */?>
    </nav>
</div>
