<?php
namespace Database;

class DB {
    private $_connection;
    private static $_instance; //The single instance
    private $_host;
    private $_username;
    private $_password;
    private $_database;
    /*
    Get an instance of the Database
    @return Instance
    */
    public static function getDB() {
        if(!self::$_instance) { // If no instance then make one
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    // Constructor
    private function __construct() {
        $config = require_once __DIR__."/../config/db.php";

        $this->_host = $config['DB_HOST'];
        $this->_username = $config['DB_USERNAME'];
        $this->_password = $config['DB_PASSWORD'];
        $this->_database = $config['DB_DATABASE'];

        $this->_connection = new \mysqli($this->_host, $this->_username,
            $this->_password, $this->_database);

        // Error handling
        if(mysqli_connect_error()) {
            trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),
                E_USER_ERROR);
        }
    }
    // Magic method clone is empty to prevent duplication of connection
    private function __clone() { }
    // Get mysqli connection
    public function getConnection() {
        return $this->_connection;
    }
    public function query($sql){
        $this->_connection->query($sql);
    }
    public function select($sql){

        $query =  $this->_connection->query($sql);
        $array = [];
        if(!$query){
            throw new \Exception($this->_connection->error,$this->_connection->errno);
        }
        if($query->num_rows ==0){
            return $array;
        }

        while($result =  $query->fetch_array(MYSQLI_BOTH))
            $array[] = $result;

        $query->close();
        return $array;
    }

}