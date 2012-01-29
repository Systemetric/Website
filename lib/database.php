<?php
class DB {
	private static $c;
	private static $dbh;

	public static function setup($conf) {
		self::$c = $conf;

		try {
			self::$dbh = new PDO('mysql:host=' . self::$c->db->server . ';dbname=' . self::$c->db->database, self::$c->db->username, self::$c->db->password);
		} catch(PDOException $e) {
			Debug::msg($e->getMessage());
		}
	}

	// Data passed in as field => value array
	public static function insert($data, $table) {
		$fields = array_keys($data);
		$values = array_values($data);

		$placeholderString = ':' . implode($fields, ', :');
		$fieldsString = implode($fields, ', ');

		$stmt = self::$dbh->prepare('INSERT INTO ' . $table . ' (' . $fieldsString . ') VALUES (' . $placeholderString . ')');

		try {
			$stmt->execute($data);
		} catch(PDOException $e) {
		 	Debug::msg($e->getMessage());
		}
	}
}

DB::setup($conf);
?>