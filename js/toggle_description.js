$(document).ready(function(){
	/* hide details when thin view */
	function hide_details() {
		if($(window).innerWidth() <= 600) {
			if($('p.fabric_content').hasClass('hidden')) {
				// do nothing
			} else {
				$('p.fabric_content').toggleClass('hidden');
			}
			if($('p.dress_details').hasClass('hidden')) {
				// do nothing
			} else {
				$('p.dress_details').toggleClass('hidden');
			}
		}
	}

$(window).resize(hide_details);
hide_details();

	/* click FABRIC CONTENT" */
	$('.fabric_content_button').on('click',function(){
		$('p.fabric_content').slideToggle(400, function() {

		});
	});

	/* click "DRESS DETAILS" */
	$('.dress_details_button').on('click',function(){
		$('p.dress_details').slideToggle(400, function() {

		});
	});
});
