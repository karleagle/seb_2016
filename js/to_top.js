$(document).ready(function(){

	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});

	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});

  //Remove element's fixed attributes at bottom of screen
  $(window).scroll(function() {
     if($(window).scrollTop() + $(window).height() > $(document).height() - 80
       && $(".scrollToTop").hasClass('fixedScroll') ){
         $(".scrollToTop").toggleClass('fixedScroll');
     } else if (
       $(window).scrollTop() + $(window).height() < $(document).height() - 110
       && $(".scrollToTop").attr('class') != 'scrollToTop fixedScroll') {
       $(".scrollToTop").attr('class', 'scrollToTop fixedScroll')
     }
  });
});
