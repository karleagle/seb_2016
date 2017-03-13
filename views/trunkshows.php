<?php
// GET WEDDING DRESS DETAILS
$block = new Block('c','4')
?><!DOCTYPE html>
<html class="no-js">
<head>
<meta charset="UTF-8">
<title>Sally Eagle Trunkshows</title>
<meta name="viewport" content="initial-scale=1.0, width=device-width" />
<meta name="description" content="See Sally Eagle&#39;s latest collection of wedding dresses at a bridal boutique near you." />
<meta name="keywords" content="sally eagle, sally eagle bridal, vintage, vintage inspired, vintage wedding dress, vintage wedding gown, vintage bridal gown, wedding dress, wedding dresses, bridal dress, bridal dresses, bridal gown, bridal gowns, bridal wear, bridalwear, wedding dress designer, wedding dress designers, bridal gown designer, bridal gown designers, bridal dress design, bridal dress designer, bridal design, bridal designer, bridal designers, designer bridal, bridal dressmaker, wedding gown designer, wedding gown designers, wellington, willis st, willis street, bridal shop, wellington bridal shop, bridal store, wellington bridal, wellington bridal store, bridal boutique, wellington bridal boutique, wedding dress shop, wedding dress store, wedding dress boutique, wedding gown store, wedding gown shop, wedding gown boutique, bridesmaid, bridesmain dresses, bridesmaids dresses, ball dress, ball dresses, ball dress shops" />
<meta name="robots" content="INDEX,FOLLOW" />


<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script src="https://use.typekit.net/vyq5cic.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NGJ5HZ');</script>
<!-- End Google Tag Manager -->

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/menu_hover.js"></script>

<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
<link rel="icon" type="image/ico" href="images/favicon.ico"/>
</head>

<body>
<?php // INCLUDE HEADER
	include('templates/header.php');
?>
	<div class="submenu ">
		<ul class="opaque88">
			<li>
				<a href="#">FEBRUARY 2017</a>
			</li>
			<li>
				<a href="#1">APRIL 2017</a>
			</li>
		</ul>
	</div>

<h2 class="stockist">
	FEBRUARY 2017
</h2>
<div class='bar'><p>&#95;&#95;&#95;&#95;</p></div>
<?php	Controller::addTrunkshow( //$city, $date, $website, $name, $map, $address, $email, $phone, $id
		"ROSM&#200;RE, CANADA",
		"14 FEBRUARY&#8211;3 MARCH",
		"https://www.macheriebleue.com/weddingdresses",
		"Ma Ch&#233;rie Bleue",
		"https://goo.gl/maps/T5puFfzXM132",
		"303 Chemin de la Grande-C&#244;te",
		"info@macheriebleue.com",
		"450 818 8388",
		"1"
); ?>
<h2 class="stockist">
	APRIL 2017
</h2>
<div class='bar'><p>&#95;&#95;&#95;&#95;</p></div>
<?php	Controller::addTrunkshow( //$city, $date, $website, $name, $map, $address, $email, $phone, $id
		"CHRISTCHURCH, NEW ZEALAND",
		"21&#8211;23 APRIL",
		"http://www.millefeuille.co.nz/new-page-2",
		"Mille Feuille",
		"https://www.google.co.nz/maps/place/Mille+Feuille/@-43.5809392,172.560495,17z/data=!3m1!4b1!4m5!3m4!1s0x6d318bb59ef7ec77:0xe0bf8c6522f01881!8m2!3d-43.5809431!4d172.5626837",
		"29 Nicholls Rd, Christchurch",
		"info@millefeuille.co.nz",
		"03 356 0163",
		""
); ?>
	<!-- END MAIN BLOCK -->

	<!-- START SIMILAR STYLES -->
	<?php
	$block->addBlock(
		'4',
		'FROM THE COLLECTION',
		null
	); ?>
	<!-- END SIMILAR STYLES -->
<?php // INCLUDE FOOTER
	include('templates/footer.php');
?>
</body>

</html>
