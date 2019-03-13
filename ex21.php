<?php
$connect = mysqli_connect("127.0.0.1","root","","bdd");
if($connect){
    echo'connexion réussie...';
}
    $sql="SELECT*FROM personne";
   $res =  mysqli_query($connect,$sql);
   if($res){
       echo 'Nombre de personnes'.mysqli_num_rows($res).'<br>';
       /*
       while($donnees = mysqli_fetch_assoc($res)){
          echo 'id: '.$donnees['Id_personne'].' Nom: '.$donnees['Nom'].' prenom: '.$donnees['Prenom'].' age :'.$donnees['Age'].'</br>';
       }*/
       /*while($donnees = mysqli_fetch_row($res)){
        echo 'id: '.$donnees[0].' Nom: '.$donnees[1].' prenom: '.$donnees[2].' age :'.$donnees[3].'</br>';
     }*/
   }else{
       echo('Echec lors l\'execution de la requete');
   }


?>