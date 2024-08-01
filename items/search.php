<?php 

include "../connect.php" ; 

$search = filterRequest("search") ; 


// find item by English name or Arabic name

getAllData("items1view" , "items_name LIKE '%$search%' OR items_name_ar  LIKE '%$search%'  ") ; 

?>