<?PHP
	session_start();
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'add_cart');



	if (isset($_POST["button"])){
		if(isset($_SESSION["test"])){
			$item_array_id= array_column($_SESSION["test"],"products_id");

			if(!in_array($_GET["id"],$item_array_id)){
				$count= count($_SESSION["test"]);

				$item_array = array(
					'products_id' => $_GET["id"],
					'item_name' => $_POST["hidden_name"],
					'products_price' => $_POST["hidden_price"],
					'item_quantity' => $POST ["quantity"]
				);

				$_SESSION["test"][$count]= $item_array;
				echo '<script> window.location = "test.php" </script>';
			}else{
				echo '<script> alert("products un test")</script>';
				echo '<script>window.location= "test.php"</script>';
			}
		}else{
			$item_array= array(
				'products_id' => $_GET["id"],
				'item_name' => $_POST["hidden_name"],
				'products_price' => $_POST["hidden_price"],
				'item_quantity' => $POST ["quantity"]
			);
			$_SESSION["test"][0]= $item_array;

		}
	}


	if(isset ($_GET["action"])){
		if($_GET["action"] =="delete"){
			foreach($_SESSION["test"] as $keys => $values){
				if($values["item_id"]==$_GET["id"]){
					unset($_SESSION["test"][$keys]);
					echo '<script> alert("product remv")</script>';
					echo '<script>window.location= "test.php"</script>';
				}
			}
		}
	}
?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body class= "main">
	<h3 align="center"> Shopping test </h3> <br/>

	<div class="row">
		<?PHP
			$query= "SELECT `name`, `image`, `price` FROM `products`Order by id ASC";

			$queryfre= mysqli_query($con, $query);

			$num = mysqli_num_rows($queryfre);

			if($num>0){
				while($row= mysqli_fetch_array($queryfre)){
		?>

		<div class"col-lg-3 col-md-3 col-sm-12">

			<form method="POST" action="test.php?action=add&id=<?php echo $row["id"] ?>">
				<div class="card">
					<h6 class="card-title"> <?php echo $row['name']; ?></h6>

					<div class="card-body">
						<img src = "<?php echo $row['image']; ?>" alt="cloths" class="img-fluid mb-2" >
						<h6> <?php echo $row['price']; ?>  </h6>
						<input type="text" name="quantity" class= "form-control" value="1">
						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
						<input type="hidden"  name="hidden_price" value="<?php echo $row["price"]; ?>">
						<input type= "submit" name= "button" value= "Add test" />
					</div>

				</div>					
			</form>

		</div>

		<div style="clear: both"> </div>

		<div class="table_view">
			<h3 class="title2" > Shopping test Details </h3>
			<table class= "table table-bordered" >
				<tr>
					<th width="80%"> products name </th>	
					<th width="10%"> quantity </th>
					<th width="13%"> price details</th>
					<th width="10%"> total price </th>

					<th width="17%"> Action </th>
				</tr>

			<?php
			if(!empty($_SESSION["test"])){
				$total=0;
				foreach ($_SESSION["test"] as $key => $values){
			?>

			<tr>
			<td><?php echo $values["item_name"]; ?> </td>
			<td><?php echo $values["item_quantity"]; ?> </td>
			<td>$ <?php echo $values["item_price"]; ?> </td>						
			<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"]); ?> </td>
			<td> <a href="test.php?action=delete&id=<?php echo $values["item_id"]; ?>"> <span class="text-danger">remove Item </span></a></td>

			</tr>
			<?php 
			$total = $total + ($values["item_quantity"] * $values["item_price"]);
			}
			?>
			<tr>
			<td colspan="3" align="right">Total</td>
			<td align="right"> $<?php echo number_format($total); ?> </td>
			<td> </td>
			</tr>
			<?php
			}
			?>
			</table>
			</div>



			</div>
</body>
</html>


