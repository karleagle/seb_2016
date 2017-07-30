<?php // Set an array to hold the menu items
	$submenu = [
		['c','2018 RAINE',2],
		['c','2017 DUSK',1],
		['c','CLASSICS',0],
		['w','REAL BRIDES',null]
//		, ['b','BRIDESMAIDS',null]
//		, ['f','FLOWER GIRLS',null]
//		, ['a','ACCESSORIES',null]
	]
?>
	<div class="submenu ">
		<ul class="opaque88">
<?php for ($i=0; $i<count($submenu); $i++) {
	$statement = '';
	$element = 'a';
	// If this is the current page and collection, set list item as 'p' not 'a'
	if (isset($_GET['a']) && $_GET['a']==$submenu[$i][0]) {
		if (isset($_GET['c']) && $_GET['c']==$submenu[$i][2] || $_GET['a'] != 'c' ) {
			$element = 'p';
		}
	}
	$statement = '			<li>
				<';
	$statement .= $element;
	// Check to make sure we we not element 'p'
	if ($element == 'a') {
		$statement .= ' href="index.php?view=g&a=' . $submenu[$i][0];
	}
	// If a collection is available, add it
	if ($element == 'p') {
		// Add nothing
	} elseif (is_null($submenu[$i][2])) {
		$statement .= '"';
	} else {
		$statement .= '&c=' . $submenu[$i][2] . '"';
	}
	$statement .= '>' . $submenu[$i][1] . '</' . $element . '>
			</li>
';
	echo $statement;
}?>
		</ul>
	</div>
