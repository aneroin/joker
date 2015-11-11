	var driver_info = {
		'phone' 	: '',
		'lname' 	: '',
		'fname' 	: '',
		'mname' 	: '',
		'carvendor' : '',
		'carmodel'  : '',
		'carcolor'  : '',
		'carhex'	: '',
		'carnumber' : '',		
		'city'  	: '',
		'street'	: '',
		'house'		: ''
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
	        url: "http://taxijoker.com/sms.php",
	        data: formData
	    })
	    .done(function(data) {
	    	if (data['response']=='1'){
			    console.log('SMS ok');
			} else {
				console.log('SMS error');
				console.log(data['exception']);
				console.log(data['credits']);
			}
			console.log(data);
	    })
	    .fail(function(jqXHR, textStatus, errorThrown) {
	        console.log('SMS fail');
	        console.log(textStatus);
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
	        url: "http://taxijoker.com/sms_check.php",
	        data: formData
	    })
	    .done(function(data) {
	    	if (data['response']=='1') {
		    	console.log('SMS CODE ok');
				driver_form_next(1);
			} else {
				console.log('SMS CODE error');
				console.log(data);
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
		        url: "http://taxijoker.com/driver_join.php",
		        data: driver_info
		    })
		    .done(function(data) {
		    	if (data['response']=='1') {
			    	console.log('DRIVER JOIN ok');
			    	redirect('Реєстрація пройшла успішно, бажаєте переглянути список наших водіїв?','/drivers/all','/drivers')
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
				driver_info["phone"] = $('#phone').val();
				break;
			}
			case 2: {
				driver_info["fname"] = $('#fname').val();
				driver_info["mname"] = $('#mname').val();
				driver_info["lname"] = $('#lname').val();
				break;
			}
			case 3: {
				driver_info["carvendor"] = $('#carvendor').val();
				driver_info["carmodel"] = $('#carmodel').val();
				driver_info["carhex"] = $('#carcolor').val();
				var n_match  = ntc.name(driver_info["carhex"]);
				driver_info["carcolor"] = n_match[1]; // Text string: Color name
				driver_info["carnumber"] = $('#carnumber').val();
				break;
			}
			case 4: {
				driver_info["city"] = $('#city').val();
				driver_info["street"] = $('#street').val();
				driver_info["house"] = $('#house').val();
			}
		}
	}

	function redirect(message, location_t, location_f) {
    var ask = window.confirm(message);
    if (ask) {
        window.location.assign(location_t);
    } else {
		window.location.assign(location_f);
    }
	}