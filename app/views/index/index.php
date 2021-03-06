<!-- accent of the page -->
	<!-- photo background -->
	<div class="row rounded-up" id="accent-photo">
		<!-- text over photo -->
		<div class="col-md-5 text-center rounded-up-left" id="accent-text">
			<?php echo $data['accent'] ?>
		</div>
	</div>
	<!-- accent buttons -->
	<div class="row rounded-down" id="accent-buttons">
		<div class="col-md-8">
			 <button type="button" class="btn btn-main btn-xl btn3d capital scroll-link" data-id="call-form">
			<?php echo $data['main-btn'] ?>
			</button>
		</div>
		<div class="col-md-4">
			 <button type="button" class="btn btn-second btn-xl btn3d capital" data-toggle="modal" data-target="#callbackModal">
			<?php echo $data['second-btn'] ?>
			 </button>
		</div>
	</div>
	<!-- end of accent -->

	<!-- information -->
	<p class="whitespace-h"> </p>
	<div class="row">
		<!-- information panel -->
		<div class="col-md-5 info-panel text-center rounded" >
			<div class="row">
				<div class="col-xs-6 col-md-12" >
					 <img border="0" src="<?php echo URL; ?>img/driver.png">
				</div>
				<div class="panel-footer hidden-xs hidden-sm col-xs-12 capital">
					<a href="/drivers/join"> <?php echo $data['driver-info-action']; ?> </a>
				</div>
				<div class="panel-text col-xs-6 col-md-12" >
					<?php echo $data['driver-info']; ?>
				</div>
			</div>
			<div class="panel-footer-xs hidden-md hidden-lg capital">
				<a href="/drivers/join"> <?php echo $data['driver-info-action']; ?> </a>
			</div>
		</div>
		 <p class="whitespace-h visible-xs  visible-sm"> </p>
		<!-- information panel -->
		<div class="col-md-5 col-md-offset-2 info-panel text-center rounded">
			<div class="row">
				<div class="col-xs-6 col-md-12" >
					 <img border="0" src="<?php echo URL; ?>img/operator.png">
				</div>
				<div class="panel-footer hidden-xs hidden-sm col-xs-12 capital">
					<a href="/dispatchers/join"> <?php echo $data['dispatcher-info-action']; ?> </a>
				</div>
				<div class="panel-text col-xs-6 col-md-12" >
					<?php echo $data['dispatcher-info']; ?>
				</div>
			</div>
			<div class="panel-footer-xs hidden-md hidden-lg capital">
				<a href="/dispatchers/join"> <?php echo $data['dispatcher-info-action']; ?> </a>
			</div>
		</div>
	</div>

	<!-- information -->
	<p class="whitespace-h"> </p>
	<div class="row rounded" id="accent-row">
		<?php echo $data['smartphone-row']; ?>
	</div>

	<!-- information -->
	<p class="whitespace-h"> </p>
	<div class="row">
		<!-- information panel -->
		<div class="col-md-5 info-panel text-center rounded" >
		<div class="row">
			<div class="col-xs-6 col-md-12" >
				 <?php echo file_get_contents(URL."img/playmarket.svg"); ?>
			</div>
			<div class="panel-footer hidden-xs hidden-sm col-xs-12 capital">
				<a href=<?php echo $data['smartphone-pm-link'];?> target="_blank"><?php echo $data['smartphone-row-action'];?></a>
			</div>
			<div class="panel-text col-xs-6 col-md-12" >
				Play Market
			</div>
		</div>
			<div class="panel-footer-xs hidden-md hidden-lg capital">
				<a href=<?php echo $data['smartphone-pm-link'];?> target="_blank"><?php echo $data['smartphone-row-action'];?></a>
			</div>
		</div>
		 <p class="whitespace-h visible-xs  visible-sm"> </p>
		<!-- information panel -->
		<div class="col-md-5 col-md-offset-2 info-panel text-center rounded">
		<div class="row">
			<div class="col-xs-6 col-md-12" >
				 <?php echo file_get_contents(URL."img/appstore.svg"); ?>
			</div>
			<div class="panel-footer hidden-xs hidden-sm col-xs-12 capital">
				<a href=<?php echo $data['smartphone-as-link'];?> target="_blank"><?php echo $data['smartphone-row-action'];?></a>
			</div>
			<div class="panel-text col-xs-6 col-md-12" >
				App Store
			</div>
		</div>
			<div class="panel-footer-xs hidden-md hidden-lg capital">
				<a href=<?php echo $data['smartphone-as-link'];?> target="_blank"><?php echo $data['smartphone-row-action'];?></a>
			</div>
		</div>
	</div>


	<!-- information -->
	<p class="whitespace-h"> </p>
	<div class="row rounded" id="news-row">
		<p class="whitespace-h"> </p>
		останні новини
		<p class="whitespace-h"> </p>
	</div>
	
<!-- information -->
	<p class="whitespace-h"> </p>
	<div class="row rounded" id="accent-row">
		<?php echo $data['social-row'];?>
	</div>

	<!-- information -->
	<p class="whitespace-h"> </p>
	<div class="row">
		<!-- information panel -->
		<div class="col-md-5 info-panel text-center rounded" >
		<div class="row">
			<div class="col-xs-6 col-md-12" >
				 <img border="0" src="<?php echo URL; ?>img/vk.png">
			</div>
			<div class="panel-footer hidden-xs hidden-sm col-xs-12 capital">
				<a href=<?php echo $data['social-vk-link'];?> target="_blank"><?php echo $data['social-action'];?></a>
			</div>
			<div class="panel-text col-xs-6 col-md-12" >
				<?php echo $data['social-vk-info'];?>
			</div>
		</div>
			<div class="panel-footer-xs hidden-md hidden-lg capital">
				<a href=<?php echo $data['social-vk-link'];?> target="_blank"><?php echo $data['social-action'];?></a>
			</div>
		</div>
		 <p class="whitespace-h visible-xs visible-sm"> </p>
		<!-- information panel -->
		<div class="col-md-5 col-md-offset-2 info-panel text-center rounded">
		<div class="row">
			<div class="col-xs-6 col-md-12" >
				 <img border="0" src="<?php echo URL; ?>img/fb.png">
			</div>
			<div class="panel-footer hidden-xs hidden-sm col-xs-12 capital">
				<a href=<?php echo $data['social-fb-link'];?> target="_blank"><?php echo $data['social-action'];?></a>
			</div>
			<div class="panel-text col-xs-6 col-md-12" >
				<?php echo $data['social-fb-info'];?>
			</div>
		</div>
			<div class="panel-footer-xs hidden-md hidden-lg capital">
				<a href=<?php echo $data['social-fb-link'];?> target="_blank"><?php echo $data['social-action'];?></a>
			</div>
		</div>
	</div>

	<!-- form panel -->
	<p class="whitespace-h"> </p>
	<div class="row rounded" id="accent-buttons">
		<?php require 'views/callform.php'; ?>
		<!-- form image -->
		<div class="col-md-4 hidden-xs hidden-sm" id="pull-down">
			<div id="pull-down-element">
				<img border="0" src="<?php echo URL; ?>img/form.png" style="max-width: 100%; max-height: 70%;"> </img>
			</div>
		</div>
	</div>
	
		
	<!-- scrollers -->
	<a data-id="top" class="scroll-link totop side hidden-xs">
		<img class="img-circle" src="<?php echo URL; ?>img/up.png"/>
	</a>
	
	<a data-id="top" class="scroll-link totop top visible-xs">
		<img class="img-circle" src="<?php echo URL; ?>img/up-s.png"/>
	</a>

	
	
	<!-- callback modal -->
	<div id="callbackModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><?php echo $data['close'] ?></button>
			<h4 class="modal-title black"><?php echo $data['second-btn'] ?></h4>
		  </div>
		  <div class="modal-body">
		 	<form role="form">
			  <div class="form-group capital black">
				<label for="phone"><?php echo $data['phone'] ?>:</label>
				<input type="text" class="form-control" id="phone" placeholder="+380">
				<label for="name"><?php echo $data['name'] ?>:</label>
				<input type="text" class="form-control" id="name">
			  </div>
			  <button type="submit" class="btn btn-second btn-xl btn3d capital capital"><?php echo $data['second-btn'] ?></button>
			</form>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default btn3d" data-dismiss="modal"><?php echo $data['close'] ?></button>
		  </div>
		</div>
	  </div>
	</div>
	

	<script>
		$(function(){
		$('.info-panel').hover(function(){
		        $(this).find('.panel-footer').slideDown(300);
		        console.log ("info_hover");
		    },function(){
		        $(this).find('.panel-footer').slideUp(300);
		    });
		})
	</script>	

	<script src="<?php echo URL; ?>jquery/formprocess.js"></script>