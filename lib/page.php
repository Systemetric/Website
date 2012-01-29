<?php
class Page {
	private static $filePath;

	public static function GET($key, $value = null) {
		if($value === null) {
			if(isset($_GET[$key])) {
				return $_GET[$key];
			} else {
				return null;
			}
		} else {
			$_GET[$key] = $value;
		}
	}

	public static function POST($key, $value = null) {
		if($value === null) {
			if(isset($_POST[$key])) {
				return $_POST[$key];
			} else {
				return null;
			}
		} else {
			$_POST[$key] = $value;
		}
	}

	public static function setup() {
		// If $_GET['page'] isn't set, default it to `home`
		if(!self::GET('page')) {
			self::GET('page', 'home');
		}

		if(file_exists('pages/' . self::GET('page') . '/' . self::GET('var1') . '/' . self::GET('var2') . '/' . self::GET('var3') . '.php')) {
			self::$filePath = self::GET('page') . '/' . self::GET('var1') . '/' . self::GET('var2') . '/' . self::GET('var3');
		} else if(file_exists('pages/' . self::GET('page') . '/' . self::GET('var1') . '/' . self::GET('var2') . '.php')) {
			self::$filePath = self::GET('page') . '/' . self::GET('var1') . '/' . self::GET('var2');
		} else if(file_exists('pages/' . self::GET('page') . '/' . self::GET('var1') . '.php')) {
			self::$filePath = self::GET('page') . '/' . self::GET('var1');
		} else if(file_exists('pages/' . self::GET('page') . '.php')) {
			self::$filePath = self::GET('page');
		} else {
			Debug::msg('Page does not exist');

			return false;
		}
	}

	public static function addContent() {
		if(self::$filePath) {
			require_once('pages/' . self::$filePath . '.php');
		}
	}

	public static function filePath($extension = '') {
		if(!$extension) {
			return self::$filePath;
		} else {
			return self::$filePath . '.' . $extension;
		}
	}
}
?>