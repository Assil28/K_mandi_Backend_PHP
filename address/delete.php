<?php 

include "../connect.php" ; 

// supprimer laddress du client

$addressid = filterRequest("addressid"); 

deleteData("address" , "address_id  = $addressid"); 
