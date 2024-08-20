<?php

include "../../connect.php";


// l page lta3 l delivery man yaccpeter ywasel l ordre

$orderid = filterRequest("ordersid");

$userid = filterRequest("usersid");

$deliveryid = filterRequest("deliveryid");

// 3 ma3neha l man delevery kdhe lordre ( 2--->3 ma3neha lordre rjaa en route)
$data = array(
    "orders_status" => 3 , 
    "orders_delivery" => $deliveryid 
);

updateData("orders", $data, "orders_id = $orderid AND orders_status = 2");

// sendGCM("success" , "The Order Has been Approved" , "users$userid" , "none" , "refreshorderpending"); 

// hne bnab3tho notif lel user ngouloulo lordre mte3ek en route     
insertNotify("success", "Your order is on the way", $userid, "users$userid", "none",  "refreshorderpending");

// hne b3athet lel admin gotlo rw fama delivery man aaprouve the order (services howa topic ta3 l admin)
sendGCM("warning" , "The Order Has been Approved by delivery" , "services" , "none" , "none"); 

// hne b3athet lel les autre deliveries gotlo rw fama delivery man aaprouve the order
sendGCM("warning" , "The Order Has been Approved by delivery  " . $deliveryid , "delivery" , "none" , "none"); 
