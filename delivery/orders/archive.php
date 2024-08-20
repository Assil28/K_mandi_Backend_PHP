<?php 

include "../../connect.php" ; 

$id = filterRequest("id") ; 

// afficher les ordres l ena ke mandelivery  c'est bon  waselthom
  
getAllData('ordersview' , "1 = 1 AND orders_status = 4   AND orders_delivery = $id   ") ; 

?>