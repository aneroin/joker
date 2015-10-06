	<!-- inline scripts -->
	<script>
	    $("#menu-toggle-wrapper").click(function(e) {
	        e.preventDefault();
	        $("#wrapper").toggleClass("toggled");
	    });

	    current = $( "#sidebar-wrapper" ).data( "current-page" );
	    $("#"+current).addClass("nav-active");

	</script>
</div>
</div>
</div>
</div>
</div>
</body>
</html>