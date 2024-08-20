<?php 

include "../../connect.php" ; 
 

// afficher tous les ordres b nesba lel admin 

getAllData('ordersview' , "1 = 1 AND orders_status !=  4") ; 

?>