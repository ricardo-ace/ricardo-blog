<?php
 require_once(__DIR__."/database.php");
$path = "/ricardo-blog/";

  $host = "localhost";
  $username = "root";
  $password = "root";
  $database = "blog_db";

  $connnection = new Database($host, $username, $password, $database);