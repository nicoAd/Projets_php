<?php
require('Animal.class.php');
//création d'objet
//$aigle = new Animal();
/*$aigle->couleur = "marron";
$aigle->poids = 6;
$aigle->ajouter_kilo();

echo"L'aigle a pour couleur ".$aigle->couleur. " et son poids est "
.$aigle->poids;
*/
/*$chien = new Animal();
$chien->setCouleur("rouge");
$chien->setPoids(40);
$chien->ajouter_kilo();

echo"Le chien a pour couleur:".$chien->getCouleur().
" et son poids est:".$chien->getPoids();

$ours = new Animal();
$ours->setPoids(300);
$ours->setCouleur("brun");
echo "L'ours a pour couleur ".$ours->getCouleur().
"et son poids est ".$ours->getPoids()." kg <br>";

$saumon = new Animal();
$saumon->setPoids(30);
$saumon->setCouleur("orange");
echo "Le saumon a pour couleur ".$saumon->getCouleur().
"et son poids est ".$saumon->getPoids()." kg <br>";

$ours->manger_animal($saumon);
echo "L'ours a pour couleur ".$ours->getCouleur().
"et son poids est ".$ours->getPoids()." kg <br>";

echo "le saumon a pour couleur ".$saumon->getCouleur().
"et son poids est ".$saumon->getPoids()." kg <br>";
*/

$chat = new Animal("noir",Animal::POIDS_LEGER);
echo"Le chat a: ".$chat->getCouleur()." et son poids est: "
.$chat->getPoids().'<br>';

//Animal::se_deplacer().'<br>';

echo"Le nombre de pattes des mammifères est: " 
.Animal::getPattes();
?>