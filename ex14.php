<?php

/*$texte = "Le temps n'est pas beau";

file_put_contents("fichier.txt",$texte);

$phrase = file_get_contents('fichier.txt');
echo $phrase;

$tab = file('fichier.txt');

foreach($tab as $t){
    echo $t.'<br>';
}

$donnees = fopen('fichier.txt','r');
if(!$donnees){
    echo"Impossible d'ouvrir le fichier";
}else{
    while( $d = fgetc($donnees)){
        echo $d;
    }
   
}
fclose($donnees);
*/

$donnees = fopen('fichier.txt','a');

if($donnees){
    $texte = 'il était une fois un corbeau';
    $texte1 = 'il était une fois un LION';
    $texte2 = 'il était une fois un chien';

    //fwrite($donnees,$texte.PHP_EOL);
    fwrite($donnees,$texte2);
}
fclose($donnees);