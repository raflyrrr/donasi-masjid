<!DOCTYPE html>
<html>

<head>
	<?php $this->load->view('layout/meta'); ?>
	<title>Home - Mariberamal</title>
	<?php $this->load->view('layout/css'); ?>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
</head>

<body>

	<?php $this->load->view('layout/header'); ?>

	<!--main-->
	<div class="container-fluid-full">

		<!--slider-->
		<br><br><br><br>
		<div class="row" id="homepage">
			<div class="col-md-12">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						<li data-target="#carousel-example-generic" data-slide-to="3"></li>
						<li data-target="#carousel-example-generic" data-slide-to="4"></li>
					</ol>

					<div id="row bg-img" id="rentyour">
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
								<img src="<?php echo base_url('assets/front/images/slider/masjid-2.png') ?>" alt="0">
							</div>
							<div class="item">
								<img src="<?php echo base_url('assets/front/images/slider/masjid-1.png') ?>" alt="1">
							</div>
							<div class="item">
								<img src="<?php echo base_url('assets/front/images/slider/masjid-3.png') ?>" alt="2">
							</div>
							<div class="item">
								<img src="<?php echo base_url('assets/front/images/slider/masjid-4.png') ?>" alt="3">
							</div>
							<div class="item">
								<img src="<?php echo base_url('assets/front/images/slider/masjid-5.png') ?>" alt="4">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end slider-->

		<br><br>
		<div class="row" id="city">
			<div class="section">
				<div class="col-md-12 text-center">
					<h5 class="font-purple font-bold font-xl">Mari Beramal</h5>
					<p class="font-medium font-md">Tebar Kemuliaaan bersama kami #OrangBaik #ManusiaDermawan</p>
					<br><br>

				</div>

				<?php
				foreach ($donasi as $row) {
				?>

					<a href="<?php echo base_url('/donasi/detail/' . $row->id_donasi); ?>">
						<div class="flex-container_item col-md-4">
							<div class="thumbnail" style="padding: 0;">
								<img style="width: 300px; height: 250px;" src="<?php echo base_url('assets/' . $row->img1); ?>" />
								<div class="caption">
									<h4 class="font-regular"><?php echo $row->nama_donasi; ?></h4>
								</div>
								<hr>
								<div class="col-md-6">
									<h5>&nbsp;Tersisa</h5>
									<h4><span class="m-card_footer">&nbsp;<?php echo $row->masa_aktif; ?> hari</span></h4>
								</div>
								<div class="col-md-6">
									<h5>&nbsp;Terkumpul</h5>
									<h4><span class="m-card_footer">&nbsp;<?php echo 'Rp.' . nominal($row->perolehan_donasi); ?></span></h4>
								</div>
							</div>
						</div>
					<?php

				} ?>
					</a>
			</div>
		</div>

		<?php $this->load->view('layout/footer'); ?>

	</div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function() {
			// Add smooth scrolling to all links
			$("a").on('click', function(event) {

				// Make sure this.hash has a value before overriding default behavior
				if (this.hash !== "") {
					// Prevent default anchor click behavior
					event.preventDefault();

					// Store hash
					var hash = this.hash;

					// Using jQuery's animate() method to add smooth page scroll
					// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
					$('html, body').animate({
						scrollTop: $(hash).offset().top
					}, 800, function() {

						// Add hash (#) to URL when done scrolling (default click behavior)
						window.location.hash = hash;
					});
				} // End if
			});
		});
	</script>

	<?php $this->load->view('layout/js'); ?>

</body>

</html>