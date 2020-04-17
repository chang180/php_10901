<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入頁面</title>
    <style>
        /* 自己弄得很糟糕，看老師表演吧
            body {
            display: flex;
            justify-content: center;
            border:2px solid #666;
            background:darkseagreen;
            font-family: "微軟正黑體";
            margin:auto;

        } */
        form {
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

        form div {
            padding: 10px;

        }

        form div input[type='text'],
        form div input[type='password'] {
            font-size: 20px;
            padding: 5px 2px;
            width: 70%;
        }
    </style>
</head>

<body>
    <?php
    $showLoginForm = 1;
    if (isset($_GET['status'])) {
        switch ($_GET['status']) {
            case "login":
                echo "你已登入";
                $showLoginForm = 0;
                break;
            case "fail":
                echo "帳號密碼錯誤";
                break;
        }
    }
    ?>

    <?php
    if ($showLoginForm) {
    ?>
        <form action="user.php" method="post">
            <div>帳號：<input type="text" name="acc"></div>
            <div>密碼：<input type="password" name="pw"></div>
            <div><input type="submit" value="登入">
                <input type="reset" name="重置">
            </div>

        </form>
    <?php
    } else {
    ?>
        <h1>恭喜你中大獎了，得到口罩100個</h1>
    <?php
    }
    ?>
</body>

</html>