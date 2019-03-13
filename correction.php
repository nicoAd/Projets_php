<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    table,th,td{
        border:1px solid black;
        border-collapse:collapse;
    }
    tr:nth-child(even){
        background-color:grey;
    }
    th{
        background-color:yellow;
        width:20px;
        height:20px;
    }
    td{
        width:20px;
        height:20px;
    }
    
    </style>
</head>
<body>
    <form action="" method="get">
        <select name="nb" id="">
        <?php
            for($i = 1; $i <= 50 ;$i++){
                echo"<option value=$i>$i</option>";
            }
        
        ?>
        
        </select>
        <button type="submit">Multi</button>
    </form>
    <table>
        <tr>
        <th></th>
            <?php
            $nb = 0;
            if(isset($_GET['nb'])){
             $nb = $_GET['nb'];
            }
                for($i = 1; $i <= $nb; $i++){
                    echo"<th>$i</th>";
                    
                }
                
            ?>
        </tr>
        <?php
            for($i = 1; $i <= $nb; $i++){
                echo"<tr><th>$i</th>";
                for($j = 1; $j <= $nb; $j++){
                    if($i==$j){
                        echo'<td style="background-color:red;">'.($i*$j).'</td>';  
                    }else{
                        echo"<td>".($i*$j)."</td>";
                    }
                    
                }
            }
            echo"</tr>";

        ?>
    </table>
</body>
</html>