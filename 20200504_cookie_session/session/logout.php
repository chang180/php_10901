<?php
    // setcookie("id",$_COOKIE['id'],time()-3600);
    // setcookie("status",'true',time()-3600);
    session_start();
    unset($_SESSION['id']);
    unset($_SESSION['status']);
    unset($_SESSION['acc']);
    //可以全砍掉，可是會把全部的session都砍光，包含所有在線的其他登入者資訊都會刪光光
    // session_destroy();
    header("location:login.php");
?>