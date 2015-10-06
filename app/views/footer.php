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

		$(window).load( function () {
			$('#pull-down').css('margin-top', $('#call-form').height()-$('#pull-down-element').height());
	    });

	    $(window).resize(function () { 
	    	$('#pull-down').css('margin-top', $('#call-form').height()-$('#pull-down-element').height());
		});

	</script>
</div>
</div>
</div>
</div>
</div>
</body>
</html>