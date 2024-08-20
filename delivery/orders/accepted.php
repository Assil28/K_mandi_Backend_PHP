<?php 

include "../../connect.php" ; 

//page mte3 afficher les ordres que l delivery man 9belhom 

$id = filterRequest("id") ; 
  


getAllData('ordersview' , "1 = 1 AND  orders_status = 3 AND orders_delivery = $id ") ; 

?>