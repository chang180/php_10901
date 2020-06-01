<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../plugins/css/bootstrap.css">
    <title>會員列表</title>
</head>

<body>
    <h1>會員列表<?=$_GET['acc'];?></h1>
    <?php
    include "dbConnect.php";

    // 有傳值提示ID登入成功，否則引回登入頁面
    if (isset($_GET['acc']))  echo "<h2>歡迎", $_GET['acc'], "登入</h2><br>";
    else header("location:login.php");

    $sql = "SELECT * FROM `student` ORDER BY 'id' DESC ";

    $rows = $pdo->query($sql)->fetchAll();
    // print_r($rows);
    ?>

    <!-- table>tr*2>td*8 -->
    <table class="table">
        <tr>
            <td>ID</td>
            <td>帳號</td>
            <td>密碼</td>
            <td>姓名</td>
            <td>EMAIL</td>
            <td>手機</td>
            <td>生日</td>
            <td>註冊日期</td>
            <td>操作</td>
        </tr>
        <?php
        foreach ($rows as $row) {
            echo "<tr>";
            echo "    <td>" . $row['id'] . "</td>";
            echo "    <td>" . $row['acc'] . "</td>";
            echo "    <td>" . $row['pw'] . "</td>";
            echo "    <td>" . $row['name'] . "</td>";
            echo "    <td>" . $row['email'] . "</td>";
            echo "    <td>" . $row['tel'] . "</td>";
            echo "    <td>" . $row['birthday'] . "</td>";
            echo "    <td>" . $row['create_time'] . "</td>";
            echo "    <td>";
            echo "<button class='table badge'><a href='edit_user.php?user=" . $row['id'] . "'>編輯</a></button>";
            echo "<button class='table badge'><a href='delete_user.php?user=" . $row['id'] . "'>刪除</a></button>";
            echo "</td>";
            echo "</tr>";
            // echo "<tr><td>",$row['id'], "</td><td>", $row['name'], "</td><td>", $row['tel'], "</td></tr>";
        }
        ?>
    </table>

    <hr>
    <a href="register.php">新增會員</a>
    <hr>
    <!-- <a href="login.php">回登入</a> -->
    <a href="login.php?status=true&acc=<?=$_GET['acc'];?>">回登入</a>
    <hr>
    <a href="login.php">登出</a>

</body>

</html>