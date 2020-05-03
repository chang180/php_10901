<?php
$sdn = "mysql:host=localhost;dbname=school;charset=utf8";
$pdo = new PDO($sdn, "root", "");
date_default_timezone_set("Asia/Taipei");
$sql = "DELETE FROM `student` WHERE `id`='12'";

echo $sql;

$res = $pdo->exec($sql);

if ($res == 1) {
    echo $res, "<hr>";
    echo "刪除成功";
} else {
    echo $res, "<hr>";
    echo "刪除失敗";
}
