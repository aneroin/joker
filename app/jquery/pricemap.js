var tid = $("body").data("idtaxi");
/*
* PRICE TYPES
* ppkmin - price per kilometer in city
* ppkmout - price per kilometer outside city
* minkm - minimum fare km
* minp - minimum fare price
*/

var priceCurrent = taxi_prices[0];

var poi = $("body").data("city");
var lang = $("body").data("lang");

/*
*PRICE SELECTOR DROPDOWN
*
*/
var selectors = [];
taxi_prices.forEach(function(item, i, arr) {
		selectors.push('<li><a class="priceOption" data-index="'+i+'">'+item.name+'</a></li>');
});

$("#pricesDropdown").append(selectors.join(''));

/*
*CITY POLYGON
*defines boundary of the city to manage prices
*/
var wkt = new Wkt.Wkt();
wkt.read(taxi_location.polygon);
var cityPolygon = wkt.toObject();

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
	console.log($(this).data("index"));
	$("#pricesDropdownHeader").text($(this).text());
	var index = $(this).data("index");
	priceCurrent = taxi_prices[index];
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


	var pricePerKmIn = Number(priceCurrent.perkm_in);
	var pricePerKmOut = Number(priceCurrent.perkm_out);
	var minimumKm = Number(priceCurrent.mindistance_in);
	var minimumPrice = Number(priceCurrent.minprice_in);

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
