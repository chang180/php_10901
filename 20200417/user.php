<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: "微軟正黑體";
            background: darkseagreen;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 100px auto;
            width: 300px;
            height: 200px;
            text-align: center;
            padding: 10px;
            border: 1px solid #999;
            box-shadow: 0 0 5px #ccc;
        }
    </style>
</head>

<body>



    <?php
    // 避免第一次沒有狀態設定值
    $status = 'fail';

    if (!empty($_POST)) {
        // 如果$_POST不是空的
        $acc = $_POST["acc"];
        $pw = $_POST["pw"];
        echo "acc:", $acc, "<br>";
        echo "pw:", $pw, "<br>";

        if ($acc == 'admin' && $pw == '1234') {
            echo "登入成功";
            $status = "login";
        } else {
            echo "帳號密碼錯誤", "<br>";
            $status = "fail";
        }
    } else {
        // 如果$_POST是空的

    }


    ?>
    <br>
    <a href="login.php?status=<?= $status; ?>">回首頁</a>

</body>

</html>