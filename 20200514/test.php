<?php

sum(20,50);
echo "<hr>";
sum2(20,50,100);
echo "<hr>";
sum3([20,50,100,120,50]);
echo "<hr>";
sum4(25,50,30,20,100,200,300);
echo "<hr>";
sum4(20,77,[12,"BB","AA"]);
echo "<br>";


function sum($a,$b){
    echo $a+$b;
}

function sum2($a,$b,$c){
    echo $a+$b+$c;
}

function sum3($a){
    $sum=0;
    foreach($a as $c){
        $sum=$sum+$c;
    }
    echo $sum;
}

function sum4($b,...$a){
    print_r($a);
    $sum=$b??'沒有任何數值';
    foreach($a as $c){
        $sum=$sum+$c;
    }
    echo $sum;
}

?>