<!--Banner-->
<div class="section no-pad-bot" id="head-banner">
    <img src="<?php echo URL; ?>img_m/calc.png"></img>
</div>

<!--abracadabra-->
<div id="prices" class="section scrollspy">
    <div class="container">
        <h2 class="center header text_b"><?php echo $data['price_sheet']; ?></h2>
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
							<input class="input-field col s12" id="from" data-default="<?php echo $data['from']; ?>" type="text" value="<?php echo $data['from']; ?>">
						</span>
						<span class="row">
							<input class="input-field col s12" id="to" data-default="<?php echo $data['to']; ?>" type="text" value="<?php echo $data['to']; ?>">
						</span>
					</span>
					<span class="col s12 m4">
						<span class="row">
							<a id="pricesDropdownHeader" class='dropdown-button btn-flat col s12 center' href='#' data-activates='pricesDropdown'><?php echo $data['price']; ?></a>
							<ul id="pricesDropdown" class="dropdown-content">
							</ul>
						</span>
						<span class="row">
							<input class="btn-flat col s12" type="button" onclick="calculatePrice(priceStandart)" value="<?php echo $data['calculate']; ?>">
							<input class="btn-flat col s12" type="button" onclick="resetPrice()" value="<?php echo $data['reset']; ?>">
						</span>
					</span>
				</span>
				<div class="center card-title" id="price" data-estimate="<?php echo $data['estimated_price']; ?>" data-currency="<?php echo $data['currency_uah']; ?>"></div>
				<div class="gm-map" id="map" style="height: 200px;"></div>
			</div>
		</div>
    </div>
</div>
