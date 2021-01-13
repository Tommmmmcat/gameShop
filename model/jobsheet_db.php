<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require '../model/database.php';
//获取用户输入值
$number = $_GET['term'];
if ($number != NULL) {
    //通过输入值查询数据库
    $query = "SELECT * FROM joborders WHERE jobOrderNo LIKE :number";
    $statement = $db->prepare($query);
    $statement->bindValue(":number", $number."%", PDO::PARAM_INT);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        //************************************
    }
    $results = $statement->fetchAll();
    $statement->closeCursor();

    $sheets = array();

    foreach ($results as $result) {
        $sheets[$result['id']] = $result['jobOrderNo'];
    }
    //返回json格式
    $response = json_encode($sheets);
    echo $response;
}