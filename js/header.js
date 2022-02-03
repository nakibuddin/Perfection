$(document).ready(function(){

	$("#modal-footer-search").hide();

	function load_data(q){
		// AJAX = Asynchronous JavaScript and XML.
		// AJAX is about loading data in the background and display it on the webpage, without reloading the whole page.
		$.ajax({
			url:"fetch.php",
			method:"post",
			data:{query:q},
			success:function(data){
				$('#modal-footer-search').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != ''){

			$('#modal-footer-search').show();
			load_data(search);

		}else{

			$('#modal-footer-search').hide();			
		}
	});

	function logo_reform(){
		if ($( window ).width() <= 550) {

	    	$(".logo").hide();
	    	$(".logo1").hide();

		}else{

			$(".logo").show();
			$(".logo1").show();
	    }
	}

	logo_reform();

	$(window).resize(function(){

		logo_reform();
			
	});

	$('#search-modal').on('shown.bs.modal', function() {
  		$(this).find('input:first').focus();
	});

	var userName = $('#userName').text();

	if($.trim(userName) == 'My Account'){
		$('#dropdown-item-3').hide();
		$('#dropdown-item-4').hide();
		$('.dd2').hide();
	}else{
		$('#dropdown-item-1').hide();
		$('#dropdown-item-2').hide();
		$('.dd1').hide();
	}

});
