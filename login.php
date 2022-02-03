<?php 

	session_start();
	require_once('dbconfig/config.php');

    if($_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])){

    	if(isset($_SESSION['login_username'])){

        	die(header('location:userPage.php'));

        }else{

        	die(header('location:index.php'));

        }

    }

	if(isset($_POST['login-btn'])){
							
		$login_username=$_POST['login_username'];
		$login_password=$_POST['login_password'];

		$str=$login_password;

		$strlen=strlen($str);

		$strdiv=intdiv($strlen,3);

		$str1=substr($str,0,$strdiv);
						 
		$str3=substr($str,$strdiv,$strdiv);

		$str5=substr($str,$strdiv+$strdiv);

		$strmd5=md5($str);

		$str2=substr($strmd5,0,16);

		$str4=substr($strmd5,16);

		$encrypted_password=$str1.$str2.$str3.$str4.$str5;
							
		$query="select * from logintb WHERE username='$login_username' AND password='$encrypted_password'";
							
		$query_run=mysqli_query($con,$query);
							
		if(mysqli_num_rows($query_run)>0){

			$row = mysqli_fetch_assoc($query_run);//fetch the whole row from the returned table

			$_SESSION['login_username'] = $row['username'];//$_SESSION is a global variable,it can be used accross all the pages by the function session_start()
										
			echo    '<script type="text/javascript">
											alert("login successful");
										</script>';
			header('location:userPage.php');

		}else{

			echo '<script type="text/javascript">
										alert("Invalid credentials")
									</script>';
			header('location:index.php');

		}
	}
?>