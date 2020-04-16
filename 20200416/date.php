<h4>日期/時間函式</h4>
<div>strtotime() - 把文字日期轉成時間戮</div>
<?php
// 將預設時區設定到臺灣，沒設定在時間顯示上會出問題。
date_default_timezone_set("Asia/Taipei");

$time="2020-04-16 11:30:21";

//將字串轉為時間戮
$serialTime=strtotime($time);
//再用date函式將時間戮轉為日期格式
echo date("Y年m月d日 H:i:s l",$serialTime);

?>

<h4>時間練習</h4>
<div>距離下一次的生日還有幾天</div>
<div>5/19</div>
<?php
$today=time();
$nextBirth=strtotime("2020-5-19");
// echo $today,"<br>",$nextBirth;
$days=ceil(($nextBirth-$today)/60/60/24);
// echo "驗證一下生日日期是：",getdate()
echo "還有",$days,"天，就到生日了","<hr>";
// echo "生日是：",date(+$days days,"2020-5-19");
?>
老師解答
10/7
<?php
$today="2020-04-16";
$nextBirth="2020-10-07";
$between=strtotime($nextBirth)-strtotime($today);
$days=$between/60/60/24;
echo "還有:",$days,"天到生日";
echo "<hr>";

$days=date("z",strtotime($nextBirth))-date("z",strtotime($today));
echo "還有:",$days,"天到生日";
echo "<hr>";
// echo gettimeofday("2020-4-16");
?>
<hr>
<h4>date()函式</h4>
<?php
echo date("Y-m-d H:i:s"),"<br>";
?>
<hr>
<h4>strtotime()函式</h4>
<?php

$date=strtotime("+3 days".$today);
// strtotime("+3 days", "2020-04-16");
echo date("Y-m-d",$date);

echo "<hr>";
echo date("Y-m-d" , strtotime("-2 month",strtotime("2020-10-07"))),"<br>";
echo date("Y-m-d" , strtotime("-2 month 2020-10-07")),"<br>";
?>

<h4>日期練習</h4>
<div>印出今天起的三十天日期</div>
<?php
// $today=date("Y-m-d");
for($i=0;$i<30;$i++){
    // strtotime()才能直接加時間，date只是規範輸出格式
    // time()可以不用加，但可用於之後做萬年曆時的參考
   echo date("Y-m-d", strtotime("+$i days",time())),"<br>";
    // echo date("+$i days Y-m-d"),"<br>";
}
?>
2020-04-16