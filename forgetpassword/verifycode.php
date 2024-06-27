<?php 

include "../connect.php" ;

$email  = filterRequest("email") ; 

$verfiy = filterRequest("verifycode") ; 

$stmt = $con->prepare("SELECT * FROM users WHERE users_email = '$email' AND users_verfiycode = '$verfiy' ") ; 
 
$stmt->execute() ; 

$count = $stmt->rowCount() ; 

// traja3li success ken l code l ketbo s7i7
 result($count) ;
