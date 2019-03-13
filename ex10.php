<?php
$module = "Php && Mysql";
$l = strlen($module);

$nbM = str_word_count($module);

$extrait = substr($module, 9 );
$pass = "   pass223";
//$ln = trim($pass);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
        la longueur du module étudié est: 
        <b><?php echo $l;?></b> <br>
        <b><?php echo ucfirst(strtolower($extrait));?></b>
        <b><?php echo strlen($pass);?></b><br>
        <b><?php echo $nbM;?></b><br>

    </p>
</body>
</html>