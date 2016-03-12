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
            <input type="text" class="form-control main" id="message"
                 maxlength=50>
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
                            <?php echo file_get_contents("img/driver.svg"); ?>
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
                            <?php echo file_get_contents("img/driver.svg"); ?>
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
                        <?php echo file_get_contents("img/playmarket.svg"); ?>
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
                        <?php echo file_get_contents("img/appstore.svg"); ?>
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