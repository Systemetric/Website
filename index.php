<?php
require_once('lib/global.php');
require_once('lib/less.php');

// In debug mode, MAKE SURE we get a new CSS (from LESS) file every time by deleting the current ont
if($conf->debug) {
	@unlink('style.css');
}

Page::setup();

require_once('lib/html/header.php');

//Page::addContent();

require_once('lib/html/footer.php');
?>
