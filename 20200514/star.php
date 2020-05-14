<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>自訂函式</title>
</head>
<body>

<form action="?" method="get">
    <input type="number" name="stars">
    <input type="submit" value="送出">
</form>

    
</body>
</html>

<?php
$stars=$_GET['stars'];

if(isset($_GET['stars'])){
    $stars=$_GET['stars'];
    stars($stars);
}

// stars($stars);

// 函式建立之後，即可隨意調用
// for ($i=0;$i<10;$i++){
//     $rand=rand(5,20);
//     stars($rand);
// }

// stars(5);




function stars($row){
    for($i=1;$i<=$row;$i++){
        for($j=1;$j<=($row+$i-1);$j++){
            if($j<=($row-$i)){
                echo "&nbsp;";
            }
                else{
                    echo "*";
                }
            }
            echo "<br>";
        }
    }
