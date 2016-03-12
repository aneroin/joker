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
            <a href="http://taxijoker.com/m" id="logo-container" class="brand-logo hide-on-large-only">Таксі Джокер</a>
            <a href="http://taxijoker.com/m" id="logo-container" class="brand-logo show-on-large"><?php echo file_get_contents(URL."img/logo.svg"); ?></a>
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

<!--Hero-->
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <h1 class="text_h center header cd-headline letters type">
            <span>Таксі джокер - це </span> 
            <span class="cd-words-wrapper waiting">
                <b class="is-visible">якість</b>
                <b>надійність</b>
                <b>простота</b>
            </span>
        </h1>
    </div>
    <div class="row center">
        <a class="btn waves-effect waves-light" id="submit-call-taxi" href="#calltaxi"> <i class="mdi-maps-local-taxi"></i> <?php echo $data['main-btn'] ?> </a>
    </div>
    <div class="row center">
        <a class="btn waves-effect waves-light hide-on-med-and-up" id="submit-get-app" href="#apps"> <i class="mdi-communication-stay-current-portrait"></i> додаток </a>
    </div>
</div>

<!--Intro and service-->
<div id="intro" class="section scrollspy">
    <div class="container">
        <div class="row">
            <div  class="col s12">
                <h4 class="center header text_h2"> <?php echo $data['accent'] ?> <!--Lorem ipsum dolor. Sit amet donec lorem elementum posuere lorem adipiscing faucibus. Ut vestibulum amet. Urna ullamcorper wisi. Habitasse faucibus quis. Odio lacus non. Rerum in nam. Fusce orci et.</h4>-->
            </div>
        </div>
    </div>
</div>

<!--Parallax-->
<div class="parallax-container">
    <div class="parallax"><img src="<?php echo URL; ?>img_m/parallax1.png"></div>
</div>

<!--abracadabra-->
<!--div id="prices" class="section scrollspy">
    <div class="container">
        <h2 class="center header text_b">Основні тарифи</h2>
        <div class="row center">
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-avatar waves-effect waves-block waves-light">
                        <img class="activator" src="img_m/economic.png">
                    </div>
                    <div class="card-content">
                        <p class="card-title activator grey-text text-darken-4">Економ</p>
                        <p class="grey-text text-darken-2">4 км</p>
                        <p class="grey-text text-darken-2">17 грн</p>
                    </div>
                    <div class="card-reveal">
                        <p class="card-title grey-text text-darken-4">проїзд за км</p>
                        <p class="grey-text text-darken-2">в місті 4.5 грн</p>
                        <p class="grey-text text-darken-2">за містом 5 грн</p>
                        <p class="card-title grey-text text-darken-4">простій за год</p>
                        <p class="grey-text text-darken-2">39 грн</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-avatar waves-effect waves-block waves-light">
                        <img class="activator" src="img_m/standart.png">
                    </div>
                    <div class="card-content">
                        <p class="card-title activator grey-text text-darken-4">Стандарт</p>
                        <p class="grey-text text-darken-2">4 км</p>
                        <p class="grey-text text-darken-2">20 грн</p>
                    </div>
                    <div class="card-reveal">
                        <p class="card-title grey-text text-darken-4">проїзд за км</p>
                        <p class="grey-text text-darken-2">в місті 5 грн</p>
                        <p class="grey-text text-darken-2">за містом 5.5 грн</p>
                        <p class="card-title grey-text text-darken-4">простій за год</p>
                        <p class="grey-text text-darken-2">57 грн</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-avatar waves-effect waves-block waves-light">
                        <img class="activator" src="img_m/minivan.png">
                    </div>
                    <div class="card-content">
                        <p class="card-title activator grey-text text-darken-4">Мінівен</p>
                        <p class="grey-text text-darken-2">4 км</p>
                        <p class="grey-text text-darken-2">25 грн</p>
                    </div>
                    <div class="card-reveal">
                        <p class="card-title grey-text text-darken-4">проїзд за км</p>
                        <p class="grey-text text-darken-2">в місті 6.5 грн</p>
                        <p class="grey-text text-darken-2">за містом 7.5 грн</p>
                        <p class="card-title grey-text text-darken-4">простій за год</p>
                        <p class="grey-text text-darken-2">57 грн</p>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <button class="btn waves-effect waves-light yellow darken-4" onclick="document.location.href='http://taxijoker.com/m/prices'">> Детальніше </button>
            </div>
        </div>
    </div>
</div-->

<!--CallTaxi-->
<div class="section scrollspy" id="calltaxi">
    <div class="container">
        <h2 class="center header text_b"><?php echo $data['main-btn'] ?></h2>
        <div class="row">
        <div class="col s12 m8 l6 offset-m2 offset-l3" id="call-form" data-tid=<?php echo $data['id_taxi'] ?>>
        <form  role="form" id="f_online_order" class="form callform">

        <div class="form-group" id="phone-group">
            <div class="row">
            <div class="input-field col s12 m12">
            <label for="phone"><?php echo $data['phone'] ?> (380XXYYYYYYY):</label>
            <input type="text" class="form-control main" id="phone"
                 maxlength=12>
            </div>
            </div>
        </div>

        <div class="form-group" id="address-group">
            <div class="row">
            <div class="input-field col s12 m6">
                <label for="sattlement"><?php echo $data['sattlement'] ?>:</label>
                <input type="text" class="form-control main" id="sattlement"
                     value=<?php echo $data['call_city'] ?> maxlength=20>
            </div>
            <div class="input-field col s12 m6">
                <label for="street"><?php echo $data['street'] ?>:</label>
                <input type="text" class="form-control main" id="street" 
                     maxlength=50>
            </div>
            </div>
            <div class="row">
            <div class="input-field col s12 m6">
                <label for="home"><?php echo $data['home'] ?>:</label>
                <input type="text" class="form-control main" id="home"
                     maxlength=12>
            </div>
            <div class="input-field col s12 m6">
                <label for="entrance"><?php echo $data['entrance'] ?>:</label>
                <input type="text" class="form-control main" id="entrance"
                     maxlength=5>
            </div>
            </div>
        </div>

        <div class="form-group" id="message-group">
            <div class="row">
            <div class="input-field col s12 m12">
            <label for="message"><?php echo $data['message'] ?>:</label>
            <textarea class="materialize-textarea main" id="message"
                 maxlength=50></textarea>
            </div>
            </div>
        </div>

        <div class="form-group" id="key-group">
            <div class="row">
            <div class="input-field col s12 m12">
                <label for="key"><?php echo $data['key'] ?>:
                    <span id='captcha'>
                        <img src='http://taxijoker.dyndns.org/taxi/captcha.php' >
                    </span>
                </label>
                <input type="text" class="form-control main" id="key" maxlength=4>
            </div>
            </div>
        </div>
        <div class="form-group" id="submit-group">
            <button type="button" class="btn waves-effect waves-light right" id="submit-call-taxi" onclick="send_new_order();"><?php echo $data['main-btn'] ?></button>
        </div>
    </form>
    </div>
    </div>


    </div>
</div>

<!--Parallax-->
<div class="parallax-container">
    <div class="parallax"><img src="<?php echo URL; ?>img_m/parallax2.png"></div>
</div>

<!--Team-->
<div class="section scrollspy" id="team">
    <div class="container">
        <h2 class="center header text_b"> Наші працівники </h2>
        <div class="row">
            <div class="col s12 m6 l4 offset-l2">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <div class="activator waves-effect waves-block waves-light">
                            <?php echo file_get_contents(URL."img/driver.svg"); ?>
                        </div>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator"><?php echo $data['Drivers']; ?><br/>
                            <small><em><a class="grey-text text-darken-1" href="#"><?php echo $data['driver-info']; ?></a></em></small></span>
                    </div>
                    <div class="card-action">
                        <a href="http://taxijoker.com/drivers/join"> <?php echo $data['driver-info-action']; ?> </a>
                    </div>
                </div>
            </div>
            <div class="col s12 l4 m6">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <div class="activator waves-effect waves-block waves-light">
                            <?php echo file_get_contents(URL."img/driver.svg"); ?>
                        </div>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator"><?php echo $data['Dispatchers']; ?><br/>
                            <small><em><a class="grey-text text-darken-1" href="#"><?php echo $data['dispatcher-info']; ?></a></em></small></span>
                    </div>
                    <div class="card-action">
                        <a href="http://taxijoker.com/dispatchers/join"> <?php echo $data['dispatcher-info-action']; ?> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Apps-->
<div class="section scrollspy" id="apps">
    <div class="container">
        <h2 class="center header text_b"> Мобільне таксі </h2>
        <div class="row">
            <div class="col s12 m6 l4 offset-l2">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <?php echo file_get_contents(URL."img/playmarket.svg"); ?>
                    </div>
                    <div class="card-content">
                        <span class="card-title">Android<br/>
                            <small><em>Play Market</em></small></span>
                    </div>
                    <div class="card-action">
                        <a href=<?php echo $data['smartphone-pm-link'];?> target="_blank"><?php echo $data['smartphone-row-action'];?></a>
                    </div>
                </div>
            </div>
            <div class="col s12 l4 m6">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <?php echo file_get_contents(URL."img/appstore.svg"); ?>
                    </div>
                    <div class="card-content">
                        <span class="card-title">iOS<br/>
                            <small><em>App Store</em></small></span>
                    </div>
                    <div class="card-action">
                        <a href=<?php echo $data['smartphone-as-link'];?> target="_blank"><?php echo $data['smartphone-row-action'];?></a>
                    </div>
                </div>
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
    

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
    <script src="http://taxijoker.com/min/typeahead.js"></script>
    <script src="http://taxijoker.com/min/addresspicker.js"></script>
    
    <script src="http://taxijoker.com/jquery/formprocess.js"></script>
    </body>
</html>
