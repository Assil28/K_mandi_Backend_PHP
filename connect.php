<?php
$dsn = "mysql:host=localhost;dbname=ecommerce";
$user = "root";
$pass = "";
$option = array(
   PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"
);
$countrowinpage = 9;
try {
   $con = new PDO($dsn, $user, $pass, $option);
   $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   header("Access-Control-Allow-Origin: *");
   header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With, Access-Control-Allow-Origin");
   header("Access-Control-Allow-Methods: POST, OPTIONS , GET");
   include "functions.php";

   // pour lauthentification k nhabto ale serveur 
   // if (!isset($notAuth)) {
   //    checkAuthenticate();
   // }
} catch (PDOException $e) {
   echo $e->getMessage();
}



// connecter a mongoDB 

// installer ceci a travers le terminal : 
// sudo pecl install mongodb
// composer require mongodb/mongodb

//puis

// <?php
// require 'vendor/autoload.php'; // Assurez-vous d'avoir installé le client MongoDB via Composer

// $countrowinpage = 9;
// try {
//     // Connexion à MongoDB
//     $client = new MongoDB\Client("mongodb://localhost:27017");
//     $mongodb = $client->ecommerce; // Nom de la base de données MongoDB
//     $collection = $mongodb->products; // Nom de la collection MongoDB

//     // Définir les en-têtes CORS
//     header("Access-Control-Allow-Origin: *");
//     header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With, Access-Control-Allow-Origin");
//     header("Access-Control-Allow-Methods: POST, OPTIONS , GET");
    
//     include "functions.php";

//     // Pour l'authentification si nécessaire
//     // if (!isset($notAuth)) {
//     //    checkAuthenticate();
//     // }

//     // Exemple de récupération de documents depuis MongoDB
//     $documents = $collection->find()->toArray();
//     echo json_encode($documents);

// } catch (MongoDB\Exception\Exception $e) {
//     echo "Erreur MongoDB : " . $e->getMessage();
// }
