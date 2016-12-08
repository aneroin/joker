<!--map -->
<div class="section">
    <div class="container">
		<div class="col s12 m12 l12" >
			<p class="center" id="where"><?php echo $data['routedata']->from; ?> - <?php echo $data['routedata']->to; ?></p>
			<p class="center" id="when"><?php echo $data['routedata']->when; ?></p>	
			<div class="card gm-card">
				<div class="gm-map" id="map" 
					 data-from="<?php echo $data['routedata']->from; ?>"
					 data-to="<?php echo $data['routedata']->to; ?>"
					 data-when="<?php echo $data['routedata']->when; ?>"
				></di>></div>
			</div>	
		</div>
    </div>
</div> 