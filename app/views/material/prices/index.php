<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#F3AE0D">
    
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
    <link href="http://taxijoker.com/min/plugin.css" type="text/css" rel="stylesheet">
    <link href="http://taxijoker.com/min/custom.css" type="text/css" rel="stylesheet" >
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
    <nav id="nav_f" class="default_color" role="navigation">
        <div class="container">
            <div class="nav-wrapper">
            <a href="http://taxijoker.com/m" id="logo-container" class="brand-logo">Таксі Джокер</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="http://taxijoker.com/m">Головна</a></li>
                    <li><a href="http://taxijoker.com/m/prices">Тарифи</a></li>
                    <li><a href="#!">Водії</a></li>
                    <li><a href="#!">Диспетчери</a></li>
                    <li><a href="http://taxijoker.com/m/contacts">Наші контакти</a></li>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="http://taxijoker.com/m">Головна</a></li>
                    <li class="divider"></li>
                    <li><a href="http://taxijoker.com/m/prices">Тарифи</a></li>
                    <li class="divider"></li>
                    <li><a href="#!">Водії</a></li>
                    <li class="divider"></li>
                    <li><a href="#!">Диспетчери</a></li>
                    <li class="divider"></li>
                    <li><a href="http://taxijoker.com/m/contacts">Наші контакти</a></li>
                </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </div>

    </nav>
</div>

<!--Intro and service-->
<div id="intro" class="section scrollspy">
    <div class="container">
        <div class="row">
            <div  class="col s12">
                <h4 class="center header text_h2"> Lorem ipsum dolor. Sit amet donec lorem elementum posuere lorem adipiscing faucibus. Ut vestibulum amet. Urna ullamcorper wisi. Habitasse faucibus quis. Odio lacus non. Rerum in nam. Fusce orci et. </h4>
            </div>
        </div>
    </div>
</div>

<!--abracadabra-->
<div id="prices" class="section scrollspy">
    <div class="container">
        <h2 class="center header text_b">Тарифна сітка</h2>
        <div class="row center">
        <div class="col s12 m12 l12">
			<ul class="collapsible" data-collapsible="accordion">
				<li>
					<div class="collapsible-header active">Стандарт</div>
					<div class="collapsible-body">
						<table class="striped responsive-table">
							<thead>
								<tr>
									<th data-field="id">Стандарт</th>
									<th data-field="name">В місті</th>
									<th data-field="price">За містом</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Мінімальний проїзд</td>
									<td>20 грн (включає 4 км)</td>
									<td>&nbsp</td>
								</tr>
								<tr>
									<td>Проїзд (за кілометр)</td>
									<td>5 грн</td>
									<td>5.5 грн</td>
								</tr>
								<tr>
									<td>Простій (за годину)</td>
									<td>57 грн</td>
									<td>57 грн</td>
								</tr>
							</tbody>
						</table>
					</div>
			    </li>
				<li>
					<div class="collapsible-header">Економ</div>
					<div class="collapsible-body">
						<table class="striped responsive-table">
							<thead>
								<tr>
									<th data-field="id">Економ</th>
									<th data-field="name">В місті</th>
									<th data-field="price">За містом</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Мінімальний проїзд</td>
									<td>17 грн (включає 4 км)</td>
									<td>&nbsp</td>
								</tr>
								<tr>
									<td>Проїзд (за кілометр)</td>
									<td>4.5 грн</td>
									<td>5 грн</td>
								</tr>
								<tr>
									<td>Простій (за годину)</td>
									<td>39 грн</td>
									<td>39 грн</td>
								</tr>
							</tbody>
						</table>
					</div>
			    </li>
			    <li>
					<div class="collapsible-header">Мінівен</div>
					<div class="collapsible-body">
						<table class="striped responsive-table">
							<thead>
								<tr>
									<th data-field="id">Мінівен</th>
									<th data-field="name">В місті</th>
									<th data-field="price">За містом</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Мінімальний проїзд</td>
									<td>25 грн (включає 4 км)</td>
									<td>&nbsp</td>
								</tr>
								<tr>
									<td>Проїзд (за кілометр)</td>
									<td>6.5 грн</td>
									<td>7.5 грн</td>
								</tr>
								<tr>
									<td>Простій (за годину)</td>
									<td>57 грн</td>
									<td>57 грн</td>
								</tr>
							</tbody>
						</table>
					</div>
			    </li>
			</ul>
		</div>
        </div>
    </div>
</div>

<!--Footer-->
<footer id="contact" class="page-footer default_color scrollspy">
    <div class="container">  
        <div class="row">
            <div class="col l6 s12">
                <form class="col s12" action="contact.php" method="post">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="mdi-action-account-circle prefix white-text"></i>
                            <input id="icon_prefix" name="name" type="text" class="validate white-text">
                            <label for="icon_prefix" class="white-text">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="mdi-communication-email prefix white-text"></i>
                            <input id="icon_email" name="email" type="email" class="validate white-text">
                            <label for="icon_email" class="white-text">Email-id</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="mdi-editor-mode-edit prefix white-text"></i>
                            <textarea id="icon_prefix2" name="message" class="materialize-textarea white-text"></textarea>
                            <label for="icon_prefix2" class="white-text">Message</label>
                        </div>
                        <div class="col offset-s7 s5">
                            <button class="btn waves-effect waves-light red darken-1" type="submit">Submit
                                <i class="mdi-content-send right white-text"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">taxijoker.com</h5>
                <ul>
                    <li><a class="white-text" href="http://taxijoker.com/m/contacts">Contacts</a></li>
                    <li><a class="white-text" href="tel:828">call 828 (callback)</a></li>
                    <li><a class="white-text" href="tel:0352401401">call (0352) 401-401 ternopil</a></li>
                    <li><a class="white-text" href="tel:0332285285">call (0332) 285-285 lutsk</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Localizations</h5>
                 <ul>
                    <li><a class="white-text" href="http://taxijoker.com/language.php?local=te"><?php echo $data['local_te']; ?></a></li>
                    <li><a class="white-text" href="http://taxijoker.com/language.php?local=te"><?php echo $data['local_lu']; ?></a></li>
                    <li><a class="white-text" href="http://taxijoker.com/language.php?lang=eng"><?php echo $data['lang_en']; ?></a></li>
                    <li><a class="white-text" href="http://taxijoker.com/language.php?lang=ua"><?php echo $data['lang_ua']; ?></a></li>
                    <li><a class="white-text" href="http://taxijoker.com/language.php?lang=ru"><?php echo $data['lang_ru']; ?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright default_color">
        <div class="container">
            by Pavlenko Andriy for Taxi Joker
        </div>
    </div>
</footer>


    <!--  Scripts-->
    <script src="http://taxijoker.com/min/plugin.js"></script>
    <script src="http://taxijoker.com/min/custom.js"></script>

    </body>
</html>