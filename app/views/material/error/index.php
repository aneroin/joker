<div class="row">
	<div class="col-xs-12">
		<img src="<?php echo URL; ?>img/oops.png" class="img-responsive center"> </img>
	</div>
</div>

<p class="whitespace-h"> </p>

<div class="row">
	<div class="col-xs-12">
		<h2 class="center"> 
			<?php echo $this->errcode; ?>
		<br>
			<small> <?php echo $this->msg; ?> </small>
		<br>
			<a href="/"> try to go back </a>
		</h2>
	</div>
</div>