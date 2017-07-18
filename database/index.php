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
			First Name: <input type="text" name="name"><br>
			Last Name: <input type="text" name="name"><br>
			Store (stockists only): <input type="text" name="name"><br>
			E-mail: <input type="text" name="email"><br>
			Phone: <input type="text" name="email"><br>
			Address: <input type="text" name="email"><br>
			International <input type="checkbox" name="email"><br>

			<input type="submit" value="Add Contact">
		</form>

	<!-- END MAIN BLOCK -->
	</div>
<?php // INCLUDE FOOTER
	include('../templates/footer.php');
?>
</body>

</html>
