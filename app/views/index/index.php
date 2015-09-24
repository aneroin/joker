<?php require 'views/header.php'; ?>
<a href="#menu-toggle" class="btn btn-yellow" id="menu-toggle-wrapper">
	<img border="0" alt="toggle menu" src="<?php echo URL; ?>img/sidebar.gif" width="32" height="32">
</a>
<h3>
	<?php echo $data['title'] ?>
</h3>
<div class="row">
	<div class="col-xs-12 col-md-6">
		<?php echo $data['call-form'] ?>
	</div>
	<div class="hide-xs visible-md col-md-6">
		<?php echo $data['call-image'] ?>
	</div>
</div>
<script>
    $("#menu-toggle-wrapper").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
<?php require 'views/footer.php'; ?>