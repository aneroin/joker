<!-- accent of the page -->
	<!-- photo background -->
	<div class="row rounded" id="accent-photo">
		<!-- text over photo -->
		<div class="col-md-5 text-center rounded-left" id="accent-text">
			<?php echo $data['accent'] ?>
		</div>
	</div>
	<!-- end of accent -->
	<p class="whitespace-h"> </p>
	<div class="row rounded"  id="accent-row">
		Ми пропонуємо для наших водіїв найкращі умови праці:
	</div>
	<p class="whitespace-h"> </p>	
	<!-- start of opportunity-panel -->	
	<div class="row info-panel adaptive rounded">
		<div class="opportunity-panel text-center col-md-3">
			<div class="row">
				<div class="col-xs-12">
					 <img border="0" src="<?php echo URL; ?>img/drivers.png">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					Дружній колектив
				</div>
			</div>
		</div>
		<p class="whitespace-h visible-sm"> </p>
		<div class="opportunity-panel text-center col-md-4 col-md-offset-1 half-cell-md">
			<div class="row">
				<div class="col-xs-12">
					 <img border="0" src="<?php echo URL; ?>img/time.png">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					Вільний графік
				</div>
			</div>
		</div>
		<p class="whitespace-h visible-sm"> </p>
		<div class="opportunity-panel text-center col-md-3 col-md-offset-1 half-cell-md">
			<div class="row">
				<div class="col-xs-12">
					 <img border="0" src="<?php echo URL; ?>img/money.png">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					Працюєте на себе
				</div>
			</div>
		</div>
	</div>
	<!-- end of opportunity-panel -->
	<p class="whitespace-h"> </p>
	<!-- vacancy offer -->
	<div class="row rounded"  id="accent-row">
		<a href=""> Для того щоб приєднатися до наших рядів слід лише заповнити спеціальну форму у нас на сайті </a>
	</div>

	<p class="whitespace-h"> </p>

	<!-- scrollers -->
	<a data-id="top" class="scroll-link totop side hidden-xs">
		<img class="img-circle" src="<?php echo URL; ?>img/up.png"/>
	</a>
	
	<a data-id="top" class="scroll-link totop top visible-xs">
		<img class="img-circle" src="<?php echo URL; ?>img/up-s.png"/>
	</a>

	<script>
		$(function(){
		$('.info-panel').hover(function(){
		        $(this.data("target")).slideToggle(500);
		    },function(){
		        $(this.data("target")).slideToggle(500);
		    });
		})
	</script>	