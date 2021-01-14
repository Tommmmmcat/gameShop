<?php

$dbhost = "mycadb.cm01n5xj8z88.eu-west-1.rds.amazonaws.com";
$dbport = "3306";
$dbname = "gameshop";
$charset = 'utf8' ;


$dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
$username = "mysqldbuser";
$password = "mysqldbpassword";


try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $ex) {
    $error_message = $ex->getMessage();
    echo $error_message;
    exit();
}
