<?php
// 兩種寫法都可以
include "dbConnect.php";
// include("dbConnect.php");

// require也可以，較不常用
// require "dbConnect.php";

if (!empty($_POST['acc'])) {
    echo "有送出資料";
    $acc = $_POST['acc'];
    $pw = $_POST['pw'];
    $sql = "SELECT COUNT(*) FROM `student` WHERE `acc`='$acc' && `pw`='$pw'";
    // 資料全撈會影響效能
    // $user = $pdo->query($sql)->fetch();
    $user = $pdo->query($sql)->fetchColumn();
    // echo $sql;

    // 多餘的做法，以前這麼教的，撈資料的時候就確認帳號密碼存在了，所以以後不要這樣用
    // if ($acc == $user['acc'] && $pw == $user['pw']) {
    if ($user>0) {
        echo "登入成功";
        // sleep(10);
        // exit();
        header("location:listUser.php?acc=$acc");
    } else {
        echo "拒絕登入";
        // sleep(3);
        header("location:login.php?status=false");
    }
}
echo "無資料";

?>
<hr>
<a href="login.php">回登入</a>
