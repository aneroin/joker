<!-- Modal Signin -->
  <div id="modal_in" class="modal">
    <div class="modal-content">
        <div class="input-field col s6">
            <i class="mdi-action-account-box prefix prefix"></i>
            <input id="icon_prefix" name="phone_in" type="text" class="validate">
            <label for="icon_prefix">Номер телефону</label>
        </div>
        <div class="input-field col s6">
            <i class="mdi-communication-vpn-key prefix"></i>
            <input id="icon_prefix" name="pass_in" type="password" class="validate">
            <label for="icon_prefix">Пароль</label>
        </div>
    <div class="modal-footer">
        <a href="#" class="modal-action modal-close waves-effect waves-light btn-flat">&times;</a>
        <a href="#modal_up" class="modal-action modal-close modal-trigger waves-effect waves-light btn-flat">Зареєструватись</a>
        <a onClick="signin()" class="modal-action modal-close waves-effect waves-light white-text red darken-1 btn-flat">Увійти</a>
    </div>
  </div>
</div>
<!-- Modal Signup -->
  <div id="modal_up" class="modal">
    <div class="modal-content row">
        <div class="input-field col s12">
            <i class="mdi-action-perm-identity prefix"></i>
            <input id="icon_prefix" name="login" type="text" class="validate">
            <label for="icon_prefix">Відображуване ім'я</label>
        </div>
        <div class="input-field col s12">
            <i class="mdi-action-account-box prefix"></i>
            <input id="icon_prefix" name="phone_up" type="text" class="validate">
            <label for="icon_prefix">Номер телефону</label>
        </div>
        <div class="input-field col s6">
            <i class="mdi-communication-vpn-key prefix"></i>
            <input id="icon_prefix" name="pass_up" type="password" class="validate">
            <label for="icon_prefix">Пароль</label>
        </div>
        <div class="input-field col s6">
            <i class="mdi-communication-vpn-key prefix"></i>
            <input id="icon_prefix" name="pass_re" type="password" class="validate">
            <label for="icon_prefix">Повторіть пароль</label>
        </div>
        <div class="input-field col s6">
            <input type="button" onclick="sms();" class="btn-flat red darken-1 white-text waves-effect waves-light right" value='Отримати код'>
        </div>
        <div class="input-field col s6">
            <i class="mdi-communication-textsms prefix"></i>
            <input id="icon_prefix" name="code" type="text" class="validate">
            <label for="icon_prefix">Код з СМС</label>
        </div>

    <div class="modal-footer">
        <a href="#" class="modal-action modal-close waves-effect waves-light btn-flat">&times;</a>
        <a onClick="signup()" class="modal-action modal-close waves-effect waves-light white-text red darken-1 btn-flat">Зареєструватись</a>
    </div>
  </div>
</div>
<!--Footer-->
<footer id="contact" class="page-footer default_color scrollspy">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <form class="col s12" action="contact.php" method="post">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="mdi-action-account-circle prefix white-text"></i>
                            <input id="icon_prefix" name="name" type="text" class="validate white-text">
                            <label for="icon_prefix" class="white-text">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="mdi-communication-email prefix white-text"></i>
                            <input id="icon_email" name="email" type="email" class="validate white-text">
                            <label for="icon_email" class="white-text">Email-id</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="mdi-editor-mode-edit prefix white-text"></i>
                            <textarea id="icon_prefix2" name="message" class="materialize-textarea white-text"></textarea>
                            <label for="icon_prefix2" class="white-text">Message</label>
                        </div>
                        <div class="col offset-s7 s5">
                            <button class="btn waves-effect waves-light red darken-1" type="submit">Submit
                                <i class="mdi-content-send right white-text"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">taxijoker.com</h5>
                <ul>
                    <li><a class="white-text" href="tel:828">call 828 (callback)</a></li>
                    <li><a class="white-text" href="tel:0352401401">call (0352) 401-401 ternopil</a></li>
                    <li><a class="white-text" href="tel:0332285285">call (0332) 285-285 lutsk</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Localizations</h5>
                 <ul>
                    <li><a class="white-text" href="http://taxijoker.com/language.php?local=te"><?php echo $data['local_te']; ?></a></li>
                    <li><a class="white-text" href="http://taxijoker.com/language.php?local=lu"><?php echo $data['local_lu']; ?></a></li>
                    <li><a class="white-text" href="http://taxijoker.com/language.php?local=vn"><?php echo $data['local_vn']; ?></a></li>
					          <li><a class="white-text" href="http://taxijoker.com/language.php?lang=eng"><?php echo $data['lang_en']; ?></a></li>
                    <li><a class="white-text" href="http://taxijoker.com/language.php?lang=ua"><?php echo $data['lang_ua']; ?></a></li>
                    <li><a class="white-text" href="http://taxijoker.com/language.php?lang=ru"><?php echo $data['lang_ru']; ?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright default_color">
        <div class="container">
            by Pavlenko Andriy for Taxi Joker
            <?php echo "JokerUser::t ".JokerUser::Instance()->token ?>
        </div>
    </div>
</footer>


    <!--  Scripts-->
    <script src="http://taxijoker.com/min/plugin.js"></script>
    <script src="http://taxijoker.com/min/preloader.js"></script>
    <script src="http://taxijoker.com/min/custom.js"></script>
    <script src="http://taxijoker.com/min/geo.js"></script>
	<script>
      $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
      });

		function signin(){
		  var XHR = new XMLHttpRequest();
		  var FD  = new FormData();

		  // We push our data into our FormData object
		  FD.append('login', $('input[name=phone_in]').val());
		  FD.append('pass', $('input[name=pass_in]').val());

		  // We define what will happen if the data are successfully sent
		  XHR.addEventListener('load', function(event) {
        location.reload();
		  });

		  // We define what will happen in case of error
		  XHR.addEventListener('error', function(event) {
			alert('oops');
		  });

		  // We setup our request
		  XHR.open('POST', 'http://taxijoker.com/user/signin');

		  // We just send our FormData object, HTTP headers are set automatically
		  XHR.send(FD);
		}

		function sms(){
		var formData = {
			'phone'		: $('input[name=phone_up]').val()
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

		function sms_check(){
		var formData = {
			'phone'		: $('input[name=phone_up]').val(),
			'smscode'	: $('input[name=code]').val()
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
				return true;
			} else {
				if (data['code']=='901') {
					console.log('SMS CODE error: wrong data');
					$("#driver-form-content").after('<div class="chip fade in"><i class="material-icons">close</i><strong>SMS:</strong> Wrong phone number format or code format.</div>');
					return false;
				}
				if (data['code']=='902') {
					console.log('SMS CODE error: code not found or expired');
					$("#driver-form-content").after('<div class="chip"><i class="material-icons">close</i><strong>SMS:</strong> Wrong or expired code. Try again or send another code.</div>');
					return false;
				}
				console.log(data);
				return false;
			}
	    })
	    .fail(function(jqXHR, textStatus, errorThrown) {
	        console.log('SMS CODE fail');
	        console.log(errorThrown);
			return false;
	    });
		};

		function signup(){
			if (sms_check()){
				var XHR = new XMLHttpRequest();
				var FD  = new FormData();

				// We push our data into our FormData object
				FD.append('phone', $('input[name=phone_up]').val());
				FD.append('pass', $('input[name=pass_up]').val());
				FD.append('login', $('input[name=login]').val());
				FD.append('code', $('input[name=code]').val());

				// We define what will happen if the data are successfully sent
				XHR.addEventListener('load', function(event) {
					location.reload();
				});

				// We define what will happen in case of error
				XHR.addEventListener('error', function(event) {
					alert('oops');
				});

				// We setup our request
				XHR.open('POST', 'http://taxijoker.com/user/signup');

				// We just send our FormData object, HTTP headers are set automatically
				XHR.send(FD);
			}
		}
    </script>

	<?php foreach($includes as $includes_entry): ?>

		<?php if ($includes_entry=="callform") : ?>
			<!--script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script-->
 			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMDyZfuT156yQTgSi-S1D5i0Esu5oFnwE&libraries=places"></script>
			<script src="http://taxijoker.com/min/typeahead.js"></script>
			<script src="http://taxijoker.com/min/addresspicker.js"></script>
			<script src="http://taxijoker.com/jquery/formprocess.js"></script>
		<?php endif; ?>

		<?php if ($includes_entry=="joinform") : ?>
			<script src="http://taxijoker.com/jquery/jquery.validate.js"></script>
			<script src="http://taxijoker.com/jquery/jquery.validate.additional-methods.js"></script>
			<script src="http://taxijoker.com/jquery/jquery.ui.widget.js"></script>
			<script src="http://taxijoker.com/jquery/jquery.iframe-transport.js"></script>
			<script src="http://taxijoker.com/jquery/jquery.fileupload.js"></script>
			<script src="http://taxijoker.com/jquery/jquery.fileupload-image.js"></script>
		<?php endif; ?>

		<?php if ($includes_entry=="driver") : ?>
			<script src="http://taxijoker.com/min/typeahead.js"></script>
			<script src="http://taxijoker.com/jquery/carvendors.bloodhound.js"></script>
			<script src="http://taxijoker.com/jquery/tinycolor.js"></script>
			<script src="http://taxijoker.com/jquery/colorengine.js"></script>
			<script src="http://taxijoker.com/jquery/driverprocess.js"></script>
		<?php endif; ?>

		<?php if ($includes_entry=="dispatcher") : ?>
			<script src="http://taxijoker.com/jquery/dispatcherprocess.js"></script>
		<?php endif; ?>

		<?php if ($includes_entry=="chartist") : ?>
            <script src="http://taxijoker.com/min/chartist.min.js"></script>
            <script src="http://taxijoker.com/jquery/charter.js"></script>
        <?php endif; ?>

		<?php if ($includes_entry=="gmap3") : ?>
			<script src="http://maps.google.com/maps/api/js?key=AIzaSyBAbqqVrB5FTt1pmcsOTmSjIMWfxl3MPLo&libraries=geometry"></script>
			<script src="https://cdn.jsdelivr.net/gmap3/7.0.0/gmap3.min.js"></script>
		<?php endif; ?>

		<?php if ($includes_entry=="route") : ?>
			<script src="http://taxijoker.com/jquery/routemap.js"></script>
		<?php endif; ?>

		<?php if ($includes_entry=="price") : ?>
			<script src="http://taxijoker.com/jquery/pricemap.js"></script>
		<?php endif; ?>

	<?php endforeach; ?>



    </body>
</html>
