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

//send notification khw meghir me nsajelha fl BD
// sendGCM("success" , "The Order Has been Approved" , "users$userid" , "none" , "refreshorderpending"); 

// ba3ed me l admin ya3mel approuve l commande tsir ajouut l notif lel BD w tetba3th lel user (3malet appell lel sendGCM f west l insertNotify)
insertNotify("success", "The Order Has been Approved", $userid, "users$userid", "none",  "refreshorderpending");
