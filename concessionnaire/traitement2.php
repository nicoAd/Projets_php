<?php

require_once('connex.php');
$pseudo = $_POST['pseudo'];
$email=$_POST['email'];
$pass=md5($_POST['pass']);

$sql = "SELECT * FROM admin WHERE email='$email'";

$res= mysqli_query($connect, $sql);

$ok = mysqli_num_rows($res);

if($ok>=1){
    echo'Cet email existe, veuillez choisir un autre';
    exit();
}else{
    $insert = "INSERT INTO admin (pseudo,email,pass,etat)
    VALUES('$pseudo','$email','$pass',1)";
    $result = mysqli_query($connect,$insert);

    if($result){
        echo'Inscription réussie';
     
    }
}


?>