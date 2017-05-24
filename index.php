<?php
	include('classes/controller.php');
	include('config.php');

	/*	views are:
		g=browse
		f=flower girls
		b=bridesmaids
		c=collections
		w=wedding
		s=shop
		a=about sally
		p=process
		o=contact
		h=home
		z = stockists */
	if(isset($_GET['view'])){
		$view = $_GET['view'];
	} else {
		$view = null;
	}

	//see if pages have been turned
	if(isset($_GET['pg'])){
		$pg = $_GET['pg'];
	}else{
		$pg = 1;
	}

	//some views require items set
	if(isset($_GET['a'])){
		$item = $_GET['a'];
	}else{
		$item = null;
	}

	switch($view){
		case 'g':
			gallery($item, $pg);
			break;
		case 'b':
			dress('b',$item);
			break;
		case 'f':
			dress('f',$item);
			break;
		case 'c':
			dress('c',$item);
			break;
		case 'acs':
			dress('a',$item);
			break;
		case 'w':
			realbride();
			break;
		case 'about': //ABOUT SALLY
			boutique('a');
			break;
		case 'faq':
			boutique('f');
			break;
		case 'boutique':
			boutique('b');
			break;
		case 'auckland':
			boutique('akl');
			break;
		case 'process':
			process();
			break;
		case 'contact':
			contact();
			break;
		case 'trunkshows': //TRUNK SHOWS
			trunkshows();
			break;
		case 'stockists': //STOCKISTS
			stockists();
			break;
		default:
			base('h');
	};

	function gallery($group, $pg){
		include('views/gallery.php');
	};

	function dress($group, $item){
		if($item=='separates'){
			include('views/separates.php');
		}
		else
		include('views/dress.php');
	};

	function base($group, $item = "null"){
		include('views/base.php');
	};

	function boutique($a){
		if (isset($a) && $a == "a") {
			include('views/about.php');
		} elseif (isset($a) && $a == "akl") {
			include('views/auckland.php');
		} elseif (isset($a) && $a == "f") {
			include('views/faq.php');
		} else {
			include('views/boutique.php');
		}
	};

	function stockists(){
		include('views/stockists.php');
	};

	function trunkshows(){
		include('views/trunkshows.php');
	};

	function realbride(){
		include('views/realbride.php');
	};

	function process(){
		include('views/process.php');
	};

	function contact(){
		include('views/contact.php');
	};

?>
