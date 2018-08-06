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
<meta name="description" content="See Sally Eagle&#39;s full range of beautiful bridal dresses and vintage&#45;inspired wedding gowns in person at her gorgeous Wellington bridal boutique." />
<meta name="keywords" content="sally eagle, sally eagle bridal, vintage, vintage inspired, vintage wedding dress, vintage wedding gown, vintage bridal gown, wedding dress, wedding dresses, bridal dress, bridal dresses, bridal gown, bridal gowns, bridal wear, bridalwear, wedding dress designer, wedding dress designers, bridal gown designer, bridal gown designers, bridal dress design, bridal dress designer, bridal design, bridal designer, bridal designers, designer bridal, bridal dressmaker, wedding gown designer, wedding gown designers, wellington, Jackson Street, Petone, bridal shop, wellington bridal shop, bridal store, wellington bridal, wellington bridal store, bridal boutique, wellington bridal boutique, wedding dress shop, wedding dress store, wedding dress boutique, wedding gown store, wedding gown shop, wedding gown boutique, bridesmaid, bridesmain dresses, bridesmaids dresses, ball dress, ball dresses, ball dress shops" />
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
        href="https://goo.gl/maps/8j1PNKmhYvw">
        287 JACKSON STREET, PETONE
      </a>
    </div>
    <a class="white box opaque centered" href="index.php?view=contact">MAKE A BOOKING</a>
    <p>OPEN TUES &#8211; SAT 10AM TO 5PM</p>
  </div>
	<div class="left_align padded">
	  <p class="large blue">
	    The Sally Eagle Bridal Boutique is a safe haven for the bride-to-be.
	    It is relaxing, modern space located at 287 Jackson Street in Petone, Wellington.
	  </p>
	  <p>
			After being welcomed inside you will immediately be able to take in Sally's full range of dresses.
			The walls on either side of the room hold Sally&#39;s entire collection, both current and classics.
			Large windows keep the area feeling open, and sections of exposed brick give the room a rustic charm.
	  </p>
	  <p>
			The other end of the boutique has a change area, couches and a mirror.
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
			We only accommodate one bride-to-be at a time to give her our full attention,
			so if you visit while we are taking a bride through her consultation you
			will unfortunately be unable to see the dresses.
	    Therefore it is recommended that you book ahead if you are looking to try dresses on.
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
