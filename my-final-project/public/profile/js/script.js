$(document).ready(function(){

	$('#form_feed').load('form/aboutme.html');

	$('.form-view').click(function(){

		var href = $(this).attr('href');

		$('#form_feed').hide().load(href).fadeIn();

		return false;

	});

	
});