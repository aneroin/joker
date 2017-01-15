var tid = $("body").data("idtaxi");
/*
* PRICE TYPES
* ppkmin - price per kilometer in city
* ppkmout - price per kilometer outside city
* minkm - minimum fare km
* minp - minimum fare price
*/
/*
*TERNOPIL 42
*/
if (tid==42){
var priceStandart = {
	ppkmin : 6.0,
	ppkmout : 7.0,
	minkm: 4.16,
	minp: 25
}

var priceEconomic = {
	ppkmin : 5.5,
	ppkmout : 6.0,
	minkm: 4.0,
	minp: 22
}

var priceMinivan = {
	ppkmin : 7.0,
	ppkmout : 8.0,
	minkm: 4,
	minp: 45
}

var priceCargo = {
	ppkmin : 7.0,
	ppkmout : 8.0,
	minkm: 4,
	minp: 75
}
}

if (tid==329){
var priceStandart = {
	ppkmin : 4.5,
	ppkmout : 6.0,
	minkm: 1.5,
	minp: 20
}

var priceMinivan = {
	ppkmin : 6.5,
	ppkmout : 8.0,
	minkm: 1.5,
	minp: 30
}

var priceCargo = {
	ppkmin : 6.5,
	ppkmout : 8.0,
	minkm: 1,
	minp: 30
}
}

if (tid==331){
var priceStandart = {
	ppkmin : 6.0,
	ppkmout : 8.0,
	minkm: 2.5,
	minp: 25
}

var priceMinivan = {
	ppkmin : 8.0,
	ppkmout : 10.0,
	minkm: 3,
	minp: 35
}
}

var priceCurrent = priceStandart;

var poi = $("body").data("city");
var lang = $("body").data("lang");

/*
*PRICE SELECTOR DROPDOWN
*
*/
var selectors = [];
if (tid==42){
	selectors.push('<li><a class="priceOption" data-type="pStandart">стандарт</a></li>');
	selectors.push('<li><a class="priceOption" data-type="pEconomic">економ</a></li>');
	selectors.push('<li><a class="priceOption" data-type="pMinivan">мінівен</a></li>');
	selectors.push('<li><a class="priceOption" data-type="pCargo">вантаж</a></li>');
}
if (tid==329){
	selectors.push('<li><a class="priceOption" data-type="pStandart">стандарт</a></li>');
	selectors.push('<li><a class="priceOption" data-type="pMinivan">мінівен</a></li>');
	selectors.push('<li><a class="priceOption" data-type="pCargo">вантаж</a></li>');
}
if (tid==331){
	selectors.push('<li><a class="priceOption" data-type="pStandart">стандарт</a></li>');
	selectors.push('<li><a class="priceOption" data-type="pMinivan">мінівен</a></li>');
}

$("#pricesDropdown").append(selectors.join(''));

/*
*CITY POLYGON
*defines polygon of in_city / out_city
*/
var cityCoords = [];

if (tid==42){
	cityCoords = [
    {lat: 49.54638, lng: 25.5433},
    {lat: 49.53719, lng: 25.54501},
    {lat: 49.52663, lng: 25.56759},
	{lat: 49.52213, lng: 25.60291},
	{lat: 49.528, lng: 25.62552},
	{lat: 49.54432, lng: 25.64887},
	{lat: 49.56598, lng: 25.65642},
	{lat: 49.582, lng: 25.63961},
	{lat: 49.60113, lng: 25.59912},
	{lat: 49.60512, lng: 25.53529},
	{lat: 49.59397, lng: 25.51613},
	{lat: 49.56008, lng: 25.54785}
  ];
}

if (tid==329){
	cityCoords = [
    {lat: 49.54638, lng: 25.5433},
    {lat: 49.53719, lng: 25.54501},
    {lat: 49.52663, lng: 25.56759},
	{lat: 49.52213, lng: 25.60291},
	{lat: 49.528, lng: 25.62552},
	{lat: 49.54432, lng: 25.64887},
	{lat: 49.56598, lng: 25.65642},
	{lat: 49.582, lng: 25.63961},
	{lat: 49.60113, lng: 25.59912},
	{lat: 49.60512, lng: 25.53529},
	{lat: 49.59397, lng: 25.51613},
	{lat: 49.56008, lng: 25.54785}
  ];
}

if (tid==331){
	cityCoords = [
    {lat: 49.54638, lng: 25.5433},
    {lat: 49.53719, lng: 25.54501},
    {lat: 49.52663, lng: 25.56759},
	{lat: 49.52213, lng: 25.60291},
	{lat: 49.528, lng: 25.62552},
	{lat: 49.54432, lng: 25.64887},
	{lat: 49.56598, lng: 25.65642},
	{lat: 49.582, lng: 25.63961},
	{lat: 49.60113, lng: 25.59912},
	{lat: 49.60512, lng: 25.53529},
	{lat: 49.59397, lng: 25.51613},
	{lat: 49.56008, lng: 25.54785}
  ];
}

var cityPolygon = new google.maps.Polygon({paths: cityCoords});

var markerspool = [];
var pathpool = [];
var line;
resetPrice();

$("#from").blur(function() {
  	if (markerspool[1])
		geocodeAddress($("#from").val(),markerspool[1]);
});

$("#to").blur(function() {
	if (markerspool[0])
		geocodeAddress($("#to").val(),markerspool[0]);
});

$(".priceOption").click(function() {
	console.log($(this).text());
	console.log($(this).data("type"));
	$("#pricesDropdownHeader").text($(this).text());
	var type = $(this).data("type");
	switch(type) {
    case "pStandart":
        priceCurrent = priceStandart;
        break;
    case "pEconomic":
        priceCurrent = priceEconomic;
        break;
	case "pMinivan":
        priceCurrent = priceMinivan;
        break;
	case "pCargo":
        priceCurrent = priceSmallCargo;
        break;
    default:
        priceCurrent = priceStandart;
	}
});

function resetPrice(){
	if (markerspool)
	markerspool.forEach(function (marker) {
    	marker.setMap(null);
		marker = null;
    });
	if (pathpool){
		pathpool = null;
		pathpool = [];
		if (line)
		line.setMap(null);
		line = null;
    };

	$("#from").val($("#from").data("default"));
	$("#to").val($("#to").data("default"));

	$('#map')
	.gmap3({
		address: poi,
		zoom: 13,
		mapTypeId : google.maps.MapTypeId.ROADMAP
	})
	.marker([{
			address: poi,
			draggable: true,
			label: $("#to").data("default").charAt(0).toUpperCase(),
			id: 772,
			zIndex: 1
			},
			{
			address: poi,
			draggable: true,
			label: $("#from").data("default").charAt(0).toUpperCase(),
			id: 771,
			zIndex: 2
			}]
	)
	.then(function (markers) {
			markers.forEach(function (marker) {
			  markerspool.push(marker);
			});
	})
	.on(
		'dragend',
		function (marker, event) {
		  if (marker.id==771) {
			geocodePosition(marker.position,$("#from"));
		  } else if (marker.id==772) {
			geocodePosition(marker.position,$("#to"));
		  }
			console.log("dragend");
		}
	);
	$('#price').text("");
}

function calculatePrice(){
	if (markerspool[1])
		fromcoord = markerspool[1].getPosition();
	if (markerspool[0])
		tocoord = markerspool[0].getPosition();

	if (markerspool){
		markerspool.forEach(function (marker) {
			marker.setMap(null);
			marker = null;
		});
		markerspool = [];
	}
	if (pathpool){
		pathpool = null;
		pathpool = [];
		if (line)
		line.setMap(null);
		line = null;
    }

	var pricePerKmIn = priceCurrent.ppkmin;
	var pricePerKmOut = priceCurrent.ppkmout;
	var minimumKm = priceCurrent.minkm;
	var minimumPrice = priceCurrent.minp;

	var totalDistanceIn = 0;
	var totalDistanceOut = 0;
	var priceTotal = 0;

	var from = $("#from").val();
	var to = $("#to").val();

	$('#map')
	.gmap3({
		address: from,
		zoom: 6,
		mapTypeId : google.maps.MapTypeId.ROADMAP,
		streetViewControl: false,
		clear: {id: 771}
	})
	.then({
		function (result) {
			if (result) {
				result.forEach(function(item, i, arr){
					item.setMap(null);
				});
			}
		}
	})
	.route({
		origin:fromcoord,
		destination:tocoord,
		travelMode: google.maps.DirectionsTravelMode.DRIVING
	})
	.then(function (results) {
		if (results) {
			console.log(results);
			if (results.status == "OK"){
				var legs = results.routes[0].legs;
				legs.forEach(function (leg) {
					leg.steps.forEach(function (step) {
						step.path.forEach(function (point) {
							pathpool.push(point);
						});
						if (google.maps.geometry.poly.containsLocation(step.end_location,cityPolygon)&&google.maps.geometry.poly.containsLocation(step.start_location,cityPolygon)){
							totalDistanceIn += (step.distance.value / 1000);
						} else {
							totalDistanceOut += (step.distance.value / 1000);
						}
					});
				});
			} else {
				console.log(results.status);
			}
			if (totalDistanceIn<=minimumKm && totalDistanceOut==0) {
				priceTotal = minimumPrice;
			} else {
				priceTotal = minimumPrice
							+ (pricePerKmIn * (totalDistanceIn>minimumKm?totalDistanceIn-minimumKm:0))
							+ (pricePerKmOut * totalDistanceOut);
			}
			console.log(totalDistanceIn);
			console.log(totalDistanceOut);
			console.log(priceTotal);
			console.log(pathpool);
			priceTotal = priceTotal.toFixed(2);
			$('#price').text($('#price').data("estimate") + "  " + priceTotal + "  " + $('#price').data("currency"));
		}

	})
	.polyline({
		strokeColor: "#FFAA00",
        strokeOpacity: 1.0,
        strokeWeight: 4,
        path: pathpool
	})
	.then(function(poly){
		line = poly;
	});
}

function geocodePosition(pos, input) {
  var geocoder = geocoder = new google.maps.Geocoder();
  geocoder.geocode({
    latLng: pos
  }, function(responses) {
    if (responses && responses.length > 0) {
		console.log("geocoded position");
		console.log(responses[0]);
		var addr = responses[0].formatted_address;
        input.val(addr);
    } else {
        input.val("Тернопіль");
    }
  });
}

function geocodeAddress(addr, marker) {
  var geocoder = geocoder = new google.maps.Geocoder();
  geocoder.geocode({
    address: addr
  }, function(responses) {
    if (responses && responses.length > 0) {
		console.log("geocoded address");
		console.log(responses[0]);
		var pos = responses[0].geometry.location;
        marker.setPosition(pos);
    }
  });
}
