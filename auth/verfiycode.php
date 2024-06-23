<?php 

include "../connect.php" ;

$email  = filterRequest("email") ; 

// hedha l ketbo lutilisateur dans verifycode Screen pour le comparer au verify code envoyer par mail
$verfiy = filterRequest("verifycode") ; 


// gotlo hajti bel user l 3ando l email l fleni wel verifycode l ketbo l utilisateur keno mawjoud l count bch tkoun 1
$stmt = $con->prepare("SELECT * FROM users WHERE users_email = '$email' AND users_verfiycode = '$verfiy' ") ; 
 
$stmt->execute() ; 

$count = $stmt->rowCount() ; 

if ($count > 0) {
 
    //gotlo rw cbn lutilisateur est verifier donc l uses_approve tarjaa 1
    $data = array("users_approve" => "1") ; 
    //3malet update lel user bch trajaa 1
    updateData("users" , $data , "users_email = '$email'");

}else {
    
 printFailure("verifycode not Correct") ; 

}
?>