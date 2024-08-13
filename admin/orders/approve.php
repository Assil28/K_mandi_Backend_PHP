<?php

include "../../connect.php";


// accepter lordre du client

$orderid = filterRequest("ordersid");

$userid = filterRequest("usersid");

// client k y3adi commande  l order_status tkoun 0 , wa9et l admin accpte l order yarja3 1
$data = array(
    "orders_status" => 1
);

updateData("orders", $data, "orders_id = $orderid AND orders_status = 0");

// sendGCM("success" , "The Order Has been Approved" , "users$userid" , "none" , "refreshorderpending"); 

insertNotify("success", "The Order Has been Approved", $userid, "users$userid", "none",  "refreshorderpending");
