	<!-- inline scripts -->
	<script>

	    $("#menu-toggle-wrapper").click(function(e) {
	        e.preventDefault();
	        $("#wrapper").toggleClass("toggled")
	        setTimeout( function() {
		        $('#pull-down').css('margin-top', $('#call-form').height()-$('#pull-down-element').height());
	    	},500);
	    });

	    var current = $( "#sidebar-wrapper" ).data( "current-page" );
	    var actives = current.split("/");
	    function highlight(element, index, array) {
	    	$("#"+element).addClass("nav-active");
	    	if (index==0){
		    	$($("#"+element).data("target")).toggleClass('in');
		    }
	    }

	    actives.forEach(highlight);

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
				<div id="appbar-wrapper">
				<div class="container-fluid">

				<div class="row">
			 		<div class="dropdown col-xs-5 col-md-12">
						<button class="btn btn-yellow dropdown-toggle fill_h" type="button" data-toggle="dropdown">
						<span class="selection"><?php echo $data['cur_city']; ?></span>
						<span class="caret"></span></button>
						<ul class="dropdown-menu col-xs-12">
							<li class="dropdown-menu-item"><a href="<?php echo URL; ?>language.php?local=te" ><?php echo $data['local_te']; ?></a></li>
							<li class="dropdown-menu-item"><a href="<?php echo URL; ?>language.php?local=lu" ><?php echo $data['local_lu']; ?></a></li>
						</ul>
					</div>
					<div class="dropdown col-xs-5 col-offset-xs-2 col-md-12">
						<p class="whitespace-h hidden-xs hidden-sm"> </p>
						<button class="btn btn-yellow dropdown-toggle fill_h" type="button" data-toggle="dropdown">
						<span class="selection"><?php echo $data['cur_lang']; ?></span>
						<span class="caret"></span></button>
						<ul class="dropdown-menu  col-xs-12">
							<li class="dropdown-menu-item"><a href="<?php echo URL; ?>language.php?lang=ua" ><?php echo $data['lang_ua']; ?></a></li>
							<li class="dropdown-menu-item"><a href="<?php echo URL; ?>language.php?lang=ru" ><?php echo $data['lang_ru']; ?></a></li>
							<li class="dropdown-menu-item"><a href="<?php echo URL; ?>language.php?lang=eng" ><?php echo $data['lang_en']; ?></a></li>
						</ul>
					</div>

				</div>
				</div>
</div>
</body>
</html>