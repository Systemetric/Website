<?php
// Handles all user auth and detail thingies
class User {
	private static $data, $loggedIn;

	// Get some of the user's data, or update it if $value !== null
	public static function data($key, $value = null) {
		if($value !== null) {
			self::$data->$key = $value;
		} else {
			return self::$data->$key;
		}
	}

	// Checks username/password in DB, sets $_SESSION['user']['loggedIn'] = true on success, false on failure, returns same values
	public static function login($username, $password) {

	}

	// Is the user logged in? Check $_SESSION to see if they are or not
	public static function isLoggedIn($state = null) {
		if($state !== null) {
			$_SESSION['user']['loggedIn'] = $state;
		} else {
			return isset($_SESSION['user']['loggedIn']) ? $_SESSION['user']['loggedIn'] : false;
		}
	}
}
?>