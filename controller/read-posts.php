<?php

require_once(__DIR__ . "/../model/config.php");
//all  of this code will display posts from our database
$query = "SELECT * FROM posts";
$result = $_SESSION["connection"]->query($query);

if($result){
    while($row = mysqli_fetch_array($result)){
        echo"<div class='posts'>";
        echo"<h2>" . $row['title'] . "</h2>";
        echo"<br />";
        echo"<p>" . $row['post'] . "</h1>";
        echo"<br />";
        echo"</div";
    }
}
