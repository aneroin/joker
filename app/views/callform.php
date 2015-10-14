<div class="col-md-8" id="call-form" data-tid=<?php echo $data['id_taxi'] ?>>
	<form  role="form" id="f_online_order" class="callform">

		<div class="form-group" id="phone-group" data-error=<?php echo $data['call_error_phone'] ?>>
		<label for="phone"><?php echo $data['phone'] ?>:</label>
		<input type="text" class="form-control main" id="phone" placeholder="380"
			onblur="this.value=this.value.toUpperCase()" maxlength=12>
		</div>

		<div class="form-group" id="address-group" data-error=<?php echo $data['call_error_address'] ?>>
		<label for="sattlement"><?php echo $data['sattlement'] ?>:</label>
		<input type="text" class="form-control main" id="sattlement" value=<?php echo $data['call_city'] ?>
			onblur="this.value=this.value.toUpperCase()" maxlength=20>
		<label for="street"><?php echo $data['street'] ?>:</label>
		<input type="text" class="form-control main" id="street" 
			onblur="this.value=this.value.toUpperCase()" maxlength=50>
		<label for="home"><?php echo $data['home'] ?>:</label>
		<input type="text" class="form-control main" id="home"
			onblur="this.value=this.value.toUpperCase()" maxlength=12>
		<label for="entrance"><?php echo $data['entrance'] ?>:</label>
		<input type="text" class="form-control main" id="entrance"
			onblur="this.value=this.value.toUpperCase()" maxlength=5>
		</div>

		<div class="form-group" id="advanced-group">
		<label for="advanced"><?php echo $data['advanced'] ?>:</label>
		<input type="text" class="form-control main" id="advanced"
			onblur="this.value=this.value.toUpperCase()" maxlength=20>
		</div>

		<div class="form-group" id="address-to-group" data-error=<?php echo $data['call_error_address_to'] ?>>
		<label for="address-to"><?php echo $data['address-to'] ?>:</label>
		<input type="text" class="form-control main" id="address-to"
			onblur="this.value=this.value.toUpperCase()" maxlength=50>
		</div>

		<div class="form-group" id="message-group">
		<label for="message"><?php echo $data['message'] ?>:</label>
		<input type="text" class="form-control main" id="message"
			onblur="this.value=this.value.toUpperCase()" maxlength=50>
		</div>

		<div class="form-group" id="key-group" data-error='<?php echo $data['call_error_key'] ?>'>
			<label for="key">
				<?php echo $data['key'] ?>: &nbsp;
				<img src='http://taxijoker.dyndns.org/taxi/captcha.php' id='captcha'>
			</label>
			<input type="text" class="form-control main" id="key" maxlength=4>
		</div>
		<div class="form-group" id="submit-group">
			<input type="button"  onclick="send_new_order();" class="btn btn-main btn-xl btn3d capital" id="submit-call-taxi" value=<?php echo $data['main-btn'] ?>>
		</div>
	</form>
</div>

