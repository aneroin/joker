<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#F3AE0D">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
            <a href="http://taxijoker.com/m" id="logo-container" class="brand-logo">Таксі Джокер</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="http://taxijoker.com/m"><?php echo $data['Index']; ?></a></li>
                    <li><a href="http://taxijoker.com/mprices"><?php echo $data['Prices']; ?></a></li>
                    <li><a href="http://taxijoker.com/mdrivers"><?php echo $data['Drivers']; ?></a></li>
                    <li><a href="#!"><?php echo $data['Dispatchers']; ?></a></li>
                    <li><a href="http://taxijoker.com/mcontacts"><?php echo $data['Contacts']; ?></a></li>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="http://taxijoker.com/m"><?php echo $data['Index']; ?></a></li>
                    <li class="divider"></li>
                    <li><a href="http://taxijoker.com/mprices"><?php echo $data['Prices']; ?></a></li>
                    <li class="divider"></li>
                    <li><a href="http://taxijoker.com/mdrivers"><?php echo $data['Drivers']; ?></a></li>
                    <li class="divider"></li>
                    <li><a href="#!"><?php echo $data['Dispatchers']; ?></a></li>
                    <li class="divider"></li>
                    <li><a href="http://taxijoker.com/mcontacts"><?php echo $data['Contacts']; ?></a></li>
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
        <h2 class="center header text_b">Контакти</h2>
        <div class="row center">
            <?php 
            foreach ($data['contacts'] as $row) {
                echo "<div class=\"col s12 m4 l3\"><div class=\"card\"><div class=\"card-content\">";
                echo $row;
                echo "</div></div></div>";
            }
            ?>
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
                    <li><a class="white-text" href="tel:828">call 828 (callback)</a></li>
                    <li><a class="white-text" href="tel:0352401401">call (0352) 401-401 ternopil</a></li>
                    <li><a class="white-text" href="tel:0332285285">call (0332) 285-285 lutsk</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Localizations</h5>
                 <ul>
                    <li><a class="white-text" href="http://taxijoker.com/language.php?local=te"><?php echo $data['local_te']; ?></a></li>
                    <li><a class="white-text" href="http://taxijoker.com/language.php?local=lu"><?php echo $data['local_lu']; ?></a></li>
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
    <script src="http://taxijoker.com/min/preloader.js"></script>
    <script src="http://taxijoker.com/min/custom.js"></script>
    <script src="http://taxijoker.com/min/geo.js"></script>
    <script src="http://taxijoker.com/jquery/formprocess.js"></script>
    </body>
</html>