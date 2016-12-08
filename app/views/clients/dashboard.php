<!--graph -->
<div class="section">
    <div class="container">
    <h2 class="center"><?php echo $data['clientdata']->fname." ".$data['clientdata']->lname ?></h2>
	</div>
</div> 
<div class="section">
    <div class="container">
		<div class="row center">
			<div class="col s12 m6 l6" >
				<div class="card">
					<div class="card-content">
						<p class="card-title grey-text text-darken-4">зроблено замовлень</p>
						<h3 class="card-action grey-text text-darken-2"><?php echo $data['clientdata']->calls ?></h3>
					</div>
				</div>	
			</div>
            <div class="col s12 m6 l6" >
				<div class="card">
					<div class="card-content">
						<p class="card-title grey-text text-darken-4">проїхано кілометрів</p>
						<h3 class="card-action grey-text text-darken-2"><?php echo $data['clientdata']->kilometers ?></h3>
					</div>
				</div>	
			</div>
        </div>
    </div>
</div> 
<!--places-->
<div class="section">
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
</div> 
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
                    <?php foreach ($data['clientdata']->orders as $order): ?>
                        <tr style="cursor:pointer" onclick="window.document.location='route/<?php echo $order->id ?>';">
                            <td><?php echo $order->id ?></td>
                            <td><?php echo $order->when ?></td>
                            <td><?php echo $order->from ?></td>
                            <td><?php echo $order->to ?></td>
                            <td><?php echo $order->callsign ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
        </div>
        </div>
        </div>