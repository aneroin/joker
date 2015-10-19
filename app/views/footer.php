	<!-- inline scripts -->
	<script>

	    $("#menu-toggle-wrapper").click(function(e) {
	        e.preventDefault();
	        $("#wrapper").toggleClass("toggled")
	        setTimeout( function() {
		        $('#pull-down').css('margin-top', $('#call-form').height()-$('#pull-down-element').height());
	    	},500);
	    });

	    current = $( "#sidebar-wrapper" ).data( "current-page" );
	    $("#"+current).addClass("nav-active");
	    $($("#"+current).data("target")).toggleClass('in');

		$(window).load( function () {
			$('#pull-down').css('margin-top', $('#call-form').height()-$('#pull-down-element').height());
	    });

	    $(window).resize(function () { 
	    	$('#pull-down').css('margin-top', $('#call-form').height()-$('#pull-down-element').height());
		});

		$(document).ready(function (){
			var dark = $('head link#theme').data('theme-dark');
			var light = $('head link#theme').data('theme-light');
			var xsdark = $('head link#theme').data('theme-xsdark');
			var xslight = $('head link#theme').data('theme-xslight');
			var time = new Date();
			var hours = time.getHours();
			if ($(window).width() < 768) {
				if (hours > 8 && hours < 20){ 
	   				$('head link#theme').attr('href',xslight);
	   			} else {
	   				$('head link#theme').attr('href',xsdark);
	   			}
   			} else {
				if (hours > 8 && hours < 20){ 
	   				$('head link#theme').attr('href',light);
	   			} else {
	   				$('head link#theme').attr('href',dark);
   				}
   			}

		});

	</script>
</div>
</div>
</div>
</div>
</div>
</body>
</html>