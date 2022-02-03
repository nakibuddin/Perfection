<?php
	if($_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])){

        die(header('location:index.php'));

    }

	include 'signIn.php';
	include 'signUp.php';

	//navbar
	echo'
		<nav class="navbar navbar-dark navbar-expand-lg justify-content-between fixed-top">

		    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target=".left-nav">
		        <span class="icon-bar top-bar"></span>
				<span class="icon-bar middle-bar"></span>
				<span class="icon-bar bottom-bar"></span>
		    </button>

		    <div class="navbar-collapse collapse left-nav w-50 order-1 order-lg-0">
		        <ul class="navbar-nav">
		            <li class="nav-item active mr-1">
		                <a class="nav-link effect" href="index.php" data-text="Home">
		                   <i class="fa fa-home" style="font-size: 19px;"></i>
		                   <b class="header-item"> Home</b>
		                </a>
		            </li>

		            <li class="nav-item active mr-1">
		                <a class="nav-link effect" href="menPage.php" data-text="Men">
			                <i class="fa fa-male" style="font-size: 21px;"></i>
			                <b class="header-item"> Men</b>
		                </a>
		            </li>

		            <li class="nav-item active mr-1">
		                <a class="nav-link effect" href="womenPage.php" data-text="Women">
		                	<i class="fa fa-female" style="font-size: 21px;"></i>
		                	<b class="header-item"> Women</b>
		                </a>
		            </li>

		            <li class="nav-item active mr-1">
		                <a class="nav-link effect" href="kidPage.php" data-text="Kids">
		                	<i class="fa fa-child" style="font-size: 21px;"></i>
		                	<b class="header-item"> Kids</b>
		                </a>
		            </li>

		            <li class="nav-item active mr-1">
		                <a class="nav-link effect" href="home&livingPage.php" data-text="Home&Living">
		                	<i class="fas fa-warehouse" style="font-size: 17px;"></i>
		                	<b class="header-item"> Home & Living</b>
		                </a>
		            </li>

		        </ul>
		    </div>

		    <a href="#" class="navbar-brand mx-auto d-block text-center order-0 order-lg-1 w-50 mt-1">
		        <span class="logo">Perfection</span>
		    </a>

		    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target=".right-nav">
		        <span class="icon-bar top-bar"></span>
				<span class="icon-bar middle-bar"></span>
				<span class="icon-bar bottom-bar"></span>
		    </button>

		    <div class="navbar-collapse collapse right-nav w-50 order-2">
		        <ul class="nav navbar-nav ml-auto" style="text-align: right;">
		            <li class="nav-item active ml-2">
		            	<a id="show" class="nav-link effect" data-toggle="modal" href="#search-modal" title="search here" data-text="search">
		               		<i class="fa fa-search" style="font-size: 20px;margin-top: 3px;"></i>
		            	</a>
		            </li>

		            <li class="nav-item active ml-2">
		                <div class="dropdown">

			                <a class="nav-link dropdown-toggle active" title="register/login" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				                <i class="fa fa-user" style="font-size: 18px;"></i>
				                <b class="header-item" id="userName">';
				                	include 'myAccount_H.php';
				                	echo '
								</b>
				            </a>

				            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

								<a class="dropdown-item" id="dropdown-item-1" data-toggle="modal" href="#login-modal">Login
								</a>

								<div class="dropdown-divider dd1"></div>

								<a class="dropdown-item" id="dropdown-item-2" data-toggle="modal" href="#register-modal">Register
								</a>

								<a href="';include 'profile_linkH.php';echo '?link=1"  class="dropdown-item" id="dropdown-item-3">Profile
								</a>

								<div class="dropdown-divider dd2"></div>

								<a href="';include 'logout_linkH.php';echo '?link=2" class="dropdown-item" id="dropdown-item-4">Logout
								</a>';

	  		          echo '</div>
			            </div>
		            </li>

		            <li class="nav-item active ml-2">
			            <a class="nav-link effect" title="cart" data-text="Cart" href="cart/cart.php">
				            <i class="fa fa-cart-plus" style="font-size: 20px;"></i>
				            <b class="header-item"> Cart</b>
			            </a>
			        </li>

			        <li class="nav-item active ml-2">
			            <a class="nav-link effect" title="contact us" data-text="Contact" href="contact.php">
				            <i class="fa fa-phone" style="font-size: 20px;"></i>
				            <b class="header-item"> Contact us</b>
			            </a>
			        </li>

		        </ul>
		    </div>
		</nav>';
	include 'searchModal.php';
?>
