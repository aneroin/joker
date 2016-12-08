<!--Banner-->
<div class="section no-pad-bot" id="head-banner">
    <img src="<?php echo URL; ?>img_m/calc.png"></img>
</div>

<!--abracadabra-->
<div id="prices" class="section scrollspy">
    <div class="container">
        <h2 class="center header text_b">Тарифна сітка</h2>
        <div class="row center">
        <div class="col s12 m12 l12">
			<ul class="collapsible popout" data-collapsible="accordion">
                <?php echo $data['table'];?>
			</ul>
		</div>
        </div>
    </div>
</div>

<!--map -->
<div class="section">
    <div class="container">
		<div class="col s12 m12 l12" >
			<div class="card gm-card">
				<span class="row">
					<span class="col s12 m8">
						<span class="row">
							<input class="input-field col s12" id="from" type="text" value="звідки">
						</span>
						<span class="row">
							<input class="input-field col s12" id="to" type="text" value="куди">
						</span>
					</span>
					<span class="col s12 m4">
						<span class="row">
							<a id="pricesDropdownHeader" class='dropdown-button btn-flat col s12 center' href='#' data-activates='pricesDropdown'>тариф</a>
							<ul id="pricesDropdown" class="dropdown-content">
							</ul>
						</span>
						<span class="row">	
							<input class="btn-flat col s12" type="button" onclick="calculatePrice(priceStandart)" value="розрахувати">
							<input class="btn-flat col s12" type="button" onclick="resetPrice()" value="скинути">
						</span>
					</span>
				</span>
				<div class="center card-title" id="price"></div>
				<div class="gm-map" id="map" style="height: 200px;"></div>
			</div>	
		</div>
    </div>
</div> 