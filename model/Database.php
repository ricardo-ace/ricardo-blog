<?php

class Database {

    private $connection;
    private $host;
    private $username;
    private $password;
    private $database;
    public $error;

    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;

        //this is to connect to our server
        $this->connection = new mysqli($host, $username, $password);

//   this is to see if my code that is above works like if their is an error
        if ($this->connection->connect_error) {
            die("<p>Error: " . $this->connection->connect_error) . "</p>";
        }
        $exists = $this->connection->select_db($database);

        if (!$exists) {
            $query = $this->connection->query("CREATE DATABASE $database");

            if ($query) {
                echo "<p>successfully created database" . $database . "</p>";
            }
        } else {
            echo "<p>database already exists </p>";
        }
        echo"";
    }

    public function openConnection() {
        $this->coonnection = new mysqli($this->host, $this->username, $this->password, $this->database);

        //   this is to see if my code that is above works like if their is an error
        if ($this->connection->connect_error) {
            die("<p>Error: " . $connection->connect_error) . "</p>";
        }
    }

    public function closeConnection() {
        if (isset($this->connection)) {
            $this->connection->close();
        }
    }

    public function query($string) {
        $this->oenConnection();

        $query = $this->connection->query($string);

        if (!$query) {
            $thiss->error = $this->connection->error;
        }
        $this->closeConnection();

        return $query;
    }

}
