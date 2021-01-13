<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function insert_user($regfn,$regln,$regpwd,$regemail){
    $sql = "insert into users(user_id,first_name,last_name,password,email,type)  "
        . "values('',:first_name,:last_name,:password,:email,0)";
    global $db;
    $statement = $db->prepare($sql);
    $statement->bindValue(':first_name', $regfn);
    $statement->bindValue(':last_name', $regln);
    $statement->bindValue(':password', $regpwd);
    $statement->bindValue(':email', $regemail);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        //********************************************
    }
//    $user = $statement->fetchAll();
//    $statement->closeCursor();
//    if ($user == null){
//        return -1;
//    }else{
//        echo 0;;
//    }
    
}