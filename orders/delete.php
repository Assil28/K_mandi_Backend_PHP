<?php 

include "../connect.php"  ;


// Supprimer un ordre tant qu'il n'est pas encore approuvé 
$ordersid = filterRequest("id") ; 

deleteData("orders" , "orders_id = $ordersid AND orders_status = 0"); 