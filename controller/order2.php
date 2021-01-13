<?php
session_start();
$user_id =$_SESSION['id'];
require '../model/database.php';
require '../model/order_db.php';


$qty = $_POST['quantity'];
$game_id = $_POST['selected_items'];




insert_order($game_id,$qty);   
insert_order_game('',$user_id);

include '../view/home.php';

     


