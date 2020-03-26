<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diamond</title>
</head>

<body>
    <?php
    $n = 10;
    for ($i = 1; $i < 2 * $n; $i++) {
        $k = 0;
        for ($j = 1; $j < 2 * $n; $j++) {
            if ($j + $i == $n + 1 || $j + $n == $i + 1) {
                $k = $j;
                echo "*";
            } else if ($j - $n == $n - $k) {
                echo "*";
            } else {
                echo "&nbsp";
            }
        }
        echo "<br>";
    }

    ?>

</body>

</html>