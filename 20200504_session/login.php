<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="plugins/css/bootstrap.css">
</head>
<style>
    body {
        font-family: "微軟正黑體", sans-serif;
        text-align: center;
        background: url(bg.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        /* background-blend-mode: screen; */

    }
</style>

<body>
    <table>
        <tr>
            <td colspan="2">
                <?php
                $showLogin = true;
                if (isset($_COOKIE['status'])) {
                    // echo "status", $_COOKIE['status'];
                    // if($_GET['status']=='false'){
                    //     echo "登入失敗";
                    // }
                    switch ($_COOKIE['status']) {
                        case 'false':
                            echo "登入失敗";
                            break;
                        case 'true':
                            // echo $_COOKIE['acc'];
                            // sleep(5);
                            $showLogin = false;
                            // header("location:checkLogin.php?acc=" . $_COOKIE['acc']);
                            break;
                    }
                }
                ?>
            </td>
        </tr>
    </table>
    <!-- 稍微加點bootstrap進去，先讓表單別太難看就好 -->

    <!-- 判斷是否已存在登入者的cookie，若有就不再顯示登入表格 -->
    <?php
    if ($showLogin == true) {
    ?>
        <div class="container-fluid w-25 p-2 bg-info text-light border shadow rounded">
            <h2>使用者登入</h2>
            <form class="form" action="checkLogin.php" method="post">
                <div class="form-group">
                    <label class="form" for="acc">帳號：</label>
                    <input class="form" type="text" name="acc" id="acc">
                </div>
                <div class="form-group">
                    <label class="form" for="pw">密碼：</label>
                    <input class="form" type="password" name="pw" id="pw">
                </div>
                <div class="btn-group">
                    <input class="btn btn-primary rounded-circle" type="submit" name="submit" value="登入">
                    <input class="btn btn-secondary rounded-circle" type="reset" value="重置">
                </div>
            </form>
        </div>
    <?php
    } else {
        echo "<h1><span class='bg-white text-danger'>你已登入</span></h1>";
    }
    ?>
    <hr>
    <a href="listUser.php">會員列表</a>
</body>

</html>