<?php

$dsn = "mysql:host=localhost;charset=utf8;dbname=school";
$pdo = new PDO($dsn, "root", "");
date_default_timezone_set("Asia/Taipei");

// 必須使用上引號`~~`，不然會出錯誤
$sql = "SELECT `name`,`tel` FROM `student`";

$rows = $pdo-> query($sql) -> fetchAll();

foreach ($rows as $r) {
    echo $r['name'] . " - " . $r['tel'] . "<br>";
}
