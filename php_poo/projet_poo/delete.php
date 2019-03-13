<?php
require_once('connex.php');
require_once('Entity.class.php');
require_once('Driver.class.php');

if(isset($_GET['id'])){
    $driver = new Driver($conn);
    $driver->delete($_GET['id']);

    header('location:affichage.php');
}