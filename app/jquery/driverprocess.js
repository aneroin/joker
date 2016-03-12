	var driver_info = {
		phone 	: '',
		lname 	: '',
		fname 	: '',
		mname 	: '',
		carvendor : '',
		carmodel  : '',
		carcolor  : '',
		carhex	: '',
		carnumber : '',
		city  	: '',
		street	: '',
		house		: '',
		apartment	: '',
		photoportrait : '',
		photocar : '',
		accept : false
	};

	var globalDelay = 1000;

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
	        crossDomain: true,
	        dataType: 'json',
	        url: "http://"+window.location.hostname+"/sms.php",
	        data: formData
	    })
	    .done(function(data) {
	    	if (data['response']=='1'){
			    console.log('SMS ok');
			    $("#driver-form-content").after('<div class="chip"><i class="material-icons">close</i><strong>SMS:</strong> Code sent successfully, wait a bit.</div>');
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
	        crossDomain: true,
	        dataType: 'json',
	        url: "http://"+window.location.hostname+"/sms_check.php",
	        data: formData
	    })
	    .done(function(data) {
	    	if (data['response']=='1') {
		    	console.log('SMS CODE ok');
				driver_form_next(1);
			} else {
				if (data['code']=='901') {
					console.log('SMS CODE error: wrong data');
					$("#driver-form-content").after('<div class="chip fade in"><i class="material-icons">close</i><strong>SMS:</strong> Wrong phone number format or code format.</div>');
				}
				if (data['code']=='902') {
					console.log('SMS CODE error: code not found or expired');
					$("#driver-form-content").after('<div class="chip"><i class="material-icons">close</i><strong>SMS:</strong> Wrong or expired code. Try again or send another code.</div>');
				}
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
				if ($(this).hasClass("active")){
					$(this).removeClass("active").addClass("passive");
				}
				$( this ).html('<span>'+$(this).data('cap-s')+'</span>');
			});

			$('#step-'+step).html('<span>'+$('#step-'+step).data('cap-s')+'</span>').removeClass("passive").addClass("active");
			$('#step-cap').html($('#step-'+step).data('cap')+':');
			
			if (step!=0) $('#screen').removeClass("postload").addClass("preload");

			var xhr = $.ajax({
		        type: "POST",
		        crossDomain: true,
		        url: "http://"+window.location.hostname+"/drivers/driverform/"+step,
		    })
		    .done(function(data) {
		        console.log('Form ok');
		        $('#step-'+(step-1)).addClass("success");
				if (step==0) var localDelay=0; else var localDelay=globalDelay;
				setTimeout(function(){
		        	$('#driver-form-content').html(data);
					initialize_typeahead('#car-group .typeahead');
					read_data(step);
					if (step == 4) {
						uploader('#portrait');
						uploader('#car');
					}
				}, localDelay);
		    })
		    .fail(function(jqXHR, textStatus, errorThrown) {
		        console.log('Form fail');
		        $('#step-'+(step)).addClass("warning");
		        console.log(errorThrown);
		    })
			.always(function() {
				setTimeout(function(){ $('#screen').removeClass("preload").addClass("postload"); }, globalDelay);
			});
		} else {
			console.log('invalid form data');
		}
	};

	function driver_form_prev(step){
			console.log(driver_info);
			$(".step-displayer>li").each(function() {
				if ($(this).hasClass("active")){
					$(this).removeClass("active").addClass("passive");
				}
				$( this ).html('<span>'+$(this).data('cap-s')+'</span>');
			});

			$('#step-'+step).html('<span>'+$('#step-'+step).data('cap-s')+'</span>').removeClass("passive").addClass("active");
			$('#step-cap').html($('#step-'+step).data('cap')+':');
		
			if (step!=0) $('#screen').removeClass("postload").addClass("preload");

			var xhr = $.ajax({
		        type: "POST",
		        crossDomain: true,
		        url: "http://"+window.location.hostname+"/drivers/driverform/"+step,
		    })
		    .done(function(data) {
		        console.log('Form ok');
		        $('#step-'+(step-1)).addClass("success");
				if (step==0) var localDelay=0; else var localDelay=globalDelay;
				setTimeout(function(){
		        	$('#driver-form-content').html(data);
					initialize_typeahead('#car-group .typeahead');
					read_data(step);
				}, localDelay);
		        
		    })
		    .fail(function(jqXHR, textStatus, errorThrown) {
		        console.log('Form fail');
		        $('#step-'+(step)).addClass("warning");
		        console.log(errorThrown);
		    })
			.always(function() {
				setTimeout(function(){ $('#screen').removeClass("preload").addClass("postload"); }, globalDelay);
			});
		
	};

	function driver_form_finally(){
		if(validate_form(5)==true) {
			write_data(5);
			console.log(driver_info);
			var xhr = $.ajax({
		        type: "POST",
		        crossDomain: true,
		        dataType: 'json',
		        url: "http://"+window.location.hostname+"/driver_join.php",
		        data: driver_info
		    })
		    .done(function(data) {
				$('#screen').removeClass("postload").addClass("preload");
		    	if (data['response']=='1') {
			    	console.log('DRIVER JOIN ok');
			    	redirect('Реєстрація пройшла успішно, бажаєте переглянути список наших водіїв?','/drivers/all','/drivers')
				} else {
					console.log('DRIVER JOIN error');
					console.log(data);
				}
		    })
		    .fail(function(jqXHR, textStatus, errorThrown) {
		        console.log('DRIVER JOIN fail');
		        console.log(jqXHR);
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
				driver_info["accept"] = $('#accept').prop('checked');
				break;
			}
			case 3: {
				driver_info["carvendor"] = $('#carvendor').val();
				driver_info["carmodel"] = $('#carmodel').val();
				driver_info["carhex"] = $('#carcolor').val();
				driver_info["carcolor"] = colorEngine.name(driver_info["carhex"]);
				driver_info["carnumber"] = $('#carnumber').val();
				break;
			}
			case 4: {
				driver_info["city"] = $('#city').val();
				driver_info["street"] = $('#street').val();
				driver_info["house"] = $('#house').val();
				driver_info["apartment"] = $('#apartment').val()!= '' ? $('#apartment').val() : '-';
			}
			case 5: {
				driver_info["photoportrait"] = $('#portrait').data("imgurl");
				driver_info["photocar"] = $('#car').data("imgurl");
			}
		}
	}

	function read_data(step){
		switch (step) {
			case 1: {
				$('#fname').val(driver_info["fname"]);
				$('#mname').val(driver_info["mname"]);
				$('#lname').val(driver_info["lname"]);
				$('#accept').prop('checked', driver_info["accept"]);
				break;
			}
			case 2: {
				$('#carvendor').val(driver_info["carvendor"]);
				$('#carmodel').val(driver_info["carmodel"]);
				$('#carcolor').val(driver_info["carhex"]);
				$('#carnumber').val(driver_info["carnumber"]);
				break;
			}
			case 3: {
				$('#city').val(driver_info["city"]);
				$('#street').val(driver_info["street"]);
				$('#house').val(driver_info["house"]);
				var apartment = driver_info["apartment"] != '-' ? driver_info["apartment"] : '';
				$('#apartment').val(apartment);
				break;
			}
		}
		$('input[type=text]').each(function(){
		    if ($(this).val()!="") {
		    	var label = $("label[for='"+$(this).attr('id')+"']");
		    	if (!label.hasClass("active")) {
		    		label.addClass("active");
		    	}
		    }
		})
	}

	function redirect(message, location_t, location_f) {
    var ask = window.confirm(message);
    if (ask) {
        window.location.assign(location_t);
    } else {
		window.location.assign(location_f);
    }
	}

	function uploader(id) {
		$(function () {
		    $(id).fileupload({
		        dataType: 'json',
		        add: function (e, data) {
		            console.log('uploading');
		            data.formData = {phoneID: driver_info["phone"]};
		            data.submit();
		        },
		        done: function (e, data) {
		            console.log('upload finished');
					file = data.result.files[0];
		            $(id).data('imgurl',file.url);		
		            $(id).prev('.btn').first().css(
			            'background-color',
			            '#5CB85C'
			        );
		        },
		        progressall: function (e, data) {
			        var progress = parseInt(data.loaded / data.total * 100, 10);
					$(id+'-progress').css(
			            'width',
			            progress + '%'
			        );
			    }
		    });
			
		    $(id)
		    .bind('fileuploaddrop', function (e, data) {
		    	$.each(data.files, function (index, file) {
            		console.log('file dropped '+file.nam);
        		});
		    })
		    .bind('fileuploadchange', function (e, data) {
				$.each(data.files, function (index, file) {
	            	console.log('file selected '+file.name);
	        	});
			})
			.bind('fileuploadprocessfail', function (e, data) {
				console.log('upload failed');
			});
		});
	}

	function remover(durl,id,dtype){
		var req = $.ajax({
			dataType: 'json',
			data : {formData: {phoneID: driver_info["phone"]}},
			url: durl,
			type: dtype
		})
		.done(function(data) {
			$(id).parent().parent().css(
				'background-color',
				'inherit'
			);
		})
	}