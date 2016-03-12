<?php
session_start();
	class Dispatchers extends Controller  {
		public function __construct($locale = null) {
			parent::__construct();
		}

		public function Index($locale = null) {
			$title = "Таксі Джокер - Диспетчери";
			//if locale param is set - setting up session variables
			if (isset($locale)) {
				$_SESSION['local'] = $locale;
			} else {
				if (!isset($_SESSION['local']))
					$_SESSION['local'] = 'te';
			}
			//connecting to the model
			require 'models/dispatchers_model.php';
			//model init with locale params from sessing variables
    		$model = new Dispatchers_Model($_SESSION['lang'],$_SESSION['local']);
    		//rendering dispatchers page
			$this->view->render('dispatchers/index',$model->data,$title);	
		}

		public function join($locale = null) {
			$title = "Таксі Джокер - Стати диспетчером";
			//if locale param is set - setting up session variables
			if (isset($locale)) {
				$_SESSION['local'] = $locale;
			} else {
				if (!isset($_SESSION['local']))
					$_SESSION['local'] = 'te';
			}
			//connecting to the model
			require 'models/dispatchers_join_model.php';
			//model init with locale params from session variables
    		$model = new Dispatchers_Join_Model($_SESSION['lang'],$_SESSION['local']);
    		$inc = Array("joinform","dispatcher");
    		//rendering dispatchers join page
			$this->view->render('dispatchers/join',$model->data,$title,$inc);				
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
			require 'models/dispatchers_faq_model.php';
			//model init with locale params from sessing variables
    		$model = new Drivers_FAQ_Model($_SESSION['lang'],$_SESSION['local']);
    		//rendering list page
			$this->view->render('dispatchers/faq',$model->data,$title);			
		}

public function dispatcherform($args = null) {
			parent::__construct();
			//connecting to the model
			require 'models/dispatchers_join_model.php';
			//model init with locale params from sessing variables
    		$model = new Dispatchers_JOIN_Model($_SESSION['lang'],$_SESSION['local']);
	
$dispatcherform[0] = <<<EOT

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
						<input type="button" onclick="dispatcher_form_start();" class="btn waves-effect waves-light right" 
							name="submit-driver-form" id="submit-driver-form" value='{$model->data['main-btn']}'>
				    </div>
		            </div>
				</div>
EOT;

$dispatcherform[1] = <<<EOT
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
						<input type="button" onclick="dispatcher_form_next(2);" class="btn waves-effect waves-light right" 
							name="submit-driver-form" id="submit-driver-form" value='{$model->data['main-btn']}'>
				    </div>
		            </div>
				</div>				
EOT;

$dispatcherform[2] = <<<EOT
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
					    <input type="button" onclick="dispatcher_form_prev(1);" class="btn waves-effect waves-light right" 
							name="submit-driver-form" id="submit-driver-form" value='назад{$model->data['back-btn']}'>
					</div>
					<div class="input-field col s6 m4 offset-m4">
						<input type="button" onclick="dispatcher_form_next(3);" class="btn waves-effect waves-light right" 
							name="submit-driver-form" id="submit-driver-form" value='{$model->data['main-btn']}'>	
				    </div>
		            </div>
				</div>	
EOT;
	
$dispatcherform[3] = <<<EOT
				<div class="form-group" id="file-group" data-error='Помилка в файлах'>
				    <div class="row">
				    <div class="input-field col s12 m12">
				    	<label for="photos">{$model->data['photo-portrait']}:</label>
						<input type="file" class="form-control file" multiple id="photos" name="files[]" 
							data-url='{$model->data['uploadurl']}' data-maxNumberOfFiles=5 accept="image/*">
					</div>
					</div>
				</div>

				<div class="form-group" id="progress" style="height: 12px; background-color: #CCC;">
				    <div class="bar" style="width: 0%;"></div>
				</div>

				<div class="form-group" id="submit-group">
	            	<div class="row">
				    <div class="input-field col s6 m4">
						<input type="button" onclick="dispatcher_form_prev(2);" class="btn waves-effect waves-light right" 
							name="submit-driver-form" id="submit-driver-form" value='назад{$model->data['back-btn']}'>
					</div>
					<div class="input-field col s6 m4 offset-m4">
						<input type="button" onclick="dispatcher_form_finally();" class="btn waves-effect waves-light right" 
							name="submit-driver-form" id="submit-driver-form" value='{$model->data['main-btn']}'>
				    </div>
		            </div>
				</div>	
EOT;
		
			echo $dispatcherform[$args[0]];

		}
	}
?>