<?php

class dbConnect {

    private $conn;

    function __construct() {        
    }

    /**
     * Establishing database connection
     * @return database connection handler
     */
    function connect() {  
        include_once '../config.php';

        // Connecting to mysql database
        //$this->conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
         $this->conn = new PDO($dsn, $user, $password, $options);

        // Check for database connection error
        
        // returing connection resource
        return $this->conn;
    }

}

?>