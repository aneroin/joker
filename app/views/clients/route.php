<!--map -->
<div class="section">
    <div class="container">
		<div class="col s12 m12 l12" >
			<p class="center" id="where"><?php echo is_null($data['routedata']->Address) ? "-" : $data['routedata']->Address ?> - <?php echo is_null($data['routedata']->Destination) ? "-" : $data['routedata']->Destination ?></p>
			<p class="center" id="when"><?php echo is_null($data['routedata']->OrderTime) ? "-" : DateTime::createFromFormat('U',substr($data['routedata']->OrderTime,6,10))->format("Y-m-d  H:i:s") ?></p>
			<div class="card gm-card">
				<div class="gm-map" id="map"
					 data-from="<?php echo is_null($data['routedata']->Address) ? "-" : $data['routedata']->Address ?>"
					 data-to="<?php echo is_null($data['routedata']->Destination) ? "-" : $data['routedata']->Destination ?>"
					 data-when="<?php echo is_null($data['routedata']->OrderTime) ? "-" : DateTime::createFromFormat('U',substr($data['routedata']->OrderTime,6,10))->format("Y-m-d  H:i:s") ?>"
				></div>
			</div>
		</div>
    </div>
</div>
