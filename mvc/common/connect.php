<?php
try{
    $conn = new PDO('mysql:host=127.0.0.1; dbname=bdd', 'root','');
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
    echo'Connexion réussie';


    }catch(Exception $e){
    
        die('Erreur : '.$e->getMessage());

    }finally{
        //$conn = null;
}
