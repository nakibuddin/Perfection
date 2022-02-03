<?php
	
	if($_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])){

        die(header('location:index.php'));

    }

	if(isset($_SESSION['login_username'])){

		echo $_SESSION['login_username'];
		
	}else{

		echo ' My Account';	
		
	}
?>