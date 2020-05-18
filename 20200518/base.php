<?php
$dsn = "mysql:host=localhost;dbname=invoice;charset=utf8";
$pdo = new PDO($dsn, 'root', '');
date_default_timezone_set("Asia/Taipei");
session_start();

// 查詢全部
function all($table, ...$arg)
{
    global $pdo;

    $sql = "SELECT * FROM $table ";

    if (isset($arg[0]) && is_array($arg[0])) {
        $tmp = [];
        foreach ($arg[0] as $key => $value) {

            $tmp[] = sprintf("`%s`='%s'", $key, $value);
        }

        $sql = $sql . " WHERE " . implode(" && ", $tmp);
    }

    if (isset($arg[1])) {
        $sql = $sql . $arg[1];
    }

    return $pdo->query($sql)->fetchAll();
}
// 刪除資料
function delete($table, $arg)
{
    global $pdo;
    $sql = "DELETE FROM $table ";

    if (is_array($arg)) {
        $tmp = [];
        foreach ($arg as $key => $value) {
            $tmp[] = sprintf("`%s`='%s'", $key, $value);
        }
        $sql = $sql . " WHERE " . implode(" && ", $tmp);
    } else {
        $sql = $sql . " WHERE id = '$arg'";
    }
    // echo $sql;
    return $pdo->exec($sql);
}

// 萬用查詢
function q($sql)
{

    global $pdo;
    return $pdo->query($sql)->fetchAll();
}

// 查詢單筆
function find($table, $arg)
{
    global $pdo;
    $sql = "SELECT * FROM $table ";
    if (is_array($arg)) {
        $tmp = [];
        foreach ($arg as $key => $value) {
            $tmp[] = sprintf("`%s`='%s'", $key, $value);
        }
        $sql = $sql . " WHERE " . implode(" && ", $tmp);
    } else {
        $sql = $sql . " WHERE id = '$arg'";
    }
    // echo $sql;
    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}

// 計算筆數
function nums($table, ...$arg)
{
    global $pdo;

    $sql = "SELECT COUNT(*) FROM $table ";

    // 若第二個之後的參數存在
    if (isset($arg[0]) && is_array($arg[0])) {
        $tmp = [];
        foreach ($arg[0] as $key => $value) {
            $tmp[] = sprintf("`%s`='%s'", $key, $value);
        }
        $sql = $sql . " WHERE " . implode(" && ", $tmp);
    }

    // 第三個參數存在時，將條件加入查詢語法，不判斷資料型態，使用時自己注意
    if (isset($arg[1])) {
        $sql = $sql . $arg[1];
    }
    return $pdo->query($sql)->fetchColumn();
}


// 頁面導向
function to($url)
{
    header("location:" . $url);
}

// 新資或更新資料
function save($table, $arg)
{
    global $pdo;
    if (isset($arg['id'])) {
        //update
        foreach ($arg as $key => $val) {
            if ($key != 'id') {
                $tmp[] = sprintf("`%s`='%s'", $key, $val);
            }
        }
        $sql = "UPDATE $table SET " . implode(',', $tmp) . " WHERE `id`='" . $arg['id'] . "'";
    } else {
        //insert
        $sql = "INSERT INTO " . $table . "(`" . implode("`,`", array_keys($arg)) . "`) VALUES ('" . implode("','", $arg) . "')";
    }
    // echo $sql;
    return $pdo->exec($sql);
}
