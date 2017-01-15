<!--graph -->
<div class="section">
    <div class="container">
    <h2 class="center"><?php echo $data['clientdata']->FirstName." ".$data['clientdata']->Surname ?>  <a href="profile"><i class="grey-text mdi-editor-mode-edit "></i></a> </h2>
	  </div>
</div>
<div class="section">
    <div class="container">
		<div class="row center">
			<div class="col s12 m6 l6" >
				<div class="card">
					<div class="card-content">
						<p class="card-title grey-text text-darken-4">зроблено замовлень</p>
						<h3 class="card-action grey-text text-darken-2"><?php echo count($data['ordersdata'])?></h3>
					</div>
				</div>
			</div>
            <div class="col s12 m6 l6" >
				<div class="card">
					<div class="card-content">
						<p class="card-title grey-text text-darken-4">проїхано кілометрів</p>
						<h3 class="card-action grey-text text-darken-2"><?php $k=0; foreach($data['ordersdata'] as $value){$k += $value->Distance;} unset($value); echo $k ?></h3>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>
<!--places-->
<!--div class="section">
    <div class="container">
    <h2 class="center text_h2">Мої місця</h2>
        <div class="row center">
			<div class="col s12 m6 l4" >
				<div class="card">
					<div class="card-content">
						<div class="waves-effect waves-block waves-light">
                        	<p class="activator"> Дім </p>
                    	</div>
                    	<div class="card-content">
                        	<p class="grey-text text-darken-4"> вул. Ізометрична 3 </p>
                    	</div>
                    	<div class="card-action">
                        	<a href="#"> змінити </a>
							<a href="#"> видалити </a>
                    	</div>
					</div>
				</div>
			</div>
            <div class="col s12 m6 l4" >
				<div class="card">
					<div class="card-content">
						<div class="waves-effect waves-block waves-light">
                        	<p class="activator"> Робота </p>
                    	</div>
                    	<div class="card-content">
                        	<p class="grey-text text-darken-4"> вул. Перпендикулярна 11 </p>
                    	</div>
                    	<div class="card-action">
                        	<a href="#"> змінити </a>
							<a href="#"> видалити </a>
                    	</div>
					</div>
				</div>
			</div>
			<div class="col s12 m6 l4" >
				<div class="card">
					<div class="card-content">
						<div class="waves-effect waves-block waves-light">
                        	<p class="activator"> Дача </p>
                    	</div>
                    	<div class="card-content">
                        	<p class="grey-text text-darken-4"> вул. Ортогональна </p>
                    	</div>
                    	<div class="card-action">
                        	<a href="#"> змінити </a>
							<a href="#"> видалити </a>
                    	</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</div-->
<!--abracadabra-->
<div class="section">
    <div class="container">
        <h2 class="center text_h2">Замовлення</h2>
        <div class="row center">
        <div class="col s12">
                <table class="bordered highlight responsive-table">
                    <thead>
                        <tr>
                            <th data-field="№">№</th>
                            <th data-field="КОЛИ">КОЛИ</th>
                            <th data-field="З">З</th>
                            <th data-field="ДО">ДО</th>
                            <th data-field="КМ">ВОДІЙ</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data['ordersdata'] as $order): ?>
                        <tr style="cursor:pointer" onclick="window.document.location='route/<?php echo $order->Id ?>';">
                            <td><?php echo is_null($order->Id) ? "-" : $order->Id ?></td>
                            <td><?php echo is_null($order->OrderTime) ? "-" : date('d.m.Y H:i:s', substr($order->OrderTime,6,10).substr($order->OrderTime,19,5)) ?></td>
                            <td><?php echo is_null($order->Address) ? "-" : $order->Address ?></td>
                            <td><?php echo is_null($order->Destination) ? "-" : $order->Destination ?></td>
                            <td><?php echo is_null($order->Driver) ? "-" : (is_null($order->Driver->Id) ? "-" : $order->Driver->Id) ?></td>
                        </tr>
                    <?php unset($order); endforeach; ?>
                    </tbody>
                </table>
        </div>
        </div>
    </div>
</div>
