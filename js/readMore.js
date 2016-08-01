$(document).ready(function(){
	/* content opens onscreen in case JS disabled, hidden immediately */
	$('#showLess').toggleClass('hide');
	$('p.more').toggleClass('hide');

	/* click "...read more" */
	$('#readMore').on('click',function(){
		$('div.more').slideToggle(400, function() {

		});
	});

	/* click "...show less" */
	$('#showLess').on('click',function(){
		$('p.more').slideToggle(400, function() {
			$('.ellipsis').toggleClass('hide');
		});

	});
});
