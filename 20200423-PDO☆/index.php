<style>
    body {
        background: darksalmon;
        display: flex;
        color: darkblue;
        justify-content: flex-start;
        flex-direction: column;
        align-items: center;
    }

    table {
        background: #0099ff;
        border-collapse: collapse;
        border: 1px solid #333;
        box-shadow: 0 0 5px #aaa;
    }

    table td {
        padding: 5px;
        border: 3px solid #666;

    }

    table tr:nth-child(even) {
        background: lightgoldenrodyellow;

    }

    table td:hover {
        background: darkcyan;

    }
</style>

<h1>資料庫的連線</h1>
<?php

// 設定非常重要，沒有emmet幫忙，必須自己記住
// Data Source Name
$dsn = "mysql:host=localhost;charset=utf8;dbname=students";

//PHP Data Objects
$pdo = new PDO($dsn, 'root', '');

//設定查詢變數
$sql = "select * from students where left(`class_num`,4)='1020'";

//fetchALL:取得所有結果列，以陣列或物件方式回傳
//PDO::FETCH_ASSOC
//PDO::FETCH_NUM
//PDO::FETCH_BOTH - 預設值
// $rows=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
// $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($rows);
// echo "</pre>";
// 錯誤示範，目前使用上多半會直接fetchALL()，以便使用foreach處理
// $rows=$pdo->query($sql);
// $row=$rows->fetch(PDO::FETCH_ASSOC);
// $row=$rows->fetch(PDO::FETCH_ASSOC);
// $row=$rows->fetch(PDO::FETCH_ASSOC);

// echo $row['name'],"<hr>";
// echo $rows['name'],"<hr>";

//會自動建立鍵值，也可用欄位名稱為鍵值
// echo $rows[1]['name'],"<hr>";
// echo $rows[1][3],"<hr>";

// 整個陣列
// echo "<pre>";
// print_r($rows);
// echo "</pre>", "<hr>";


?>

<table>
    <?php
    foreach ($rows as $row) {
        echo "<tr>";
        echo "    <td>" . $row['uni_id'] . "</td>";
        echo "    <td>" . $row['class_num'] . "</td>";
        echo "    <td>" . $row['name'] . "</td>";
        echo "    <td>" . $row['dept'] . "</td>";
        echo "    <td>" . $row['nat_id'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>