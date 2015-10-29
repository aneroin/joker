<!-- accent of the page -->
	<!-- photo background -->
	<div class="row rounded" id="accent-photo">
		<!-- text over photo -->
		<div class="col-md-5 text-center rounded-left" id="accent-text">
			<?php echo $data['accent'] ?>
		</div>
	</div>
<!-- form panel -->

	<!-- end of accent -->	
	<p class="whitespace-h"> </p>
	<div class="row rounded" id="accent-buttons">
		<div class="col-xs-12 col-md-4 col-md-push-8" id="driver-form-step">
			<ul class="step-displayer">
				<li class="step" id="step-0" data-cap-s="1" data-cap="<?php echo $data['join_step_1'] ?>"> </li>
				<li class="step" id="step-1" data-cap-s="2" data-cap="<?php echo $data['join_step_2'] ?>"> </li>
				<li class="step" id="step-2" data-cap-s="3" data-cap="<?php echo $data['join_step_3'] ?>"> </li>
				<li class="step" id="step-3" data-cap-s="4" data-cap="<?php echo $data['join_step_4'] ?>"> </li>
				<li class="step" id="step-4" data-cap-s="5" data-cap="<?php echo $data['join_step_5'] ?>"> </li>
			</ul>
		</div>
		<div class="col-xs-12 col-md-8 col-md-pull-4" id="driver-form">
			<form  role="form" class="driverform" id="driver-form-content">

			</form>
		</div>
	</div>


	<!-- scrollers -->
	<a data-id="top" class="scroll-link totop side hidden-xs">
		<img class="img-circle" src="<?php echo URL; ?>img/up.png"/>
	</a>
	
	<a data-id="top" class="scroll-link totop top visible-xs">
		<img class="img-circle" src="<?php echo URL; ?>img/up-s.png"/>
	</a>

	<script src="<?php echo URL; ?>jquery/driverprocess.js"></script>