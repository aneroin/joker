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
				<div class="img-circle img-responsive callsign">
					{$row['tid']}
				</div>
			</div>
			<div class="info col-xs-9 col-sm-8">
				<div class="name row">
					{$row['name']} {$row['surname']}
				</div>
				<div class="car row">
					{$row['model']} {$row['color']}	<span class="img-circle" style="background-color: {$row['hex']}"> &nbsp;   		&nbsp;		   &nbsp; </span>	
				</div>
			</div>
			<div class="photo col-sm-2 hidden-xs">
				<img class="img-circle" src="http://taxijoker.com/img/drivers/{$row['photo']}">

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
		<img class="img-circle" src="img/up.png">
	</a>
	
	<a data-id="top" class="scroll-link totop top visible-xs">
		<img class="img-circle" src="img/up-s.png">
	</a>