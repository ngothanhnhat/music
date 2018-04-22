<?php
include_once( 'configs/db.php' );
/*
* Mysql database class - only one connection alowed
*/
class DatabaseProvider {
	private $_connection;
	private static $_instance; //The single instance
	private $_host = HOST_NAME;
	private $_username = DB_USERNAME;
	private $_password = DB_PASSWORD;
	private $_database = DB_NAME;
	private $_charset = DB_charset;
	/*
	Get an instance of the Database
	@return Instance
	*/
	public static function getInstance() {
		if(!self::$_instance) { // If no instance then make one
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	// Constructor
	private function __construct() {
		$this->_connection = new mysqli($this->_host, $this->_username, 
			$this->_password, $this->_database);
			mysqli_query($this->_connection, "set names 'utf8'");

		// Error handling
		if(mysqli_connect_error()) {
			trigger_error("Failed to connect to MySQL: " . mysql_connect_error(),
				 E_USER_ERROR);
		}
	}
	// Magic method clone is empty to prevent duplication of connection
	private function __clone() { }
	// Get mysqli connection
	
	public function getConnection() {
		return $this->_connection;
	}
	
	public static function execQuery($query){
		$instance = self::getInstance();
		$mysqli = $instance->getConnection();
		return $mysqli->query($query);
		
	}
	
	public function __destruct() {
		$this->_connection->close();
	}
	
}
?>