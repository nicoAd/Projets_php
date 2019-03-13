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
  <h2>Formulaire d'inscription</h2>
  <div >
 
</div>
  <form  autocomplete="off">
    <div class="form-group">
      <label for="pseudo">Pseudo*</label>
      <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Entrer votre pseudo" name="pseudo">
    </div>
    <div class="form-group">
      <label for="pseudo">Email*</label>
      <input type="email" class="form-control" id="email" name="pseudo" placeholder="Entrer votre email" name="email" >
    </div>
    <div class="form-group">
      <label for="pwd">Password*:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Entrer votre password" name="pswd" >
    </div>
    <!--
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>-->
    <button type="button" name="soumis" 
    class="btn btn-primary btn-block">Inscrire</button>
  </form>
  <span id="result"></span>
 
</div>
<script>
$().ready(function(){
    $('button').on('click', function(){
        let pseudo = $('#pseudo').val();
        let email= $('#email').val();
        let pwd = $('#pwd').val();
        
        $.ajax({
            url:'traitement2.php',
            data:{pseudo:pseudo, email:email, pass:pwd},
            type:'POST',
            success:function(data){
                $('#result').html(data);
            }
        })
    })
})
</script>
</body>
</html>