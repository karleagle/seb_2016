<!DOCTYPE html>
<html class="no-js">
<head>
<meta charset="UTF-8">
<title>"Vintage&#45;inspired wedding dress designer &#8212; Sally Eagle"</title>
<meta name="viewport" content="initial-scale=1.0, width=device-width" />
<meta name="description" content="Sally Eagle designs and makes beautiful wedding dresses and bridal gowns form her Central Wellington bridal boutique, where she displays her latest wedding dress collections for you to browse through and try on. Whether custom designed or selected from her wonderful bridal collection, every wedding dress is hand made on site. Sally specialises in vintage wedding dresses, bridesmaid dresses, custom wedding dresses, unique wedding dresses, strapless wedding gowns, lace wedding dresses, backless wedding dresses and more." />
<meta name="keywords" content="sally eagle, sally eagle bridal, vintage, vintage inspired, vintage wedding dress, vintage wedding gown, vintage bridal gown, wedding dress, wedding dresses, bridal dress, bridal dresses, bridal gown, bridal gowns, bridal wear, bridalwear, wedding dress designer, wedding dress designers, bridal gown designer, bridal gown designers, bridal dress design, bridal dress designer, bridal design, bridal designer, bridal designers, designer bridal, bridal dressmaker, wedding gown designer, wedding gown designers, wellington, willis st, willis street, bridal shop, wellington bridal shop, bridal store, wellington bridal, wellington bridal store, bridal boutique, wellington bridal boutique, wedding dress shop, wedding dress store, wedding dress boutique, wedding gown store, wedding gown shop, wedding gown boutique, bridesmaid, bridesmain dresses, bridesmaids dresses, ball dress, ball dresses, ball dress shops" />
<meta name="robots" content="INDEX,FOLLOW" />


<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script src="https://use.typekit.net/vyq5cic.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<!--SCROLL TO TOP-->
<script>
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
</script>

<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
<link rel="icon" type="image/ico" href="images/favicon.ico"/>
</head>

<body>
<?php // INCLUDE HEADER
	include('templates/header.php');
?>
	<div class="content">
    <div class="gallery_image_holder relative" href="#">
      <a class="hover_reveal" href="#">
        <img src="images/collections/wedding_45.jpg" />
        <img class="hidden" src="images/collections/wedding_51.jpg" />
        <div class="gallery_details absolute opaque75 hidden">
          <h2>VICTORIA</h2>
          <p class="box" href="#">VIEW DRESS</p>
        </div>
      </a>
    </div>
    <div class="gallery_image_holder relative">
      <a class="hover_reveal" href="#">
        <img src="images/collections/wedding_45.jpg" />
        <img class="hidden" src="images/collections/wedding_51.jpg" />
        <div class="gallery_details absolute opaque75 hidden">
          <h2>VICTORIA</h2>
          <p class="box" href="#">VIEW DRESS</p>
        </div>
      </a>
    </div>
    <div class="gallery_image_holder relative">
      <a class="hover_reveal" href="#">
        <img src="images/collections/wedding_45.jpg" />
        <img class="hidden" src="images/collections/wedding_51.jpg" />
        <div class="gallery_details absolute opaque75 hidden">
          <h2>VICTORIA</h2>
          <p class="box" href="#">VIEW DRESS</p>
        </div>
      </a>
    </div>
	<!-- END MAIN BLOCK -->
	</div>
<?php // INCLUDE FOOTER
	include('templates/footer.php');
?>
</body>

</html>
