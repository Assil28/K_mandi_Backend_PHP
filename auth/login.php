<?php

include "../connect.php";
 
$password = sha1($_POST['password']);
$email = filterRequest("email"); 
$stmt = $con->prepare("SELECT * FROM users WHERE users_email = ? AND  users_password = ? AND users_approve = 1 ");
$stmt->execute(array($email, $password));
$count = $stmt->rowCount();

// 3adit l count lel fn result w keno l count > 0 bch tnedi 3le l succes fn (msg success) sinon faillure fn (msg faillure)
result($count) ; 

getData("users" , "users_email = ? AND  users_password = ?" , array($email , $password)) ; 
