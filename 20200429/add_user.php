<?php
$sdn = "mysql:host=localhost;dbname=school;charset=utf8";
$pdo = new PDO($sdn, "root", "");
date_default_timezone_set("Asia/Taipei");

if (!empty($_POST['acc'])||!empty($_POST['pw'])||!empty($_POST['name'])) {
    $acc = $_POST['acc'];
    $pw = $_POST['pw'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $birthday = $_POST['birthday'];

    echo $acc, "<br>";
    echo $pw, "<br>";
    echo $name, "<br>";
    echo $email, "<br>";
    echo $tel, "<br>";
    echo $birthday, "<br>";

    $sql = "INSERT INTO  `student` (`acc`,`pw`,`name`,`email`,`tel`,`create_time`,`update_time`,`birthday`) 
VALUES('$acc','$pw','$name','$email','$tel','" . date("Y-m-d") . "','" . date("Y-m-d") . "','$birthday')";

    $res = $pdo->exec($sql);
    if ($res == 1) {
        echo $res, "<hr>", "新增成功";
    } else {
        echo $res, "<hr>", "新增失敗";
    }
} else {
    echo "Acces Denied";
}
?>
<hr>
<a href="register.php">回首頁</a>