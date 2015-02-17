<?php

//this is to connect the varaibles i have in my database file to this folder
require_once(__DIR__ . "/../model/config.php");


$query = $connection->query("CREATE TABLE posts ("
        . "id int(11) NOT NULL AUTO_INCREMENT,"
        . "title varchar(255) NOT NULL,"
        . "post text NOT NULL,"
        . "PRIMARY KEY (id))");

if($query) {
    echo "<p>succesfully created table: posts</p>";
}





