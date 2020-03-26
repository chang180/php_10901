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
<<<<<<< HEAD
echo "<table border=1>";
echo "<td>".""."</td>";
    for($i=1;$i<=9;$i++){
        echo "<td>".$i."</td>";  
=======
echo "<table border=1 align='center' height='750px' width='750px'>";
echo '<td style="background:grey">'.""."</td>";
    for($i=1;$i<=9;$i++){
        echo '<td style="background:grey">'.$i.'</td>';  
>>>>>>> ba81c8c8b7fca187d52ad8bee3cabd90bda09259
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