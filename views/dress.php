<?php
// GET WEDDING DRESS DETAILS
$dress = new Dress($_GET["a"], 'dresses');
$collection = null;
if ($_GET["view"] == 'c') {
	$collection = $dress->details['collection'];
}
$block = new Block($_GET["view"], $collection)
?>
<!DOCTYPE html>
<html class="no-js">
<head>
<meta charset="UTF-8">
<title><?php $dress->getName(); ?> <?php $dress->getTypeNameCap(); ?> from Sally Eagle&#39;s Bridal Collection</title>
<meta name="viewport" content="initial-scale=1.0, width=device-width" />
<meta name="description" content="<?php $dress->getName(); ?> <?php $dress->getTypeNameCap(); ?> by Sally Eagle Bridal" />
<meta name="keywords" content="sally eagle, sally eagle bridal, vintage, vintage inspired, vintage wedding dress, vintage wedding gown, vintage bridal gown, wedding dress, wedding dresses, bridal dress, bridal dresses, bridal gown, bridal gowns, bridal wear, bridalwear, wedding dress designer, wedding dress designers, bridal gown designer, bridal gown designers, bridal dress design, bridal dress designer, bridal design, bridal designer, bridal designers, designer bridal, bridal dressmaker, wedding gown designer, wedding gown designers, wellington, willis st, willis street, bridal shop, wellington bridal shop, bridal store, wellington bridal, wellington bridal store, bridal boutique, wellington bridal boutique, wedding dress shop, wedding dress store, wedding dress boutique, wedding gown store, wedding gown shop, wedding gown boutique, bridesmaid, bridesmain dresses, bridesmaids dresses, ball dress, ball dresses, ball dress shops" />
<meta name="robots" content="INDEX,FOLLOW" />


<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script src="https://use.typekit.net/vyq5cic.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/menu_hover.js"></script>
<script type="text/javascript" src="js/toggle_description.js"></script>
<script type="text/javascript" src="js/gallery_swap.js"></script>


<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
<link rel="icon" type="image/ico" href="images/favicon.ico"/>
</head>

<body>
<?php
// INCLUDE HEADER
	include('templates/header.php');
?>
  <div class="content left_align dresses">
		<div class="dress_header">
			<h1 class="blue underscore dress_name pad_1">
				<?php
					$dress->getNameUpper();
				?>

			</h1>
		</div>
    <div class="image_container">
<?php // POPULATE DRESS IMAGES
$dress->setImages();
?>
    </div>
		<div class="bp2_clear pad_1">
	    <a class="lt_grey small ls_wide"
				href='index.php?view=g&a=<?php
					$dress->getType();

					// GET THE GALLRY 'PAGE' THAT USER ARRIVED FROM SO THE 'BACK'
					// HYPERLINK TAKES THEM TO THE SAME PLACE IN THE GALLERY
					if (isset($_GET['page'])) {
						echo '&amp;page=' . $_GET['page'];
					}
				?>'>
	      BACK TO VIEW ALL
	    </a>
		</div>
	<?php
				$dress->getDesc();
			?>
    <a class="box enquire ls_wide"
			href='mail&#116;&#111;&#58;enquir&#37;69&#37;&#54;&#53;%73&#64;s%61ll%79%
				&#54;5%61gl&#37;65&#46;%&#54;&#51;o&#46;n%7&#65;?subject=Dress%20enquiry
				%20-%20<?php $dress->getName(); ?>'>
      ENQUIRE NOW
    </a>
    <!-- FABRIC CONTENT AND DRESS DETAILS -->
    <section class="details box pad_1em">
      <h3 class="dk_grey fabric_content_button">
        FABRIC CONTENT
      </h3>
			<img class="down_button fabric_content_button" src="images/icons/down_a.png" />
      <p class="fabric_content">
        <span class="blue">Outer:</span> <?php
					$dress->getFabric();
				?>. Dry Clean only.
      </p>
      <h3 class="dk_grey margin_top dress_details_button">
        DRESS DETAILS
      </h3>
			<img class="down_button dress_details_button" src="images/icons/down_a.png" />
<?php if ($_GET['view'] == 'f' || $_GET['view'] == 'acs') {/*No fitting*/} else { echo '
	      <p class="dress_details">
        All Sally Eagle&#39;s collection ' . $dress->typeName . 'es are available in sizes
				6 through to 22.
      </p>
      <p class="dress_details">
        To ensure a perfect fit you can also have your dress made and fitted to
				your exact measurements at the Sally Eagle Bridal Boutique in
				Wellington, New Zealand.
      </p>
';
}?>      <p class="dress_details">
        Proudly Made in New Zealand.
      </p>
    </section>
    <!-- END MAIN BLOCK -->
    </div>
  <!-- END CONTENT BLOCK -->
  </div>
	<!-- START SIMILAR STYLES -->
	<?php
	$imageNumber = '4';
	if ($_GET["view"] == 'f') {
		$imageNumber = '2';
	}
	$block->addBlock(
		$imageNumber,
		'SIMILAR STYLES',
		$_GET["a"]
	); ?>
	<!-- END SIMILAR STYLES -->
<?php // INCLUDE FOOTER
	include('templates/footer.php');
?>
</body>

</html>
