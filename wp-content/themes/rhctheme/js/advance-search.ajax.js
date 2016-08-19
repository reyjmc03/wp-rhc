jQuery(document).ready(function(){
	$('#btnWordSearch').on('click', function() {
		//console.log('ok  word search button');

		document.body.scrollTop = document.documentElement.scrollTop = 0;

		$('#WordNotification').addClass('animated bouncein').html('<div class="alert alert-danger" role="alert"><span class="sr-only">Error:</span><center><strong>P&nbsp;U&nbsp;T&nbsp;&nbsp;&nbsp;A&nbsp;&nbsp;&nbsp;S&nbsp;P&nbsp;E&nbsp;C&nbsp;I&nbsp;F&nbsp;I&nbsp;C&nbsp;&nbsp;&nbsp;W&nbsp;O&nbsp;R&nbsp;D&nbsp;!</strong></center></div>');
	
	});

	$('#btnFormatSearch').on('click', function() {
		//console.log('ok  format search button');


		$('#FormatNotification').addClass('animated bouncein').html('<div class="alert alert-danger" role="alert"><span class="sr-only">Error:</span><center><strong>M&nbsp;A&nbsp;R&nbsp;K&nbsp;&nbsp;&nbsp;A&nbsp;&nbsp;&nbsp;S&nbsp;P&nbsp;E&nbsp;C&nbsp;I&nbsp;F&nbsp;I&nbsp;C&nbsp;&nbsp;&nbsp;F&nbsp;O&nbsp;R&nbsp;M&nbsp;A&nbsp;T&nbsp;!</strong></center></div>');
		
		document.body.scrollTop = document.documentElement.scrollTop = 0;
			
	});

	$('#btnCollectionSearch').on('click', function() {
		//console.log('ok  collections search button');

		document.body.scrollTop = document.documentElement.scrollTop = 0;

		$('#CollectionNotification').addClass('animated bouncein').html('<div class="alert alert-danger" role="alert"><span class="sr-only">Error:</span><center><strong>M&nbsp;A&nbsp;R&nbsp;K&nbsp;&nbsp;&nbsp;A&nbsp;&nbsp;&nbsp;S&nbsp;P&nbsp;E&nbsp;C&nbsp;I&nbsp;F&nbsp;I&nbsp;C&nbsp;&nbsp;&nbsp;C&nbsp;O&nbsp;L&nbsp;L&nbsp;E&nbsp;C&nbsp;T&nbsp;I&nbsp;O&nbsp;N&nbsp;!</strong></center></div>');
	
	});

	$('#btnDateSearch').on('click', function() {
		//console.log('ok  date search button');

		document.body.scrollTop = document.documentElement.scrollTop = 0;

		$('#DateNotification').addClass('animated bouncein').html('<div class="alert alert-danger" role="alert"><span class="sr-only">Error:</span><center><strong>P&nbsp;U&nbsp;T&nbsp;&nbsp;&nbsp;A&nbsp;&nbsp;&nbsp;S&nbsp;P&nbsp;E&nbsp;C&nbsp;I&nbsp;F&nbsp;I&nbsp;C&nbsp;&nbsp;&nbsp;D&nbsp;A&nbsp;T&nbsp;E&nbsp;!</strong></center></div>');
	});
});