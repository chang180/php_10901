<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列練習-學生成績表</title>
</head>
<style>
    table {
        border: 1px solid #999;
        padding: 10px;
        align-content: center;
        height: 750px;
        width: 750px;
    }

    table td {
        padding: 5px;
        text-align: center;
        border: 1px solid #ccc;
    }

    table tr:nth-child(odd),
    td:nth-child(odd) {
        background: #bbb;
    }
</style>

<body>



    <h4>陣列練習-學生成績表</h4>

    <?php

    $judy = [95, 64, 70, 90, 84];
    $amo = [88, 78, 54, 81, 71];
    $john = [95, 64, 70, 90, 84];
    $peter = [95, 64, 70, 90, 84];
    $hebe = [88, 78, 54, 81, 71];

    $score = [
        'judy' => [
            '國文' => 95,
            '英文' => 64,
            '數學' => 70,
            '地理' => 90,
            '歷史' => 84
        ],
        'amo' => [
            '國文' => 88,
            '英文' => 78,
            '數學' => 54,
            '地理' => 81,
            '歷史' => 71
        ],
        'john' => [
            '國文' => 45,
            '英文' => 60,
            '數學' => 68,
            '地理' => 70,
            '歷史' => 62
        ],
        'peter' => [
            '國文' => 59,
            '英文' => 32,
            '數學' => 77,
            '地理' => 54,
            '歷史' => 42
        ],
        'hebe' => [
            '國文' => 71,
            '英文' => 62,
            '數學' => 80,
            '地理' => 62,
            '歷史' => 64
        ]
    ];

    echo '<pre>';
    print_r($score);
    echo '</pre>';


    // 九九乘法表-練習
    $i = 1;
    $arr = [];
    while ($i <= 9) {
        $j = 1;
        while ($j <= 9) {
            $arr[] = $i . ' x ' . $j . '=' . $i * $j;
            $j++;
        }
        $i++;
    }

    echo '<hr>';

    echo "<table>";
    for ($i = 1; $i <= 9; $i++) {
        // echo '<td>' . $i . '</td>';
    }
    for ($i = 1; $i <= 9; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= 9; $j++) {
            echo "<td>" . $i. " x " . $j . " = " . $i*$j."</td>";
        }
    }
    // for($i=0;$i<count($arr);$i++){
    //     echo $arr[$i]."&nbsp;";

    //     if($i%9==8){
    //     echo "<br>";
    //     }
    // }
    echo "</table>" . "<hr>";

    foreach ($arr as $key => $val) {
        echo $val . " , ";
        if ($key % 9 == 8) echo "<br>";
    }


    ?>


</body>

</html>