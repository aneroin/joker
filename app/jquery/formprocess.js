//call form processing
$(document).ready(function() {
    var now = new Date();
    //var formated_date = now.format("yyyy-mm-dd");
    console.log(formatDate(now));
    $('#advanced').val(formatDate(now));
});

    function formatDate(d) {
        var strDay = d.getDate()>9? d.getDate() : "0" + d.getDate();
        var strMonth = d.getMonth()>8? d.getMonth()+1 : "0" + (d.getMonth() + 1);
        var strYear = d.getFullYear()+"";
        var strH = d.getHours()>9? d.getHours() : "0" + d.getHours();
        var strM = d.getMinutes()>9? d.getMinutes()+"" : "0" + d.getMinutes();
        strYear = strYear.slice(2);
        var strDate = "20" + strYear + "." + strMonth + "." + strDay +" "+strH+":"+strM;
        return strDate;
    }

    function send_new_order(){
        $('.callform #submit-call-taxi').addClass('disabled');
        $('.callform #submit-call-taxi').addClass('btn-process');
        $('.callform .form-group').removeClass('has-success'); //clear success
        $('.callform .form-group').removeClass('has-error'); //clear errors
        $('.callform .help-block').remove(); //clear errors text
        $('.callform .alert-success').remove(); //clear errors text
        console.log("pre ajax state");
        var formData = {
                'new_site_order'             : 1,
                'key_num'                     : $('#key').val(),
                'phone'                       : $('#phone').val(),
                'sattlement'                  : $('#sattlement').val(),
                'street'                      : $('#street').val(),
                'home'                        : $('#home').val(),
                'entrance'                    : $('#entrance').val(),
                'message'                     : $('#message').val(),
                'advanced'                    : $('#advanced').val(),
                'address_to'                  : $('#address-to').val(),
                'id_taxi'                     : $('#call-form').data('tid')
            };
        console.log(formData);
            //prepare form
            var xhr = $.ajax({
                headers: { 'Access-Control-Allow-Origin':'http://taxijoker.dyndns.org/' },
                type: "POST",
                jsonp: 'jsonp_callback',
                dataType: 'jsonp',
                crossDomain: true,
                url: "http://taxijoker.dyndns.org/taxi/info.php",
                data: formData,
                jsonpCallback: "new_site_order",
            })
            .done(function(data, textStatus, jqXHR) {
                console.log('Замовлення пройшло!');
                console.log(jqXHR.status);
                errorThrower(jqXHR.status);
            })
            .fail(function(jqXHR, textStatus, errorThrown) {
                console.log('Сервіс недоступний!');
                console.log(jqXHR.status);
                errorThrower(jqXHR.status);
            })
            .always(function() {
                $('.callform #submit-call-taxi').removeClass('disabled');
                $('.callform #submit-call-taxi').removeClass('btn-process');
                $('#captcha').html('<img src=\'http://taxijoker.dyndns.org/taxi/captcha.php?num='+Math.random()+'\'>');
            });
        console.log("post ajax state");
    }

    function errorThrower (errorcodes) {
                    if (errorcodes=='1'){
                        var errormsg = $('.callform #phone-group').data('error');
                        $('.callform #phone-group').addClass('has-error');
                        $('.callform #phone-group').append('<div class="help-block">' + errormsg + '</div>');
                    } else
                    if (errorcodes=='2'){
                        var errormsg = $('.callform #address-group').data('error');
                        $('.callform #address-group').addClass('has-error');
                        $('.callform #address-group').append('<div class="help-block">' + errormsg + '</div>');
                    } else
                    if (errorcodes=='3'){
                        var errormsg = $('.callform #address-to-group').data('error');
                        $('.callform #address-to-group').addClass('has-error');
                        $('.callform #address-to-group').append('<div class="help-block">' + errormsg + '</div>');
                    } else
                    if (errorcodes=='101'){console.log('Помилка параметрів!');} else
                    if (errorcodes=='102'){
                        var errormsg = $('.callform #key-group').data('error');
                        $('.callform #key-group').addClass('has-error');
                        $('.callform #key-group').append('<div class="help-block">' + errormsg + '</div>');
                    } else
                    if (errorcodes=='103'){
                        console.log('Заказ с сайта заблокирован!');
                        $('.callform #submit-group').addClass('has-error');
                        $('.callform #submit-group').append('<div class="help-block">' + "ERROR: 103" + '</div>');
                    } else
                    if (errorcodes=='404'){
                        console.log('Файл не найден!');
                        $('.callform #submit-group').addClass('has-error');
                        $('.callform #submit-group').append('<div class="help-block">' + "ERROR: 404" + '</div>');
                    } else
                    if (errorcodes=='100'){
                        console.log("done");
                        $('#key').val('');
                        $('#phone').val('');
                        $('#sattlement').val('ТЕРНОПІЛЬ');
                        $('#street').val('');
                        $('#home').val('');
                        $('#entrance').val('');
                        $('#message').val('');
                        $('.callform .form-group').addClass('has-success');
                        //success
                        $('.callform').prepend('<div class="alert alert-success">' + "success" + '</div>');
                    } 
    }

    function isXHR(maybe)
    {
        if(maybe==null)
        {
            return false;
        }
        if(!maybe)
        {
            return false;
        }
        if(! ('readyState' in maybe) )
        {
            return false;
        }
        if(! ('responseText' in maybe) )
        {
            return false;
        }
        if(! ('status' in maybe) )
        {
            return false;
        }
        if(! ('statusText' in maybe) )
        {
            return false;
        }
        return true;
    }