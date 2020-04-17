<?php
function bmi()
{
    // 使用get方法就要用$_GET接
    // $weight=$_GET['weight'];
    // $height=$_GET['height'];


    // isset() or empty()
    // 用於判斷初次載入網頁變數不存在之情形
    if (isset($_POST['weight']) && isset($_POST['height'])) {
        $weight = $_POST['weight'];
        $height = $_POST['height'];

        echo "你輸入的身高是:", $height, "<br>";
        echo "你輸入的體重是:", $weight, "<br>";
        $bmi = round($weight / pow($height / 100, 2), 2);
        if (!empty($height)) {

            echo "你的BMI是:", $bmi;
        } else {
            echo "<span style='color:red'>請輸入正確的身高值</span>";
        }
    }
    if (isset($bmi)) {
        switch ($bmi) {
            case ($bmi < 18.5):
                echo "體重過輕";
                break;
            case ($bmi < 24):
                echo "你很健康";
                break;
            case ($bmi < 27):
                echo "過重";
                break;
            case ($bmi < 30):
                echo "輕度肥胖";
                break;
            case ($bmi < 35):
                echo "中度肥胖";
                break;
            default:
                echo "重度肥胖，請尋求醫生協助";
        }
    }
}


?>

<!-- oninput = "value=value.replace(/[^\d]/g,'')" -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>表單傳值</title>
    <style>
        body {
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        form {
            border: 1px solid #999;
            margin: 3px;
        }
    </style>
</head>

<body>
    <h4>BMI計算機</h4>
    <!-- form>input:text*2+input:submit -->
    <form action="?" method="post">
        身高(公分)：<input type="number" name="height" min="10" max="300" id="" step="0.1"><br>
        體重(公斤)：<input type="number" name="weight" min="30" max="500" id=""><br>
        <!-- oninput = "value=value.replace(/[^\d]/g,'')" -->
        <input type="submit" value="送出">
        <hr>
    </form>
    <?php
    bmi();
    ?>
</body>

</html>