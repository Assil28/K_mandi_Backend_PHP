<?php


include "../connect.php";


$id = filterRequest("id");

// display favorite product in myfavorite screen 
getAllData("myfavorite", "favorite_usersid = ?  ", array($id));
