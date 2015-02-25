<?php
   //protecting the controler and views
    require_once(__DIR__ . "/../model/config.php");
    require_once(__DIR__ . "/../controller/login-verify.php");
    //killing the program  if not logged in 
    if(!authenticateUser()){
        header("location: " . $path . "index.php");
        die();
    }

?>

<hh1>create blog post</h1>

<form method="post" action="<?php echo $path . "controller/create-post.php";?>">
    <div>
        <label for="title">Title: </label>
        <input type="text" name="title"/>
    </div>
    
    <div>
        <label for="post">post:</label>
        <textarea name="post"></textarea>
    </div>
    
    <div>
        <button type="submit">Submit</button>
    </div>
     
</form>
