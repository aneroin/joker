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