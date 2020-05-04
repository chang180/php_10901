<?php
$sdn="mysql:host=localhost;dbname=school;charset=utf8";
$pdo=new PDO($sdn,"root","");
date_default_timezone_set("Asia/Taipei");
$id=$_GET['user'];

$sql="DELETE FROM `student` WHERE `student`.`id` = '$id'";

$res=$pdo->exec($sql);

if($res>0){
    header("location:listUser.php");

}else{
    echo "刪除失敗<hr>";
    echo "可能原因：1.該筆資料不存在。<br>2.資料庫連線有問題。<br>3.SQL語法有誤。<br>";
    echo $sql;
}
?>
<hr>
<a href="listUser.php">會員列表</a>