<!-- accent of the page -->
	<!-- photo background -->
	<div class="row rounded" id="accent-photo">
		<!-- text over photo -->
		<div class="col-md-5 text-center rounded-left" id="accent-text">
			<?php echo $data['accent'] ?>
		</div>
	</div>

	<!-- end of accent -->
<?php 
	foreach ($data['drivers'] as $row) {
	$drivercard = <<<EOT
	<p class="whitespace-h"> </p>
	<div class="row drivers-container" id="driver-{$row['id']}">
		<div class="drivers col-xs-12 col-md-10 col-md-offset-1" id="accent-row">
			<div class="row-fluid">
			<div class="id col-xs-3 col-sm-2">
				<div class="callsign">
					{$row['tid']}
				</div>
			</div>
			<div class="info col-xs-8 col-sm-8">
				<div class="name row">
					{$row['name']}
				</div>
				<div class="car row">
					{$row['model']} {$row['color']} <br>	<span class="img-circle" style="background-color: {$row['hex']}"> &nbsp;   		&nbsp;		   &nbsp; </span>	
				</div>
			</div>
			<div class="photo hidden-xs col-sm-2 img-responsive">
				<img class="img-responsive" src="{$row['photo']}">

				</img>
			</div>
			</div>
		</div>
	</div>
EOT;
	echo $drivercard;
	}
?>



	<!-- scrollers -->
	<a data-id="top" class="scroll-link totop side hidden-xs">
		<img class="img-circle" src="<?php echo URL; ?>img/up.png"/>
	</a>
	
	<a data-id="top" class="scroll-link totop top visible-xs">
		<img class="img-circle" src="<?php echo URL; ?>img/up-s.png"/>
	</a>