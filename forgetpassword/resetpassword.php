<?php

include "../connect.php";

$email = filterRequest("email");

// l password e jdida l ktebha l user 3matelha cryptage
$password = sha1($_POST['password']) ; 

// affectina l password e jdida
$data = array("users_password" => $password);

// mise a jour des données
updateData("users", $data, "users_email = '$email'");
