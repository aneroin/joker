<?php
session_start();
	class Dispatchers extends Controller  {
		public function __construct($locale = null) {
			parent::__construct();
		}

		public function Index($locale = null) {
			$title = "Taxi Joker - dispatchers";
			//if locale param is set - setting up session variables
			if (isset($locale)) {
				$_SESSION['lang'] = $locale['0'];
				$_SESSION['local'] = $locale['1'];
			} else {
				if (!isset($_SESSION['lang']))
					$_SESSION['lang'] = 'ua';
				if (!isset($_SESSION['local']))
					$_SESSION['local'] = 'te';
			}
			//connecting to the model
			require 'models/dispatchers_model.php';
			//model init with locale params from sessing variables
    		$model = new Dispatchers_Model($_SESSION['lang'],$_SESSION['local']);
    		//rendering index page
			$this->view->render('dispatchers/index',$model->data,$title);
		}

		public function all($locale = null) {
			$title = "Taxi Joker - dispatchers list";
			parent::__construct();
			//if locale param is set - setting up session variables
			if (isset($locale)) {
				$_SESSION['lang'] = $locale['0'];
				$_SESSION['local'] = $locale['1'];
			} else {
				if (!isset($_SESSION['lang']))
					$_SESSION['lang'] = 'ua';
				if (!isset($_SESSION['local']))
					$_SESSION['local'] = 'te';
			}
			//connecting to the model
			require 'models/dispatchers_list_model.php';
			//model init with locale params from sessing variables
    		$model = new Dispatchers_List_Model($_SESSION['lang'],$_SESSION['local']);
    		//rendering list page
			$this->view->render('dispatchers/list',$model->data,$title);			
		}

		public function join($locane = null) {
			$title = "Taxi Joker - join us";
			parent::__construct();
			//if locale param is set - setting up session variables
			if (isset($locale)) {
				$_SESSION['lang'] = $locale['0'];
				$_SESSION['local'] = $locale['1'];
			} else {
				if (!isset($_SESSION['lang']))
					$_SESSION['lang'] = 'ua';
				if (!isset($_SESSION['local']))
					$_SESSION['local'] = 'te';
			}
			//connecting to the model
			require 'models/dispatchers_join_model.php';
			//model init with locale params from session variables
    		$model = new Dispatchers_Join_Model($_SESSION['lang'],$_SESSION['local']);
    		//rendering join page
			$this->view->render('dispatchers/join',$model->data,$title);				
		}

		public function faq($locale = null) {
			$title = "Taxi Joker - dispatcher's FAQ";
			parent::__construct();
			//if locale param is set - setting up session variables
			if (isset($locale)) {
				$_SESSION['lang'] = $locale['0'];
				$_SESSION['local'] = $locale['1'];
			} else {
				if (!isset($_SESSION['lang']))
					$_SESSION['lang'] = 'ua';
				if (!isset($_SESSION['local']))
					$_SESSION['local'] = 'te';
			}
			//connecting to the model
			require 'models/dispatchers_faq_model.php';
			//model init with locale params from sessing variables
    		$model = new Dispatchers_FAQ_Model($_SESSION['lang'],$_SESSION['local']);
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
					<label for="phone">{$model->data['phone']}:</label>
					<input type="text" class="form-control main" name="phone" id="phone" placeholder="380" maxlength=12 pattern="(\b(380){1}[0-9]{9}){1}"">
				</div>

				<div class="form-group" id="submit-group">
					<input type="button" onclick="sms();" class="btn btn-second btn-xl btn3d capital" name="submit-driver-form" id="submit-driver-form" value='{$model->data['sms-btn']}'>
				</div>

				<div class="form-group" id="smscode-group" data-error='{$model->data['driver_error_smscode']}'>
					<label for="smscode">{$model->data['sms']}:</label>
					<input type="text" class="form-control main" name="smscode" id="smscode" data-validation="length alphanumeric" data-validation-length="4" maxlength=4>
				</div>				

				<div class="form-group" id="submit-group">
					<input type="button" onclick="dispatcher_form_start();" class="btn btn-main btn-xl btn3d capital" name="submit-driver-form" id="submit-driver-form" value='{$model->data['main-btn']}'>
				</div>
EOT;

$dispatcherform[1] = <<<EOT
				<div class="form-group" id="name-group" data-error='{$model->data['driver_error_name']}'>
					<label for="lname">{$model->data['lname']}:</label>
					<input type="text" class="form-control main" name="lname" id="lname" pattern="([Є-Яа-ї])+" required="required" maxlength="45">
					<label for="fname">{$model->data['fname']}:</label>
					<input type="text" class="form-control main" name="fname" id="fname" pattern="([Є-Яа-ї])+" required="required" maxlength="45">
					<label for="mname">{$model->data['mname']}:</label>
					<input type="text" class="form-control main" name="mname" id="mname" pattern="([Є-Яа-ї])+" required="required" maxlength="45">
				</div>

				<div class="form-group" id="accept-group" data-error='{$model->data['driver_error_accept']}'>
					{$model->data['accept']}
					<span class="checkbox checkbox-success">
						<input class="styled" name="accept" id="accept" type="checkbox" value="" required="required">
						<label for="accept" style="font-weight: 200; font-size: 12pt;">{$model->data['accept_des']}</label>
					</span>
				</div>

				<div class="form-group" id="submit-group">
					<input type="button" onclick="dispatcher_form_next(2);" class="btn btn-main btn-xl btn3d capital" name="submit-driver-form" id="submit-driver-form" value='{$model->data['main-btn']}'>
				</div>
EOT;

$dispatcherform[2] = <<<EOT
				<div class="form-group" id="city-group" data-error='Помилка в адресі'>
					<label for="city">{$model->data['city']}:</label>
					<input type="text" class="form-control main" name="city" id="city" pattern="([Є-Яа-ї -])+" required="required" maxlength="45">
					<label for="street">{$model->data['street']}:</label>
					<input type="text" class="form-control main" name="street" id="street" pattern="([Є-Яа-ї0-9 -])+" required="required" maxlength="45">
					<div class="row">
						<div class="col-xs-12 col-md-6">
							<label for="house">{$model->data['house']}:</label>
							<input type="text" class="form-control main" name="house" id="house" pattern="([Є-Яа-ї0-9 -])+" required="required" maxlength="45">
						</div>
						<div class="col-xs-12 col-md-6">
							<label for="apartment">{$model->data['apartment']}:</label>
							<input type="text" class="form-control main" name="apartment" id="apartment" pattern="([0-9])*" maxlength="45">
						</div>
					</div>
				</div>

				<div class="form-group" id="submit-group">
					<input type="button" onclick="dispatcher_form_next(3);" class="btn btn-main btn-xl btn3d capital" name="submit-driver-form" id="submit-driver-form" value='{$model->data['main-btn']}'>
					<input type="button" onclick="dispatcher_form_prev(1);" class="btn btn-second btn-xl btn3d capital" name="submit-driver-form" id="submit-driver-form" value='назад'>
				</div>
EOT;

$dispatcherform[3] = <<<EOT
				<div class="form-group" id="file-group" data-error='Помилка в файлах'>
					<label for="photos">{$model->data['photo-portrait']}:</label>
					<input type="file" class="form-control file" id="photos" name="files[]" data-url='{$model->data['uploadurl']}' accept="image/*">
				</div>
				<div class="form-group" id="progress" style="height: 12px; background-color: #CCC;">
				    <div class="bar" style="width: 0%;"></div>
				</div>
				<div class="form-group" id="submit-group">
					<input type="button" onclick="dispatcher_form_finally();" class="btn btn-main btn-xl btn3d capital" name="submit-driver-form" id="submit-driver-form" value='{$model->data['main-btn']}'>
					<input type="button" onclick="dispatcher_form_prev(2);" class="btn btn-second btn-xl btn3d capital" name="submit-driver-form" id="submit-driver-form" value='назад'>
				</div>
EOT;

			echo $dispatcherform[$args[0]];

		}
	}
?>