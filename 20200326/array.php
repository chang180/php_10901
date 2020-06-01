<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列介紹</title>
</head>

<body>
    <h1>
        <?php
        //陣列宣告方式

        //$a=[1,2,3,4];
        //$a["小明","小華","小華","小強","阿國"];
        //$a=[12=>"小明",23=>"小華",30=>"小強",42=>"阿國"];
        // $a=["小明"=>12,"小華"=>23,"小強"=>23,"阿國"=>42];

        // $a[]=12;
        // $a[]=22;
        // $a[]=333;
        // $a[]=39;

        // $a[22]="小明";
        // $a[23]="小華";
        // $a[30]="小強";
        $a["小明"] = 22;
        $a["小華"] = 23;
        $a["小強"] = 30;

        foreach ($a as $val => $key) echo "<br>" . $key . "->" . $val . "<br>";

        echo "<pre>";
        print_r($a);
        "</pre>";  //這個重要，記起來

        echo "<hr>";

        echo $a['小明'];
        "<hr>";

        //陣列的維度
        // $a=[[1,2,3],[4,5,6],[7,8,9]];  //二維陣列
        $a = [
            "小明" => ["國文" => 32, "英文" => 60, "歷史" => 99],
            "小華" => ["國文" => 32, "英文" => 60, "數學" => 77],
            "小強" => ["國文" => 32, "英文" => 60, "數學" => 77, "歷史" => 0, "化學" => 56, "公民" => 89],
            "阿國" => 42
        ];
        echo "<pre>";
        print_r($a);
        "</pre>";
        echo "<hr>";

        //陣列函式
        $b = "AAAA";
        echo "count(array)=>";
        echo count($a) . "<br>"; //很不幸，它只會算第1層
        echo "<hr>";
        echo  "isarray(array)=>";
        echo is_array($a) . "<br>";
        // echo is_array($b);
        echo "<hr>";
        echo "in_array(needle,array)=>";
        echo in_array(["國文" => 32, "英文" => 60, "歷史" => 99], $a); //一樣，只能找第一層
        echo "<hr>";
        echo "sort(array)";
        echo "<pre>";
        print_r($a);
        "</pre>";
        sort($a);
        echo "<pre>";
        print_r($a);
        "</pre>";
        echo "<hr>";
        //array_fill
        $a1 = array_fill(0, 2, "blue");
        print_r($a1);



        ?>

    </h1>
</body>

<body>
<h1>
<?php
//陣列宣告方式

//$a=[1,2,3,4];
//$a["小明","小華","小華","小強","阿國"];
//$a=[12=>"小明",23=>"小華",30=>"小強",42=>"阿國"];
// $a=["小明"=>12,"小華"=>23,"小強"=>23,"阿國"=>42];

// $a[]=12;
// $a[]=22;
// $a[]=333;
// $a[]=39;

// $a[22]="小明";
// $a[23]="小華";
// $a[30]="小強";
$a["小明"]=22;
$a["小華"]=23;
$a["小強"]=30;

foreach($a as $val => $key) echo "<br>".$key."->".$val."<br>";

echo "<pre>";print_r($a);"</pre>";  //這個重要，記起來

echo "<hr>";

echo $a['小明'];"<hr>";

//陣列的維度
// $a=[[1,2,3],[4,5,6],[7,8,9]];  //二維陣列
$a=["小明"=>["國文"=>32,"英文"=>60,"歷史"=>99],
    "小華"=>["國文"=>32,"英文"=>60,"數學"=>77],
    "小強"=>["國文"=>32,"英文"=>60,"數學"=>77,"歷史"=>0,"化學"=>56,"公民"=>89],
    "阿國"=>42
   ];
echo "<pre>";print_r($a);"</pre>";
echo "<hr>";

//陣列函式
$b ="AAAA";
echo "count(array)=>";
echo count($a)."<br>"; //很不幸，它只會算第1層
echo "<hr>";
echo  "isarray(array)=>";
echo is_array($a)."<br>";
// echo is_array($b);
echo "<hr>";
echo "in_array(needle,array)=>";
echo in_array(["國文"=>32,"英文"=>60,"歷史"=>99], $a); //一樣，只能找第一層
echo "<hr>";
echo "sort(array)";
echo "<pre>";print_r($a);"</pre>";
sort($a);
echo "<pre>";print_r($a);"</pre>";
echo "<hr>";
//array_fill
$a1=array_fill(0,2,"blue");
print_r($a1);





?>

</h1>    
</body>
</html>