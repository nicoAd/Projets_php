<?php

function salutation($nom){
    echo'Bonjour '.$nom;
}
//salutation('Nicolas');


function calcul($ht){
    $ttc = $ht + $ht*0.2;
    return $ttc;
}
$prixTtc = calcul(50);
echo $prixTtc.';
