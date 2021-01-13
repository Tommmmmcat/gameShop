<?php

require '../model/database.php';
require '../model/user_db.php';
$regemail = $_POST['regemail'];
$regpwd = $_POST['regpwd'];
$regfn = $_POST['regfn'];
$regln = $_POST['regln'];

$user = insert_user($regfn,$regln,$regpwd,$regemail);

if($user == -1){
    echo "there is something wrong with your account"  ;
}
else{
    echo'success';
    echo '返回登录页面<a href="../index.php">login</a>';
}

//echo '返回登录页面<a href="../index.php">login</a>';
?>