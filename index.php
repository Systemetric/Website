<?php
require_once('lib/global.php');
require_once('lib/less.php');

// In debug mode, MAKE SURE we get a new CSS (from LESS) file every time by deleting the current ont
if($conf->debug) {
	@unlink('style.css');
}

// Compile LESS to CSS
try {
	lessc::ccompile('less/global.less', 'style.css');
} catch (exception $ex) {
	Debug::msg($ex->getMessage());
}

Page::setup();

require_once('lib/html/header.php');

//Page::addContent();

require_once('lib/html/footer.php');
?>