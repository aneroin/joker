<?php

$driverform[0] = <<<EOT
				<div class="form-group" id="name-group" data-error='Помилка в імені'>
					<label for="lname">Прізвище:</label>
					<input type="text" class="form-control main" id="lname" maxlength=45>
					<label for="fname">Ім'я:</label>
					<input type="text" class="form-control main" id="fname" maxlength=45>
					<label for="mname">По-батькові:</label>
					<input type="text" class="form-control main" id="mname" maxlength=45>
				</div>

				<div class="form-group" id="phone-group" data-error='Помилка в номері телефону'>
					<label for="phone">Номер телефону:</label>
					<input type="text" class="form-control main" id="phone" placeholder="380" maxlength=12>
				</div>

				<div class="form-group" id="city-group" data-error='Помилка в назві міста'>
					<label for="city">Ваше місто:</label>
					<input type="text" class="form-control main" id="city" maxlength=45>
				</div>

				<div class="form-group" id="accept-group" data-error='Підтвердження обов'язкове>
					Я надаю згоду на обробку моїх персональних даних
					<span class="checkbox checkbox-success">
						<input class="styled" id="accept" type="checkbox" value="" required="true">
						<label for="accept" style="font-weight: 200; font-size: 12pt;">Підтверджую</label>
					</span>
				</div>

				<div class="form-group" id="submit-group">
					<input type="button" onclick="driver_form_next(1);" class="btn btn-main btn-xl btn3d capital" id="submit-driver-form" value='Далі'>
				</div>
EOT;

$driverform[1] = <<<EOT
				<div class="form-group" id="car-group" data-error='Помилка даних про автомобіль'>
					<label for="carvendor">Марка автомобіля:</label>
					<input type="text" class="form-control main" id="carvendor" maxlength=45>
					<label for="carmodel">Модель автомобіля:</label>
					<input type="text" class="form-control main" id="carmodel" maxlength=45>
					<label for="carcolor">Колір автомобіля:</label>
					<input type="text" class="form-control main" id="carcolor" maxlength=45>
					<label for="carnumber">Державний номер:</label>
					<input type="text" class="form-control main" id="carnumber" maxlength=45>
				</div>
				<div class="form-group" id="submit-group">
					<input type="button" onclick="driver_form_next(2);" class="btn btn-main btn-xl btn3d capital" id="submit-driver-form" value='Далі'>
				</div>
EOT;

$driverform[2] = <<<EOT
				<div class="form-group" id="name-group" data-error='{$data['driver_error_name']}'>
					<label for="lname">{$data['lname']}:</label>
					<input type="text" class="form-control main" id="lname" maxlength=45>
				</div>
				<div class="form-group" id="submit-group">
					<input type="button" onclick="driver_form_next(0);" class="btn btn-main btn-xl btn3d capital" id="submit-driver-form" value='Далі'>
				</div>
EOT;


$step = $_POST['step'];
echo $driverform[$step];
?>