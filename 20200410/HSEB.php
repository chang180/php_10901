<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>天干地支年份轉換</title>
</head>

<body>

    <!-- 英語急救站：
天干：Heavenly Stems
地支：Earthly Branches
甲子：Sexagenary -->
    <h2>
        <?php

        $hs = ["甲", "乙", "丙", "丁", "戊", "己", "庚", "辛", "壬", "癸"];
        $eb = ["子", "丑", "寅", "卯", "辰", "巳", "午", "未", "申", "酉", "戌", "亥"];
        $testYear = rand(-3000, 5000);
        // $testYear = 2020;

        $h = ($testYear - 1024 + 30000) % 10;
        $e = ($testYear - 1024 + 30000) % 12;
        // echo $hs[3]."<br>".$eb[2];

        if ($testYear < 0) echo "西元前" . abs($testYear) . "年是" . $hs[$h] . $eb[$e] . "年";

        else echo "西元" . $testYear . "年是" . $hs[$h] . $eb[$e] . "年"

        ?>
    </h2>
</body>

</html>