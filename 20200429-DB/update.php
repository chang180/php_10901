<?php
$sdn="mysql:host=localhost;dbname=school;charset=utf8";
$pdo=new PDO($sdn,"root","");
date_default_timezone_set("Asia/Taipei");

$sql="UPDATE `student` SET `name`='習包子', `acc`='shii',`birthday`='1950-3-29',`tel`='0800000888' WHERE `id`='11'";
$res=$pdo->exec($sql);


// 資料欄位輸入錯誤，照樣會更新成功，必須自己注意
if($res==1){
    echo $res;
    echo "<hr>","更新成功";
}
else{
    echo $res;
    echo "<hr>","更新失敗";
}