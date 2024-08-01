<?php

include "../connect.php";

// afficher la carte ( le prix a payer des articles et le nombre d'article)

$userid = filterRequest("usersid");

$data  = getAllData("cartview", "cart_usersid = $userid", null, false);

$stmt = $con->prepare("SELECT SUM(itemsprice) as totalprice , count(countitems) as totalcount FROM `cartview`  
WHERE  cartview.cart_usersid =  $userid 
GROUP BY cart_usersid  ");

$stmt->execute();


$datacountprice = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode(array(
    "status" => "success",
    "countprice" =>  $datacountprice,
    "datacart" => $data,
));
