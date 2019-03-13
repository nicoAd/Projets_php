<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" 
"http://www.w3.org/TR/html4/strict.dtd"> 
<html> 	
    <head>
		<style>	
		table,td,th {border:solid 1px;}
		.carre {background-color:red;}
		.paire {background-color:grey;}
		</style>


        <title>Table de multiplication</title>
    </head> 
    <body> 
        <h1>Table de multiplication</h1> 
	<form name="form1" method="GET" action=""> 
            Table de multiplication de 1 &agrave; <select name="M"> 
            <?php for($i=1;$i<=20;$i=$i+1) { echo "<option value=\"$i\">$i</option>"; } ?>
            </select> 
            <input type="submit" value="Ok">
        </form> 
<?php if(isset($_GET["M"])) $M=$_GET["M"]; else $M=0;?> 

        <table> 
            <tr> 
            <th></th> 
                <?php for($i=1;$i<=$M;$i=$i+1) { 
                    echo "<th>$i</th>"; 
                } ?> 
            </tr> 
                <?php 
                  for($i=1;$i<=$M;$i=$i+1) { 
                    echo "<tr".(($i/2 == $i>>1)?" class=\"paire\"":"")."><th>$i</th>"; 
                    for($j=1;$j<=$M;$j=$j+1) { 
                      echo "<td".(($i==$j)?" class=\"carre\"":"").">".($i*$j)."</td>"; 
                    } 
                    echo "</tr>"; 
                  } 
                ?> 
        </table> 
		
    </body>
</html>