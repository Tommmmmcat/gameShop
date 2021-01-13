<?php

function insert_order($game_id,$qty) {
    global $db;
    $query = "INSERT INTO order_detial (game_id,qty)"
            . "VALUES (:game_id, :qty)";
    $statement = $db->prepare($query);
    $statement->bindValue(":game_id", $game_id);
    $statement->bindValue(":qty", $qty);
    try {
        $statement->execute();
    } catch (Exception $ex) {

        exit();
    }
    $statement->closeCursor();
}

function insert_order_game($order_id,$user_id) {
    global $db;
    $query = "INSERT INTO order_game (order_id,user_id)"
            . "VALUES (:order_id, :user_id)";
    $statement = $db->prepare($query);
    $statement->bindValue(":order_id", $order_id);
    $statement->bindValue(":user_id", $user_id);
    try {
        $statement->execute();
    } catch (Exception $ex) {

    }

    $statement->closeCursor();
}

function updata_order($game_id,$qty){
     global $db;
     
     $query = "UPDATE order_detial SET qty ='" . $qty . "'"
            . "	 WHERE game_id = '" . $game_id . "'";
     $statement = $db->prepare($query);
     $statement->bindValue(":game_id", $game_id);
     $statement->bindValue(":qty", $qty);
      try {
        $statement->execute();
    } catch (Exception $ex) {

        exit();
    }
    $statement->closeCursor();
    
    
}