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

	<script>
	var driver_info = {
		'lname' 	: '',
		'fname' 	: '',
		'mname' 	: '',
		'phone' 	: '',
		'city'  	: '',
		'carvendor' : '',
		'carmodel'  : '',
		'carcolor'  : '',
		'carnumber' : ''
	};

	$(document).ready(function(){
		driver_form_next(0);
	});

	function sms(){
		var formData = {
			'phone'		: $('#phone').val()
		};

		var xhr = $.ajax({
	        type: "POST",
	        url: "http://taxijoker.com/libs/sms.php",
	        data: formData
	    })
	    .done(function(data) {
	    	if (data['response']=='1'){
			    console.log('SMS ok');
			} else {
				console.log('SMS error');
			}
			console.log(data);
	    })
	    .fail(function(jqXHR, textStatus, errorThrown) {
	        console.log('SMS fail');
	        errorThrower(jqXHR.status);
	    });
	};

	function driver_form_start(){
		var formData = {
			'phone'		: $('#phone').val(),
			'smscode'	: $('#smscode').val()
		};

		var xhr = $.ajax({
	        type: "POST",
	        url: "http://taxijoker.com/libs/sms_check.php",
	        data: formData
	    })
	    .done(function(data) {
	    	if (data['response']=='1') {
		    	console.log('SMS CODE ok');
				driver_form_next(1);
			} else {
				console.log('SMS CODE error');
			}
	    })
	    .fail(function(jqXHR, textStatus, errorThrown) {
	        console.log('SMS CODE fail');
	        errorThrower(jqXHR.status);
	    });
	};

	function driver_form_next(step){
		if (step==1) {
			driver_info.lname = $('#lname').val();
			driver_info.fname = $('#fname').val();
			driver_info.mname = $('#mname').val();
			console.log(driver_info);
		}

		var xhr = $.ajax({
	        type: "POST",
	        url: "http://taxijoker.com/drivers/driverform/"+step,
	    })
	    .done(function(data) {
	        console.log('Form ok');
	        $('#driver-form-content').html(data);
	    })
	    .fail(function(jqXHR, textStatus, errorThrown) {
	        console.log('Form fail');
	        errorThrower(jqXHR.status);
	    });
	};

	</script>