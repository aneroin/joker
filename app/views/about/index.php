<!--Hero-->
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <?php echo file_get_contents("img/logo.svg"); ?>
    </div>
</div>

<!--infographics-->
<div id="infographics" class="section scrollspy">
    <div class="container">
    <h2 class="center header text_b">інфографіка</h2>
        <div class="row">
            <div  class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-action-room"></i>
                    <h5 class="promo-caption"><?php echo $data['drivers_collective'] ?></h5>
                    <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="mdi-action-assignment"></i>
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
    <div class="parallax"><img src="<?php echo URL; ?>img_m/parallax5.png"></div>
</div>

<!--About company-->
<div id="aboutcom" class="section scrollspy">
    <div class="container">
        <div class="row">
            <div  class="col s12"> 
				<h5 class="center text_h5 text_distribute">
				<?php for($a=0; $a<6; $a++): ?>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes.
				<?php endfor; ?>
				</h5>				
            </div>
        </div>
    </div>
</div>

<!--Parallax-->
<div class="parallax-container">
    <div class="parallax"><img src="<?php echo URL; ?>img_m/parallax4.png"></div>
</div>

<!--About cities-->
<div id="aboutcit" class="section scrollspy">
    <div class="container">
        <div class="row">
            <div  class="col s12"> 
				<h5 class="center text_h5 text_distribute">
				<?php for($a=0; $a<7; $a++): ?>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes.
				<?php endfor; ?>
				</h5>	
            </div>
        </div>
    </div>
</div>

<!--Parallax-->
<div class="parallax-container">
    <div class="parallax"><img src="<?php echo URL; ?>img_m/parallax6.png"></div>
</div>

<!--About perspectives-->
<div id="aboutper" class="section scrollspy">
    <div class="container">
        <div class="row">
            <div  class="col s12"> 
				<h5 class="center text_h5 text_distribute">
				<?php for($a=0; $a<4; $a++): ?>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes.
				<?php endfor; ?>
				</h5>	
            </div>
        </div>
    </div>
</div>