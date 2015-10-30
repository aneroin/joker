<?php
session_start();
	class Drivers extends Controller  {
		public function __construct($locale = null) {
			parent::__construct();
		}

		public function Index($locale = null) {
			$title = "Taxi Joker - drivers";
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
			require 'models/drivers_model.php';
			//model init with locale params from sessing variables
    		$model = new Drivers_Model($_SESSION['lang'],$_SESSION['local']);
    		//rendering index page
			$this->view->render('drivers/index',$model->data,$title);
		}

		public function all($locale = null) {
			$title = "Taxi Joker - drivers list";
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
			require 'models/drivers_list_model.php';
			//model init with locale params from sessing variables
    		$model = new Drivers_List_Model($_SESSION['lang'],$_SESSION['local']);
    		//rendering list page
			$this->view->render('drivers/list',$model->data,$title);			
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
			require 'models/drivers_join_model.php';
			//model init with locale params from session variables
    		$model = new Drivers_Join_Model($_SESSION['lang'],$_SESSION['local']);
    		//rendering join page
			$this->view->render('drivers/join',$model->data,$title);				
		}

		public function faq($locale = null) {
			$title = "Taxi Joker - driver's FAQ";
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
			require 'models/drivers_faq_model.php';
			//model init with locale params from sessing variables
    		$model = new Drivers_FAQ_Model($_SESSION['lang'],$_SESSION['local']);
    		//rendering list page
			$this->view->render('drivers/faq',$model->data,$title);			
		}

		public function driverform($args = null) {
			parent::__construct();
			//connecting to the model
			require 'models/drivers_join_model.php';
			//model init with locale params from sessing variables
    		$model = new Drivers_JOIN_Model($_SESSION['lang'],$_SESSION['local']);

$driverform[0] = <<<EOT

				<div class="form-group" id="phone-group" data-error='{$model->data['driver_error_phone']}'>
					<label for="phone">{$model->data['phone']}:</label>
					<input type="text" class="form-control main" name="phone" id="phone" placeholder="380"  data-validation="length number" data-validation-length="12" data-validation-allowing="range[0;9]" maxlength=12>
				</div>

				<div class="form-group" id="submit-group">
					<input type="button" onclick="sms();" class="btn btn-second btn-xl btn3d capital" name="submit-driver-form" id="submit-driver-form" value='{$model->data['sms-btn']}'>
				</div>

				<div class="form-group" id="smscode-group" data-error='{$model->data['driver_error_smscode']}'>
					<label for="smscode">{$model->data['sms']}:</label>
					<input type="text" class="form-control main" name="smscode" id="smscode" data-validation="length alphanumeric" data-validation-length="4" maxlength=4>
				</div>				

				<div class="form-group" id="submit-group">
					<input type="button" onclick="driver_form_start();" class="btn btn-main btn-xl btn3d capital" name="submit-driver-form" id="submit-driver-form" value='{$model->data['main-btn']}'>
				</div>
EOT;

$driverform[1] = <<<EOT
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
					<input type="button" onclick="driver_form_next(2);" class="btn btn-main btn-xl btn3d capital" name="submit-driver-form" id="submit-driver-form" value='{$model->data['main-btn']}'>
				</div>
EOT;

$driverform[2] = <<<EOT
				<div class="form-group" id="car-group" data-error='{$model->data['driver_error_car']}'>
					<label for="carvendor">{$model->data['carvendor']}:</label>
					<input type="text" class="form-control main" name="carvendor" id="carvendor" pattern="([a-zA-Z])+" required="required" maxlength=45>
					<label for="carmodel">{$model->data['carmodel']}:</label>
					<input type="text" class="form-control main" name="carmodel" id="carmodel" pattern="([a-zA-Z ])+" required="required" maxlength=45>
					<label for="carcolor">{$model->data['carcolor']}:</label>
					<input type="color" class="form-control main color" name="carcolor" id="carcolor" pattern="(#{1}[a-fA-F0-9]{6})+" required="required" maxlength=45>
					<label for="carnumber">{$model->data['carnumber']}:</label>
					<input type="text" class="form-control main" name="carnumber" id="carnumber" pattern="([Є-Я0-9])+" required="required" maxlength=15>
				</div>
				<div class="form-group" id="submit-group">
					<input type="button" onclick="driver_form_next(3);" class="btn btn-main btn-xl btn3d capital" name="submit-driver-form" id="submit-driver-form" value='{$model->data['main-btn']}'>
				</div>
EOT;

$driverform[3] = <<<EOT
				<div class="form-group" id="city-group" data-error='Помилка в адресі'>
					<label for="city">{$model->data['city']}:</label>
					<input type="text" class="form-control main" name="city" id="city" maxlength=45>
					<label for="street">{$model->data['street']}:</label>
					<input type="text" class="form-control main" name="street" id="street" maxlength=45>
					<label for="house">{$model->data['house']}:</label>
					<input type="text" class="form-control main" name="house" id="house" maxlength=45>
				</div>

				<div class="form-group" id="submit-group">
					<input type="button" onclick="driver_form_next(4);" class="btn btn-main btn-xl btn3d capital" name="submit-driver-form" id="submit-driver-form" value='{$model->data['main-btn']}'>
				</div>
EOT;

$driverform[4] = <<<EOT
				<div class="form-group" id="city-group" data-error='Помилка в файлах'>
					<label for="photo-portrait">{$model->data['photo-portrait']}:</label>
					<input type="file" class="form-control file" name="photo=portrait" id="photo-portrait" ccept="image/*">
					<label for="photo-car">{$model->data['photo-car']}:</label>
					<input type="file" class="form-control file" name="photo-car" id="photo-car" ccept="image/*">
				</div>

				<div class="form-group" id="submit-group">
					<input type="button" onclick="driver_form_finally();" class="btn btn-main btn-xl btn3d capital" name="submit-driver-form" id="submit-driver-form" value='{$model->data['main-btn']}'>
				</div>
EOT;

			echo $driverform[$args[0]];

		}
	}
?>