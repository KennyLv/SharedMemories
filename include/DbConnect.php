<?php
/**
 * Handling database connection
 *
 * @author Ravi Tamada
 */
class DbConnect {
 
    private $conn;
 
    // constructor
    function __construct() {
         
    }
 
    // destructor
    function __destruct() {
        // $this->close();
    }
 
    /**
     * Establishing database connection
     * @return database connection handler
     */
    function connect() {
        include_once dirname(__FILE__) . './Config.php';
 
        // Connecting to mysql database
		/*
        //$this->conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
		// Check for database connection error
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
		*/
		
		$this->conn = mysql_connect(DB_HOST, DB_USERNAME, DB_PASSWORD);
        // Check for database connection error
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
		mysql_select_db(DB_NAME,$this->conn);
		
        // returing connection resource
        return $this->conn;
    }
	
	// Closing database connection
    public function close() {
        mysql_close();
    }
 
}
?>