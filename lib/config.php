<?php
if(!$conf = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . '/config.xml')) {
	die('Could not load config.xml');
}
?>