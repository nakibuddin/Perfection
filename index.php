<?php
	ob_start();
	session_start();
	require_once('dbconfig/config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./fa/web-fonts-with-css/css/fontawesome-all.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Federant" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Galada" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Spirax" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/header.css">
    <link rel="stylesheet" type="text/css" href="./css/carousel.css">
    <link rel="stylesheet" type="text/css" href="./css/signIn.css">
    <link rel="stylesheet" type="text/css" href="./css/signUp.css">
    <link rel="stylesheet" type="text/css" href="./css/userPage.css">
    <link rel="stylesheet" type="text/css" href="./css/footer.css">
	<link rel="stylesheet" type="text/css" href="./css/secondary-carousel.css">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <title>Ecommerce</title>
</head>
<body>
	<?php 
		include 'main-carousel.php';
		echo "<br>";
		include 'secondary-carousel.php';
		echo "<br>";
		include 'index-body-2.php';
		include 'footer.php';
		include 'header.php';
	?>
	
		                	
	
	<script src="./js/jquery.min.js"></script>
	<script src="./js/header.js"></script>
	<script src="./js/carousel.js"></script>
	<script src="./js/signIn.js"></script>
	<script src="./js/signUp.js"></script>
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
</body>
</html>
<?php ob_end_flush(); ?>