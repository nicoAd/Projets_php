<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="traitement1.php" method="POST">
    Pseudo: <input type="text" name="pseudo"></br>
         Age: <input type="text" name="age"></br>
         Mot de passe: <input type="password" name="pwd"></br>
         Message:<textarea name="message"></textarea><br>
         Formation:<select name="formations" id="">
         <option value="">Choisir</option>
         <option value="dam">Dam</option>
         <option value="php">Php</option>
         <option value="reseaux">Réseaux</option>
         </select><br>

         Modules:<select name="modules[]" multiple id="">
         <option value="">Choisir</option>
         <option value="html">Html</option>
         <option value="php">Php</option>
         <option value="angular">Angular</option>
         <option value="sql">Sql</option>
         </select><br>

        <input type="checkbox" name="jours['lundi']">:Lundi
        <input type="checkbox" name="jours['mardi]">:Mardi

        <input type="checkbox" name="jours['mercredi']">:Mercredi

        <input type="checkbox" name="jours['jeudi]">:Jeudi
<br>
        <input type="radio" name="sexe" value="masculin">:M <br>
        <input type="radio" name="sexe" value="feminin">:F <br>
         <button type="submit" name="envoi">Soumettre</button>
    </form>
</body>
</html>