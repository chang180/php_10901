<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編輯會員</title>
    <link rel="stylesheet" href="../plugins/css/bootstrap.css">
    <style>
        h1 {
            text-align: center;
        }

        .form {
            border: 2px solid #ccf;
            width: 350px;
            display: block;
            margin: auto;

        }

        .form div {
            padding: 5px;
            font-size: 20px;
            font-weight: 500px;
        }

        .form input {
            padding: 3px;
            font-size: 18px;
            border: 0;
            border-bottom: 1px solid #aaa;
        }
    </style>
</head>

<body>
    <h1>編輯會員</h1>
    <?php

    $id = $_GET['user'];
    echo "你要編輯的是id為", $_GET['user'], "的會員";
    $sdn = "mysql:host=localhost;dbname=school;charset=utf8";
    $pdo = new PDO($sdn, "root", "");
    date_default_timezone_set("Asia/Taipei");
    $sql = "SELECT * FROM `student` WHERE `id` = $id";
    $user = $pdo->query($sql)->fetch();

    ?>

    <form action="update_user.php" method="post" class="form">

        <div><input type="hidden" name="id" value="<?= $user['id']; ?>"></div>
        <div><label for="acc">帳號：</label><br><input type="text" name="acc" value="<?= $user['acc']; ?>"></div>
        <div><label for="pw">密碼：</label><br><input type="password" name="pw" value="<?= $user['pw']; ?>"></div>
        <div><label for="name">姓名：</label><br><input type="text" name="name" value="<?= $user['name']; ?>"></div>
        <div><label for="email">email：</label><br><input type="email" name="email" value="<?= $user['email']; ?>"></div>
        <div><label for="tel">手機：</label><br><input type="tel" name="tel" value="<?= $user['tel']; ?>"></div>
        <div><label for="birthday">生日：</label><br><input type="date" name="birthday" value="<?= $user['birthday']; ?>"></div>
        <div>
            <input type="submit" value="送出">
            <input type="reset" value="重置">
        </div>
    </form>
    <hr>
    <a href="listUser.php">會員列表</a>

</body>

</html>