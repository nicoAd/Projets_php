<?php

require_once('common/connect.php');
require_once('modeles/Entity.class.php');
require_once('modeles/Driver.class.php');

$driver = new Driver($conn);
$contenu = $driver->edit($_GET['id']);

if(isset($_POST) && !empty($_POST['nom'])){
    $entity = new Entity();

    $entity->setNom($_POST['nom']);
    $entity->setPrenom($_POST['prenom']);
    $entity->setAge($_POST['age']);

    $driver->updateItem($entity, $_GET['id']);

    header('location:index.php');
}
    

require_once('views/edit.php');