<?php
$action = '';
if(isset($_GET['action'])){
    if($_GET['action'] == 'add'){
        require_once('controllers/AddController.php');
    }elseif($_GET['action']=='delete'){
        require_once('controllers/DeleteController.php');
    }elseif($_GET['action']=='edit'){
        require_once('controllers/EditController.php');
    }
   
}else{
    require_once('controllers/ListesController.php');
}

