<?php 

	if($_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])){

        die(header('location:index.php'));

    }
    
	echo'
		<div id="demo" class="carousel slide" data-ride="carousel" data-interval="3500" data-pause="">
			
			<ul class="carousel-indicators" id="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
				<li data-target="#demo" data-slide-to="3"></li>
				<li data-target="#demo" data-slide-to="4"></li>
			</ul>
				  
			<div class="carousel-inner">

				<div class="carousel-item active">
				    <img src="images/main-carousel/slide1.jpg" alt="" width="100%" height="auto">
				</div>

				<div class="carousel-item">
				    <img src="images/main-carousel/slide2.jpg" alt="" width="100%" height="auto">
				</div>

				<div class="carousel-item">
				    <img src="images/main-carousel/slide3.jpg" alt="" width="100%" height="auto">
				</div>

				<div class="carousel-item">
				    <img src="images/main-carousel/slide4.jpg" alt="" width="100%" height="auto">
				</div>

				<div class="carousel-item">
				    <img src="images/main-carousel/slide5.jpg" alt="" width="100%" height="auto">
				</div>

			</div>
				  
		    <a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>

			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>';
?>