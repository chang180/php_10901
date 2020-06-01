<?php
// if(isset($_GET['logout'])){
    setcookie("id",$_COOKIE['id'],time()-3600);
    setcookie("status",'true',time()-3600);
    header("location:login.php");
// }
?>
<a href="login.php">回登入頁</a>