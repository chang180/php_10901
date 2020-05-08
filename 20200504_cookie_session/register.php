<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>註冊會員</title>
    <style>
h1{
    text-align: center;
}
.form{
    border:2px solid #ccf;
    width:350px;
    display:block;
    margin:auto;

}
.form div{
    padding:5px;
    font-size: 20px;
    font-weight: 500px;
}
.form input{
    padding:3px;
    font-size: 18px;
    border:0;
    border-bottom: 1px solid #aaa;
}
    </style>
</head>

<body>
    <h1>註冊會員</h1>
    <!-- <form action="?" method='get'>姓名:<input type="text"" name="name" title="請輸入ID">密碼:<input type="text" name="pw" title="請輸入密碼">
        <input type="submit" value="查詢">
    </form> -->
    <form action="add_user.php" method="post" class="form">

        <div><label for="acc">帳號：</label><br><input type="text" name="acc"></div>
        <div><label for="pw">密碼：</label><br><input type="password" name="pw"></div>
        <div><label for="name">姓名：</label><br><input type="text" name="name"></div>
        <div><label for="email">email：</label><br><input type="email" name="email"></div>
        <div><label for="tel">手機：</label><br><input type="tel" name="tel"></div>
        <div><label for="birthday">生日：</label><br><input type="date" name="birthday"></div>
        <div>
            <input type="submit" value="送出">
            <input type="reset" value="重置">
        </div>
    </form>

    <!-- 輸入資料表換到另一個檔案做 -->
    <?php
    // $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
    // $pdo = new PDO($dsn, "root", "");
    // date_default_timezone_set("Asia/Taipei");
    // // $sql="INSERT INTO `student` VALUE `name`=$_GET["name"],`pw`=$_GET["pw"]";

    // $res=$pdo->exec($sql);

    // if($res==1){
    //     echo $res;
    //     echo "新增成功";
    // }else{
    //     echo $res;
    //     echo "新增失敗";
    // }
    ?>

</body>

</html>