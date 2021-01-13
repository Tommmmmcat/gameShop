<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require '../model/database.php';
require '../model/order_db.php';

$qty = $_POST['quantity'];
$game_id = $_POST['selected_items'];

updata_order($game_id, $qty);

include '../view/home.php';