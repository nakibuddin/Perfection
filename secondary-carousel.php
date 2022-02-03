<?php

    if($_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])){

            die(header('location:index.php'));

    }
    echo '
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="demo" class="carousel slide" data-ride="carousel" data-interval="2500">

					<ul class="carousel-indicators secondary-carousel" id="carousel-indicators">
						<li data-target="#demo" data-slide-to="0" class="active"></li>
						<li data-target="#demo" data-slide-to="1"></li>
					</ul>

					<!-- Carousel items -->
					<div class="carousel-inner">

						<div class="carousel-item active">
							<div class="row">
								<div class="col-3">
									<a href="#">
										<img src="./images/secondary-carousel/bags.jpg" style="max-width:100%;">
									</a>
								</div>
								<div class="col-3">
									<a href="#">
										<img src="./images/secondary-carousel/gents shoe.jpg" style="max-width:100%;">
									</a>
								</div>
								<div class="col-3">
									<a href="#">
										<img src="./images/secondary-carousel/gents watch.jpg" style="max-width:100%;">
									</a>
								</div>
								<div class="col-3">
									<a href="#">
										<img src="./images/secondary-carousel/ladies shoe.jpg" style="max-width:100%;">
									</a>
								</div>
							</div>
							<!--.row-->
						</div>
						<!--.item-->

						<div class="carousel-item">
							<div class="row">
								<div class="col-3">
									<a href="#">
										<img src="./images/secondary-carousel/ladies watch.jpg" style="max-width:100%;">
									</a>
								</div>
								<div class="col-3">
									<a href="#">
										<img src="./images/secondary-carousel/purse.jpg" style="max-width:100%;">
									</a>
								</div>
								<div class="col-3">
									<a href="#">
										<img src="./images/secondary-carousel/sunglass.jpg" style="max-width:100%;">
									</a>
								</div>
								<div class="col-3">
									<a href="#">
										<img src="./images/secondary-carousel/wallet.jpg" style="max-width:100%;">
									</a>
								</div>
							</div>
							<!--.row-->
						</div>
						<!--.item-->
					</div>
					<!--.carousel-inner-->
					<a class="carousel-control-prev" href="#demo" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>

					<a class="carousel-control-next" href="#demo" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>

				</div>
				<!--.Carousel-->
			</div>
		</div>
	</div>';
	?>
