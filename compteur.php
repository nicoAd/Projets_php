<?php
touch('compteur.txt');//creation du fichier
$donnees = fopen('compteur.txt','r+');// ouverture du fichier en lecture et en écriture
$nb = fgets($donnees);
if($nb ==""){
    $nb = 0;
}
$nb++;
fseek($donnees,0);
fputs($donnees, $nb);
fclose($donnees);

echo "$nb fois";