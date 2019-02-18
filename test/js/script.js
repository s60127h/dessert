$(document).ready(function(){
	$('#name').change(function(){
		$('.bind-data').html($(this).val());
	});
});