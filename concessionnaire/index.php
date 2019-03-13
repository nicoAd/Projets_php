<?php
require_once('connex.php');
$erreur="";
if(isset($_POST['soumis'])){

    if(isset($_POST) && !empty($_POST['pseudo']) && !empty($_POST['pswd'])){
        $pseudo = trim(htmlspecialchars(addslashes($_POST['pseudo'])));
        $pass = MD5(trim(htmlspecialchars(addslashes($_POST['pswd']))));

        $sql = "SELECT * FROM admin WHERE pseudo = ? AND pass = ?";
        $res = mysqli_prepare($connect, $sql);
        mysqli_stmt_bind_param($res, 'ss',$pseudo,$pass);
        mysqli_stmt_execute($res);

        mysqli_stmt_bind_result($res,$id,$pseudo,$email,$pass, $etat);
        if(mysqli_stmt_fetch($res)){
            session_start();
            $_SESSION['auth']['pseudo'] = $pseudo;
            $_SESSION['auth']['pass'] = $pass;
            $_SESSION['auth']['etat'] = $etat;

            header('location:listes.php');
        }else{
            $erreur= '<div class="alert alert-danger">le pseudo ou le mot de pass ne correspond pas</div>';
        }
    }    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>connexion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div class="row col-md-6 offset-md-3">
  <h2>Formulaire de connexion</h2>
  <div >
  <strong><?= $erreur; ?></strong> 
</div>
  <form action="" method="post" autocomplete="off">
    <div class="form-group">
      <label for="pseudo">Pseudo*</label>
      <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Entrer votre pseudo" name="pseudo" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password*:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Entrer votre password" name="pswd" required>
    </div>
    <!--
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>-->
    <button type="submit" name="soumis" class="btn btn-primary btn-block">Connecter</button>
  </form>
  </div>
  <div class="row col-md-6 offset-md-3">
    <a href="inscription.php" class="btn btn-info">Inscrivez-vous</a>
  </div>
</div>

</body>
</html>

