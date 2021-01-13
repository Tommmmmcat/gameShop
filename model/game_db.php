<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function select_items($pageNum) {
    global $db;

    $query = "SELECT * FROM game ORDER BY game_id LIMIT ".(($pageNum-1)*5).",5";
    $statement = $db->prepare($query);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        //********************************************
    }
    $items = $statement->fetchAll();
    $statement->closeCursor();
    return $items;
}
function count_itemNum(){
    global $db;

    $query = "SELECT COUNT(1) FROM game";
    $statement = $db->prepare($query);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        //********************************************
    }
    $count = $statement->fetchAll();
    $statement->closeCursor();
    return $count;
}

function select_all_games() {
    global $db;

    $query = "SELECT * FROM game ORDER BY game_name";
    $statement = $db->prepare($query);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        //********************************************
    }
    $games = $statement->fetchAll();
    $statement->closeCursor();
    return $games;
}

function select_item_by_id($item_id){
    global $db;
    $query = "SELECT * FROM game WHERE game_id='".$item_id."'" ;
    $statement = $db->prepare($query);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        //********************************************
    }
    $items = $statement->fetchAll();
    $statement->closeCursor();
    return $items;
}