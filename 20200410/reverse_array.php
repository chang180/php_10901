<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列反轉</title>
</head>
<body>

<h2>
<?php
$a=[2,4,6,1,8,22];
echo "<pre>";print_r($a);echo "</pre>";
echo "<hr>";

// 今天要練習，不使用函式
// $a=array_reverse($a);
// print_r($a);

//其實這個也用到函式list和array了，似乎還不夠簡單
// for($i=0,$j=count($a)-1;$i<floor(count($a)/2);$i++,$j--){
// list($a[$j],$a[$i])=array($a[$i],$a[$j]);
// }
// print_r($a);

for($i=0,$j=count($a)-1;$i<floor(count($a)/2);$i++,$j--){
$tmp=$a[$j];
$a[$j]=$a[$i];
$a[$i]=$tmp;
}
echo "<pre>";print_r($a);echo "</pre>";
echo "<br>";

?>

</h2>
    
</body>
</html>