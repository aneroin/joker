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
		<div class="col-md-8" id="driver-form">
			<form  role="form" class="driverform">

				<div class="form-group" id="name-group" data-error='<?php echo $data['driver_error_name'] ?>'>
					<label for="lname"><?php echo $data['lname'] ?>:</label>
					<input type="text" class="form-control main" id="lname" maxlength=45>
					<label for="fname"><?php echo $data['fname'] ?>:</label>
					<input type="text" class="form-control main" id="fname" maxlength=45>
					<label for="mname"><?php echo $data['mname'] ?>:</label>
					<input type="text" class="form-control main" id="mname" maxlength=45>
				</div>

				<div class="form-group" id="phone-group" data-error='<?php echo $data['driver_error_phone'] ?>'>
					<label for="phone"><?php echo $data['phone'] ?>:</label>
					<input type="text" class="form-control main" id="phone" placeholder="380" maxlength=12>
				</div>

				<div class="form-group" id="city-group" data-error='<?php echo $data['driver_error_city'] ?>'>
					<label for="city"><?php echo $data['city'] ?>:</label>
					<input type="text" class="form-control main" id="city" maxlength=45>
				</div>

				<div class="form-group" id="accept-group" data-error='<?php echo $data['driver_error_accept'] ?>'>
					<?php echo $data['accept'] ?>
					<span class="checkbox checkbox-success">
						<input class="styled" id="accept" type="checkbox" value="" required="true">
						<label for="accept" style="font-weight: 200; font-size: 12pt;"><?php echo $data['accept_des'] ?></label>
					</span>
				</div>

				<div class="form-group" id="submit-group">
					<input type="button" onclick="driver_form_next();" class="btn btn-main btn-xl btn3d capital" id="submit-driver-form" value=<?php echo $data['main-btn'] ?>>
				</div>

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