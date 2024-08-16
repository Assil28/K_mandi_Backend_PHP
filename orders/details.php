<?php 

include "../connect.php" ; 


// Get order details
$ordersid = filterRequest("id")  ;

getAllData("ordersdetailsview" , "cart_orders = $ordersid "); 

?>