<?php
require_once('connex.php');
require_once('Entity.class.php');
require_once('Driver.class.php');

$driver = new Driver($conn);
$datas = $driver->findAll();
//var_dump($datas);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

<a href="ajout.php">Ajouter</a>

<table class="table table-striped">
    <thead>
        <tr><th>Id</th><th>Nom</th><th>Prenom</th><th>Age</th><th>Actions</th></tr>
    </thead>
    <tbody>
    <?php  foreach($datas as $data){  ?>
        <tr>
            <td><?php echo $data->getId(); ?></td>
            <td><?php echo $data->getNom(); ?></td>
            <td><?php echo $data->getPrenom(); ?></td>
            <td><?php echo $data->getAge(); ?></td>
            <td>
                <a href="edit.php?id=<?php echo $data->getId(); ?>">Editer</a>
                <a href="delete.php?id=<?php echo $data->getId(); ?>">Supprimer</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
    </div>

</table>
    
</body>
</html>

