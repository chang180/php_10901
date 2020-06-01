<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>閏年判斷</title>
</head>
<body>
<h1>
<?php

// 閏年判斷

// 公元年分除以4不可整除，為平年。
//     →公元年分除以4可整除，為閏年
// 公元年分除以4可整除但除以100不可整除，為閏年。
//     →公元年分除以4可整除，並且，除以100不可整除，為閏年。
// 公元年分除以100可整除但除以400不可整除，為平年。
// 公元年分除以400可整除但除以3200不可整除，為閏年。

echo "<hr>";
$year = 1900;
echo "西元".$year."年，是";
//巢狀結構，相對效能較慢
if($year%4==0 && $year%100!=0) echo "閏年";
elseif($year%100==0 && $year%400!=0) echo "平年";
elseif($year%400==0 && $year%3200 !=0) echo "閏年";
else echo "平年";

//網路高人之解答，3200年先別管
// if ($year%4==0 && ($year%100!=0 || $year%400==0)) echo "閏年";
// else echo "平年";

//三元運算子，還沒有搞定
// echo ($year%4==0 && ($year%100!=0 || $year%400==0))?"閏年":($year%100==0 && $year%400!=0)?"平年":($year%400==0 && $year%3200!=0)?"閏年":"平年";
?>
</h1>
</body>
</html>