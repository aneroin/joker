<!--DriverForm-->
<div class="section scrollspy" id="driverform">
    <div class="container">
        <h2 class="center header text_b white-text" id="step-cap">Форма:</h2>
        <div class="row">
            <div class="col-xs-12 col-md-4 col-md-push-8" id="driver-form-step">
                <ul class="step-displayer">
                    <li class="step" id="step-0" data-cap-s="1" data-cap="<?php echo $data['join_step_1'] ?>"> </li>
                    <li class="step" id="step-1" data-cap-s="2" data-cap="<?php echo $data['join_step_2'] ?>"> </li>
                    <li class="step" id="step-2" data-cap-s="3" data-cap="<?php echo $data['join_step_3'] ?>"> </li>
                    <li class="step" id="step-3" data-cap-s="4" data-cap="<?php echo $data['join_step_4'] ?>"> </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m8 l6 offset-m2 offset-l3 form-container" id="dispatcher-form">
				<div id="screen"> </div>
                <form  role="form" class="driverform" id="dispatcher-form-content">

                </form>
            </div>
        </div>
    </div>
</div>