<?php

	session_start();
	require_once('dbconfig/config.php');
	// if($_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])){

 //        die(header('location:index.php'));
 //    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./fa/web-fonts-with-css/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="./css/signIn-style.css"> -->

    <title>Ecommerce</title>
</head>
<body>
	<!-- Forgot password Modal -->
    <div class="modal fade" id="forgotpass-modal" data-backdrop="static" data-keyboard="false" >
    	<div class="modal-dialog modal-dialog-centered">
        	<div class="modal-content">
      
		        <!-- Modal Header -->
		        <div class="modal-header">
		            <button onclick="location.href='index.php';" type="button" class="close" data-dismiss="modal">&times;</button>
		        </div>
		        
		        <!-- Modal body -->
		        <div class="modal-body">

		            <form method="post" action="sendPasswordmail.php">
						<div class="form-group">
						    <label for="forgotPemail">Email:</label>
						    <input type="email" class="form-control" id="forgotPemail" name="forgotPemail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Email invalid. e.g.characters@characters(2 or 3).com" autocomplete="off" autofocus required style="padding: 0;">
						</div><br>
						<center>
							<button type="submit" name="email-btn" class="btn btn-success">Send</button>
						</center>
					</form>
					
		        </div>
		        
		        <!-- Modal footer -->
		        <div class="modal-footer">
		        	
		        </div> 
	   		 </div>
		</div>
	</div>

    <script src="./js/jquery.min.js"></script>
	<script src="./js/forgotPassword-js.js"></script>
	<script src="./js/bootstrap.min.js"></script>

</body>
</html>
