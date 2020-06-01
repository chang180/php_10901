<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bubble</title>
</head>

<body>

    <?php

    function sortArray($arr)
    {
        for ($i = 0; $i < count($arr) - 1; $i++) {
            for ($j = 0; $j < count($arr) - $i - 1; $j++) {
                $tmp = 0;
                if ($arr[$j] > $arr[$j + 1]) {
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $tmp;
                }
            }
        }
        return $arr;
    }

    $arr[] = [5, 8, 6, 3, 9, 2, 1, 7];
    $result = sortArray($arr);
    foreach($arr as $val) echo $val."<br>";
    print_r($result);


    ?>
</body>

</html>