<?php

//this is to connect the varaibles i have in my database file to this folder
require_once(__DIR__ . "/../model/database.php");

//this is to connect to our server
$connection = new mysqli($host, $username, $password);

//   this is to see if my code that is above works like if their is an error
if($connection->connect_error) {
    die("Error: " . $connection->connect_error);
}
  $exists = $connection->select_db($database);
    
  if(!$exists){
    $query = $connection->query("CREATE DATABASE $database");
    
    if($query){
       echo "successfully created database" . $database;
    }
     }

$connection->close();



