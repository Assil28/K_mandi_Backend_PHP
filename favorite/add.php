<?php 

include "../connect.php" ; 


$usersid = filterRequest("usersid") ; 
$itemsid = filterRequest("itemsid") ; 


$data = array(
    "favorite_usersid"  =>   $usersid , 
    "favorite_itemsid"  =>   $itemsid
);

// add favorite to data base
insertData("favorite" ,$data) ; 
