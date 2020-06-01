<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case 判斷式</title>
</head>
<body>
 <h1> 


<?php
// 選擇結構→判斷及格學生，判斷成績等級
$grade =95;

echo "成績：".$grade."<br>";
if($grade>=60) echo "及格"."<br>";
else echo "不及格"."<br>";
echo "<hr>";

//switch 結構判斷成績
switch ($grade)
{
    case $grade<60 && $grade >=0:
        echo "等級：D<br>用心不足，請加強<br>";
    break;
    case $grade>=60 && $grade <75:
        echo "等級：C<br>一般水平，需要更多的努力<br>";
    break;
    case $grade >=75 && $grade <90:
        echo "等級：B<br>可圈可點，但還有進步的空間<br>";
    break;
    case $grade >=90 && $grade <=100:
        echo "等級：A<br>非常好，請努力保持<br>";
    break;
    // case $grade ==100:
    //     echo "A:題目裏有陷阱，你肯定有作弊吧？"."<br>";
    // break;
    default:
        echo "成績不在範圍內。"."<br>";    
}

//三元運算子 ternary operator
echo "<hr>三元運算子：";
echo ($grade>=60)?"及格":"不及格";
echo "<br";

// if else 巢狀結構判斷成績

// if ($grade >=90) echo "判定為 A"."<br>";
// else if ($grade >=75) echo "判定為 B"."<br>";
// else if ($grade >=60) echo "判定為 C"."<br>";
// else echo "判定為 D"."<br>";
?>
</h1>  
</body>
</html>