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
      <label for="id">Id:</label>
      <p> <?=$_GET['id']; ?></p>
    </div>
    <div class="form-group">
      <label for="nom">Nom:</label>
      <input type="text" class="form-control" id="nom" name="nom" value="<?=$contenu->getNom(); ?>" placeholder="Entrer votre nom">
    </div>
    <div class="form-group">
      <label for="prenom">Prenom:</label>
      <input type="text" class="form-control" id="prenom" name="prenom" value="<?=$contenu->getPrenom(); ?>" placeholder="Entrer votre prenom" >
    </div>
    <div class="form-group">
      <label for="age">Age:</label>
      <input type="text" class="form-control" id="age" name="age" value="<?=$contenu->getAge(); ?>" placeholder="Entrer votre age" >
    </div>
    
    <button type="submit" class="btn btn-warning">Modifierer</button>
  </form>
</div>

</body>
</html>
