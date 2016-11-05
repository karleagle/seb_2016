<?php
// GET WEDDING DRESS DETAILS
$dress = new Dress($_GET["a"], 'weddings');
?><!DOCTYPE html>
<html class="no-js">
<head>
<meta charset="UTF-8">
<title>Sally Eagle presents <?php $dress->getName(); ?>'s wedding'</title>
<meta name="viewport" content="initial-scale=1.0, width=device-width" />
<meta name="description" content="See a Sally Eagle wedding dress, as worn at <?php $dress->getName(); ?>'s wedding" />
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
<!--SCROLL TO TOP-->
<script type="text/javascript" src="js/to_top.js"></script>

<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
<link rel="icon" type="image/ico" href="images/favicon.ico"/>
</head>

<body>
<?php // INCLUDE HEADER
	include('templates/header.php');
?>
	<div class="header bgImg white realbride"
			style="background-image:url(images/content/<?php echo $_GET["a"]; ?>-header.jpg)">
    <h1 class="underscore"><?php $dress->getNameUpper(); ?></h1>
    <div>
			<a class="white link"
				href='index.php?view=g&amp;a=w<?php
					// GET THE GALLRY 'PAGE' THAT USER ARRIVED FROM SO THE 'BACK'
					// HYPERLINK TAKES THEM TO THE SAME PLACE IN THE GALLERY
					if (isset($_GET['page'])) {
						echo '&amp;page=' . $_GET['page'];
					}
				?>'>BACK TO VIEW ALL</a>
		</div>
  </div>
  <div class="titlebox">
    <h2><?php $dress->getFirstNameUpper(); ?></h2>
  </div>
<?php $dress->getReview(); ?>


	<section class="bride_images">
	<!-- SHOW COLLECTION IMAGES -->
<?php $dress->getWeddingImages(); ?>
	</section>
	<!-- END MAIN BLOCK -->
<?php // INCLUDE FOOTER
	include('templates/footer.php');
?>
</body>

</html>
