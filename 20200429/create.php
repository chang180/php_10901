<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=school";
$pdo = new PDO($dsn, "root", "");
date_default_timezone_set("Asia/Taipei");

$sql = "INSERT INTO student(`id`,
                            `acc`,
                            `pw`,
                            `name`,
                            `email`,
                            `tel`,
                            `create_time`,
                            `update_time`,
                            `birthday`) 
                        values(null,
                        'chang180',
                        'chang180',
                        '張建文',
                        'chang180@gmail.com',
                        '0931833488',
                        '" . date("Y-m-d H:i:s") . "',
                        '" . date("Y-m-d H:i:s") . "',
                        '1974-05-19')";

echo $sql;
echo "<hr>";

// 這一行才是在新增資料;

// $pdo->query($sql);
//exec 不回傳資料，但回傳成功或失敗(0 or 1)
$pdo->exec($sql);
echo "資料已新增";



?>