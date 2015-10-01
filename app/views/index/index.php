<?php require 'views/header.php'; ?>
<!-- toggle buttons -->
<a href="#menu-toggle" class="btn btn-yellow" id="menu-toggle-wrapper">
	<img border="0" alt="toggle menu" src="<?php echo URL; ?>img/sidebar.gif" width="100%" height="auto">
</a>

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
	 <p class="whitespace-h"> </p>
	<!-- information -->
	<div class="row">
		<!-- information panel -->
		<div class="col-md-4 col-md-offset-1 info-panel text-center rounded" >
		<div class="row">
			<div class="col-xs-12" >
				 <img border="0" src="<?php echo URL; ?>img/car.png">
			</div>
			<div class="col-xs-12" >
				 у нашому штаті 000 машин
			</div>
		</div>
		</div>
		 <p class="whitespace-h visible-xs"> </p>
		<!-- information panel -->
		<div class="col-md-4 col-md-offset-2 info-panel text-center rounded">
		<div class="row">
			<div class="col-xs-12" >
				 <img border="0" src="<?php echo URL; ?>img/client.png">
			</div>
			<div class="col-xs-12" >
				сьогодні виконано 0000 замовлень
			</div>
		</div>
		</div>
	</div>
	 <p class="whitespace-h"> </p>
	 <!-- form panel -->
	<div class="row rounded" id="accent-buttons">
		<div class="col-md-8" id="call-form">
			 <form role="form">
			  <div class="form-group">
				<label for="phone"><?php echo $data['phone'] ?>:</label>
				<input type="text" class="form-control main" id="phone">
				<label for="name"><?php echo $data['name'] ?>:</label>
				<input type="text" class="form-control main" id="name">
			  </div>
			  <div class="form-group">
				<label for="from"><?php echo $data['from'] ?>:</label>
				<input type="text" class="form-control main" id="from">
				<label for="to"><?php echo $data['where'] ?>:</label>
				<input type="text" class="form-control main" id="to">
			  </div>
			  <div class="form-group">
				<label for="comment"><?php echo $data['comment'] ?>:</label>
				<input type="text" class="form-control main" id="comment">
			  </div>
			  <button type="submit" class="btn btn-main btn-xl btn3d capital"><?php echo $data['main-btn'] ?></button>
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
		<img class="img-circle" src="img/up.png">
	</a>
	
	<a data-id="top" class="scroll-link totop top visible-xs">
		<img class="img-circle" src="img/up-s.png">
	</a>

	
	
	<!-- callback modal -->
	<div id="callbackModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">callback</button>
			<h4 class="modal-title">передзвоніть мені</h4>
		  </div>
		  <div class="modal-body">
		 <form role="form">
			  <div class="form-group capital black">
				<label for="phone"><?php echo $data['phone'] ?>:</label>
				<input type="text" class="form-control" id="phone">
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
		
	
	
	<!-- inline scripts -->
<script>
    $("#menu-toggle-wrapper").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
<?php require 'views/footer.php'; ?>