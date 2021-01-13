<?php
session_start();
require '../model/database.php';
require '../model/loginfunction.php';

$account = $_POST['account'];
$pwd = $_POST['password'];
$login = login($account, $pwd);

if ($login == "0") {
    
    $_SESSION["state"] = "0";
    echo 'Your password or email is worng';
    include '../index.php';
} else if ($login == "-1") {
    $_SESSION["state"] = "-1";
     echo 'Your password or email is worng';
    include '../index.php';
} else {
    $_SESSION['state'] = "1";
    $_SESSION['id'] = strstr($login,'#',true);
    $type=str_replace("#","",strstr($login,'#'));
   // $type =replace strstr($login,'#');
    if($type == "1"){
        include '../controller/manage.php';
    }else{
        include '../view/home.php';
    }
    
}