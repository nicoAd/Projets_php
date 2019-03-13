<?php
require_once('connex.php');
require_once('Entity.class.php');
require_once('Driver.class.php');

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
        //header('location:affichage.php');
    }else{
        echo'Erreur d\'insertion...';
    }

    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Formulaire</h2>
  <form action="" method="post">
   
    <div class="form-group">
      <label for="nom">Nom:</label>
      <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer votre nom">
    </div>
    <div class="form-group">
      <label for="prenom">Prenom:</label>
      <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrer votre prenom" >
    </div>
    <div class="form-group">
      <label for="age">Age:</label>
      <input type="text" class="form-control" id="age" name="age"  placeholder="Entrer votre age" >
    </div>
    
    <button type="submit" class="btn btn-primary">Ajouter</button>
  </form>
</div>

</body>
</html>
