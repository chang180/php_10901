<?php
include "base.php";

// SQL查詢語法非常多變：
//  "SELECT * FROM $table";
//   "SELECT * FROM $table WHERE ???='XXX'";
//   "SELECT * FROM $table WHERE ???='XXX' && ???='XXXX'";
//   "SELECT * FROM $table WHERE ???='XXX' || ???='XXXX'";
//   "SELECT * FROM $table WHERE ???='XXX' && ???='XXXX' ORDER BY 'YYY'";
//   "SELECT * FROM $table ORDER BY ???";
//   "SELECT * FROM $table LIMIT ???";
//   "SELECT * FROM $table WHERE ??? LIMIT";
//   "SELECT * FROM $table ,(SUB QUERY) WHERE ??? LIMIT";
// 
//  $all($table,...$arg)
//  $table => 資料表名
//  $arg[0] => WHERE 條件句
//  $arg[1] => ORDER BY , LIMIT , GROUP BY 條件句
//  $arg[2] => FETCH 類別
//  
// 
// 


function all($table,...$arg){
    global $pdo;
    
    $sql="SELECT * FROM $table ";

    // 若第二個之後的參數存在
    if(isset($arg[0]) && is_array($arg[0])){
        $tmp=[];
        foreach($arg[0] as $key => $value){
            // $tmp=$tmp."`".$key."`='".$value."'";

            $tmp[]=sprintf("`%s`='%s'",$key,$value);
            // echo sprintf("`%s`='%s'",$key,$value),"<br>";

            // sprintf函式較簡潔，但回頭用陣列賦值方式會比較容易直接做出來
            // $tmp[]=[" `$key` "." = "." '$value' "];
            // echo "$key"." = "."$value","<br>";
        }
// echo "sprintf:<br>";
// echo "tmp[]:";
// print_r($tmp);

        $sql=$sql." WHERE " . implode(" && ",$tmp);
    }

    // 第三個參數存在時，將條件加入查詢語法，不判斷資料型態，使用時自己注意
    if(isset($arg[1])){
        $sql=$sql.$arg[1];
    }
    
    // echo $sql;




    return $pdo->query($sql)->fetchAll();
}

$rows=all('invoice');
foreach($rows as $row){
    echo $row['id'].'-';
    echo $row['code'].'-';
    echo $row['number'].'-';
    echo $row['period'].'-';
    echo $row['expense'];
    echo '<hr>';
}

echo "1.有帶參數<br>";
$rows=all('invoice',["year"=>"2020","period"=>"1"]);
foreach($rows as $row){
    echo $row['id'].'-';
    echo $row['code'].'-';
    echo $row['number'].'-';
    echo $row['period'].'-';
    echo $row['expense'];
    echo '<hr>';
}

echo "2.有帶三個參數<br>";
$rows=all('invoice',["year"=>"2020","period"=>"1"]," ORDER BY id DESC");
foreach($rows as $row){
    echo $row['id'].'-';
    echo $row['code'].'-';
    echo $row['number'].'-';
    echo $row['period'].'-';
    echo $row['expense'];
    echo '<hr>';
}

echo "3.不設定第2個參數，會使用第3個參數條件全部列出<br>";
$rows=all('invoice',""," ORDER BY id DESC");
foreach($rows as $row){
    echo $row['id'].'-';
    echo $row['code'].'-';
    echo $row['number'].'-';
    echo $row['period'].'-';
    echo $row['expense'];
    echo '<hr>';
}

// 不定參數函式，即使沒有下第2個以後的參數，也不會有錯誤
echo "<hr><pre>";
var_dump(all('invoice'));
echo "</pre>";
