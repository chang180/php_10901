<?php
include_once("base.php");
include_once("save.php");

$table="invoice";

// find($table,2);
// $row=find($table,['code'=>'AA','year'=>'2020']);
// var_dump($row);


// $row['code']="CB";
// $row['number']="12332122";

// var_dump($row);
// save($table,['code'=>'SS','year'=>'2021']);

function find($table,$arg){
global $pdo;
$sql="SELECT * FROM $table ";
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

// 以下是省工的做法，考試才使用的：
// function find($table,$arg){
//     global $pdo;
// return $pdo->query("SELECT * FROM ".$table." WHERE ".$arg)->fetchAll(PDO::FETCH_ASSOC);
// if(empty($pdo)){
//     return "無符合資料的內容";
// }
// }
