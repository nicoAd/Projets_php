<?php
    require_once('connex.php');
    $sql = "UPDATE personne SET Nom = 'John',Age = 80
           WHERE Id_personne = 2";
    $res = mysqli_query($connect, $sql);
    if($res){
        echo'Mise à réussi...' ;
    }
    mysqli_close($connect);
?>