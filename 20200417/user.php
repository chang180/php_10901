<?php

if (!empty($_POST)) {
    // 如果$_POST不是空的
    $acc=$_POST["acc"];
    $pw=$_POST["pw"];
    echo "acc:",$acc,"<br>";
    echo "pw:",$pw,"<br>";

    if($acc=='admin' && $pw=='1234'){
        echo "登入成功";
        
    }else{
        echo "帳號密碼錯誤";
    }

} else {
    // 如果$_POST是空的

}
