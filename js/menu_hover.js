$(document).ready(function(){
  var slideTimer;

  /* remove css hover effect on menu */
	$('li.dropdown').removeClass('dropdown');

	/* mouse over menu li */
	$('li.underline').hover(function(){
    /* no action if hovering over CONTACT */
    if($(this).hasClass("no_sub")) {} else {
  		/* clear any persistent menus */
  		$('li.underline').children("ul").finish();
      /* slide down the submenu */
  		$(this).children("ul").stop(true).slideDown(400);
  		/* hide the permanent submenu in GALLERY and STOCKIST/TRUNKSHOWS */
      clearTimeout(slideTimer)
      $('div.submenu').addClass('hidden');
    }

	}, function(){
	/* mouse out of menu li -> slide up the submenu */
		$(this).children("ul").stop(true).delay(400).slideUp(400);
	/* delay the submenu reappearing to allow for slide */
    function show(){$('div.submenu').removeClass('hidden')};
		slideTimer = setTimeout(show,650);
	});
	$('li.underline > ul').hover(function(){
		$(this).slideDown(400);
	}, function(){
	/* mouse out of menu li */
		$(this).delay(400).slideUp(400);
	});

  // stop menu anchors running
  $("a.no_click").click(function(event){
    event.preventDefault();
  });

});
