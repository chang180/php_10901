<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>印星星</title>
</head>
<style>
    *{
        font-family:"Courier New";
        line-height:10px;
        font-size: 10px;
    }
</style>
<body>
<h2>
<?php
//先練練手，直角三角形
echo "直角三角形："."<br>";
for($i=1;$i<=5;$i++){
    echo str_repeat("*",$i)."<br>";
}

//再來是倒直直三角形
echo "<hr>"."倒直角三角形："."<br>";
for($i=5;$i>0;$i--){
    echo str_repeat("*",$i)."<br>";
}

//開始有點難度的正三角形，採用偷懶方式
echo "<hr>"."正三角形："."<br>";
for($i=8,$j=1;$i>=0;$i-=2,$j+=2){
    echo str_repeat("&nbsp;",$i/2).str_repeat("*",$j)."<br>";
}
//拷貝貼上修改一下的菱形
echo "<hr>"."菱形："."<br>";
for($i=8,$j=1;$i>=0;$i-=2,$j+=2){
    echo str_repeat("&nbsp;",$i/2).str_repeat("*",$j)."<br>";
}
for($i=7,$j=2;$i>=0;$i-=2,$j+=2){
    echo str_repeat("&nbsp;",$j/2).str_repeat("*",$i)."<br>";
}

//真正要開始思考的矩形，繼續偷懶
echo "<hr>"."矩形："."<br>";
for($i=0;$i<7;$i++){
    if($i==0||$i==6) echo str_repeat("*",7)."<br>";
    else echo str_repeat("*",1).str_repeat("&nbsp;",5).str_repeat("*",1)."<br>";
}

//短形裏頭帶叉叉，這要想一下
//先把老師自己的程式碼貼上，我要再研究一下
//這個部份要想出來很困難，有時必須借助外部紙筆做思考與計算，否則也要使用一些流程圖或是塗鴉版之類的軟體先想好再開工。

echo "<hr>"."矩形pro："."<br>";
$s=10;

for($i=0;$i<$s;$i++){
    if($i==0||$i==$s-1) echo str_repeat("*",$s)."<br>";
    else{
    for($j=0;$j<$s;$j++){
        if($j==0||$j==$s-1||$j==$i||$j==$s-1-$i) echo "*"; //這個判斷式非常精華，就是要自己想清楚才寫的出來，不然抄來的不是看不懂就是不會改
        else echo "&nbsp;";
    }
    echo "<br>";
}
}

//  老師的程式碼，非常有幫助
// $s=7;
//    for($i=0 ; $i<$s ;$i++){
//        for($j=0 ; $j<$s ; $j++){
//            if($i==0 || $i==$s-1){
//               echo "*";
//            }elseif($j==0 || $j==$s-1 || $i==$j || $j==$s-$i-1){
//               echo "*";
//            }else{
//               echo "&nbsp&nbsp";
//             }
//         }
//             echo "<BR/>";
//     } 

?>

</h2>

</body>
</html>