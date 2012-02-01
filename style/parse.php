<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/lib/less.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/lib/config.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/lib/debug.php');

header("Content-type: text/css");

$name = @$_GET['name'];

// ALWAYS delete compiled CSS file if debug is on
if($conf->debug) {
	@unlink('compiled/' . $name . '.css');
}

try {
	lessc::ccompile($name . '.less', 'compiled/' . $name . '.css');
} catch(exception $e) {
	Debug::msg('LESS compile failed with ' . $name . ': ' . $e->getMessage());
}

echo file_get_contents('compiled/' . $name . '.css');
?>