<?php

function bubble_sort(&$array){

    $num = count($array);

    //只是做迴圈
    for($i = 0 ; $i < $num ; $i++){

        //從最後一個數字往上比較，如果比較小就交換
        for($j = $num-1 ; $j > $i ; $j--){

            if($array[$j] < $array[$j-1]){

                //交換兩個數值的小技巧，用list+each
                list($array[$j] , $array[$j-1]) = array($array[$j-1] , $array[$j]);

            }

        }

    }

    return $array;

}

// 測試
$rand_count=100;

for($k=0; $k<$rand_count ; $k++){

    $rand_array[] = rand(0,10000);

}

bubble_sort($rand_array);

print_r($rand_array);
?>