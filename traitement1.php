<?php
//var_dump($_POST['modules']);
//die();
if(isset($_POST['envoi'])){
    echo'Formulaire soumis';
    if(isset($_POST['pseudo']) && isset($_POST['age']) && isset($_POST['pwd']) ){
        $pseudo = $_POST['pseudo'];
        $age= (int)$_POST['age'];
        $pwd = md5($_POST['pwd']);
        $message = $_POST['message'];
        $formation = $_POST['formations'];
      
        $tabModules = $_POST['modules'];
        $tabJours = $_POST['jours'];
        $sexe = $_POST['sexe'];
        
        echo gettype($age).'<br>';

        echo'Mon pseudo est: '.$pseudo.'  mon age est: '.$age.' '.$pwd. ' message '.$message.' Formation '.$formation.'<br>';
        foreach($tabModules as $module){
            echo $module.'<br>';
        }
        foreach($tabJours as $jour =>$valeur){
            echo $jour.'passe à '.$valeur;
        }
        echo 'Le genre est: '.$sexe;
    }
}