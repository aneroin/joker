<?php
session_start();
	class Drivers extends Controller  {
		public function __construct($locale = null) {
			parent::__construct();
		}

		public function Index($locale = null) {
			$title = "Таксі Джокер - Водії";
			//if locale param is set - setting up session variables
			if (isset($locale)) {
				$_SESSION['local'] = $locale;
			} else {
				if (!isset($_SESSION['local']))
					$_SESSION['local'] = 'te';
			}
			//connecting to the model
			require 'models/drivers_model.php';
			//model init with locale params from sessing variables
    		$model = new Drivers_Model($_SESSION['lang'],$_SESSION['local']);
    		//rendering drivers page
			$this->view->render('drivers/index',$model->data,$title);
		}

		public function join($locale = null) {
			$title = "Таксі Джокер - Стати водієм";
			//if locale param is set - setting up session variables
			if (isset($locale)) {
				$_SESSION['local'] = $locale;
			} else {
				if (!isset($_SESSION['local']))
					$_SESSION['local'] = 'te';
			}
			//connecting to the model
			require 'models/drivers_join_model.php';
			//model init with locale params from session variables
    		$model = new Drivers_Join_Model($_SESSION['lang'],$_SESSION['local']);
    		$inc = Array("joinform","driver");
    		//rendering drivers join page
			$this->view->render('drivers/join',$model->data,$title,$inc);			
		}

		public function faq($locale = null) {
			$title = "Таксі Джокер - FAQ";
			parent::__construct();
			//if locale param is set - setting up session variables
			if (isset($locale)) {
				$_SESSION['local'] = $locale;
			} else {
				if (!isset($_SESSION['local']))
					$_SESSION['local'] = 'te';
			}
			//connecting to the model
			require 'models/drivers_faq_model.php';
			//model init with locale params from sessing variables
    		$model = new Drivers_FAQ_Model($_SESSION['lang'],$_SESSION['local']);
    		//rendering list page
			$this->view->render('drivers/faq',$model->data,$title);			
		}

		public function dashboard($locale = null,$user = null) {
			if (parent::auth($user)){
				$title = "Таксі Джокер - Кабінет водія";
				//if locale param is set - setting up session variables
				if (isset($locale)) {
					$_SESSION['local'] = $locale;
				} else {
					if (!isset($_SESSION['local']))
						$_SESSION['local'] = 'te';
				}
				//connecting to the model
				require 'models/drivers_model.php';
				//model init with locale params from session variables
				$model = new Drivers_Model($_SESSION['lang'],$_SESSION['local']);
				$inc = Array("driver","chartist");
				//rendering drivers join page
				$this->view->render('drivers/dashboard',$model->data,$title,$inc);	
			} else {
				return false;	
			}
		}

		public function driverform($args = null) {
			parent::__construct();
			//connecting to the model
			require 'models/drivers_join_model.php';
			//model init with locale params from sessing variables
    		$model = new Drivers_JOIN_Model($_SESSION['lang'],$_SESSION['local']);

$driverform[0] = <<<EOT

				<div class="form-group" id="phone-group" data-error='{$model->data['driver_error_phone']}'>
				    <div class="row">
				    <div class="input-field col s12 m12">
			            <label for="phone">{$model->data['phone']} (380XXYYYYYYY):</label>
			            <input type="text" class="form-control main" name="phone" id="phone"
			            pattern="(\b(380){1}[0-9]{9}){1}" maxlength=12>
		            </div>
		            </div>
	            </div>

	            <div class="form-group" id="code-group">
	            	<div class="row">
				    <div class="input-field col s12 m12">
						<input type="button" onclick="sms();" class="btn waves-effect waves-light right" 
							name="submit-driver-form" id="submit-driver-form" value='{$model->data['sms-btn']}'>
				    </div>
		            </div>
				</div>

				<div class="form-group" id="smscode-group" data-error='{$model->data['driver_error_smscode']}'>
				    <div class="row">
				    <div class="input-field col s12 m12">
				    	<label for="smscode">{$model->data['sms']}:</label>
				    	<input type="text" class="form-control main" name="smscode" id="smscode" 
				    		data-validation="length alphanumeric" data-validation-length="4" maxlength=4>			    	
				    </div>
		            </div>
				</div>			


	            <div class="form-group" id="submit-group">
	            	<div class="row">
				    <div class="input-field col s6 m4 offset-s6 offset-m8">
						<input type="button" onclick="driver_form_start();" class="btn waves-effect waves-light right" 
							name="submit-driver-form" id="submit-driver-form" value='{$model->data['main-btn']}'>
				    </div>
		            </div>
				</div>
EOT;

$driverform[1] = <<<EOT
				<div class="form-group" id="name-group" data-error='{$model->data['driver_error_name']}'>
				    <div class="row">
				    <div class="input-field col s12 m12">
				    	<label for="lname">{$model->data['lname']}:</label>
						<input type="text" class="form-control main" name="lname" id="lname" 
							pattern="([Є-Яа-ї])+" required="required" maxlength="45">
					</div>
					<div class="input-field col s12 m12">
						<label for="fname">{$model->data['fname']}:</label>
						<input type="text" class="form-control main" name="fname" id="fname" 
							pattern="([Є-Яа-ї])+" required="required" maxlength="45">
					</div>
					<div class="input-field col s12 m12">
						<label for="mname">{$model->data['mname']}:</label>
						<input type="text" class="form-control main" name="mname" id="mname" 
							pattern="([Є-Яа-ї])+" required="required" maxlength="45">
			        </div>
		            </div>
	            </div>

				<div class="form-group" id="accept-group" data-error='{$model->data['driver_error_accept']}'>
	            	<div class="row">
	            	<div class="input-field col s12 m12">
		            	{$model->data['accept']}
						<input type="checkbox" class="filled-in" name="accept" id="accept" required="required" checked="checked"/>
	      				<label for="accept">{$model->data['accept_des']}</label>
				    </div>
		            </div>
				</div>

	            <div class="form-group" id="submit-group">
	            	<div class="row">
				    <div class="input-field col s6 m4 offset-s6 offset-m8">
						<input type="button" onclick="driver_form_next(2);" class="btn waves-effect waves-light right" 
							name="submit-driver-form" id="submit-driver-form" value='{$model->data['main-btn']}'>
				    </div>
		            </div>
				</div>				
EOT;

$driverform[2] = <<<EOT
				<div class="form-group" id="car-group" data-error='{$model->data['driver_error_car']}'>
				    <div class="row">
				    <div class="input-field col s12 m12">
						<label for="carvendor">{$model->data['carvendor']}:</label>
						<input type="text" class="form-control main typeahead" name="carvendor" id="carvendor" 
							pattern="([a-zA-Z0-9 -])+" required="required" maxlength=45>
					</div>
					<div class="input-field col s12 m12">
						<label for="carmodel">{$model->data['carmodel']}:</label>
						<input type="text" class="form-control main" name="carmodel" id="carmodel" 
							pattern="([a-zA-Z0-9 -])+" required="required" maxlength=45>
					</div>
					<div class="input-field col s12 m12">
						<label class="active" for="carcolor">{$model->data['carcolor']}:</label>
						<input type="color" class="form-control main color" name="carcolor" id="carcolor" 
							pattern="(#{1}[a-fA-F0-9]{6})+" required="required" maxlength=45>
							<i>натисніть щоб вибрати</i>
					</div>
					<div class="input-field col s12 m12">
						<label for="carnumber">{$model->data['carnumber']}:</label>
						<input type="text" class="form-control main" name="carnumber" id="carnumber" 
							pattern="([Є-Я]*[0-9]+[-]{0,1}[0-9]+[Є-Я]+)" required="required" maxlength=15>
			        </div>
		            </div>
	            </div>

	            <div class="form-group" id="submit-group">
	            	<div class="row">
				    <div class="input-field col s6 m4">
						<input type="button" onclick="driver_form_prev(1);" class="btn waves-effect waves-light right" 
							name="submit-driver-form" id="submit-driver-form" value='назад{$model->data['back-btn']}'>
					</div>
					<div class="input-field col s6 m4 offset-m4">
						<input type="button" onclick="driver_form_next(3);" class="btn waves-effect waves-light right" 
							name="submit-driver-form" id="submit-driver-form" value='{$model->data['main-btn']}'>
				    </div>
		            </div>
				</div>	
EOT;

$driverform[3] = <<<EOT
				<div class="form-group" id="city-group" data-error='Помилка в адресі'>
				    <div class="row">
				    <div class="input-field col s12 m12">
						<label for="city">{$model->data['city']}:</label>
						<input type="text" class="form-control main" name="city" id="city"
							pattern="([Є-Яа-ї -])+" required="required" maxlength="45">
					</div>
					<div class="input-field col s12 m12">
						<label for="street">{$model->data['street']}:</label>
						<input type="text" class="form-control main" name="street" id="street" 
							pattern="([Є-Яа-ї0-9 -])+" required="required" maxlength="45">
					</div>
					<div class="input-field col s12 m6">
						<label for="house">{$model->data['house']}:</label>
						<input type="text" class="form-control main" name="house" id="house" 
							pattern="([Є-Яа-ї0-9 -])+" required="required" maxlength="45">
					</div>
					<div class="input-field col s12 m6">
						<label for="apartment">{$model->data['apartment']}:</label>
						<input type="text" class="form-control main" name="apartment" id="apartment" 
							pattern="([0-9])*" maxlength="45">
					</div>
			        </div>
		            </div>
	            </div>

	            <div class="form-group" id="submit-group">
	            	<div class="row">
				    <div class="input-field col s6 m4">
					    <input type="button" onclick="driver_form_prev(2);" class="btn waves-effect waves-light right" 
							name="submit-driver-form" id="submit-driver-form" value='назад{$model->data['back-btn']}'>
					</div>
					<div class="input-field col s6 m4 offset-m4">
						<input type="button" onclick="driver_form_next(4);" class="btn waves-effect waves-light right" 
							name="submit-driver-form" id="submit-driver-form" value='{$model->data['main-btn']}'>	
				    </div>
		            </div>
				</div>	
EOT;

$driverform[4] = <<<EOT
				<div class="form-group" id="portrait-group" data-error='Помилка в файлах'>
				    <div class="row">
				    <div class="file-field input-field col s12 m12">
					 <div class="btn">
						<span>{$model->data['photo-portrait']}</span>
						<input type="file">
					  </div>
						<input type="file" class="form-control file" id="portrait" name="files[]" 
							data-url='{$model->data['uploadurl']}' accept="image/*">
					</div>
					</div>
					<div class="row">
				    	<div class="progress" id="portrait-progress" style="width: 0%; height: 24px; background-color: green;"></div>
					</div>
				</div>
				
				<div class="form-group" id="car-group" data-error='Помилка в файлах'>
					<div class="row">
				    <div class="file-field input-field col s12 m12">
					 <div class="btn">
						<span>Фото автомобіля</span>
						<input type="file">
					  </div>
						<input type="file" class="form-control file" id="car" name="files[]" 
							data-url='{$model->data['uploadurl']}' accept="image/*">
					</div>
					</div>
					<div class="row">
				    	<div class="progress" id="car-progress" style="width: 0%; height: 24px; background-color: green;"></div>
					</div>
				</div>


				<div class="form-group" id="submit-group">
	            	<div class="row">
				    <div class="input-field col s6 m4">
						<input type="button" onclick="driver_form_prev(3);" class="btn waves-effect waves-light right" 
							name="submit-driver-form" id="submit-driver-form" value='назад{$model->data['back-btn']}'>
					</div>
					<div class="input-field col s6 m4 offset-m4">
						<input type="button" onclick="driver_form_finally();" class="btn waves-effect waves-light right" 
							name="submit-driver-form" id="submit-driver-form" value='{$model->data['main-btn']}'>
				    </div>
		            </div>
				</div>	
EOT;

			echo $driverform[$args[0]];

		}
	}
?>