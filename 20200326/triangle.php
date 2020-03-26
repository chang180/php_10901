<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用星星印三角形</title>
</head>
<style>
    *{
        font-family:'Courier New';
    }
</style>
<body>
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
    echo str_repeat("&nbsp",$i/2).str_repeat("*",$j)."<br>";
}
//拷貝貼上修改一下的菱形
echo "<hr>"."菱形："."<br>";
for($i=8,$j=1;$i>=0;$i-=2,$j+=2){
    echo str_repeat("&nbsp",$i/2).str_repeat("*",$j)."<br>";
}
for($i=7,$j=2;$i>=0;$i-=2,$j+=2){
    echo str_repeat("&nbsp",$j/2).str_repeat("*",$i)."<br>";
}

//真正要開始思考的矩形，繼續偷懶
echo "<br>"."矩形："."<br>";
for($i=0;$i<7;$i++){
    if($i==0||$i==6) echo str_repeat("*",7)."<br>";
    else echo str_repeat("*",1).str_repeat("&nbsp",5).str_repeat("*",1)."<br>";
}

//短形裏頭帶叉叉，這要想一下……
//先把老師自己的程式碼貼上，我要再研究一下
//這個部份要想出來很困難，有時必須借助外部紙筆做思考與計算，否則也要使用一些流程圖或是塗鴉版之類的軟體先想好再開工。

echo "<hr>"."矩形pro："."<br>";
for($i=0;$i<7;$i++){
    if($i==0||$i==6) echo str_repeat("*",7)."<br>";
    else{
    for($j=0;$j<7;$j++){
        if($j==0||$j==6||$j==$i||$j==6-$i) echo "*";
        else echo "&nbsp";
    }
    echo "<br>";
}
}

echo "<hr>"."以下純屬自行補充學習"."<br>";
echo "我的名字叫「張建文」，想把這名字倒轉一下："."<br>";
echo strrev("張建文")."<br>";
echo "無奈PHP的函式不太給力，只好到網上抄一個來試試："."<br>";
echo str_rev_gb("張建文");

function str_rev_gb($str){
    //判断输入的是不是utf8类型的字符，否则退出
    if(!is_string($str)||!mb_check_encoding($str,'UTF-8')){
        exit("输入类型不是UTF8类型的字符串");
    }
    $array=array();
    //将字符串存入数组
    $l=mb_strlen($str,'UTF-8');      //返回具有 encoding 编码的字符串 str 包含的字符数.多字节的字符被计为 1。
    for($i=0;$i<$l;$i++){
        $array[]=mb_substr($str,$i,1,'UTF-8');//从索引为0处开始，每次截取一个字符，放入数组
    }
    //反转字符串
    krsort($array);                    
    //按照键名逆序排序
    //拼接字符串
    $string=implode($array);        
    //把数组元素组合成字符串       
    return $string;
}



//老師的程式碼，非常有幫助
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

    
</body>
</html>