<?php

//this is to connect the varaibles i have in my database file to this folder
require_once(__DIR__ . "/../model/database.php");

//this is to connect to our server
$connection = new mysqli($host, $username, $password);

//   this is to see if my code that is above works like if their is an error
if ($connection->connect_error) {
    die("<p>Error: " . $connection->connect_error) . "</p>";
}
$exists = $connection->select_db($database);

if (!$exists) {
    $query = $connection->query("CREATE DATABASE $database");

    if ($query) {
        echo "<p>successfully created database" . $database . "</p>";
    }
} else {
    echo "<p>database already exists </p>";
}
echo"";
$query = $connection->query("CREATE TABLE posts ("
        . "id int(11) NOT NULL AUTO_INCREMENT,"
        . "title varchar(255) NOT NULL,"
        . "post text NOT NULL,"
        . "PRIMARY KEY (id))");

if($query) {
    echo "<p>succesfully created table: posts</p>";
}

$connection->close();



