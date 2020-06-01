<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習</title>
</head>
<style>
table{
    border: 1px solid #999;
    padding:10px;
}
table td{
    padding:5px;
    text-align:center;
    border:1px solid #ccc;
}
table tr:nth-child(1), td:nth-child(1){
    background: #bbb;
}

</style>
<body>
    <h1>
<?php
echo "<table border=1 align='center' height='750px' width='750px'>";
echo '<td>'."&nbsp"."</td>";
    for($i=1;$i<=9;$i++){
        echo '<td>'.$i.'</td>';  
    }
    for($i=1;$i<=9;$i++){
        echo '<tr><td>'.$i."</td>";
        for($j=1;$j<=9;$j++){
            echo "<td>".$i*$j."</td>";
        }
    }
echo "</table>";
?>
    </h1>
    
</body>
</html>