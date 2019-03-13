<?php
require_once('authentification/verif.php');
require_once('connex.php');

if(isset($_GET['code'])){
    $code = trim(htmlspecialchars($_GET['code']));
    //requete
    $sql = "DELETE FROM voiture WHERE id = ?";

    $res = mysqli_prepare($connect, $sql);

    mysqli_stmt_bind_param($res, 'i',$code);

    $ok=mysqli_stmt_execute($res);

    if($ok){
        header('location:listes.php');
    }else{
        echo'Erreur lors de la suppression...';
    }
}