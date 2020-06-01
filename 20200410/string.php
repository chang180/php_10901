<h4>字串處理</h4>
<hr>
<h5>1.子字串 substr() / mb_substr()</h5>

<?php
$s="Hello World";
echo $s;
echo "<br>";
echo substr($s,-2,2);
echo "<br>";

$s="哈囉 今天天氣好嗎?";
echo $s;
echo "<br>";
echo substr($s,2,3)."<br>"; //原生函數會產生亂碼
echo mb_substr($s,1,4)."<br>"; //這才是正解，前面加mb就對了
echo mb_substr($s,-5,-1)."<br>";

echo "<hr>";
$a= "      bbb         ";
echo $a."<br>";
$b=trim($a);
echo $b."<br>";
echo "<hr>";

echo  str_repeat("*hello*",5);
echo "<br>";
$ss=str_replace("今天","明天",$s);
echo $ss;

echo "<hr>";
$str_split=explode(" ",$s);
echo "<pre>";print_r($str_split);echo "</pre>";
echo $str_split[0];
echo "<hr>";
// $str_split=mb_str_split($s,1,1);
// echo "<pre>";print_r($str_split);echo "</pre>";
// echo "<hr>"; 再查查怎麼用吧

echo $s."<br>";
echo strpos($s,"天")."<br>";
echo mb_strpos($s,"天")."<br>"; //有的話就是用mb開頭就對了
echo "<hr>";

?>