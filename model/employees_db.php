<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function select_employees(){
    global $db;
    
    $query = "SELECT * FROM employees ORDER BY firstName";
    $statement = $db->prepare($query);
    try {
        $statement ->execute();
    } catch (Exception $ex) {
        //********************************************
    }
    $employees = $statement->fetchAll();
    $statement->closeCursor();
    return $employees;
}

