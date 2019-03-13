<?php

$texte = "Nous étudions php qui est un langage de script incournable dans le web";
$search = "/php|script/i";
//$texteR = preg_replace($search, "Javascript", $texte);
//echo $texteR;
if(preg_match($search,$texte)){
    echo"les mots commençant par l existent dans le texte";
}else{
    echo"Ces mots n'existent pas";
}