<!-- accent of the page -->
	<!-- photo background -->
	<div class="row rounded" id="accent-photo">
		<!-- text over photo -->
		<div class="col-md-5 text-center rounded-left" id="accent-text">
			<?php echo $data['accent'] ?>
		</div>
	</div>

	<!-- end of accent -->
	<p class="whitespace-h"> </p>
	<div class="row rounded contacts" id="accent-row">
	 	<?php 
	 	foreach ($data['contacts'] as $row) {
	 		echo $row;
			echo "<p class='whitespace-h'> </p>";
		}
		?>
	</div>
    </div>




	<!-- scrollers -->
	<a data-id="top" class="scroll-link totop side hidden-xs">
		<img class="img-circle" src="<?php echo URL; ?>img/up.png"/>
	</a>
	
	<a data-id="top" class="scroll-link totop top visible-xs">
		<img class="img-circle" src="<?php echo URL; ?>img/up-s.png"/>
	</a>