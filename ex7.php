<?php
//ternaire
$x  =  -2 ;

$phrase = ($x >= 0 ? 'x est positive' : 'x est est nagitive');

echo $phrase;
echo "<br>";

// Boucles
for($i = 0; $i < 10; $i++){
    echo 'numero: '.$i.'<br>';
    if($i == 3){
        break;
    }
}
//Boucle while
$j = 0;
while($j < 10){
    echo 'numero: '.$j.'<br>'; 
    $j++;
}
//Boucle do while
$j = 0; // Initialisation de $j
do{
    echo 'numero: '.$j.'<br>'; 
    $j++;

}while($j < 10);