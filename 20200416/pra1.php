<h4>字串函式練習</h4>
<div>字串 aaddw1123</div>
<div>內容使用多段php，但只要在同個檔案內，全域變數全都共用</div>
<?php

$str = "aaddw1123";
// 字串本身就是一個陣列
echo $str[5] . "<br>";
print_r($str);
echo "<hr>";

$str2 = "";

// 產生一個字串，以*代替所有字元
// $str2=str_replace()
for ($i = 0; $i < strlen($str); $i++) {
    $str2 .= "*";
    echo "i=", $i, "==>", $str2, "<br>";
}
echo $str2, "<br>";
?>
<hr>
<?php

$str3 = str_repeat("*", strlen($str));
echo $str3, "<br>";

// 也可以直接呼叫函式
str_repeat("*", strlen($str));
echo "<hr>";
echo str_repeat("好", 20);

?>
<hr>
<h4>字串切割</h4>
<div>This,is,a,book.</div>
<?php

// 高檔一點的陣列一行印法
// echo str_replace("\n", '', print_r($product_array, true));

$str="This is a book.";
$strArray=explode(" ",$str);
echo str_replace("\n", '',print_r($strArray,true));

// $strArray1=preg_split(" ",$str);
// $strArray2=mb_split(" ",$str);
echo "<hr>";

// 將陣列重新組合成字串練習，這是標準答案：
$str1 = implode(" ", $strArray);
echo $str1,"<br>";

// 序列化陣列，有空再研究一下
$str2 = serialize($strArray);
echo $str2,"<br>";

// json函式也是日後需要了解的函式，有空再看看吧
$str3 = json_encode($strArray);
echo $str3,"<br>","<hr>";
?>
<h4>使用join函式組合陣列元素</h4>

<?php
// 舊的弄法，老師翻出來給大家看看
$str4 = join(" ",$strArray);
echo $str4,"<br>","<hr>";
?>

<h4>取字串片段</h4>
<div>The reason why a great man is great is that he resolves to be a great man</div>
<?php
$str="The reason why a great man is great is that he resolves to be a great man";
$str2=mb_substr($str,0,10);
echo $str2,"...","<hr>";

?>