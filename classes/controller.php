<?php

// Class for GALLERY page
class Gallery {
	function __construct($table, $group=null) {
		$this->images = Controller::callData($table, $group);
	}

	function populateBrowse($pg=1, $group=null) {

		// See if more than 12 dresses were returned in order to pagenate the menu
		if (is_numeric($pg)) {
			// Reduce page number from start=1 to start=0
			$pg = $pg-1;

			if(count($this->images)>(12+12*$pg)) {
				$length = 12+12*$pg;
				$page=$pg;
			} else {
				$length = count($this->images);
				$page=$pg;
			}
		}  else {
			$page=0;
			$length=count($this->images);
		}

		// fill page with tiles
		for ( $i=($page*12); $i<$length; $i++) {
			$listId = $this->images[$i]['listId'];
			$category = $this->images[$i]['listType'];
			$title = $this->images[$i]['title'];
			$alt = $this->images[$i]['title'];
			if (isset($this->images[$i]['partner'])){
				$alt .= " &amp; " . $this->images[$i]['partner'];
			}
			$hover = $this->images[$i]['hover_image'];
			$upper = strtoupper($alt);
			$type = "";
			if ($category == 'b') { $type = ' bridesmaid dress'; }
			elseif ($category == 'c') { $type = ' wedding dress'; }
			echo <<<DRESS

		<div class="gallery_image_holder relative">
				<a class="hover_reveal image_swap"
					href="index.php?view=$category&a=$listId">
					<img src="images/content/$listId-0.jpg"
						title="$alt"
						alt="Sally Eagle Bridal presents $alt$type" />
					<img class="hidden" src="images/content/$listId-$hover.jpg"
						title="$alt"
						alt="Sally Eagle Bridal presents $alt$type" />
					<div class="gallery_details absolute opaque75 hidden">
						<h2>$upper</h2>
						<p class="box">VIEW DRESS</p>
					</div>
				</a>
			</div>

DRESS;
		}

		echo '
		<nav class="browsePages">';

		//Set page count
		if (is_numeric($pg)&&count($this->images)>12) {
			// If a group is set, insert it into the page address
			if(isset($group)){
				$view='a='.$group.'&';
			} else {
				$view="";
			}

			echo '
			PAGE ';

			// Set the max page number
			$max = ceil(count($this->images)/12);

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

}

// Class for DRESS page
class Dress {
	function __construct($listId, $table) {
		$this->details = Controller::getDetails($listId, $table);
		switch ($this->details['listType']) {
			case 'b':
				$this->typeName = 'bridesmaids dress';
				$this->typeNameCap = 'Bridesmaids Dress';
				break;
			case 'f':
				$this->typeName = 'flower girl dress';
				$this->typeNameCap = 'Flower Girl Dress';
				break;
			case 'a':
				$this->typeName = 'accessory';
				$this->typeNameCap = 'Accessory';
				break;
			default:
				$this->typeName = 'wedding dress';
				$this->typeNameCap = 'Wedding Dress';
				break;
		}
	}

	function getDesc() {
		$desc = "";
		if (isset($this->details['partner'])) {
			$splitDesc = explode("//", $this->details['desc']);
			$desc .= '<h2 class="separates blue">
				' . strtoupper($this->details['title']) .
				' TOP
			</h2>
	    <p class="separates">
				' . $splitDesc[0] . '
	    </p>
			<h2 class="separates blue second_separate">
				' . strtoupper($this->details['partner']) . ' SKIRT
			</h2>
	    <p class="separates">
				' . $splitDesc[1] . '
	    </p>';
		} else {
			$desc .= '<p class="pad_1">
		' . $this->details['desc'] . '
    </p>
';
		}
		echo $desc;
	}

	function getFirstName() {
		$firstName = $this->details['title'];
		echo $firstName;
	}

	function getFirstNameUpper() {
		$firstNameUpper = strtoupper($this->details['title']);
		echo $firstNameUpper;
	}

	function getName() {
		$name = $this->details['title'];
		if (isset($this->details['partner'])) {
			$name .= ' &amp; ' . $this->details['partner'];
		}
		echo $name;
	}

	function getNameUpper() {
		$name = strtoupper($this->details['title']);
		if (isset($this->details['partner'])) {
			$name .= ' &amp; ' . strtoupper($this->details['partner']);
		}
		echo $name;
	}

	function getTypeName() {
		echo $this->typeName;
	}

	function getTypeNameCap() {
		echo $this->typeNameCap;
	}

	function getType() {
		echo $this->details['listType'];
	}

	// REAL WEDDINGS
	function getReview() {
		$review = "	<p class='large blue padded'>
	" .
		$this->details['review'] . "
  </p>";
		if (isset($this->details['reviewMore'])) {
			$reviewMore = explode('//',$this->details['reviewMore']);
			for ($j=0; $j<count($reviewMore); $j++) {
				$review .= "
	<p class='padded'>
	" .
				$reviewMore[$j] . "
  </p>";
			}
		}

		echo $review;
	}

	function getWeddingImages() {
		// Set the odd class if the number of images is odd
		$odd = "";
		if (($this->details['imgCount'])%2!=0) {
			$odd = "l_odd";
		}

		for ($k=0; $k<$this->details['imgCount']; $k++) {
			$class = "";
			if($k == ($this->details['imgCount']-1)) {
				$class = $odd;
			}
			echo '		<img
			class="' . $class . '"
			src="images/content/' . $this->details['listId'] . '-' . ($k) . '.jpg"
			alt="' . $this->details['title'] . '&#39;s wedding dress from Sally Eagle Bridal." />
';
		}
	}

	// COLLECTION DRESSES
	function getFabric() {
		$fabric = $this->details['outer'];
		if (is_null($this->details['lining'])) {} else {
			$fabric .= '; <span class="blue">Lining:</span> ' . $this->details['lining'];
		}
		echo $fabric;
	}

	// Populate the weddings page w up to 4 images
	function setImages(){
		$type = $this->typeName;
		if (isset($this->details['partner'])) {
			$type = ' &amp; ' . $this->details['partner'];
		}
		// Iterate through the number of pages
		for ( $i=0; $i<$this->details['imgCount']; $i++ ) {
			// Make the first image the main image and the rest thumbs
			if ($i==0) {
				echo '
    	<img class="dress main"
				src="images/gallery/' .
				$this->details['listId'] . '-' . $i .
				'.jpg"
				alt="Sally Eagle&#39;s ' .
				$this->details['title'] . ' ' .
				$type .
				' from her bridal collection" />
';
			} else { // insert thumbnails
				echo '
				<div class="overlay">
					<img class="dress thumb"
						src="images/gallery/' .
						$this->details['listId'] . '-' . $i .
						'.jpg"
						alt="Sally Eagle&#39;s ' .
						$this->details['title'] . ' ' .
						$type .
						' from her bridal collection" />
				</div>
';
			}
		}
	}
}


// Class to create  MORE sictions
class Block {
	function __construct($listType, $collection=null) {
		$this->images = Controller::getSimilar($listType, $collection);

		switch ($listType) {
			case 'b':
				$this->typeName = 'bridesmaids dress';
				$this->typeNameCap = 'Bridesmaids Dress';
				break;
			case 'f':
				$this->typeName = 'flower girl dress';
				$this->typeNameCap = 'Flower Girl Dress';
				break;
			case 'a':
				$this->typeName = 'accessory';
				$this->typeNameCap = 'Accessory';
				break;
			case 'w':
				$this->typeName = 'real wedding';
				$this->typeNameCap = 'Real Wedding';
				break;
			default:
				$this->typeName = 'wedding dress';
				$this->typeNameCap = 'Wedding Dress';
				break;
		}
	}


	// Populate MORE sections with random images from each group
	function addBlock($imageMax, $header, $current) {
		// Set SECTION
		echo '<section class="similar_styles">
		<div class="titlebox">
			<h2>' . $header . '</h2>
		</div>
		<div class="styles_gallery">
';
		// Create an array to hold the images that have already been randomly generated
		$countOff = array();

		$length = count($this->images);

		// Populate images
		for ( $l=0; $l<$imageMax; $l++) {
			// Reset UNIQUE tag
			$unique = TRUE;

			// Get random dress number
			$dress = rand(0,$length-1);

			// Make sure the number hasn't already been used
			for ( $m=0; $m<count($countOff); $m++ ) {
				if ($dress == $countOff[$m]) {
					$unique = FALSE;
				}
			}

			// skip if it is the current live item
			if ($this->images[$dress]['listId'] == $current) {
				$unique = FALSE;
			}

			if ($unique) {
			$countOff[]=$dress;
				$listId = $this->images[$dress]['listId'];
				$listType = $this->images[$dress]['listType'];
				$alt = $this->images[$dress]['title'];
				if ($this->images[$dress]['partner'] == 1) {
					$alt .= " &amp; " . $this->images[$dress]['partner'];
				}
				$class = "";
				if ($l>1) {
					$class = " second_styles";
				}
			echo <<<DRESS
			<div class="relative$class">
		      	<a class="hover_reveal"
						href="index.php?view=$listType&a=$listId">
			        <img src="images/more/$listId-0.jpg"
							title="$alt"
							alt="Sally Eagle Bridal presents $alt $this->typeName" />
			        <div class="gallery_details absolute opaque75 hidden">
			          <p class="box">VIEW DRESS</p>
		        </div>
		      </a>
			    </div>


DRESS;
			} else {
				$l--;
			}
		}

		echo "			</div>
			</section>
";
	}

}

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
				$statement = "SELECT * FROM $table WHERE $table.listType = '$group' AND active = '1' ORDER BY $table.listId DESC";
			} else {
				$statement = "SELECT * FROM $table ON $table.listId=images.listId WHERE active = '1' ORDER BY $table.listId DESC";
			}
		} else { // For RECENTLY ADDED: Get the main images and details
			$statement = "SELECT * FROM $table WHERE active = '1' ORDER BY $table.listId DESC";
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

	/* DRESS */
	// Get details for DRESS and REAL WEDDINGS
	public static function getDetails($listId, $table){
		//new connection
		try {
			$DBH = new PDO(DB, USER, PASS);
		}
		catch(PDOException $e) {
			echo $e->getMessage();
		}

		//detail statement and prepare it for execution
		$statement = "SELECT * FROM listall
						INNER JOIN $table ON listall.listId=$table.listId
						WHERE listall.listId = '$listId'
						AND active = '1'";

		$handler = $DBH->prepare($statement);
		$handler->execute(); // could be sped up in $DBH->query($statement) - no prepare/execute

		$set=$handler->fetch(PDO::FETCH_ASSOC);

		// close connection
		$DBH = null;

		return $set;
	}


	// Get all dresses of type and collection
	public static function getSimilar($listType, $collection=null){
		//new connection
		try {
			$DBH = new PDO(DB, USER, PASS);
		}
		catch(PDOException $e) {
			echo $e->getMessage();
		}

		// Set the table to dresses unless it's real weddings
		$table = 'dresses';
		if ($listType == 'w') {
			$table = 'weddings';
		}

		//detail statement and prepare it for execution
		$statement = "SELECT * FROM listall
						INNER JOIN $table ON listall.listId=$table.listId
						WHERE listall.listType = '$listType'
						AND active = '1'";
		if (isset($collection)) {
			$statement .= " AND dresses.collection = $collection";
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

	// Generate stockists
	public static function addStockist($website, $name, $map, $address, $email, $phone, $id=""){
		$website = $website;
		$name = strtoupper($name);
		$map = $map;
		$address = $address;
		$email = $email;
		$phone = $phone;
		$id = $id;

			echo <<<STOCKIST
	<div class=" stockist">
		<a class="underscore stockist ls_wide"
			href="$website" target="_blank">
			$name
		</a>
		<div>
			<a class="ls_thin black link"
			href="$map" target="_blank">
				$address
			</a>
		</div>
		<div>
			<a class="email dk_grey ls_thin link"
				href="mailto:$email">
				$email
			</a>
		</div>
		<p>
			Phone <span id="$id" class="dk_grey">$phone</span>
		</p>
	</div>

STOCKIST;
	}

	// Generate trunkshows
	public static function addTrunkshow($city, $date, $website, $name, $map, $address, $email, $phone, $id=""){
		$city = strtoupper($city);
		$date = strtoupper($date);
		$website = $website;
		$name = $name;
		$map = $map;
		$address = $address;
		$email = $email;
		$phone = $phone;
		$id = $id;

			echo <<<TRUNKSHOW
	<div class="stockist">
	  <h1 class="underscore stockist blue">
	    $city
	  </h1>
		<p class="ls_wide">
			$date
		</p>
	  <div>
			<a class="ls_thin stockist light"
				href="$website" target="_blank">
	      $name
	    </a>
		</div>
		<div>
	    <a class="ls_thin black"
				href="$map" target="_blank">
				$address
			</a>
		</div>
		<div>
	    <a class="email dk_grey ls_thin"
				href="mailto:$email">
				$email
			</a>
		</div>
		<p id="$id">
			Phone <span class="dk_grey">$phone</span>
		</p>
	</div>

TRUNKSHOW;
	}
}

?>
