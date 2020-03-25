<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習</title>
</head>
<style>
        * {
            align = "center" ;
        }
</style>
<body>
    <h1>
<?php
echo "<table border=1 align='center' height='750px' width='750px'>";
echo '<td style="background:grey">'.""."</td>";
    for($i=1;$i<=9;$i++){
        echo '<td style="background:grey">'.$i.'</td>';  
    }
    for($i=1;$i<=9;$i++){
        echo '<tr><td style="background:grey">'.$i."</td>";
        for($j=1;$j<=9;$j++){
            echo "<td>".$i*$j."</td>";
        }
    }
echo "</table>";
?>
    </h1>
    
</body>
</html>