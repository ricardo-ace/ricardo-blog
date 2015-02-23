<?php
require_once(__DIR__ . "/../model/config.php");

//storing infoormation in our variables 
 $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL); 
 $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING); 
 $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING); 
 
 //to make the password unique
  $salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";
  
 // we are encrypting ouur password
  $hashedPassword = crypt($password, $salt);
  
  $query = $_SESSION["coonnection"]->query("INSERT INTO users SET " 
          ."email = '$email',"
          ."username = '$username',"
          ."password = '$hashedPassword',"
          ."salt = '$salt'");
  
  if($query){
   echo"successfully craeted user: $username";       
  }
  else {
      echo"<p>" . $_SESSION["connection"]->error . "</p>";
  }