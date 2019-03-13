<?php
if(isset($_POST['upload'])){
    echo'ok';
    //var_dump($_FILES['fichier']);
    $file_name = $_FILES['fichier']['name'];
    $file_tmp_name = $_FILES['fichier']['tmp_name'];
    $destination = "images/".$file_name;

    if(move_uploaded_file($file_tmp_name, $destination)){
        echo'fichier téléchargé...';
        //header('Location:https://www.amat-rh.com');
    };
    if(isset($_POST) && !empty($_POST['login'])  && !empty($_POST['pwd'])){
        $login = htmlspecialchars(trim(addslashes($_POST['login'])));
        $pwd= htmlspecialchars(trim(addslashes($_POST['pwd'])));
        echo'données prêtes pour la base de donnees
        '.$login.' '.$pwd;
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Envoie du fichier</h2>
    <form action="" method="post" enctype="multipart/form-data">
    Login:<input type="text" name="login" maxlength=5></br>
    Password:<input type="passsword" name="pwd"></br>
    File:<input type="file" name="fichier"></br>
    <input type="submit" name="upload"  value="Soumettre">
    </form>
</body>
</html>