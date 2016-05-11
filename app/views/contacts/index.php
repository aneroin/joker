<link rel="stylesheet" href="http://openlayers.org/en/v3.14.2/css/ol.css" type="text/css">
<script src="http://openlayers.org/en/v3.14.2/build/ol.js" type="text/javascript"></script>

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

<div id="map" class="section scrollspy">
    <div class="container">
        <div class="row center">
            <div class="card">
                <div class="card-content cardmap" id="cardmap" style="padding:0; min-height: 400px;">
                <div id="map" class="map"></div>
                </div>
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

<script type="text/javascript">
    var iconFeatures=[];
    var iconFeature = new ol.Feature({
      geometry: new ol.geom.Point(ol.proj.transform([25.64699443836212, 49.54958589913483], 'EPSG:4326', 'EPSG:3857')),
      name: 'офіс таксі Джокер'
    });
    iconFeatures.push(iconFeature);

    var vectorSource = new ol.source.Vector({
      features: iconFeatures
    });

    var iconStyle = new ol.style.Style({
      image: new ol.style.Icon(/** @type {olx.style.IconOptions} */ ({
        anchor: [0.5, 60],
        anchorXUnits: 'fraction',
        anchorYUnits: 'pixels',
        opacity: 1,
        src: 'http://taxijoker.com/img_m/marker_office.png'
      }))
    });

    var vectorLayer = new ol.layer.Vector({
      source: vectorSource,
      style: iconStyle,
      position: ol.proj.transform([25.64699443836212, 49.54968589913483], 'EPSG:4326', 'EPSG:3857')
    });

    var map = new ol.Map({
        target: 'cardmap',
        layers: [
          new ol.layer.Tile({
                source: new ol.source.OSM(),
                name: 'OpenStreetMap'
            }), vectorLayer
        ],
        view: new ol.View({
            center: ol.proj.transform([25.64629443836212, 49.54968589913483], 'EPSG:4326', 'EPSG:3857'),
            zoom: 15
        })
    });

    </script>