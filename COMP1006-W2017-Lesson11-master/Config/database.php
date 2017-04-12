<?php
// connection string

if(session_status() == PHP_SESSION_NONE) {
    session_start();
}

// cleardb access
//$dsn = 'mysql:host=ca-cdbr-azure-central-a.cloudapp.net;dbname=videogamesdb';
//$Username = 'b6ee96bd470785';
//$Password = 'dc381279';


function DBConnection() {
    // exception handling - use a try / catch
    try {

       $dsn ='mysql:host=us-cdbr-iron-east-03.cleardb.net;dbname=heroku_74946503830203f';
       $Username = 'b512c7d3ac0b9a';
       $Password = 'f42f4c13';


        //local db access
        //$dsn = 'mysql:host=localhost;dbname=gamedb';
       // $Username = 'alex';
        //$Password = '123456';
        // instantiates a new pdo - an db object
        return new PDO($dsn, $Username, $Password);
    }
    catch(PDOException $e) {
        $message = $e->getMessage();
        echo "An error occurred: " . $message;
        return null;
    }
}
?>