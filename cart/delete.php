<?php 

include "../connect.php" ; 


$usersid = filterRequest("usersid");
$itemsid = filterRequest("itemsid");


//effacer le produit de panier article by article (ma3neha ken 3andi produit taleb meno 3 bch nfasekh bel wehed bel wehed)

deleteData("cart" , "cart_id  = (SELECT cart_id FROM cart WHERE cart_usersid = $usersid AND cart_itemsid = $itemsid AND cart_orders = 0 LIMIT 1) "); 
