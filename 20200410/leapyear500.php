<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>閏年-500年</title>
</head>

<body>

    <?php
    function leapYear500($year)
    {
        $leapyear = [];
        for ($i = $year; $i <= $year + 500; $i++) {
            if ($i % 4 == 0 && ($i % 100 != 0 || $i % 400 == 0)) {
                $leapyear[] = $i;
            }
        }
        return $leapyear;
    }
    $year1 = 2020;
    echo $year1 . "年之後500年的閏年：" . "<hr>";
    echo "<pre>";
    print_r(leapYear500($year1));
    echo "</pre>" . "<hr>";

    $testYear=rand(2020,2520);
    if(in_array($testYear,leapYear500($year1))){
        echo $testYear."是閏年";
    }else{
        echo $testYear."是平年";
    }
    

    ?>

</body>

</html>