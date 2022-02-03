<?php

	if($_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])){

        die(header('location:index.php'));

    }

	require_once('dbconfig/config.php');

	if(isset($_POST['register_btn'])){

		$name = $_POST['name'];
		$username = $_POST['reg_username'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$phone = $_POST['phn'];
		$email = $_POST['email'];
		$password = $_POST['reg_password'];
		$cpassword = $_POST['cpassword'];

		if($password==$cpassword){

			$str=$password;

			$strlen=strlen($str);

			$strdiv=intdiv($strlen,3);

			$str1=substr($str,0,$strdiv);

			$str3=substr($str,$strdiv,$strdiv);

			$str5=substr($str,$strdiv+$strdiv);

			$strmd5=md5($str);

			$str2=substr($strmd5,0,16);

			$str4=substr($strmd5,16);

			$encrypted_password=$str1.$str2.$str3.$str4.$str5;

			$query1 = "select * from logintb WHERE username = '$username'";
			$query2 = "select * from logintb WHERE email = '$email'";
			$query3 = "select * from logintb WHERE phone = '$phone'";
			$query_run1 = mysqli_query($con,$query1);
			$query_run2 = mysqli_query($con,$query2);
			$query_run3 = mysqli_query($con,$query3);

			if(mysqli_num_rows($query_run1)>0){

				echo '<script type="text/javascript"> alert("Username already exists!") </script>';

			}else if(mysqli_num_rows($query_run2)>0){

				echo '<script type="text/javascript"> alert("Email already exists!") </script>';

			}else if(mysqli_num_rows($query_run3)>0){

				echo '<script type="text/javascript"> alert("Phone number already exists!") </script>';

			}else{

				$query="insert into logintb values('$username','$name','$gender','$address','$phone','$email','$encrypted_password')"; //hashed password goes into the database
				$query_run = mysqli_query($con,$query);

				if($query_run){
					echo 'User registered successfully';

				}else{

					echo '<script type="text/javascript"> alert("Error!") </script>';
				}
			}
		}else{

			echo '<script type="text/javascript"> alert("Passwords did not match!") </script>';
		}
	}
?>
