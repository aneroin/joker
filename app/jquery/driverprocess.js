	var driver_info = {
		'phone' 	: '',
		'lname' 	: '',
		'fname' 	: '',
		'mname' 	: '',
		'carvendor' : '',
		'carmodel'  : '',
		'carcolor'  : '',
		'carnumber' : '',		
		'city'  	: '',
		'street'	: '',
		'house'		: '',
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
		if(validate_form(step)==true) {
			write_data(step);

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
		} else {
			console.log('invalid form data');
		}
	};

	function driver_form_finally(){
		if(validate_form(5)==true) {
			write_data(5);
			console.log(driver_info);

			var xhr = $.ajax({
		        type: "POST",
		        dataType: 'json',
		        url: "http://taxijoker.com/libs/driver_join.php",
		        data: driver_info
		    })
		    .done(function(data) {
		    	if (data['response']=='1') {
			    	console.log('DRIVER JOIN ok');
				} else {
					console.log('DRIVER JOIN error');
				}
		    })
		    .fail(function(jqXHR, textStatus, errorThrown) {
		        console.log('DRIVER JOIN fail');
		        console.log(errorThrown);
			});
		}
	};


	function validate_form(step) {
		var validator = $("#driver-form-content").validate({
						    modules : 'html5, location, date, security, file',
						    onModulesLoaded : function() {	},
						    errorPlacement: function(error, element) {
							    console.log(error);
							    $(element).prev().after(error);
							}
						});
		if (step<=1) return true;
		else {
			return validator.form();
		}
	};

	function write_data(step){
		switch (step) {
			case 1: {
				driver_info.phone = $('#phone').val();
				break;
			}
			case 2: {
				driver_info.fname = $('#fname').val();
				driver_info.mname = $('#mname').val();
				driver_info.lname = $('#lname').val();
				break;
			}
			case 3: {
				driver_info.carvendor = $('#carvendor').val();
				driver_info.carmodel = $('#carmodel').val();
				driver_info.carcolor = $('#carcolor').val();
				driver_info.carnumber = $('#carnumber').val();
				break;
			}
			case 4: {
				driver_info.city = $('#city').val();
				driver_info.street = $('#street').val();
				driver_info.house = $('#house').val();
			}
		}
		
	}