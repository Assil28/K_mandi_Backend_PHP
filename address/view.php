<?php 

include "../connect.php" ; 

//afficher les adress du client

$usersid = filterRequest("usersid") ; 

getAllData("address" , "address_usersid = $usersid ") ; 