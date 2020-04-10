<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>威力彩_php</title>
</head>

<body>
    <h2>
        <?php

        //亂數函式

        $num = [];

        for ($i = 0; $i < 6; $i++) {
            $num[] = rand(1, 38);
        }
        echo "<pre>";
        print_r($num);
        echo "</pre>" . "<hr>";


        for ($i = 0; $i < 6; $i++) {
            for ($j = 0; $j < 6; $j++) {
                if ($i != $j && $num[$j] == $num[$i]) {
                    // unset($num[$j]);  會出錯
                    // array_splice($num,$j,1);  會出錯
                    $num[$j] = rand(1, 38);  //還是有機率重覆
                }
            }
        }


        echo "<pre>";
        print_r($num);
        echo "</pre>" . "<hr>";
        ?>
        <h4>威力彩號碼-while</h4>
        
        <hr>
        <?php
        $num=[];
        $counts=0;
        while(count($num)<6){
            $counts++;
            $temp=rand(1,38);
            if(count($num)>0){
                if(!in_array($temp,$num)){
                    $num[]=$temp;
                }
            }else{
                //放第一個元素
                $num[]=$temp;
            }
        }
        
        echo "<pre>";
        sort($num);
        print_r($num);
        echo "</pre>" . "<hr>";
        echo "跑了".$counts."次";
        



        ?>
    </h2>
</body>

</html>