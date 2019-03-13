<?php
    require_once('connex.php');
    $sql = "DELETE FROM personne
          WHERE Id_personne=4";
    $res = mysqli_query($connect, $sql);
    if($res){
        echo'Suppression réussie';
    }
    mysqli_close($connect);
?>