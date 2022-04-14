<?php 
$host = 'db';
    
    $dbname = 'loginapp';
    $dbuser = 'root';
    $dbpass = 'lionPass';
    
    // Two ways 1. PDO and 2. MySQLi

    $connection = new mysqli($host, $dbuser, $dbpass, $dbname);

    if($connection->connect_error) {
        die("Connection failed: ".$connection->connect_error);
    } 
    else {
        echo "Connected to MySQL server sucess";
    }
    ?>