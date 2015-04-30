<?php

class Database {

//functions for to the blog to work
    private $connection;
    private $host;
    private $username;
    private $password;
    private $database;
    public $error;

    public function __construct($host, $username, $password, $database) {
//database for host,username,password, and database
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
//database for host, username, and password

        $this->connection = new mysqli($host, $username, $password);

// if statement for error
        if ($this->connection->connect_error) {
            die("<p>Error: " . $this->connection->connect_error . "</p>");
        }

        $exists = $this->connection->select_db($database);
//database settings and alerts
        if (!$exists) {
            $query = $this->connection->query("CREATE DATABASE $database");

            if ($query) {
                echo "<p>Sucessfully Created Database: " . $database . "</p>";
            }
        } else {
            //      echo "<p>Database already exists.</p>";
        }
    }

//functions for openConnection, closeConnection, and query 

    public function openConnection() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die("<p>Error: " . $this->connection->connect_error . "</p>");
        }
    }

    public function closeConnection() {
        if (isset($this->connection)) {
            $this->connection->close();
        }
    }

    public function query($string) {
        $this->openConnection();

        $query = $this->connection->query($string);

        if ($query) {
            $this->error = $this->connection->error;
        }

        $this->closeConnection();

        return $query;
    }

}
