<!--Banner-->
<div class="section no-pad-bot" id="head-banner">
    <img src="<?php echo URL; ?>img_m/calc.png"></img>
</div>

<!--abracadabra-->
<div id="prices" class="section scrollspy">
    <div class="container">
        <h2 class="center header text_b">Тарифна сітка</h2>
        <div class="row center">
        <div class="col s12 m12 l12">
			<ul class="collapsible popout" data-collapsible="accordion">
                <?php echo $data['table'];?>
			</ul>
		</div>
        </div>
    </div>
</div>
	
<!--Intro and service-->
<div id="intro" class="section scrollspy">
    <div class="container">
        <div class="row">
            <div  class="col s12"> 
                <h5 class="center text_h5 text_distribute">
                <?php for($a=0; $a<3; $a++): ?>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes.
                <?php endfor; ?>
                </h5>   
            </div>
        </div>
    </div>
</div>