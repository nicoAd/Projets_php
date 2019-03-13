<?php
require_once('common/connect.php');
require_once('modeles/Entity.class.php');
require_once('modeles/Driver.class.php');

if(isset($_GET['id'])){
    $driver = new Driver($conn);
    $driver->delete($_GET['id']);
    header('location:index.php');
}