<?php require_once('data.inc'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h2>Noms stagiaires</h2>
   <ol>
    <?php 
    
        for($i = 0; $i < sizeof($tab); $i++){
            echo '<li>'.$tab[$i].'</li>';
        }

    ?>
    </ol>
</body>
</html>