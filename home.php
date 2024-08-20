<?php 

include "connect.php" ; 

$alldata = array() ; 

$alldata['status'] = "success" ; 

// Get Settings
$settings = getAllData("settings" , "1 = 1" , null , false )  ;
$alldata['settings'] = $settings ; 

// getCategories
$categories = getAllData("categories" , null , null , false )  ;
$alldata['categories'] = $categories ; 

// affiche les produits l top vendu 
$items = getAllData("itemstopselling" , "1 = 1 ORDER BY countitems DESC  " , null , false )  ;

$alldata['items'] = $items ; 

// pout afficher les données
echo json_encode($alldata) ;
