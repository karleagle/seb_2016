<?php
	include('../classes/database.php');
	include('forms.php');
	include('../config.php');
	//$form = new Form();
	$contacts = new Contact();
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
	</header>
	<div class="content">
		<a>
			Add a contact
		</a>
		<a>
			Add a consultation
		</a>
		<a>
			Add a quote/order
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
			Production schedule
		</a>

		<form action="welcome.php" method="post">
			contact ID: <input type="hidden" name="contact_id"><br>
			First Name: <input type="text" name="f_name"><br>
			Last Name: <input type="text" name="l_name"><br>
			Business name: <input type="text" name="business"><br>
			E-mail: <input type="text" name="email"><br>
			Phone: <input type="text" name="phone"><br>
			Address: <input type="text" name="address"><br>
			International <input type="checkbox" name="international"><br>

			<input type="submit" value="Add Contact">
		</form>

		<h1>CUSTOMER CONTACTS</h1>
		<div class='bar'><p>&#95;&#95;&#95;&#95;</p></div>
<?php // CONTACTS TABLE
	$contacts->listContacts();
?>
		<h1>STOCKIST CONTACTS</h1>
		<div class='bar'><p>&#95;&#95;&#95;&#95;</p></div>
		<p>Can we order by business name?</p>
<?php // CONTACTS TABLE
	$contacts->listContacts(true);
?>

	<!-- END MAIN BLOCK -->
	</div>
<?php // INCLUDE FOOTER
	include('../templates/footer.php');
?>
</body>

</html>
