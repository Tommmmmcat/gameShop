<?php

$dbhost = "mydbinstancetest.cm01n5xj8z88.eu-west-1.rds.amazonaws.com";
$dbport = "3306";
$dbname = "gameshop";
$charset = 'utf8' ;


$dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
//$dsn = "mysql:host=localhost;dbname=gameshop";
$username = "mysqldbuser";
$password = "mysqldbpassword ";


try {
    $db = new PDO($dsn, $username, $password);
    //set up error reporting on server
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    error_reporting(E_ALL);
} catch (PDOException $ex) {
    //echo "Connection Failure Error is " . $ex->getMessage();
    // redirect to an error page passing the error message
    header("Location:error.php?msg=" . $ex->getMessage());

}
