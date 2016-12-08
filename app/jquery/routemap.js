var from = $('#map').data('from');
var to = $('#map').data('to');
    $('#map')
      .gmap3({
        address: from,
        zoom: 6,
        mapTypeId : google.maps.MapTypeId.ROADMAP,
		streetViewControl: false
      })
      .route({
        origin:from,
        destination:to,
        travelMode: google.maps.DirectionsTravelMode.DRIVING
      })
	  .directionsrenderer(function (results) {
        if (results) {
          return {
            panel: "#box",
            directions: results
          }
        }
      });