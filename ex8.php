<?php
$jours = Array('Lundi','Mardi','Mercredi','Jeudi');
$jours[3] ='Dimanche';
echo $jours[3];

echo "<ol>";
    for($i = 0; $i < count($jours); $i++){
    
        echo"<li>$jours[$i]</li>";
    }
echo"</ol>";

$personne = ["Simon", "Antoine", 25];
echo $personne[2];
foreach($personne as $p){
    echo $p.'<br>';
}
 $tabAssoc = array('ni' => 'Nicolas', 'ro'=>'Rokhaya', 'ab'=>'Abdel');
 echo $tabAssoc['ab'];

 foreach($tabAssoc as $key => $tab){
     echo 'La clé: '.$key.' a pour valeur: '.$tab.'<br>';
 }

 $tabs = [
         ['id' => 1, 'nom' => 'Simon', 'age' => 80, 'url' => 'images/img1.jpg'],
         ['id' => 2, 'nom' => 'Landry', 'age' => 25,  'url' => 'images/img2.jpg'],
         ['id' => 3, 'nom' => 'Pierre', 'age' => 42,  'url' => 'images/img3.jpg'],
         ['id' => 4, 'nom' => 'Claire', 'age' => 50,  'url' => 'images/img4.jpg']
 ];
 var_dump($tabs[0]['nom']);
 //echo $tabs[1]['id']
 /*for($i = 0; $i < count($tabs); $i++){
 echo $tabs[$i]['id'].' ' .$tabs[$i]['nom'].' '.$tabs[$i]['age']. ' '.$tabs[$i]['url'].'<br>';
 }*/
echo'
    <table>
    <tr>
        <th>ID</th><th>NOM</th><th>AGE</th><th>URL</th>
    </tr>';

    for($i = 0; $i < count($tabs); $i++){
        echo'<tr>
               <td>'.$tabs[$i]['id'].'</td>
               <td>'.$tabs[$i]['nom'].'</td>
               <td>'.$tabs[$i]['age'].'</td>
               <td><img src='.$tabs[$i]['url'].' width="50" heigth="50"></td>
        </tr>';
    }
    echo '</table>';
        
?>
