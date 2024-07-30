<?php 

include "../connect.php" ; 

$id = filterRequest("id") ;  


// to delete product from my favorite
deleteData("favorite" , "favorite_id = $id"); 
