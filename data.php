<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
 <table class="table table-striped">
 <tr>
 <th>Id</th><th>Nom</th><th>Prenom</th><th>Age</th>
 </tr>
 <?php
require('ex21.php');

while($donnees = mysqli_fetch_assoc($res)){
 ?>
 <tr>
    <td><?php echo $donnees['Id_personne'];?></td>
    <td><?php echo $donnees['Nom']; ?></td>
    <td><?php echo $donnees['Prenom'];?></td>
    <td><?php echo $donnees['Age'];?></td>
 </tr>
 <?php
  }
  ?>
 </table>
    
</body>
</html>