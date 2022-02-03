var lgi1_name={};
var lgi2_name={};
var lgi1_reg_username={};
var lgi2_reg_username={};
var lgi1_address={};
var lgi2_address={};
var lgi1_phn={};
var lgi2_phn={};
var lgi3_phn={};
var lgi4_phn={};
var lgi2_email={};
var lgi1_password={};
var lgi2_password={};
var lgi2_cpassword={};
$(document).ready(function(){

	$('#preg_eye').click(function (){

		var pass = document.getElementById('reg_password');

		var preg_eye = document.getElementById('preg_eye');

		preg_eye.classList.toggle('active');

		if(pass.type == 'password'){

			pass.type = 'text';

		}else{

			pass.type = 'password';
		}
	});

	$('#cpreg_eye').click(function(){

		var cpassword = document.getElementById('cpassword');

		var cpreg_eye = document.getElementById('cpreg_eye');

		cpreg_eye.classList.toggle('active');

		if(cpassword.type == 'password'){

			cpassword.type = 'text';

		}else{

			cpassword.type = 'password';
		}
	});

	$('#login-modal').on('shown.bs.modal', function() {
  		$(this).find('input:first').focus();
	});
	$('#register-modal').on('shown.bs.modal', function() {
  		$(this).find('input:first').focus();
	});



	$("#name").keyup(function(){
		namePopover1();
	}).focusin(function(){
		namePopover1();
	}).focusout(function(){
		namePopover2();
	});

	$("#reg_username").keyup(function(){
		reg_usernamePopover1();
	}).focusin(function(){
		reg_usernamePopover1();
	}).focusout(function(){
		reg_usernamePopover2();
	});

	$("#address").keyup(function(){
		addressPopover1();
	}).focusin(function(){
		addressPopover1();
	}).focusout(function(){
		addressPopover2();
	});

	$("#phn").keyup(function(){
		phnPopover1();
	}).focusin(function(){
		phnPopover1();
	}).focusout(function(){
		phnPopover2();
	});

	$("#email").keyup(function(){
		emailPopover1();
	}).focusin(function(){
		emailPopover1();
	}).focusout(function(){
		emailPopover2();
	});

	$("#reg_password").keyup(function(){
		passwordPopover1();
	}).focusin(function(){
		passwordPopover1();
	}).focusout(function(){
		passwordPopover2();
	});

	$("#cpassword").keyup(function(){
		cpasswordPopover1();
	}).focusin(function(){
		cpasswordPopover1();
	}).focusout(function(){
		cpasswordPopover2();
	});



	function namePopover1(){

		var NameRegex1 = /^[A-Za-z]*$/g;
		var NameRegex2 = /^[^]{5,20}$/g;

		var inputStrName = $('#name').val();

		if(inputStrName==''){

			$('#name').popover('hide');	

		}else{

			$('#name').popover('show');
	    	$('#lgi3_name').hide();

			if(!inputStrName.match(NameRegex1)){

				$('#lgi1_name').addClass('has-error');
			}

			if(!inputStrName.match(NameRegex2)){

				$('#lgi2_name').addClass('has-error');
			}

			if(inputStrName.match(NameRegex1)){

				$('#lgi1_name').addClass('has-success');
				$('#lgi1_name').removeClass('has-error');
			}

			if(inputStrName.match(NameRegex2)){

				$('#lgi2_name').addClass('has-success');
				$('#lgi2_name').removeClass('has-error');
			}

			lgi1_name = document.getElementById("lgi1_name").classList.contains("has-error");
			lgi2_name = document.getElementById("lgi2_name").classList.contains("has-error");	
		}
	}

	function namePopover2(){

		if($('#name').val()==''){

			$('#name').popover('hide');

		}else if(lgi1_name || lgi2_name){
			
    		$('#name').popover('show');
    		$('#lgi1_name').hide();
    		$('#lgi2_name').hide();
    		$('#lgi3_name').addClass('has-error');

    	}else{

    		$('#name').popover('hide');
    	}
	}

	function reg_usernamePopover1(){

		var UserNameRegex1 = /^[A-Za-z][A-Za-z0-9_@]*$/g;
		var UserNameRegex2 = /^[^]{4,15}$/g;

		var inputStrUserName = $('#reg_username').val();

		if(inputStrUserName == ''){

			$('#reg_username').popover('hide');

		}else{

			$('#reg_username').popover('show');
			$('#lgi4_reg_username').hide();

			if(!inputStrUserName.match(UserNameRegex1)){

				$('#lgi1_reg_username').addClass('has-error');
			}

			if(!inputStrUserName.match(UserNameRegex2)){

				$('#lgi2_reg_username').addClass('has-error');
			}

			if(inputStrUserName.match(UserNameRegex1)){

				$('#lgi1_reg_username').addClass('has-success');
				$('#lgi1_reg_username').removeClass('has-error');
			}

			if(inputStrUserName.match(UserNameRegex2)){

				$('#lgi2_reg_username').addClass('has-success');
				$('#lgi2_reg_username').removeClass('has-error');
			}

			lgi1_reg_username = document.getElementById("lgi1_reg_username").classList.contains("has-error");
			lgi2_reg_username = document.getElementById("lgi2_reg_username").classList.contains("has-error");
		}
	}

	function reg_usernamePopover2(){

		if($('#reg_username').val()==''){

			$('#reg_username').popover('hide');

		}else if(lgi1_reg_username || lgi2_reg_username){
			
    		$('#reg_username').popover('show');
    		$('#lgi1_reg_username').hide();
    		$('#lgi2_reg_username').hide();
    		$('#lgi3_reg_username').hide();
    		$('#lgi4_reg_username').addClass('has-error');

    	}else{

    		$('#reg_username').popover('hide');
    	}
	}

	function addressPopover1(){

		var addressRegex1 = /^[A-Za-z0-9][A-Za-z0-9/,-\s]*$/g;
		var addressRegex2 = /^[^]{8,50}$/g;

		var inputStraddress = $('#address').val();

		if(inputStraddress == ''){

			$('#address').popover('hide');

		}else{

			$('#address').popover('show');
			$('#lgi4_address').hide();

			if(!inputStraddress.match(addressRegex1)){

				$('#lgi1_address').addClass('has-error');
			}

			if(!inputStraddress.match(addressRegex2)){

				$('#lgi2_address').addClass('has-error');
			}

			if(inputStraddress.match(addressRegex1)){

				$('#lgi1_address').addClass('has-success');
				$('#lgi1_address').removeClass('has-error');
			}

			if(inputStraddress.match(addressRegex2)){

				$('#lgi2_address').addClass('has-success');
				$('#lgi2_address').removeClass('has-error');
			}

			lgi1_address = document.getElementById("lgi1_address").classList.contains("has-error");
			lgi2_address = document.getElementById("lgi2_address").classList.contains("has-error");
		}
	}

	function addressPopover2(){

		if($('#address').val()==''){

			$('#address').popover('hide');

		}else if(lgi1_address || lgi2_address){
			
    		$('#address').popover('show');
    		$('#lgi1_address').hide();
    		$('#lgi2_address').hide();
    		$('#lgi3_address').hide();
    		$('#lgi4_address').addClass('has-error');

    	}else{

    		$('#address').popover('hide');
    	}
    }
	
	function phnPopover1(){

		var phnRegex1 = /^[0-9]*$/g;
		var phnRegex2 = /^[0][1][0-9]*$/;
		var phnRegex3 = /^[0-9][0-9][5-9][0-9]*$/;
		var phnRegex4 = /^[0-9]{11}$/g;

		var inputStrphn = $('#phn').val();

		if(inputStrphn == ''){

			$('#phn').popover('hide');

		}else{

			$('#phn').popover('show');
			$('#lgi5_phn').hide();

			if(!inputStrphn.match(phnRegex1)){

				$('#lgi1_phn').addClass('has-error');
			}

			if(inputStrphn.match(phnRegex1)){

				$('#lgi1_phn').addClass('has-success');
				$('#lgi1_phn').removeClass('has-error');
			}

			if(!inputStrphn.match(phnRegex2)){

				$('#lgi2_phn').addClass('has-error');
			}

			if(inputStrphn.match(phnRegex2)){

				$('#lgi2_phn').addClass('has-success');
				$('#lgi2_phn').removeClass('has-error');
			}

			if(!inputStrphn.match(phnRegex3)){

				$('#lgi3_phn').addClass('has-error');
			}

			if(inputStrphn.match(phnRegex3)){

				$('#lgi3_phn').addClass('has-success');
				$('#lgi3_phn').removeClass('has-error');
			}

			if(!inputStrphn.match(phnRegex4)){

				$('#lgi4_phn').addClass('has-error');
			}

			if(inputStrphn.match(phnRegex4)){

				$('#lgi4_phn').addClass('has-success');
				$('#lgi4_phn').removeClass('has-error');
			}

			lgi1_phn = document.getElementById("lgi1_phn").classList.contains("has-error");
			lgi2_phn = document.getElementById("lgi2_phn").classList.contains("has-error");
			lgi3_phn = document.getElementById("lgi3_phn").classList.contains("has-error");
			lgi4_phn = document.getElementById("lgi4_phn").classList.contains("has-error");
		}
	}

	function phnPopover2(){

		if($('#phn').val()==''){

			$('#phn').popover('hide');

		}else if(lgi1_phn || lgi2_phn || lgi3_phn || lgi4_phn){
			
    		$('#phn').popover('show');
    		$('#lgi1_phn').hide();
    		$('#lgi2_phn').hide();
    		$('#lgi3_phn').hide();
    		$('#lgi4_phn').hide();
    		$('#lgi5_phn').addClass('has-error');

    	}else{

    		$('#phn').popover('hide');
    	}
    }

	function emailPopover1(){

		var emailRegex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/g;

		var inputStremail = $('#email').val();

		if(inputStremail == ''){

			$('#email').popover('hide');

		}else{

			$('#email').popover('show');
			$('#lgi3_email').hide();

			if(!inputStremail.match(emailRegex)){

				$('#lgi1_email').hide();
				$('#lgi2_email').addClass('has-error');
			}

			if(inputStremail.match(emailRegex)){

				$('#lgi2_email').hide();
				$('#lgi1_email').addClass('has-success');
				$('#lgi1_email').removeClass('has-error');
			}

			lgi2_email = document.getElementById("lgi2_email").classList.contains("has-error");
		}
	}

	function emailPopover2(){

		if($('#email').val()==''){

			$('#email').popover('hide');

		}else if(lgi2_email){
			
    		$('#email').popover('show');
    		$('#lgi1_email').hide();
    		$('#lgi2_email').hide();
    		$('#lgi3_email').addClass('has-error');

    	}else{

    		$('#email').popover('hide');
    	}
    }

	function passwordPopover1(){

		var passwordRegex1 = /^[\S]*$/g;
		var passwordRegex2 = /^[^]{8,}$/g;

		var inputStrpassword = $('#reg_password').val();

		if(inputStrpassword == ''){

			$('#reg_password').popover('hide');

		}else{

			$('#reg_password').popover('show');
			$('#lgi3_password').hide();

			if(!inputStrpassword.match(passwordRegex1)){

				$('#lgi1_password').addClass('has-error');
			}

			if(!inputStrpassword.match(passwordRegex2)){

				$('#lgi2_password').addClass('has-error');
			}

			if(inputStrpassword.match(passwordRegex1)){

				$('#lgi1_password').addClass('has-success');
				$('#lgi1_password').removeClass('has-error');
			}

			if(inputStrpassword.match(passwordRegex2)){

				$('#lgi2_password').addClass('has-success');
				$('#lgi2_password').removeClass('has-error');
			}

			lgi1_password = document.getElementById("lgi1_password").classList.contains("has-error");
			lgi2_password = document.getElementById("lgi2_password").classList.contains("has-error");
		}
	}

	function passwordPopover2(){

		if($('#reg_password').val()==''){

			$('#reg_password').popover('hide');

		}else if(lgi1_password || lgi2_password){
			
    		$('#reg_password').popover('show');
    		$('#lgi1_password').hide();
    		$('#lgi2_password').hide();
    		$('#lgi3_password').addClass('has-error');

    	}else{

    		$('#reg_password').popover('hide');
    	}
    }

	function cpasswordPopover1(){

		var inputStrpassword = $('#reg_password').val();
		var inputStrcpassword = $('#cpassword').val();

		if(inputStrcpassword == ''){

			$('#cpassword').popover('hide');

		}else{

			$('#cpassword').popover('show');

			if(inputStrpassword != inputStrcpassword ){

				$('#lgi1_cpassword').hide();
				$('#lgi2_cpassword').addClass('has-error');
				// document.getElementById("register_btn").disabled = true;
			}

			if(inputStrpassword == inputStrcpassword ){

				$('#lgi2_cpassword').hide();
				$('#lgi1_cpassword').addClass('has-success');
				$('#lgi1_cpassword').removeClass('has-error');
			}

			lgi2_cpassword = document.getElementById("lgi2_cpassword").classList.contains("has-error");
		}
	}

	function cpasswordPopover2(){

		if($('#cpassword').val()==''){

			$('#cpassword').popover('hide');

		}else if(lgi2_cpassword){
			
    		$('#cpassword').popover('show');
    		$('#lgi1_cpassword').hide();
    		$('#lgi2_cpassword').addClass('has-error');

    	}else{

    		$('#cpassword').popover('hide');
    	}
    }

    $('#register_btn').click(function(){

		if(lgi1_name || lgi2_name || lgi1_reg_username || lgi2_reg_username || lgi1_address || lgi2_address || lgi1_phn || lgi2_phn ||
		 lgi3_phn || lgi4_phn || lgi2_email || lgi1_password || lgi2_password || lgi2_cpassword){

			// console.log('err');
		}else{
			// $('#register_btn').hide();
			// $("form").append($("#register_btn"));
			$('#register_btn').attr('type','submit');
		}
	});
});
