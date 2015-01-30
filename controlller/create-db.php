<?php

//this is to connect the varaibles i have in my database file to this folder
require_once("../model/database.php");

//this is to connect to our server
$connection = new newsqli($host, username, password)

//   this is to see if my code that is above works like if their is an error
if ($connection->connect_error) {
    die("Error: " . $connection->connect_error);
} else {
    echo "success: " . $connection->host_info;
}
$connection->close();

