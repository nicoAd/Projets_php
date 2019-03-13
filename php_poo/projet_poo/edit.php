<?php
require_once('connex.php');
require_once('Entity.class.php');
require_once('Driver.class.php');

$driver = new Driver($conn);
$contenu = $driver->edit($_GET['id']);

//var_dump($contenu);
if(isset($_POST) && !empty($_POST['nom']))
{
    $entity = new Entity();

    $entity->setNom($_POST['nom']);
    $entity->setPrenom($_POST['prenom']);
    $entity->setAge($_POST['age']);
    $id = (int)$_GET['id'];
    
    $driver->updateItem($entity, $id);

    echo"Modification effectuée <META http-equiv=\"refresh\" content=\"0; URL=affichage.php\">";
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
    <div>
    Id: <?=$contenu->getId(); ?> 
    </div>
    <div class="form-group">
      <label for="nom">Nom:</label>
      <input type="text" class="form-control" id="nom" name="nom" value="<?=$contenu->getNom(); ?>" placeholder="Entrer votre nom" name="email">
    </div>
    <div class="form-group">
      <label for="prenom">Prenom:</label>
      <input type="text" class="form-control" id="prenom" name="prenom" value="<?=$contenu->getPrenom(); ?>"placeholder="Entrer votre prenom" name="email">
    </div>
    <div class="form-group">
      <label for="age">Age:</label>
      <input type="text" class="form-control" id="age" name="age" value="<?=$contenu->getAge(); ?>"" placeholder="Entrer votre age" name="email">
    </div>
    
    <button type="submit" class="btn btn-warning">Modifier</button>
  </form>
</div>

</body>
</html>
