<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習</title>
</head>
<style>
        col{
            background-color: grey;
        }
</style>
<body>
    <h1>

<?php
echo "<table border=1>";
    for($i=0;$i<=9;$i++){
        echo "<td>".$i."</td>";  
    }
    for($i=1;$i<=9;$i++){
        echo "<tr><td>".$i."</td>";
        for($j=1;$j<=9;$j++){
            echo "<td>".$i*$j."</td>";
        }
        echo "</span>";
    }
echo "</table>";
?>


    </h1>
    
</body>
</html>