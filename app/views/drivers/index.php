<!--Banner-->
<div class="section no-pad-bot" id="head-banner">
    <img src="<?php echo URL; ?>img_m/car.png"></img>
</div>

<!--infographics-->
<div id="infographics" class="section scrollspy">
    <div class="container">
    <h2 class="center header text_b"><?php echo $data['accent'] ?></h2>
        <div class="row">
            <div  class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-social-group"></i>
                    <h5 class="promo-caption"><?php echo $data['drivers_collective'] ?></h5>
                    <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-action-alarm-on"></i>
                    <h5 class="promo-caption"><?php echo $data['drivers_time'] ?></h5>
                    <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-action-credit-card"></i>
                    <h5 class="promo-caption"><?php echo $data['drivers_income'] ?></h5>
                    <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                </div>
            </div>
        </div>
    </div>
</div> 

<!--Parallax-->
<div class="parallax-container">
        <div class="btn-rel-container">
            <a class="btn btn-large waves-effect waves-light" href="/drivers/join"> <i class="mdi-content-content-paste"></i> <?php echo $data['vacancy_button'] ?> </a>
            <a class="btn btn-large waves-effect waves-light" href="#"> <i class="mdi-action-question-answer"></i> <?php echo $data['faq_button'] ?> </a>
        </div>
    <div class="parallax">
        <img src="<?php echo URL; ?>img_m/parallax2.png">
    </div>
</div>

<!--Additional info-->
<div id="addinfo" class="section scrollspy">
    <div class="container">
        <div class="row">
            <div  class="col s12">
                <h4 class="center header text_h2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes.</h4>
            </div>
        </div>
    </div>
</div>