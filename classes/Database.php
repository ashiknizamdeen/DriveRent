<?php
class Database {
    private $servername;
    private $username;
    private $password;
    private $database;
    private $connection;
    
    public function __construct() {
        $this->servername = $_ENV['DB_HOST'] ?? 'localhost';
        $this->username = $_ENV['DB_USER'] ?? 'root';
        $this->password = $_ENV['DB_PASSWORD'] ?? '';
        $this->database = $_ENV['DB_NAME'] ?? 'Cardb';
        $this->connect();
    }
    
    private function connect() {
        $this->connection = new mysqli($this->servername, $this->username, $this->password, $this->database);
        if ($this->connection->connect_error) {
            error_log("Database connection failed: " . $this->connection->connect_error);
            die("Connection failed. Please try again later.");
        }
    }
    
    public function getConnection() {
        return $this->connection;
    }
    
    public function prepare($query) {
        return $this->connection->prepare($query);
    }
    
    public function query($query) {
        return $this->connection->query($query);
    }
    
    public function escape($string) {
        return $this->connection->real_escape_string($string);
    }
    
    public function close() {
        if ($this->connection) {
            $this->connection->close();
        }
    }
}
?>