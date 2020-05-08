<?php
include "dbConnect.php";


if (!empty($_POST['acc'])) {
    echo "有送出資料";
    $acc = $_POST['acc'];
    $pw = $_POST['pw'];
    $sql = "SELECT * FROM `student` WHERE `acc`='$acc' && `pw`='$pw'";

    $user = $pdo->query($sql)->fetch();
    // print_r($user);

    if (!empty($user)) {
        echo "登入成功";
        // setcookie("acc", $user['acc'], time()+60*3);
        // setcookie("status", 'true', time()+60*3);
        session_start();
        $_SESSION['id']=$user['id'];
        $_SESSION['acc']=$user['acc'];
        $_SESSION['status']='true';
        header("location:listUser.php");
    } else {
        echo "拒絕登入";
        session_start();
        $_SESSION['status']='false';
        // sleep(3);
        header("location:login.php");
    }
}
echo "無資料";

?>
<hr>
<a href="login.php">回登入</a>