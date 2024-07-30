<?php

include "../connect.php";


$categoryid = filterRequest("id");

//gett items selon la categorie choisi  
// getAllData("itemsview", "categories_id = $categoryid");

$userid = filterRequest("usersid");

// gett tous les produits selon l catégorie
// l fihom 1 hedhouka les produits l ajouté lel favorite
// l fihom 0 hedhouka les produits l mch ajouté lel favorite
$stmt = $con->prepare("SELECT items1view.* , 1 as favorite , (items_price - (items_price * items_discount / 100 ))  as itemspricedisount  FROM items1view 
INNER JOIN favorite ON favorite.favorite_itemsid = items1view.items_id AND favorite.favorite_usersid = $userid
WHERE categories_id = $categoryid
UNION ALL 
SELECT *  , 0 as favorite  , (items_price - (items_price * items_discount / 100 ))  as itemspricedisount  FROM items1view
WHERE  categories_id = $categoryid AND items_id NOT IN  ( SELECT items1view.items_id FROM items1view 
INNER JOIN favorite ON favorite.favorite_itemsid = items1view.items_id AND favorite.favorite_usersid =  $userid  )");

$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count  = $stmt->rowCount();

if ($count > 0) {
    echo json_encode(array("status" => "success", "data" => $data));
} else {
    echo json_encode(array("status" => "failure"));
}
