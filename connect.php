<?php
 

class dbConn{

	private static $instance = null;

	protected static $db;
	 
	private function __construct() {
	 
		try {

			self::$db = new PDO( 'mysql:host=localhost;dbname=rentaboat', 'root', '' );
			self::$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

		}

		catch (PDOException $e) {

			echo "Connection Error: " . $e->getMessage();
		}
	 
	}
	 
	public static function getConnection() {
	 

		if (!self::$instance) {

			self::$instance = new self;
		}
	 
		return self::$instance;
	}
	 
}
 
?>