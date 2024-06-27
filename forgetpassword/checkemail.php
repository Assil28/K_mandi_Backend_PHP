<?php
include "../connect.php";
$email = filterRequest("email");

// creation d'un nouveau verify code
$verfiycode     = rand(10000, 99999);
$stmt = $con->prepare("SELECT * FROM users WHERE users_email = ? ");
$stmt->execute(array($email));
$count = $stmt->rowCount();
result($count);


// ken l email mawjoudd
if ($count > 0) {

    // bch nbadlo l verify code l mawjoud f BD 
    $data = array("users_verfiycode" => $verfiycode);

    updateData("users", $data, "users_email = '$email'", false); // l false bch updateData me traja3li chy ba3ed traitement

    // naba3thoulou l verifycode jdid par mail
    sendEmail($email, "Verfiy Code Ecommerce", "Verfiy Code $verfiycode");
}
