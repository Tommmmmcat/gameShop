<?php
require '../model/database.php';

function login($account, $pwd) {

    global $db;

    $query = "SELECT * FROM users where email  = '". $account."'";
    $statement = $db->prepare($query);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        
    }
    $user = $statement->fetchAll();
    $statement->closeCursor();
    if ($user == null) {
        return "0";
    } else {
        foreach ($user as $key) {
            if ($pwd ==$key['password']) {
               return $key['user_id']."#".$key['type'];
            }
        }
    }
    return "-1";
}