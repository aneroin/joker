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
        <?php foreach($data['prices'] as $value): ?>
          <li>
              <div class="collapsible-header">
                  <?=$value['name']?>
              </div>
              <div class="collapsible-body">
                  <table class="striped responsive-table">
                      <thead>
                          <tr>
                              <th data-field="name"><?=$value['name']?></th>
                              <th data-field="incity">в місті</th>
                              <th data-field="outcity">за містом</th>
                          </tr>
                      </thead>
                      <tbody>

                        <?php if ($value['minprice_in']!=null || $value['minprice_out']!=null): ?>
                          <tr>
                              <td>Мінімальний проїзд</td>
                              <?php if ($value['minprice_in']!=null): ?>
                                <td><?=$value['minprice_in']?> грн (включає <?=$value['mindistance_in']?> км)</td>
                              <?php else: ?>
                                <td></td>
                              <?php endif; ?>
                              <?php if ($value['minprice_out']!=null): ?>
                                <td><?=$value['minprice_out']?> грн (включає <?=$value['mindistance_out']?> км)</td>
                              <?php else: ?>
                                <td></td>
                              <?php endif; ?>
                          </tr>
                        <?php endif; ?>
                        <?php if ($value['perkm_in']!=null || $value['perkm_out']!=null): ?>
                          <tr>
                              <td>Проїзд (за кілометр)</td>
                              <?php if ($value['perkm_in']!=null): ?>
                                <td><?=$value['perkm_in']?> грн</td>
                              <?php else: ?>
                                <td></td>
                              <?php endif; ?>
                              <?php if ($value['perkm_out']!=null): ?>
                                <td><?=$value['perkm_out']?> грн</td>
                              <?php else: ?>
                                <td></td>
                              <?php endif; ?>
                          </tr>
                        <?php endif; ?>
                        <?php if ($value['idling_in']!=null || $value['idling_out']!=null): ?>
                          <tr>
                              <td>Простій (за годину)</td>
                              <?php if ($value['idling_in']!=null): ?>
                                <td><?=$value['idling_in']?> грн</td>
                              <?php else: ?>
                                <td></td>
                              <?php endif; ?>
                              <?php if ($value['idling_out']!=null): ?>
                                <td><?=$value['idling_out']?> грн</td>
                              <?php else: ?>
                                <td></td>
                              <?php endif; ?>
                          </tr>
                        <?php endif; ?>
                        <?php if ($value['serving_in']!=null || $value['serving_out']!=null): ?>
                          <tr>
                              <td>Подача (за км)</td>
                              <?php if ($value['serving_in']!=null): ?>
                                <td><?=$value['serving_in']?> грн</td>
                              <?php else: ?>
                                <td></td>
                              <?php endif; ?>
                              <?php if ($value['serving_out']!=null): ?>
                                <td><?=$value['serving_out']?> грн</td>
                              <?php else: ?>
                                <td></td>
                              <?php endif; ?>
                          </tr>
                        <?php endif; ?>

                      </tbody>
                  </table>
              </div>
          </li>
        <?php endforeach; unset($value);?>
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
							<input class="btn-flat col s12" type="button" onclick="calculatePrice()" value="<?php echo $data['calculate']; ?>">
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

<script>
  var taxi_location = <?=json_encode($data['location'])?>;
  var taxi_prices = <?=json_encode(array_values($data['prices']))?>;
</script>
