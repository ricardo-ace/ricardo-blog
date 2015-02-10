<?php
require_once(__DIR__ . "/../model/database.php");

$connnection = new myqli($host, $username, $password, $database);

$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, 'post', FILTER_SANITIZE_STRING);

$query = $connection->query("INSERT INTO posts set title = '$title', post = 'post'");

 $connection-close();