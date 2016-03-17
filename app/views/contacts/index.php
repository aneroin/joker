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