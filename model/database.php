<?php

$dbhost = $_SERVER['mycadb.cm01n5xj8z88.eu-west-1.rds.amazonaws.com'];
$dbport = $_SERVER['3306'];
$dbname = $_SERVER['gameshop'];
$charset = 'utf8' ;



$dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
//$dsn = "mysql:host=localhost;dbname=gameshop";
$username = "mysqldbuser";
$password = "mysqldbpassword";


try {
    $db = new PDO($dsn, $username, $password);
    //set up error reporting on server
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
    echo "Connection Failure Error is " . $ex->getMessage();


}
