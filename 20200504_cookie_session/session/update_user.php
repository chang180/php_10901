<?php
// 取得post過來的資料
$id = $_POST['id'];
$acc = $_POST['acc'];
$pw = $_POST['pw'];
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$birthday = $_POST['birthday'];

echo "你要更新的是id為", $_POST['id'], "的會員";

// 建立連線
$sdn = "mysql:host=localhost;dbname=school;charset=utf8";
$pdo = new PDO($sdn, "root", "");
date_default_timezone_set("Asia/Taipei");


// 建立更新的SQL語法
$sql = "UPDATE `student` SET `acc`='$acc', `pw`='$pw', `name` = '$name', `email` = '$email', `tel` = '$tel', `birthday` = '$birthday' WHERE `id`= '$id'";

// 執行更新
$res = $pdo->exec($sql);
echo "<hr>",$res,"<hr>";

// 跳回會員列表, header函式很重要
if ($res>0) {
    header("location:listUser.php");
}
else {
echo "更新失敗<br>", $sql;

}
?>
<hr>
    <a href="listUser.php">會員列表</a>