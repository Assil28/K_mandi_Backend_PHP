<?php 

include "../../connect.php" ; 
 
// affciher les ordres l cest bon weslo l les clients mte3hom w raj3o archive

getAllData('ordersview' , "1 = 1 AND orders_status =  4") ; 

?>