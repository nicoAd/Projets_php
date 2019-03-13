<?php
$connect = mysqli_connect("127.0.0.1","root","","concessionnaire");
mysqli_set_charset($connect,"utf-8");
if($connect){
    echo'connexion réussie...';
}

?>