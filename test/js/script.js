$(document).ready(function(){
	$('#name').change(function(){
		$('.bind-data').html($(this).val());
	});

	$('#number').change(function(){
		$('.bind-number').append($(this).val());
	});

/*	$('.slideup').click(function(){
		$('.slidewords').slideUp(200);
	});

	$('.slidedown').click(function(){
		$('.slidewords').slideDown(200);
	});
*/

	$('.slidetoggle').click(function(){
		$('.slidewords').slideToggle(200);
	});
});