<?php

$a=["AA","BB"];
$b=["CC","DD"];
$d=["XX","YY","ZZ"];


$c=array_merge($a,$b,$d);

echo "<pre>";
print_r($c);
echo "</pre><hr>";

echo "自己寫的array_merge():<br>";
echo "<pre>";
print_r($c);
echo "</pre><br>";

$test=["張","建","文"];
$my=am($d,$b,$a,$test);
echo "<pre>";
print_r($my);
echo "</pre>";

// function am(...$aa){
//     $arr=[];
// if (is_array($aa)){
//     foreach($aa as $val){
        
//         $arr[]=$val;
//     }
// }
// return $arr;
// }

function am($a,...$z){
    $arr=[];
    if(is_array($a)){
        $arr=$a;
    }else{
        echo "not an array";
    }
    // 嘗試解析輸入的變數：
    // echo "a變數：<hr>";
    // print_r($a);
    // echo "<hr>Z變數<hr>";
    // echo "<pre>";
    // var_dump($z);
    // echo "</pre>";

    // 二維陣列扁平化：
    foreach($z as $val){
        // echo "這些是z<hr>";
        // print_r($val);
        foreach($val as $item){
            $arr[]=$item;
        }
    }
    return $arr;
}