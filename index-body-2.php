<?php 

	if($_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])){

        die(header('location:index.php'));

    }
	
	echo '
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 mb-4">
					<div class="card text-white">
						<img src="./images/index-body-2/top picks.jpg" class="img-fluid">
		                <div class="card-img-overlay">
	                  		<h2 class="font-weight-bold mb-4">Top Picks</h2>
	                  		<a href="" class="btn btn-light">SHOP NOW</a>
		                </div>
		            </div>
				</div>

				<div class="col-md-6 mb-4">
					<div class="card text-white">
						<img src="./images/index-body-2/new arrivals.jpg" class="img-fluid">
		                <div class="card-img-overlay">
	                  		<h2 class="font-weight-bold mb-4">New Arrivals</h2>
	                  		<a href="" class="btn btn-light">SHOP NOW</a>
		                </div>
		            </div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 mb-4">
					<div class="card text-white">
						<img src="./images/index-body-2/new offers.jpg" class="img-fluid">
		                <div class="card-img-overlay">
	                  		<h2 class="font-weight-bold mb-4">New Offers</h2>
	                  		<a href="" class="btn btn-link text-white">SHOP NOW
	                  			<i class="fa fa-arrow-right ml-2"></i>
	                  		</a>
		                </div>
		            </div>
				</div>

				<div class="col-lg-4 mb-4">
					<div class="card text-white">
						<img src="./images/index-body-2/accessories.jpg" class="img-fluid">
		                <div class="card-img-overlay">
	                  		<h2 class="font-weight-bold mb-4">Accessories</h2>
	                  		<a href="" class="btn btn-link text-white">SHOP NOW
	                  			<i class="fa fa-arrow-right ml-2"></i>
	                  		</a>
		                </div>
		            </div>
				</div>

				<div class="col-lg-4 mb-4">
					<div class="card text-white">
						<img src="./images/index-body-2/see all.jpg" class="img-fluid">
						<div class="card-img-overlay">
	                  		<a href="" class="btn btn-link text-white">See All 
	                  			<i class="fa fa-arrow-right ml-2"></i>
	                  		</a>
		                </div>
		            </div>
				</div>
	 
			</div>
		</div>';

?>