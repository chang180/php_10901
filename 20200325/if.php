<?php
// 選擇結構→判斷及格學生，判斷成績等級
$grade =100;

echo "成績：".$grade."<br>";
if($grade>=60) echo "及格"."<br>";
else echo "不及格"."<br>";
echo "<hr>";

//switch 結構判斷成績
switch ($grade)
{
    case $grade<60 && $grade >=0:
        echo "D: 同學，你當掉了"."<br>";
    break;
    case $grade>=60 && $grade <75:
        echo "C: 這個還行，但還是要加油！"."<br>";
    break;
    case $grade >=75 && $grade <90:
        echo "B: 非常不錯，很高分了！"."<br>";
    break;
    case $grade >=90 && $grade <100:
        echo "A:只差一點點就完美，厲害！"."<br>";
    break;
    case $grade ==100:
        echo "A:題目裏有陷阱，你肯定有作弊吧？"."<br>";
    break;
    default:
        echo "成績不在範圍內。"."<br>";    
}
// if else 巢狀結構判斷成績

if ($grade >=90) echo "判定為 A"."<br>";
else if ($grade >=75) echo "判定為 B"."<br>";
else if ($grade >=60) echo "判定為 C"."<br>";
else echo "判定為 D"."<br>";
?>