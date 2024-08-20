<?php 

include "../../connect.php" ; 
  

//page mte3 afficher les ordres pour que delivery man faire aaprouve a un ordre

getAllData('ordersview' , "1 = 1 AND orders_status =  2") ; 

?>