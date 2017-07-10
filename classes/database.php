<?php

// Class for GALLERY page
class Database {
	function __construct($table, $group=null, $collection=null) {
		$this->images = Controller::callData($table, $group, $collection);
	}

	function populateBrowse($pg=1, $group=null, $collection=null) {

	}

}


?>
