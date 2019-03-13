<?php
require_once('connex.php');

//requete
$sql = "SELECT * FROM personne
        WHERE Id_personne = ?";
//Preparation de la requete
$res = mysqli_prepare($connect,$sql);
//liaison de données à la requete
mysqli_stmt_bind_param($res,'i',$num);
$num = 2;
//Execution de la requete
$ok = mysqli_stmt_execute($res);
//Liaison des donnees du résultat
mysqli_stmt_bind_result($res,$id, $nom,$prenom,$age);
while(mysqli_stmt_fetch($res)){
    echo $nom." ".$prenom;
}



?>