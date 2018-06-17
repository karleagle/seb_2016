<?php
// GET WEDDING DRESS DETAILS
$block = new Block('c','5')
?>
<!DOCTYPE html>
<html class="no-js">
<head>
<meta charset="UTF-8">
<title>Sally Eagle&#39;s bridal boutique in Wellington</title>
<meta name="viewport" content="initial-scale=1.0, width=device-width" />
<meta name="description" content="See Sally Eagle&#39;s full range of beautiful bridal dresses and vintage&#45;inspired wedding gowns in person at her gorgeous central Wellington bridal boutique." />
<meta name="keywords" content="sally eagle, sally eagle bridal, vintage, vintage inspired, vintage wedding dress, vintage wedding gown, vintage bridal gown, wedding dress, wedding dresses, bridal dress, bridal dresses, bridal gown, bridal gowns, bridal wear, bridalwear, wedding dress designer, wedding dress designers, bridal gown designer, bridal gown designers, bridal dress design, bridal dress designer, bridal design, bridal designer, bridal designers, designer bridal, bridal dressmaker, wedding gown designer, wedding gown designers, wellington, willis st, willis street, bridal shop, wellington bridal shop, bridal store, wellington bridal, wellington bridal store, bridal boutique, wellington bridal boutique, wedding dress shop, wedding dress store, wedding dress boutique, wedding gown store, wedding gown shop, wedding gown boutique, bridesmaid, bridesmain dresses, bridesmaids dresses, ball dress, ball dresses, ball dress shops" />
<meta name="robots" content="INDEX,FOLLOW" />


<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script src="https://use.typekit.net/vyq5cic.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/menu_hover.js"></script>

<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
<link rel="icon" type="image/ico" href="images/favicon.ico"/>
</head>

<body>
<?php // INCLUDE HEADER
	include('templates/header.php');
?>
	<div class="header white boutique bgImg">
    <h1 class="underscore">THE WELLINGTON BOUTIQUE</h1>
    <div>
      <a
        class="white link"
        href="https://www.google.co.nz/maps/place/Sally+Eagle+Bridal/@-41.2903642,174.7781909,18.5z/data=!4m2!3m1!1s0x0000000000000000:0xcb0272ff22e64c0d">
        47 CUBA STREET, WELLINGTON
      </a>
    </div>
    <a class="white box opaque centered" href="index.php?view=contact">MAKE A BOOKING</a>
    <p>OPEN TUES &#8211; SAT 10AM TO 5PM</p>
  </div>
	<div class="left_align padded">
	  <p class="large blue">
	    The Sally Eagle Bridal Boutique is a safe haven for the bride-to-be.
	    It is a discreet, private area located on the first floor of 47 Cuba Street in Wellington central.
	  </p>
	  <p>
			After you are greeted in the welcoming area you will be lead through to the main consultation room.
			The wall on one side of the room holds Sally&#39;s entire range of dresses for you to peruse
			&#8212;elegant wedding dresses, beautiful bridesmaid dresses and adorable flower girl dresses.
			Large windows keep the area feeling open, with natural light amplifying the natural beauty of the dresses.
	  </p>
	  <p>
			The other end of the boutique has a small change room, couches and a wall mirror.
			There you can show off each beautiful creation to your party as they relax with hot drinks or bubbles and nibbles.
			There is no limit to your entourage but the area comfortably holds a bride-to-be and 4 of her guests,
			so feel free to invite your friends and family to ooh and aah over how you look in each dress until you find the perfect one.
<?php //For more information on the consultation process, see the <a class="ls_thin" href="index.php&#63;view=process">process page</a>.
?>
	  </p>
	</div>
	<img class="banner_image_1" src="images/boutique/boutique00.jpg" alt="A shot of the boutique" />
	<img class="banner_image_2" src="images/boutique/boutique03.jpg" alt="A shot of the boutique" />
	<div class="left_align padded">
		<p>
			If you are a little early to your consultation feel free to take a seat in the waiting room and have a relaxed look through the wedding magazines available.
			You can sneak a chocolate or two if you like, before heading in to your consultation.
		</p>
		<p>
			Visitors are welcome but we only accommodate one bride-to-be at a time,
			so if you visit while we are taking a bride through her consultation you will unfortunately be unable to see the dresses.
	    Therefore it is recommended that you book ahead,
			especially if you are looking to try dresses on.
	    This ensures that you have the full attention of  Sally&#39;s trusted bridal consultant
			as she takes you through a tailored experience to find your perfect wedding dress.
			You can book a consultation by
				<a class="ls_thin" href="mailto&#58;hello@s%61ll%79%&#54;5%61gl&#37;65&#46;%&#54;&#51;o&#46;n%7&#65;?subject=Website%20enquiry">emailing</a>,
			or call the boutique on 020 4005 9959.
		</p>

		<!-- NOW HAS ITS OWN PAGE
		<div class="workroom">
			<h2 class="blue underscore dress_name pad_1">
	      THE WORKROOM
	    </h2>
		</div>
		<p>
			The other half of the floor is Sally's workroom.
			This is where your dream dress is brought to life.
			Sally takes pride in her designs and oversees the construction of every
			dress. All work is completed on-site by her small, dedicated team of
			experienced dressmakers and every dress is hand-made to order
			specifically for each bride.
		</p>

	-->

	<!-- END MAIN BLOCK -->

	</div>
	<!-- START SIMILAR STYLES -->
	<?php
	$block->addBlock(
		'4',
		'FROM THE WORKROOM',
		null
	); ?>
	<!-- END SIMILAR STYLES -->
<?php // INCLUDE FOOTER
	include('templates/footer.php');
?>
</body>

</html>
