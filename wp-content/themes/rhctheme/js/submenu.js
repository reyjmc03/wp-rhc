jQuery(document).ready(function($) {
	btnManximized = false;

	$('.dropdown-toggle').on('click', function() {
		console.log('test ok 2!');

		if(btnManximized) {
      $('.submenu').animate({ left: '0px'}, function(){ 
      	$(".submenu").hide();
      	document.getElementById("rhc-menu").disabled = false;
    	});
		}
		else {
      $('.submenu').animate({ left: '330px' }).show();
      document.getElementById("rhc-menu").disabled = true;
		}

		btnManximized =! btnManximized;
	});
});