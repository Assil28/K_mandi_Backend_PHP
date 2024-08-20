<?php

include "../../connect.php";


// page mta3 teslimm l ordre 

$orderid = filterRequest("ordersid");

$userid = filterRequest("usersid");

// k l client yekho l ordre ( 3 ---> 4 )
$data = array(
    "orders_status" => 4
);

updateData("orders", $data, "orders_id = $orderid AND orders_status = 3");

// sendGCM("success" , "The Order Has been Approved" , "users$userid" , "none" , "refreshorderpending"); 


// b3athet notif lel client gotlo rak kdhyt lordre mte3ek
insertNotify("success", "Your Order Has been deliverd", $userid, "users$userid", "none",  "refreshorderpending");


// b3athet notif lel admin gotlo rw c'est bon l client khdhe lordre mte3o
sendGCM("warning" , "The Order Has been deliverd to The Customer" , "services" , "none" , "none"); 
