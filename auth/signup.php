<?php

include "../connect.php";

$username = filterRequest("username");
// sha1 taa3mel cryptage lel password
$password = sha1($_POST['password']);
$email = filterRequest("email");
$phone = filterRequest("phone");
$verfiycode     = 0
// le code de verification est aleatoire est composé de 5 chiffres et va etre stocker dans l bd avec l user
$verfiycode     = rand(10000 , 99999);

//verifier si lutilisateur existe ou non a travers email ou phone
$stmt = $con->prepare("SELECT * FROM users WHERE users_email = ? OR users_phone = ? ");
$stmt->execute(array($email, $phone));
$count = $stmt->rowCount();
if ($count > 0) {
    //if user existe
    printFailure("PHONE OR EMAIL");
} else {
        // if n'existe pas 
    $data = array(
        "users_name" => $username,
        "users_password" =>  $password,
        "users_email" => $email,
        "users_phone" => $phone,
        "users_verfiycode" => $verfiycode ,
    );
    //envoie le code de verification a travers l'email en utilsant la fn creer dans function file
    sendEmail($email , "Verfiy Code Ecommerce" , "Verfiy Code $verfiycode") ; 
    
    //Appel de la fonction pour inserer l user(data) dans la table users
    insertData("users" , $data) ; 

}
