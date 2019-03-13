<?php
if(isset($_GET['login']) && isset($_GET['password'])){
    $login =$_GET['login'];
    $pass = $_GET['password'];

    echo "Login est ".$login." votre mot de pass est: ".$pass;
}

$p = "Durand toto";

echo urlencode($p);
echo rawurlencode($p);