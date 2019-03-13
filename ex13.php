<?php
//$b = 0;
function afficher($a){
   
   global $b;
   

    $b = $a + 5;

    echo $b;
}
//afficher(2);


//echo $b;
$texte ='Le temps est maussade';
if(isset($texte)){
    echo'Ok';
}else{
    echo'Ko';
}

if(!empty($texte)){
    echo'Ok';
}else{
    echo'Ko';
}

echo phpversion();

echo date('d-m-Y');

