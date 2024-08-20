<?php

include "../../connect.php";

$orderid = filterRequest("ordersid");

$userid = filterRequest("usersid");

$type = filterRequest("ordertype");
// 2 ma3neha l ordre c'est bon 7dherr ( 1---->2 ) 
if ($type  == "0") {
    //type 0 ma3neha l ordre de type delivery mch receive
    $data = array(
        "orders_status" => 2
    );
} else {
    // 4 ma3neha lordre receive mch delivery ( donc men 2 direct yet3ada l 4 ma3neha wsel lel client )
    $data = array(
        "orders_status" => 4
    );
}


updateData("orders", $data, "orders_id = $orderid AND orders_status = 1");

// sendGCM("success" , "The Order Has been Approved" , "users$userid" , "none" , "refreshorderpending"); 

insertNotify("success", "The Order Has been Approved", $userid, "users$userid", "none",  "refreshorderpending");

// insertNotify("success", "The Order Has been Approved", $userid, "users$userid", "none",  "refreshorderpending");

// hedhi ma3neha b3athna notif l les deliveries man bch ya3rfo l fama ordre bch ywaslouha w chkoun bech yapprouvih 
// "delivery" esem topic l 5ass b les deliveries
if ($type  == "0") {
    sendGCM("warning", "there is a orders awaiting approval", "delivery", "none", "none");
}
