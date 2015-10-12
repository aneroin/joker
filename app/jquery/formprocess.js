//call form processing
$(document).ready(function() {
    var now = new Date();
    //var formated_date = now.format("yyyy-mm-dd");
    var date_time = document.getElementById("advanced");
    date_time.value = formatDate(now);
});

    function formatDate(d) {
        var strDay = d.getDate()>9? d.getDate() : "0" + d.getDate();
        var strMonth = d.getMonth()>8? d.getMonth()+1 : "0" + (d.getMonth() + 1);
        var strYear = d.getFullYear()+"";
        var strH = d.getHours()>9? d.getHours() : "0" + d.getHours();
        var strM = d.getMinutes()+"";
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
            //prepare form
            $.ajax({
                type: "POST",
                dataType: 'jsonp',
                jsonp: 'jsonp_callback',
                url: "http://taxijoker.dyndns.org/taxi/info.php/",
                data: "new_site_order=1&key_num="+$('#key').val()+"&phone="+$('#phone').val()+"&sattlement="+$('#sattlement').val()+"&street="+$('#street').val()+"&home="+$('#home').val()+"&entrance="+$('#entrance').val()+"&message="+$('#message').val()+"&advanced="+$('#advanced').val()+"&address_to="+$('#address_to').val()+"&id_taxi=42",
                jsonpCallback: "new_site_order",
                success: function(html) {
                    alert (html['error']);
                    if (html['error']=='1'){
                        $('.callform #phone-group').addClass('has-error');
                        $('.callform #phone-group').append('<div class="help-block">' + "required" + '</div>');
                    } else
                    if (html['error']=='2'){
                        $('.callform #address-group').addClass('has-error');
                        $('.callform #address-group').append('<div class="help-block">' + "required" + '</div>');
                    } else
                    if (html['error']=='3'){
                        $('.callform #address-to-group').addClass('has-error');
                        $('.callform #address-to-group').append('<div class="help-block">' + "required" + '</div>');
                    } else
                    if (html['error']=='101'){alert('Ошибка параметров!');} else
                    if (html['error']=='102'){
                        $('.callform #key-group').addClass('has-error');
                        $('.callform #key-group').append('<div class="help-block">' + "required" + '</div>');
                    } else
                    if (html['error']=='103'){alert('Заказ с сайта заблокирован!');} else
                    if (html['error']=='100'){
                        $('#key').val('');
                        $('#phone').val('380');
                        $('#sattlement').val('ТЕРНОПІЛЬ');
                        $('#street').val('');
                        $('#home').val('');
                        $('#entrance').val('');
                        $('#message').val('');
                        $("#captcha").html('<img src=\'http://taxijoker.dyndns.org/taxi/captcha.php?num='+Math.random()+'\'>');
                        $('.callform .form-group').addClass('has-success');
                        //success
                        $('.callform').prepend('<div class="alert alert-success">' + "success" + '</div>');
                        $('.callform #submit-call-taxi').removeClass('disabled');
                        $('.callform #submit-call-taxi').removeClass('btn-process');
                    }  else {alert('Сервис не доступен!');
                        $('.callform #submit-call-taxi').removeClass('disabled');
                        $('.callform #submit-call-taxi').removeClass('btn-process');
                    }
                }
            });
        }
