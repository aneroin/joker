//call form processing
$(document).ready(function() {

    $('.callform').submit(function(event) {
        $('.callform #submit-call-taxi').addClass('disabled');
        $('.callform #submit-call-taxi').addClass('btn-process');
        $('.callform .form-group').removeClass('has-success'); //clear success
        $('.callform .form-group').removeClass('has-error'); //clear errors
        $('.callform .help-block').remove(); //clear errors text
        $('.callform .alert-success').remove(); //clear errors text

        //form data
        var formData = {
            'phone'             : $('input[id=phone]').val(),
            'name'              : $('input[id=name]').val(),
            'from'              : $('input[id=from]').val(),
            'where'             : $('input[id=where]').val(),
            'comment'           : $('input[id=comment]').val()
        };

        //prepare form
        $.ajax({
            url         : 'callform.php', //script
            data        : formData, //data
            dataType    : 'json', //data-type
            encode      : true
        })
            //response
            .done(function(data) {
                $('.callform #submit-call-taxi').removeClass('disabled');
                $('.callform #submit-call-taxi').removeClass('btn-process');

                //log
                console.log(data); 
                    if ( ! data.success) {
                        
                        //handle errors for personal
                        if (data.errors.name) {
                            $('.callform #name-group').addClass('has-error');
                            $('.callform #name-group').append('<div class="help-block">' + data.errors.name + '</div>');
                        }
                        if (data.errors.phone) {
                            $('.callform #phone-group').addClass('has-error');
                            $('.callform #phone-group').append('<div class="help-block">' + data.errors.phone + '</div>');
                        }

                        //handle errors for geo
                        if (data.errors.from) {
                            $('.callform #from-group').addClass('has-error');
                            $('.callform #from-group').append('<div class="help-block">' + data.errors.from + '</div>');
                        }
                        if (data.errors.where) {
                            $('.callform #where-group').addClass('has-error');
                            $('.callform #where-group').append('<div class="help-block">' + data.errors.where + '</div>');
                        }

                        //handle errors for comment
                        if (data.errors.comment) {
                            $('.callform #comment-group').addClass('has-error');
                            $('.callform #comment-group').append('<div class="help-block">' + data.errors.comment + '</div>');
                        }

                    } else {
                        $('.callform .form-group').addClass('has-success');
                        //success
                        $('.callform').prepend('<div class="alert alert-success">' + data.message + '</div>');

                    }
            });

        //escape default event
        event.preventDefault();
    });

});

//callback form processing
