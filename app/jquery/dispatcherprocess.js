	var dispatcher_info = {
		phone 	: '',
		lname 	: '',
		fname 	: '',
		mname 	: '',
		city  	: '',
		street	: '',
		house		: '',
		apartment	: '-',
		photoportrait : '',
		accept : false
	};

	$(document).ready(function(){
		dispatcher_form_next(0);
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
			    $("#driver-form-content").after('<div class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>SMS:</strong> Code sent successfully, wait a bit.</div>');
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

	function dispatcher_form_start(){
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
				dispatcher_form_next(1);
			} else {
				if (data['code']=='901') {
					console.log('SMS CODE error: wrong data');
					$("#driver-form-content").after('<div class="alert alert-warning fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>SMS:</strong> Wrong phone number format or code format.</div>');
				}
				if (data['code']=='902') {
					console.log('SMS CODE error: code not found or expired');
					$("#driver-form-content").after('<div class="alert alert-warning fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>SMS:</strong> Wrong or expired code. Try again or send another code.</div>');
				}
				console.log(data);
			}
	    })
	    .fail(function(jqXHR, textStatus, errorThrown) {
	        console.log('SMS CODE fail');
	        console.log(errorThrown);
	    });
	};

	function dispatcher_form_next(step){
		if(validate_form(step)==true) {
			write_data(step);

			$(".step-displayer>li").each(function() {
				$( this ).html('<span>'+$(this).data('cap-s')+'</span>').addClass("label label-default");
			});

			$('#step-'+step).html('<span>'+$('#step-'+step).data('cap')+'</span>').addClass("label-default");

			var xhr = $.ajax({
		        type: "POST",
		        url: "http://taxijoker.com/dispatchers/dispatcherform/"+step,
		    })
		    .done(function(data) {
		        console.log('Form ok');
		        $('#step-'+(step-1)).addClass("label-success");
		        $('#driver-form-content').html(data);
		        initialize_typeahead('#car-group .typeahead');
		        read_data(step);
		        if (step == 3) {
					uploader('#photos');
				}
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

	function dispatcher_form_prev(step){
			console.log(dispatcher_info);
			$(".step-displayer>li").each(function() {
				$( this ).html('<span>'+$(this).data('cap-s')+'</span>').addClass("label label-default");
			});

			$('#step-'+step).html('<span>'+$('#step-'+step).data('cap')+'</span>').addClass("label-default");

			var xhr = $.ajax({
		        type: "POST",
		        url: "http://taxijoker.com/dispatchers/dispatcherform/"+step,
		    })
		    .done(function(data) {
		        console.log('Form ok');
		        $('#step-'+(step-1)).addClass("label-success");
		        $('#driver-form-content').html(data);
		        initialize_typeahead('#car-group .typeahead');
		        read_data(step);
		    })
		    .fail(function(jqXHR, textStatus, errorThrown) {
		        console.log('Form fail');
		        $('#step-'+(step)).addClass("label-danger");
		        console.log(errorThrown);
		    });
		
	};

	function dispatcher_form_finally(){
		if(validate_form(4)==true) {
			write_data(4);
			console.log(dispatcher_info);
			var xhr = $.ajax({
		        type: "POST",
		        dataType: 'json',
		        url: "http://taxijoker.com/dispatcher_join.php",
		        data: dispatcher_info
		    })
		    .done(function(data) {
		    	if (data['response']=='1') {
			    	console.log('DISPATCHER JOIN ok');
			    	redirect('Реєстрація пройшла успішно, бажаєте переглянути список наших диспетчерів?','/dispatchers/all','/dispatchers')
				} else {
					console.log('DISPATCHER JOIN error');
					console.log(data);
				}
		    })
		    .fail(function(jqXHR, textStatus, errorThrown) {
		        console.log('DISPATCHER JOIN fail');
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
				dispatcher_info["phone"] = $('#phone').val();
				break;
			}
			case 2: {
				dispatcher_info["fname"] = $('#fname').val();
				dispatcher_info["mname"] = $('#mname').val();
				dispatcher_info["lname"] = $('#lname').val();
				dispatcher_info["accept"] = $('#accept').prop('checked');
				break;
			}
			case 3: {
				dispatcher_info["city"] = $('#city').val();
				dispatcher_info["street"] = $('#street').val();
				dispatcher_info["house"] = $('#house').val();
				dispatcher_info["apartment"] = $('#apartment').val()!= '' ? $('#apartment').val() : '-';
			}
			case 4: {
				dispatcher_info["photoportrait"] = $('#photos').data("imgurl-1");
			}
		}
	}

	function read_data(step){
		switch (step) {
			case 1: {
				$('#fname').val(dispatcher_info["fname"]);
				$('#mname').val(dispatcher_info["mname"]);
				$('#lname').val(dispatcher_info["lname"]);
				$('#accept').prop('checked', dispatcher_info["accept"]);
				break;
			}
			case 2: {
				$('#city').val(dispatcher_info["city"]);
				$('#street').val(dispatcher_info["street"]);
				$('#house').val(dispatcher_info["house"]);
				var apartment = dispatcher_info["apartment"] != '-' ? dispatcher_info["apartment"] : '';
				$('#apartment').val(apartment);
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

	function uploader(id) {
		$(function () {
		    $(id).fileupload({
		        dataType: 'json',
		        add: function (e, data) {
		            console.log('uploading');
		            data.submit();
		        },
		        done: function (e, data) {
		            console.log('upload finished');
		            console.log(data);
		            $.each(data.result.files, function (index, file) {
		                $(id).data("imgurl-"+(index+1),"http://taxijoker.com/files/"+getSessId()+"/"+file.name);
		            });
		            $('#photos').css(
			            'background-color',
			            '#5CB85C'
			        );
		        },
		        progressall: function (e, data) {
			        var progress = parseInt(data.loaded / data.total * 100, 10);
			        $('#progress .bar').css(
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

	function getSessId() {
	    var name = "PHPSESSID=";
	    var ca = document.cookie.split(';');
	    for(var i=0; i<ca.length; i++) {
	        var c = ca[i];
	        while (c.charAt(0)==' ') c = c.substring(1);
	        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
	    }
	    return "";
	}