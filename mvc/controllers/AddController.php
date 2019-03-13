<?php

require_once('common/connect.php');
require_once('modeles/Entity.class.php');
require_once('modeles/Driver.class.php');

$driver = new Driver($conn);

if(isset($_POST) && !empty($_POST['nom']))
{
    $entity = new Entity();

    $entity->setNom($_POST['nom']);
    $entity->setPrenom($_POST['prenom']);
    $entity->setAge($_POST['age']);
    
    
    $nb = $driver->addItem($entity);
    if($nb !=0){
        echo $nb;
        header('location:index.php');
    }else{
        echo'Erreur d\'insertion...';
    }

    
}

require_once('views/add.php');