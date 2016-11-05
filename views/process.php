<?php $p="1";
	if (isset($_GET['p'])) {
		$p=$_GET['p'];
	}
?>
<!DOCTYPE html>
<html class="no-js">
<head>
<meta charset="UTF-8">
<title>Sally Eagle Bridal - <?php switch ($p) {
	case 2:
		echo"Collection Wedding ";
		break;
	case 3:
		echo"Collection Bridesmaid ";
		break;
	default:
		echo"Custom Wedding ";
		break;
}?>Dress Creation Process</title>
<meta name="viewport" content="initial-scale=1.0, width=device-width" />
<meta name="description" content="<?php switch ($p) {
	case 2:
		echo"See the process for having a beautiful wedding dress from one of Sally Eagle Bridal's stunning weding dress collections hand made just for you.";
		break;
	case 3:
		echo"See the process for having your bridal party dressed in one or more of Sally Eagle Bridal's beautiful bridesmaid dresses selected from her versatile collection.";
		break;
	default:
		echo"See the process for working personally with Sally Eagle to have your perfect wedding dress or bridal gown designed, fitted and hand made with only you in mind, just the way you want it.";
		break;
}?>" />
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
	<div class="content">
		<section class="process white bgImg">
			<h1 class='underscore'>CUSTOM DESIGN</h1>
			<h2 class='gap'>HAVE YOUR DREAM WEDDING DRESS DESIGNED & MADE JUST FOR YOU</h2>
			<p>Meet with Sally to discuss your ideas and ask any questions you may have.</p>
			<p class="bar">&nbsp;</p>
			<p>Select from illustrated concept designs, drawn just for you.</p>
			<p class="bar">&nbsp;</p>
			<p>Choose from Sally&#39;s exquisite range of fabrics, lace and buttons.</p>
			<p class="bar">&nbsp;</p>
			<p>See your vision come to life in a fitted mock-up of your dress.</p>
			<p class="bar">&nbsp;</p>
			<p>Ensure everything is perfect in up to three fittings before your big day.</p>
			<p class="bar">&nbsp;</p>
			<h2 class="allow">PLEASE ALLOW SIX MONTHS FOR A CUSTOM WEDDING DRESS</h2>
		</section>
		<section class="process white bgImg">
			<h1 class='underscore'>COLLECTION DRESSES</h1>
			<h2 class='gap'>CHOOSE A DRESS FROM ONE OF SALLY EAGLE&#39;S BRIDAL COLLECTIONS</h2>
			<p>
				Pick a style from Sally&#39;s range.
				If you would like to try on any of the dresses, please arrange a consultation.
			</p>
			<p class="bar">&nbsp;</p>
			<p>Order the dress off the rack or, if you can make it to Wellington, have it fitted to your body.</p>
			<div id='top'>
				<h2>OFF THE RACK</h2>
				<p>Choose your size from a 6 - 16. Plus sizes are available.</p>
				<p class="bar">&nbsp;</p>
				<p>Decide on the length that you would like your skirt to be.</p>
			</div>
			<div id='bottom'>
				<h2>FITTED</h2>
				<p>Arrange a consultation to have your measurements taken by Sally or one of her team.</p>
				<p class="bar">&nbsp;</p>
				<p>Allow for up to three fittings to perfect the fit of your dress.</p>
			</div>
			<h2 class="allow">PLEASE ALLOW THREE MONTHS FOR YOUR DRESS TO BE COMPLETED.</h2>
		</section>

	<!-- END MAIN BLOCK -->
	</div>
<?php // INCLUDE FOOTER
	include('templates/footer.php');
?>
</body>

</html>
