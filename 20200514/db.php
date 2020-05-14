<?php

$dsn="mysql:host=localhost;dbname=invoice;charset=utf8";
$pdo=new PDO($dsn,'root','');
date_default_timezone_set("Asia/Taipei");
session_start();

// print_r(all('invoice'));
$rows=all('invoice');
// print_r($rows);

foreach($rows as $row){
    echo $row['number'],'-',$row['expense'],'<br>';
}
echo "<hr>";

$row=find('invoice',1);
print_r(find('invoice','1')); 
if(is_array($row)){
echo "<br>",$row['number'],"<br>";  
echo $row['expense'],"<br>";
}else{
    echo $row;
}


function all($table){
    global $pdo;
    $sql="SELECT * FROM $table";
    $rows=$pdo->query($sql)->fetchAll();
    return $rows;
}


function all2($table,$condition){

}

function all3($table,$condition,$order){

}
// 還可以更多，但會建立太多函式

function to($url){
    header("location:".$url);
}


function find($table,$id){
    global $pdo;
    $sql="SELECT * FROM $table WHERE `id`='$id'";
    $row=$pdo->query($sql)->fetch();
    if(empty($row)){
        return "無符合資料的內容<br>";
    }
    return $row;
}




?>