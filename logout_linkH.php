<?php 

	if($_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])){

        die(header('location:index.php'));

    }
	
	if(isset($_GET['link'])){

		$link=$_GET['link'];

		if($link=='1'){

			if(isset($_SESSION['login_username'])){

				header('location:userPage.php');
				
			}else{

				header('location:index.php');
				
			}
		}
	}

 ?>