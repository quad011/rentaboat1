<?php
 

class dbConn{

	public $connection;

	private static $instance = null;
 
	private function __construct() {
 
	try {

		$this->connection = new PDO('mysql:host=localhost; dbname=rentaboat', 'root', '' );
		$this->connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	}

	catch (PDOException $e) {

	echo "Connection Error: " . $e->getMessage();
	}
 
	}
 
	public static function getConnection() {
 

	if (!isset(self::$instance)) {

	 self::$instance = new self;
	}
 
	return self::$instance;
	}
 
}
 
?>