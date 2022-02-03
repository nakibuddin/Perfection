<?php

	session_start();
	require_once('dbconfig/config.php');
	
	if($_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])){

        die(header('location:index.php'));

    }


	$output = '';

	if(isset($_POST["query"])){

		$search = mysqli_real_escape_string($con, $_POST["query"]);
		$query = "SELECT * FROM Product_tbl WHERE ProductName LIKE '%".$search."%'";

	}else{

		$query = "SELECT * FROM Product_tbl ORDER BY ProductId";
	}

	$result = mysqli_query($con, $query);

	if(mysqli_num_rows($result) > 0){
		$output .= '<div class="table-responsive">
						<table class="table table bordered">';
		while($row = mysqli_fetch_array($result)){
			$output .= '<tr>
							<td align="center">
								<a href="#" style="text-decoration:none;">'
									.$row["ProductName"].
							   '</a>
							</td>
						</tr>';
		}
		echo $output;
	}else{
		echo 'Data Not Found';
	}
?>