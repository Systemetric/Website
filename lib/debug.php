<?php
class Debug {
	private static $c;

	public static function setup($conf) {
		self::$c = $conf;

		if(self::$c->debug) {
			error_reporting(E_ALL);
			ini_set('display_errors', '1');
		}
	}

	public static function msg($message) {
		if(self::$c->debug) {
			echo '<div><strong>Debug:</strong><br>' . $message . '</div>';
		}

		// Write to log file
		$fp = fopen(self::$c->folders->log . 'debug.log', 'a');
		fwrite($fp,  date("d/m/y H:i:s") . $message . "\n");
		fclose($fp);
	}

	public static function dump($data) {
		if(is_array($data)) {
			echo '<pre>'; print_r($data); echo '</pre>';
		} else {
			var_dump($data);
		}
	}
}

//$debug = new Debug(&$conf);
Debug::setup($conf);
?>