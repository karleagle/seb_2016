<?php // Set an array to hold the menu items
	$submenu = [
		['c','BRIDAL'],
		['w','REAL BRIDES'],
		['b','BRIDESMAIDS'],
		['f','FLOWER GIRLS']
//		,	['a','ACCESSORIES']
	]
?>
	<div class="submenu ">
		<ul class="opaque88">
<?php for ($i=0; $i<count($submenu); $i++) {
	$statement = '';
	$element = 'a';
	if (isset($_GET['a']) && $_GET['a']==$submenu[$i][0]) { $element = 'p';}
	$statement = '			<li>
				<';
	$statement .= $element;
	if (isset($_GET['a'])) {
		if ($_GET['a']!=$submenu[$i][0]) {
			$statement .= ' href="index.php?view=g&a=' . $submenu[$i][0] . '"';
		}
	} else {
		$statement .= ' href="index.php?view=g&a=' . $submenu[$i][0] . '"';
	}
	$statement .= '>' . $submenu[$i][1] . '</' . $element . '>
			</li>
';
	echo $statement;
}?>
		</ul>
	</div>
