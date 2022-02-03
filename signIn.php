<?php 
	if($_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])){

	    die(header('location:index.php'));

	}
	echo '
	    <div class="modal fade" id="login-modal" data-backdrop="static" data-keyboard="false" >
	    	<div class="modal-dialog modal-dialog-centered">
	        	<div class="modal-content modal-content-login">
	      
			        <!-- Modal Header -->
			        <div class="modal-header">
			            <button type="button" class="close" data-dismiss="modal">&times;</button>
			        </div>
			        
			        <!-- Modal body -->
			        <div class="modal-body">

			            <form method="post" action="login.php">
							<div class="form-group">
							    <label for="login_username">
							    	<i class="fa fa-user"></i> Username:
							    </label>
							    <input type="text" class="form-control" id="login_username" name="login_username" autocomplete="off" required>
							</div>

							<div class="form-group">
							    <label for="login_password">
									<i class="fa fa-lock"></i> Password:
								</label>

								<input type="password" class="form-control" id="login_password" name="login_password" autocomplete="off" required>

								<i class="far fa-eye" id="login_eye" title="show password" style="font-size: 16px;"></i>

							    <a class="fPass" href="forgotPassword.php">Forgot password?</a>
							</div>

							<br><br>

							<center>
								<button type="submit" name="login-btn" class="btn btn-success">Login</button>
							</center>
						</form>
			        </div>
			      <!-- Modal footer -->
				    <div class="modal-footer modal-footer-login">
				    	Not yet a member?&nbsp
				        <h6 id="reg_here">Register here!</h6>
				    </div> 

				</div>
			</div>
		</div>';
?>
