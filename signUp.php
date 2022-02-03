<?php  
	if($_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])){

        	die(header('location:index.php'));

    }

	echo '

		<!-- Register Modal -->
	    <div class="modal fade" id="register-modal" data-backdrop="static" data-keyboard="false" >
	    	<div class="modal-dialog modal-dialog-centered">
	        	<div class="modal-content modal-content-register">
	      
			        <!-- Modal Header -->
			        <div class="modal-header">
			            <button type="button" class="close" data-dismiss="modal">&times;</button>
			        </div>
			        
			        <!-- Modal body -->
			        <div class="modal-body">

			            <form method="post" action="registration.php">
							<div class="form-group">
							    <label for="name" id="name-label">Name:</label>
							    <input 
							    type="text" 
							    class="form-control" 
							    id="name" 
							    name="name" 
							    autocomplete="off"
							    required
							    data-trigger="manual"
							    data-placement="right"
							    data-html="true"
							    data-title="<ul class=\'list-group\'>

								    	        <li id=\'lgi1_name\' class=\'list-group-item\'>Only letters</li>

								    	        <li id=\'lgi2_name\' class=\'list-group-item\'>At least 5 characters(20 max)</li>

								    	        <li id=\'lgi3_name\' class=\'list-group-item\'>Please fill the field as required</li>
									    	</ul>"  
							    >
							</div>

							<div class="form-group">
							    <label for="reg_username">Username:</label>
							    <input 
							    type="text" 
							    class="form-control" 
							    id="reg_username" 
							    name="reg_username" 
							    autocomplete="off"
							    required
							    data-trigger="manual"
							    data-placement="right"
							    data-html="true"
							    data-title="<ul class=\'list-group\'>

							    	        	<li id=\'lgi1_reg_username\' class=\'list-group-item\'>Must start with a letter</li>

							    	        	<li id=\'lgi2_reg_username\' class=\'list-group-item\'>At least 4 characters(max 15)</li>

							    	        	<li id=\'lgi3_reg_username\' class=\'list-group-item\'>can contain digit, _ and @ </li>

							    	        	<li id=\'lgi4_reg_username\' class=\'list-group-item\'>Please fill the field as required</li>
									    </ul>">
							</div>

							<div class="form-group form-group-gender">
							    <label for="gender">Gender:</label>
						
								<input type="radio" class="radiobtns" name="gender" value="male" checked required>Male
								<input type="radio" class="radiobtns" name="gender" value="female" required>Female
							</div>

							<div class="form-group">
							    <label for="address">Address:</label>
							    <input type="text" 
							    class="form-control" 
							    id="address" 
							    name="address" 
							    autocomplete="off" 
							    required
							    data-trigger="manual"
							    data-placement="right"
							    data-html="true"
							    data-title="<ul class=\'list-group\'>

								    	        <li id=\'lgi1_address\' class=\'list-group-item\'>Must start with a letter or digit</li>

								    	        <li id=\'lgi2_address\' class=\'list-group-item\'>At least 8 characters(max 50)</li>

								    	        <li id=\'lgi3_address\' class=\'list-group-item\'>Can contain space,comma,\,/,-<br>e.g.23/2 Acacia-Avenue,Yorkshire</li>
								    	        
								    	        <li id=\'lgi4_address\' class=\'list-group-item\'>Please fill the field as required</li>
										    </ul>">
							</div>

							<div class="form-group">
							    <label for="phn">Phone:</label>
							    <input 
							    type="tel" 
							    class="form-control" 
							    id="phn" 
							    name="phn" 
							    autocomplete="off" 
							    required
							    data-trigger="manual"
							    data-placement="right"
							    data-html="true"
							    data-title="<ul class=\'list-group\'>

								    	        <li id=\'lgi1_phn\' class=\'list-group-item\'>Only digits</li>

								    	        <li id=\'lgi2_phn\' class=\'list-group-item\'>Must start with 01</li>

								    	        <li id=\'lgi3_phn\' class=\'list-group-item\'>Third digit must be between 5-9</li>

								    	        <li id=\'lgi4_phn\' class=\'list-group-item\'>Must be 11 digits long</li>

								    	        <li id=\'lgi5_phn\' class=\'list-group-item\'>Please fill the field as required</li>
										    </ul>">
							</div>

							<div class="form-group">
							    <label for="email">Email:</label>
							    <input
							    type="email" 
							    class="form-control" 
							    id="email" 
							    name="email"
							    autocomplete="off"
							    required
							    data-trigger="manual"
							    data-placement="right"
							    data-html="true"
							    data-title="<ul class=\'list-group\'>

								    	        <li id=\'lgi1_email\' class=\'list-group-item\'>Email is valid</li>

								    	        <li id=\'lgi2_email\' class=\'list-group-item\'>Email is invalid</li>

								    	        <li id=\'lgi3_email\' class=\'list-group-item\'>Please fill the field as required</li>
										    </ul>">
							</div>

							<div class="form-group form-group-reg-password">
							    <label for="pass">Password:</label>
							    <input 
							    type="password" 
							    class="form-control" 
							    id="reg_password" 
							    name="reg_password"
							    autocomplete="off" 
							    required
							    data-trigger="manual" 
							    data-placement="right"
							    data-html="true"
							    data-title="<ul class=\'list-group\'>

								    	        <li id=\'lgi1_password\' class=\'list-group-item\'>Any character but No space</li>

								    	        <li id=\'lgi2_password\' class=\'list-group-item\'>At least 8 characters</li>

								    	        <li id=\'lgi3_password\' class=\'list-group-item\'>Please fill the field as required</li>
										    </ul>">
							    <i class="far fa-eye" id="preg_eye" title="show password" style="font-size: 16px;"></i>
							</div>

							<div class="form-group form-group-reg-password">
							    <label for="cpassword">Confirm password:</label>
							    <input 
							    type="password" 
							    class="form-control" 
							    id="cpassword" 
							    name="cpassword"
							    autocomplete="off" 
							    required
							    data-trigger="manual" 
							    data-placement="right"
							    data-html="true"
							    data-title="<ul class=\'list-group\'>

								    	        <li id=\'lgi1_cpassword\'  class=\'list-group-item\'>Passwords matched</li>

								    	        <li id=\'lgi2_cpassword\' class=\'list-group-item\'>Passwords not matched</li>
										    </ul>">
							    <i class="far fa-eye" id="cpreg_eye" title="show password" style="font-size: 16px;"></i>
							</div>
							
							<br><br>
							
							<center>
								<button type="button" name="register_btn" id="register_btn" class="btn btn-success">Register
								</button>
							</center>
						</form>
						
			        </div>
			        
			        <!-- Modal footer -->
			        <div class="modal-footer modal-footer-register">
			        	
			        </div> 
		   		 </div>
			</div>
		</div>';
?>
