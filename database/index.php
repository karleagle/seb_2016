<?php
	include('../classes/database.php');
	include('forms.php');
	include('../config.php');
	//$form = new Form();
?>

<!DOCTYPE html>
<html class="no-js">
<head>
<meta charset="UTF-8">
<title>Sally Eagle Bridal Database</title>
<meta name="viewport" content="initial-scale=1.0, width=device-width" />
<meta name="description" content="Sally Eagle Bridal Database" />
<meta name="keywords" content="sally eagle, sally eagle bridal, vintage, vintage inspired, vintage wedding dress, vintage wedding gown, vintage bridal gown, wedding dress, wedding dresses, bridal dress, bridal dresses, bridal gown, bridal gowns, bridal wear, bridalwear, wedding dress designer, wedding dress designers, bridal gown designer, bridal gown designers, bridal dress design, bridal dress designer, bridal design, bridal designer, bridal designers, designer bridal, bridal dressmaker, wedding gown designer, wedding gown designers, wellington, willis st, willis street, bridal shop, wellington bridal shop, bridal store, wellington bridal, wellington bridal store, bridal boutique, wellington bridal boutique, wedding dress shop, wedding dress store, wedding dress boutique, wedding gown store, wedding gown shop, wedding gown boutique, bridesmaid, bridesmain dresses, bridesmaids dresses, ball dress, ball dresses, ball dress shops" />
<meta name="robots" content="INDEX,FOLLOW" />


<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script src="https://use.typekit.net/vyq5cic.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="../js/menu_hover.js"></script>

<link rel="stylesheet" type="text/css" href="../css/style.css" media="all" />
<link rel="icon" type="image/ico" href="../images/favicon.ico"/>

</head>

<body>
	<header class="opaque88">
		<nav class="main">
			<a class="home_solo" href="index.php">
				<img src="../images/icons/logo.png" alt="Home"/>
			</a>
		</nav>
	<header>
	<div class="content">
		<a>
			Add a bride
		</a>
		<a>
			Add a bride's order
		</a>
		<a>
			Follow up on consultations
		</a>
		<a>
			Reconnect
		</a>
		<a>
			Follow up quote
		</a>
		<a>
			Add a stockist
		</a>
		<a>
			Add a stockist's order
		</a>
		<a>
			Production schedule
		</a>

		<form action="welcome.php" method="post">
			Name: <input type="text" name="name"><br>
			E-mail: <input type="text" name="email"><br>

			<input type="submit">
		</form>

	<!-- END MAIN BLOCK -->
	</div>
<?php // INCLUDE FOOTER
	include('../templates/footer.php');
?>
</body>

</html>
