<?php 

include "./connect.php"  ;

// afficher les notification de lutilisateur

$userid = filterRequest("id") ; 

getAllData("notification"  , "notification_userid = $userid") ; 


?>