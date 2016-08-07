$(document).ready(function(){

	$('.edit').click(function(){
		$('input').attr('writeonly');
	});

	$('.owner').click(function(){
		$('.c-name').css('display','block');
	});

	$('.finder').click(function(){
		$('.c-name').css('display','none');
	});
});
