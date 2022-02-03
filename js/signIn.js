$(document).ready(function(){
	//signIn.js
	$('#login_eye').click(function(){

		var password = document.getElementById('login_password');
		var login_eye = document.getElementById('login_eye');
		login_eye.classList.toggle('active');

		if(password.type == 'password'){

			password.type = 'text';

		}else{

			password.type = 'password';
		} 
	});

	$('#reg_here').click(function(){

		$('#register-modal').modal('show');
		$('#login-modal').modal('hide');
		$('body').attr("style", "overflow-y:hidden");
		$('.modal').attr("style", "overflow-y:auto");

	});
});
