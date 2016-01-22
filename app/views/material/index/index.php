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
    <div class="center">
        <a class="btn waves-effect waves-light deep-orange darken-2" id="submit-call-taxi" href="#calltaxi"> <?php echo $data['main-btn'] ?> </a>
    </div>
</div>

<!--Intro and service-->
<div id="intro" class="section scrollspy">
    <div class="container">
        <div class="row">
            <div  class="col s12">
                <h4 class="center header text_h2"> <!--?php echo $data['accent'] ?--> Lorem ipsum dolor. Sit amet donec lorem elementum posuere lorem adipiscing faucibus. Ut vestibulum amet. Urna ullamcorper wisi. Habitasse faucibus quis. Odio lacus non. Rerum in nam. Fusce orci et.</h4>
            </div>
<!--
            <div  class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-image-flash-on"></i>
                    <h5 class="promo-caption">Speeds up development</h5>
                    <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-social-group"></i>
                    <h5 class="promo-caption">User Experience Focused</h5>
                    <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-hardware-desktop-windows"></i>
                    <h5 class="promo-caption">Fully responsive</h5>
                    <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                </div>
            </div>
-->
        </div>
    </div>
</div>

<!--Parallax-->
<div class="parallax-container">
    <div class="parallax"><img src="img_m/parallax1.png"></div>
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
        <h2 class="center header text_b">Викликати таксі</h2>
        <div class="row">
        <div class="col s12 m8 l6 offset-m2 offset-l3" id="call-form">
        <form  role="form" id="f_online_order" class="form">

        <div class="form-group" id="phone-group">
            <div class="row">
            <div class="col s12 m12">
            <label for="phone"><?php echo $data['phone'] ?>:</label>
            <input type="text" class="form-control main" id="phone" placeholder="380"
                onblur="this.value=this.value.toUpperCase()" maxlength=12>
            </div>
            </div>
        </div>

        <div class="form-group" id="address-group">
            <div class="row">
            <div class="col s12 m6">
                <label for="sattlement"><?php echo $data['sattlement'] ?>:</label>
                <input type="text" class="form-control main" id="sattlement"
                    onblur="this.value=this.value.toUpperCase()" maxlength=20>
            </div>
            <div class="col s12 m6">
                <label for="street"><?php echo $data['street'] ?>:</label>
                <input type="text" class="form-control main" id="street" 
                    onblur="this.value=this.value.toUpperCase()" maxlength=50>
            </div>
            </div>
            <div class="row">
            <div class="col s12 m6">
                <label for="home"><?php echo $data['home'] ?>:</label>
                <input type="text" class="form-control main" id="home"
                    onblur="this.value=this.value.toUpperCase()" maxlength=12>
            </div>
            <div class="col s12 m6">
                <label for="entrance"><?php echo $data['entrance'] ?>:</label>
                <input type="text" class="form-control main" id="entrance"
                    onblur="this.value=this.value.toUpperCase()" maxlength=5>
            </div>
            </div>
        </div>

        <div class="form-group" id="message-group">
            <div class="row">
            <div class="col s12 m12">
            <label for="message"><?php echo $data['message'] ?>:</label>
            <input type="text" class="form-control main" id="message"
                onblur="this.value=this.value.toUpperCase()" maxlength=50>
            </div>
            </div>
        </div>

        <div class="form-group" id="key-group">
            <div class="row">
            <div class="col s12 m12">
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
            <button class="btn waves-effect waves-light yellow darken-4 right" id="submit-call-taxi"><?php echo $data['main-btn'] ?></button>
        </div>
    </form>
    </div>
    </div>


    </div>
</div>

<!--Parallax-->
<div class="parallax-container">
    <div class="parallax"><img src="img_m/parallax2.png"></div>
</div>

<!--Team-->
<div class="section scrollspy" id="team">
    <div class="container">
        <h2 class="center header text_b"> Наші працівники </h2>
        <div class="row">
            <div class="col s12 m6 l4 offset-l2">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img_m/driver.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Водії<br/>
                            <small><em><a class="grey-text text-darken-1" href="#"><?php echo $data['driver-info']; ?></a></em></small></span>
                    </div>
                    <div class="card-action">
                        <a class="red-text text-darken-1" href="http://taxijoker.com/drivers/join"> <?php echo $data['driver-info-action']; ?> </a>
                    </div>
                </div>
            </div>
            <div class="col s12 l4 m6">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img_m/operator.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Диспетчери<br/>
                            <small><em><a class="grey-text text-darken-1" href="#"><?php echo $data['dispatcher-info']; ?></a></em></small></span>
                    </div>
                    <div class="card-action">
                        <a class="red-text text-darken-1" href="http://taxijoker.com/dispatchers/join"> <?php echo $data['dispatcher-info-action']; ?> </a>
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
                        <span class="card-title grey-text text-darken-4">Android<br/>
                            <small><em>Play Market</em></small></span>
                    </div>
                    <div class="card-action">
                        <a class="red-text text-darken-1" href=<?php echo $data['smartphone-pm-link'];?> target="_blank"><?php echo $data['smartphone-row-action'];?></a>
                    </div>
                </div>
            </div>
            <div class="col s12 l4 m6">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <?php echo file_get_contents(URL."img/appstore.svg"); ?>
                    </div>
                    <div class="card-content">
                        <span class="card-title grey-text text-darken-4">iOS<br/>
                            <small><em>App Store</em></small></span>
                    </div>
                    <div class="card-action">
                        <a class="red-text text-darken-1" href=<?php echo $data['smartphone-as-link'];?> target="_blank"><?php echo $data['smartphone-row-action'];?></a>
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
    <script src="http://taxijoker.com/min/geo.js"></script>

    </body>
</html>
