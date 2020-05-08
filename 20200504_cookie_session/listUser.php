<?php

if(!isset($_COOKIE['status'])){

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../plugins/css/bootstrap.css">
    <title>會員列表</title>
</head>

<body>
    <h1>會員列表</h1>
    <?php

    include "dbConnect.php";
    
    $sql = "SELECT * FROM `student` where `acc`= '".$_COOKIE['acc']."'";
    // $sql = "SELECT * FROM `student`";
    $user = $pdo->query($sql)->fetch();
    
    //使用cookie的做法
    if (isset($_COOKIE['acc']))  echo "<h2>歡迎", $user['acc'], "登入</h2><br>";
    else header("location:login.php");
    
    $sql = "SELECT * FROM `student`";
    $rows = $pdo->query($sql)->fetchAll();

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
    <a href="login.php">回登入</a>

</body>

</html>