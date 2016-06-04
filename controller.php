<?php 

// Class to populate views

class Controller {

	// Extract info from database
	public static function callData($table, $group=null){
		//new connection
		try {
			$DBH = new PDO(DB, USER, PASS);
		}
		catch(PDOException $e) {
			echo $e->getMessage();
		}	
		
		// If a group type is given, only SELECT those. Otherwise, SELECT all.  NB 'm' is the image used for the browse page (Main)
		if (isset($group)) {
			if($group=='b'||$group=='c'||$group=='w'||$group=='f'){
				$statement = "SELECT * FROM $table INNER JOIN images ON $table.listId=images.listId WHERE $table.listType = '$group' AND active = '1' AND images.type = 'm' ORDER BY $table.listId DESC";
			} else {
				$statement = "SELECT * FROM $table INNER JOIN images ON $table.listId=images.listId WHERE active = '1' AND images.type = 'm' ORDER BY $table.listId DESC";		
			}
		} else { // For RECENTLY ADDED: Get the main images and details
			$statement = "SELECT * FROM $table INNER JOIN images ON $table.listId=images.listId WHERE active = '1' AND images.type = 'm' ORDER BY $table.listId DESC";		
		}
		
		$handler = $DBH->prepare($statement);
		$handler->execute(); // could be sped up in $DBH->query($statement) - no prepare/execute	

		$set=array();
		
		while ( $row = $handler->fetch(PDO::FETCH_ASSOC) ) {

			$set[] = $row;
		}

		// close connection
		$DBH = null;	

		return $set;
	}

	// Populate browse with linked images and page display
	public static function populateBrowse($list, $pg=1, $group=null) {
	
		// See if more than 12 dresses were returned in order to pagenate the menu
		if (is_numeric($pg)) {
			// Reduce page number from start=1 to start=0
			$pg = $pg-1;
			
			if(count($list)>(12+12*$pg)) {
				$length = 12+12*$pg;
				$page=$pg;
			} else {
				$length = count($list);
				$page=$pg;				
			}
		}  else {
			$page=0;
			$length=count($list);
		}
		
		// Define wedding or bridesmaid dresses in 'Sally Eagle presents'
		$type = "";
		if ($group == 'b') { $type = ' bridesmaid dress'; }
		elseif ($group == 'c') { $type = ' wedding dress'; }
		
		// fill page with tiles
		for ( $i=($page*12); $i<$length; $i++) {
			$listId = $list[$i]['listId'];
			$category = $list[$i]['listType'];
			$title = $list[$i]['title'];
			$imageName = $list[$i]['fileName'];
			$alt = $list[$i]['alt'];
			echo <<<DRESS
		<div class="dressTile">
			<a class="image" href="index.php?view=$category&a=$listId">
				<img src="images/content/$imageName" title="$alt" alt="Sally Eagle Bridal presents $alt$type" />
			</a>
			<a class="name" href="index.php?view=$category&a=$listId">
				$title
			</a>
		</div>

DRESS;
		}
		
		echo '
		<nav class="browsePages">';
			
		//Set page count
		if (is_numeric($pg)&&count($list)>12) {	
			// If a group is set, insert it into the page address
			if(isset($group)){
				$view='a='.$group.'&';
			} else {
				$view="";
			}
			
			echo '
			PAGE ';
			
			// Set the max page number
			$max = ceil(count($list)/12);
			
			// Iterate through the number of pages
			for ( $j=0; $j<$max; $j++ ) {
				// Make the current page non-clickable
				if ($j==$pg) {
					$x=$j+1;
					echo '			<span>' . $x . '</span> 
					';
				} else {
				// Link all other pages
					$x=$j+1;
					echo '			<a href="index.php?view=g&' . $view . 'pg=' . $x . '">' . $x . '</a> 
			';
				}
			}
			echo '
			| 
			<a href="index.php?view=g&' . $view . 'pg=a">VIEW ALL</a>
';
		}
		
		echo '
		</nav>
';
	}
	
	// Get main image for WEDDINGS page (bar)
	public static function getMain($listId, $table){
		//new connection
		try {
			$DBH = new PDO(DB, USER, PASS);
		}
		catch(PDOException $e) {
			echo $e->getMessage();
		}	
		
		//detail statement and prepare it for execution
		$statement = "SELECT * FROM listall 
						INNER JOIN images ON listall.listId=images.listId 
						INNER JOIN $table ON listall.listId=$table.listId  
						WHERE listall.listId = '$listId'";
		if ($table == 'weddings') {
			$statement .= " AND images.type = 'h'";
		}
		
		$handler = $DBH->prepare($statement);
		$handler->execute(); // could be sped up in $DBH->query($statement) - no prepare/execute	

		$set=$handler->fetch(PDO::FETCH_ASSOC); 

		// close connection
		$DBH = null;	

		return $set;
	}

	// Get the rest of the images for WEDDINGS page (bar) OR the gallery
	public static function getImages($listId){
		//new connection
		try {
			$DBH = new PDO(DB, USER, PASS);
		}
		catch(PDOException $e) {
			echo $e->getMessage();
		}	
		
		//detail statement and prepare it for execution
		$statement = "SELECT * FROM images WHERE listId = '$listId' AND (type = 'm' OR type = 'l' OR type = 'p')";
		
		$handler = $DBH->prepare($statement);
		$handler->execute(); // could be sped up in $DBH->query($statement) - no prepare/execute	

		$set=array();
		
		while ( $row = $handler->fetch(PDO::FETCH_ASSOC) ) {

			$set[] = $row;
		}

		// close connection
		$DBH = null;	

		return $set;
	}
	
	// Populate WEDDINGS with images and social links
	public static function populateWeddings($set) {
	
		// See how many images in the set
		$numberImages = count($set);
		
		// For each image, insert the image & social bar
		for ( $k=0; $k<$numberImages; $k++) {
			$imageName = $set[$k]['fileName'];
			$alt = $set[$k]['alt'];
			
			echo '	<div class="gallery">
			<a href="images/zoom/' . $imageName . '" data-lightbox="weddings" title="' . $alt . '">			
				<img src="images/content/' . $imageName . '" alt="' . $alt . '" title="' . $alt . '"/>
			</a>';
Controller::populateSocial($set[$k], 'w');
		echo '	</div>
';
		}
	}
	
	// Populate MORE sections with random images from each group
	public static function addMoreSection($list, $imageMax, $header, $current, $group) {
		// Set SECTION
		echo "<section class='more'>
		<a class='more' href='index.php?view=g&a=$group'>
			<h2>
				$header
			</h2>
		</a>
";	
		// Create an array to hold the images that have already been randomly generated
		$countOff = array();

		$length = count($list);
		
		// Define wedding or bridesmaid dresses in 'Sally Eagle presents'
		$type = "";
		if ($group == 'b') { $type = ' bridesmaid dress'; }
		elseif ($group == 'c') { $type = ' wedding dress'; }
		
		// Populate images
		for ( $l=0; $l<$imageMax; $l++) {
			// Reset UNIQUE tag
			$unique = TRUE;
		
			// Get random dress number
			$dress = rand(0,$length-1);
			
			// Make sure the number hasn't already been used AND it isn't the current live item
			for ( $m=0; $m<count($countOff); $m++ ) {
				if ($dress == $countOff[$m] || $list[$dress]['listId'] == $current) {
					$unique = FALSE;
				}
			}
			
			if ($unique) {
			$countOff[]=$dress;
			$listId = $list[$dress]['listId'];
			$category = $list[$dress]['listType'];
			$title = $list[$dress]['title'];
			$imageName = $list[$dress]['fileName'];
			$alt = $list[$dress]['alt'];
			echo <<<DRESS
		<div>
			<a href="index.php?view=$category&a=$listId">
				<img src="images/more/$imageName" title="$alt" alt="Sally Eagle Bridal presents $alt$type" />
			</a>
			<a class="name" href="index.php?view=$category&a=$listId">
				$title
			</a>
		</div>

DRESS;
			} else {
				$l--;
			}
		}
		
		echo "	</section>";
	}
	
	// Populate RECENTLY ADDED sections with the latest added dresses/weddings
	public static function recentlyAddedSection($list, $imageMax) {
		// Set SECTION
		echo "	<section class='recentlyAdded'>
		<h3 class='recentlyTile'>
			RECENTLY ADDED
		</h3>
";	
		
		// Populate images
		for ( $m=0; $m<$imageMax; $m++) {
			$listId = $list[$m]['listId'];
			$category = $list[$m]['listType'];
			$title = $list[$m]['title'];
			$imageName = $list[$m]['fileName'];
			$alt = $list[$m]['alt'];
			echo <<<DRESS
		<div>
			<a href="index.php?view=$category&a=$listId">
				<img src="images/content/$imageName" title="$alt" alt="Sally Eagle Bridal presents $alt" />
			</a>
			<h2>
				$title
			</h2>
			<a class="seeMore" href="index.php?view=$category&a=$listId">
				SEE MORE
			</a>
		</div>

DRESS;
		} 
		echo "	</section>";
		
	}
	
	// Populate gallery with thumbnails
	public static function populateThumbs($set) {
	
		// See how many images in the set
		$numberImages = count($set);
		
		// For each image, insert the image & social bar
		for ( $n=0; $n<$numberImages; $n++) {
			$imageName = $set[$n]['fileName'];
			$alt = $set[$n]['alt'];
			if ($n == 0) {
				$active = "zoomThumbActive";
			} else {
				$active = "";			
			}
			echo <<<THUMB
				<a class="$active" href="javascript:void(0);" rel="{gallery: 'gal1', smallimage: 'images/gallery/$imageName',largeimage: 'images/zoom/$imageName'}">
					<img src="images/gallery_thumb/$imageName" alt="$alt" title="$alt" class="thumb" data-name="$imageName"/>
				</a>

THUMB;
		}
	}
	
	public static function getDress($item) {	
		//new connection
		try {
			$DBH = new PDO(DB, USER, PASS);
		}
		catch(PDOException $e) {
			echo $e->getMessage();
		}	
		
		//detail statement and prepare it for execution
		//determine whether all dresses are required or just some
		$statement = "SELECT * FROM dresses WHERE listId = '$item' ORDER BY listId DESC";		

		$handler = $DBH->prepare($statement);
		
		$handler->execute(); // could be sped up in $DBH->query($statement) - no prepare/execute	

		$row = $handler->fetch(PDO::FETCH_ASSOC);
		$name = $row['name'];
		$desc = $row['desc'];
		$fabric = $row['fabric'];
		$sizes = $row['sizes'];
		
		// NEED TO RETREIVE AN ARRAY OF THUMBNAIL DETAILS FROM THE DATABASE - CHANGE THE getImage FUNCTION TO GET ALL
		$image = Controller::getImage($listId,$DBH,'t');
		$imageName = $image['fileName'];
		$alt = $image['alt'];

		
		// close connection
		$DBH = null;		
	}
	
	// Populate gallery with thumbnails
	public static function populateSocial($social, $group) {

		if ($group == 'w') { // Edit description to refer to the couple...
			$imageName = 'One-off bespoke';
			$imageNameB = $social['alt'];
			$imageNameB = str_replace('&#43;','%2B',$imageNameB);
			$imageNameB = str_replace(' ','%20',$imageNameB);
			
		} else { // ...otherwise use dress name.
			$imageName = $social['title'];
			$imageNameB = $social['title'];
		}

		$fileName = $social['fileName'];
		$pageURL = 'http%3A%2F%2F' . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
		$pageURL = str_replace('/','%2F',$pageURL);
		$pageURL = str_replace('&','%26',$pageURL);
		
		if ($group == 'w') {
			$path = 'content';
		} else {
			$path = 'gallery';
		}

		echo <<<SOCIAL

				<ul class="social">
					<li class="like">
						<a title="Share the page on your timeline" href="https://www.facebook.com/sharer/sharer.php?u=$pageURL" target="_blank" >
							SHARE IT
						</a>
					</li>
					<li class="pin">
						<a title="Pin the image it to your wedding board" class="pinterest" href='//pinterest.com/pin/create/button/
							?url=http%3A%2F%2Fsallyeagle.co.nz%2Findex.php%3Fview%3Dg%26a%3D$group
							&media=http%3A%2F%2Fsallyeagle.co.nz%2Fimages%2F$path%2F$fileName
							&description=$imageName%20wedding%20dress%20by%20Sally%20Eagle%20Bridal'
							data-pin-config="none" data-pin-do="buttonPin" target="_blank">
							PIN IT
						</a>
					</li>
					<li class="mail">
						<a title="Email the link to a friend" href="mailto:?Subject=Wedding%20dress
							&body=Have%20a%20look%20at%20this%20Sally%20Eagle%20Bridal%20dress%20that%20I%20found%3A%20$pageURL"
							target="_blank">
							SEND IT
						</a>
					</li>
				</ul>

SOCIAL;
		
	}
	
	// Generate list of colours
	public static function listDressColours($pictured, $selected, $colours) {
		// Default colours
		if ($colours == "") {
			$colours = [
				"White",
				"Ivory",
				"Calico Cream",
				"Blush",
				"Lotus",
				"Ballet",
				"Pale Peach",
				"Guava",
				"Romance",
				"Ferrari",
				"Cassis",
				"Plum",
				"Capri",
				"Ocean",
				"Navy",
				"Periwinkle",
				"Alloy",
				"Platinum",
				"Black",
				"Alaskan",
				"Moss",
				"Cactus",
				"Beam",
				"Buttercup"
			];
		}
		// Generate an option for each of the colours provided
		foreach ($colours as $colour) {
			// If item already selected, add to list
			$thisPicture = "";
			if ($pictured == $colour) { $thisPicture = " (pictured)"; }
				else $thisPicture = "";
			// Show pre-selected colour
			$selection = "";
			if ($selected == $colour) { $selection = " selected"; }
			// Output list option
			echo '	<option value="' . $colour . '"' . $selection . '>' . $colour . $thisPicture . '</option>
						';
		}
	}
}
?>