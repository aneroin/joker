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

		console.log(formData);

		var xhr = $.ajax({
	        type: "POST",
	        dataType: 'json',
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
	        console.log(errorThrown);
	    });
	};

	function driver_form_start(){
		var formData = {
			'phone'		: $('#phone').val(),
			'smscode'	: $('#smscode').val()
		};

		console.log(formData);

		var xhr = $.ajax({
	        type: "POST",
	        dataType: 'json',
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
	        console.log(errorThrown);
	    });
	};

	function driver_form_next(step){

		$(".step-displayer>li").each(function() {
			$( this ).html('<span>'+$(this).data('cap-s')+'</span>').addClass("label label-default");
		});

		$('#step-'+step).html('<span>'+$('#step-'+step).data('cap')+'</span>').addClass("label-default");

		var xhr = $.ajax({
	        type: "POST",
	        url: "http://taxijoker.com/drivers/driverform/"+step,
	    })
	    .done(function(data) {
	        console.log('Form ok');
	        $('#step-'+(step-1)).addClass("label-success");
	        $('#driver-form-content').html(data);
	    })
	    .fail(function(jqXHR, textStatus, errorThrown) {
	        console.log('Form fail');
	        $('#step-'+(step)).addClass("label-danger");
	        console.log(errorThrown);
	    });
	};

	$.validate({
		form : '#driver-form-content',
	    modules : 'location, date, security, file',
	    onModulesLoaded : function() {
	    	$('#country').suggestCountry();
	    }
	});