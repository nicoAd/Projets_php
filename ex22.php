<?php
require_once('connex.php');
$sql =  "INSERT INTO personne (Nom, Prenom, Age) 
      VALUES('Martin','Jacques', 72)
";
$res = mysqli_query($connect, $sql);
if($res){
    echo'Insertion réussie...';
}
mysqli_close($connect);
?>