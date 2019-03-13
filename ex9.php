<?php
$nom = ['A'=> 'Julien', 'B'=> 'Caroline', 'C'=>'Alice'];
echo sizeof($nom);
//var_dump($nom);
//print_r($nom);
if(in_array('Mohamed',$nom)){
    echo 'Nom trouvé';
}else{
    echo 'Nom/ pas /trouvé';
}

rsort($nom);
foreach($nom as $n){
    echo $n.'<br/>';
}
$st = 'Le monde est beau';

$stTab = explode("/", $st);

echo count($stTab);
foreach($stTab as $s){
    echo $s.'<br/>';
}

$matieres = ["html","css","js",'php'];

$mChaine = implode("/", $matieres);
//echo $mChaine;

array_push($matieres, "angular", "nodeJs");
//var_dump($matieres);
$aleatoire = array_rand($matieres);
echo $matieres[$aleatoire];
$tabBanniere=[ 
    1 =>['monsite1.com', 'images/image1.png', 'desc1'],
    2 =>['monsite2.com', 'images/image2.png', 'desc2'],
    3 =>['monsite3.com', 'images/image4.jpg', 'desc3'],
];

$banAleatoire = array_rand($tabBanniere);
echo $tabBanniere[$banAleatoire][0]."<br>".
"<img src='".$tabBanniere[$banAleatoire][1]."' />"
."<br>".$tabBanniere[$banAleatoire][2];

