$(document).ready(function(){
	/* hide details when thin view */
	function show_details() {
		if($(window).innerWidth() <= 600) {
			if($('div.gallery_details').hasClass('hidden')) {
				$('div.gallery_details').removeClass('hidden')
			}
		} else {
			if($('div.gallery_details').hasClass('hidden')) {
				// Do nothing if it's hidden
			} else {
				$('div.gallery_details').addClass('hidden')
			}
		}
	}

	$(window).resize(show_details);
	show_details();
});
