<?php require 'views/header.php'; ?>
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
		<div class="col-md-4 col-md-offset-1 info-panel text-center rounded" >
			<div class="row">
				<div class="col-xs-6 col-md-12" >
					 <img border="0" src="<?php echo URL; ?>img/driver.png">
				</div>
				<div class="panel-footer hidden-xs hidden-sm col-xs-12 capital">
					<a href=""> стати водієм </a>
				</div>
				<div class="panel-text col-xs-6 col-md-12" >
					 у нас 888 водіїв
				</div>
			</div>
			<div class="panel-footer-xs hidden-md hidden-lg capital">
				<a href=""> стати водієм </a>
			</div>
		</div>
		 <p class="whitespace-h visible-xs"> </p>
		<!-- information panel -->
		<div class="col-md-4 col-md-offset-2 info-panel text-center rounded">
			<div class="row">
				<div class="col-xs-6 col-md-12" >
					 <img border="0" src="<?php echo URL; ?>img/operator.png">
				</div>
				<div class="panel-footer hidden-xs hidden-sm col-xs-12 capital">
					<a href=""> стати диспетчером </a>
				</div>
				<div class="panel-text col-xs-6 col-md-12" >
					у нас 88 диспетчерів
				</div>
			</div>
			<div class="panel-footer-xs hidden-md hidden-lg capital">
				<a href=""> стати диспетчером </a>
			</div>
		</div>
	</div>

	<!-- information -->
	<p class="whitespace-h"> </p>
	<div class="row rounded" id="accent-row">
		часто користуєтесь смартфоном? Завантажуйте наш додаток для Android та iOS
	</div>

	<!-- information -->
	<p class="whitespace-h"> </p>
	<div class="row">
		<!-- information panel -->
		<div class="col-md-4 col-md-offset-1 info-panel text-center rounded" >
		<div class="row">
			<div class="col-xs-6 col-md-12" >
				 <img border="0" src="<?php echo URL; ?>img/gplay.png">
			</div>
			<div class="panel-footer hidden-xs hidden-sm col-xs-12 capital">
				<a href=""> завантажити</a>
			</div>
			<div class="panel-text col-xs-6 col-md-12" >
				Play Market
			</div>
		</div>
			<div class="panel-footer-xs hidden-md hidden-lg capital">
				<a href=""> завантажити</a>
			</div>
		</div>
		 <p class="whitespace-h visible-xs"> </p>
		<!-- information panel -->
		<div class="col-md-4 col-md-offset-2 info-panel text-center rounded">
		<div class="row">
			<div class="col-xs-6 col-md-12" >
				 <img border="0" src="<?php echo URL; ?>img/astore.png">
			</div>
			<div class="panel-footer hidden-xs hidden-sm col-xs-12 capital">
				<a href=""> завантажити</a>
			</div>
			<div class="panel-text col-xs-6 col-md-12" >
				App Store
			</div>
		</div>
			<div class="panel-footer-xs hidden-md hidden-lg capital">
				<a href=""> завантажити</a>
			</div>
		</div>
	</div>

	
	<!-- form panel -->
	<p class="whitespace-h"> </p>
	<div class="row rounded" id="accent-buttons">
		<div class="col-md-8" id="call-form">
			<form role="form" action="callform.php" method="GET" class="callform">
			 <div class="form-group" id="phone-group">
				<label for="phone"><?php echo $data['phone'] ?>:</label>
				<input type="text" class="form-control main" id="phone" placeholder="+380">
			 </div>
			 <div class="form-group" id="name-group">
				<label for="name"><?php echo $data['name'] ?>:</label>
				<input type="text" class="form-control main" id="name">
			 </div>
			 <div class="form-group" id="from-group">
				<label for="from"><?php echo $data['from'] ?>:</label>
				<input type="text" class="form-control main" id="from">
			 </div>
			 <div class="form-group" id="where-group">
				<label for="where"><?php echo $data['where'] ?>:</label>
				<input type="text" class="form-control main" id="where">
			 </div>
			 <div class="form-group" id="comment-group">
				<label for="comment"><?php echo $data['comment'] ?>:</label>
				<input type="text" class="form-control main" id="comment">
			 </div>
			 <button type="submit" class="btn btn-main btn-xl btn3d capital" id="submit-call-taxi"><?php echo $data['main-btn'] ?></button>
			</form>
		</div>
		<!-- form image -->
		<div class="col-md-4 hidden-xs">
			 <div class="whitespace-h"> - </div>
			 <div class="whitespace-h"> - </div>
			 <div class="whitespace-h"> - </div>
		</div>
	</div>
	
	
	
	<!-- scrollers -->
	<a data-id="top" class="scroll-link totop side hidden-xs">
		<img class="img-circle" src="img/up.png"/>
	</a>
	
	<a data-id="top" class="scroll-link totop top visible-xs">
		<img class="img-circle" src="img/up-s.png"/>
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
		    },function(){
		        $(this).find('.panel-footer').slideUp(300);
		    });
		})
	</script>	
	

<?php require 'views/footer.php'; ?>