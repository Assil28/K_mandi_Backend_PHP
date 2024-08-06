<?php 

include "../connect.php" ; 

// utiliser pour les reductions sur les prix comme BlackFriday

$couponName = filterRequest("couponname") ; 

$now = date("Y-m-d H:i:s");

getData("coupon"  , "coupon_name = '$couponName' AND coupon_expiredate > '$now' AND coupon_count > 0  ")  ;




?>