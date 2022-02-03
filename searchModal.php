<?php 
	if($_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])){

        	die(header('location:index.php'));

    }
    
	echo '
		<div class="modal fade" id="search-modal" data-backdrop="static" data-keyboard="false">
	    	<div class="modal-dialog modal-dialog-search">
	        	<div class="modal-content modal-content-search">
	      
		        <div class="modal-header modal-header-search">
		            <button type="button" class="close" data-dismiss="modal">&times;</button>
		        </div>
		        
		        <div class="modal-body">
		            <center>
		            	<form action="" method="post">
			            	<input type="text" name="search" id="search_text" class="search-box col-10" placeholder="Search..." autocomplete="off"><br><br>
			            	
			            	<button type="submit" class="btn btn-success" id="submit">Search</button>
		            	</form>
					</center>
		        </div>
		        
		        <div class="modal-footer" id="modal-footer-search">
		        </div>
		    </div>
		</div>';
?>