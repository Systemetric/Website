<?php
require_once("lib/less.php");
header("Content-type: text/css");

$name = @$_GET['name'];
lessc::ccompile("$name.less", "compiled/$name.css");

echo file_get_contents("compiled/$name.css");
?>