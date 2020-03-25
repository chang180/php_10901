<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>迴圈</title>
</head>
<body>
    <h4>
<?php
// for loop
for($i=0;$i<10;$i++){
    echo "<tr>"."hello".$i."<br>";"</tr>";
}
echo "<hr>";
//九九乘法表
//加入HTML表格標籤與PHP迴圈的結合

echo "<table border=1>";
for($i=1;$i<=9;$i=$i+1){
    echo "<tr>";
    for($j=1;$j<=9;$j++){
        echo "<td>".$j."x". $i . "=" .($i*$j)."</td>";
    }
    echo "</tr>";
}
echo "</table>";



//抄一個不是老師網站的菱形星星試試
    // for($i = 0; $i < 5;$i++){
    //     for($j = 0; $j < 5 - $i - 1 ; $j++) {
    //         echo ' ';
    //     }
    //     for($j = 0; $j < 2 * ($i + 1) - 1; $j++) {
    //         echo '*';
    //     }
    //     echo "<br>";
    // }
    // for($i = 0; $i < 5; $i++) {
    //     for($j = 0; $j < $i + 1; $j++) {
    //         echo ' ';
    //     }
    //     for($j = 0; $j < 10 - 2 * ($i+1) - 1; $j++) {
    //         echo '*';
    //     }
    //     echo "<br>";
    // }
?>

<table border=1>
    <tr>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
        <td>6</td>
        <td>7</td>
        <td>8</td>
        <td>9</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>
    </h4>
</body>
</html>