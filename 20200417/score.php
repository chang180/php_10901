<?php
// 學生成績資料
$score=[
    "01"=>[
        "國文"=>77,
        "英文"=>78,
        "數學"=>79
    ],
    "02"=>[
        "國文"=>77,
        "英文"=>78,
        "數學"=>79
    ],
    "03"=>[
        "國文"=>77,
        "英文"=>78,
        "數學"=>79
    ],
    "04"=>[
        "國文"=>77,
        "英文"=>78,
        "數學"=>79
    ],
    "05"=>[
        "國文"=>77,
        "英文"=>78,
        "數學"=>79
    ],
    "06"=>[
        "國文"=>77,
        "英文"=>78,
        "數學"=>79
    ],
    "07"=>[
        "國文"=>77,
        "英文"=>78,
        "數學"=>79
    ]
    ];


if(isset($_GET['num'])){
    $num=$_GET['num'];
    echo "座號：",$num,"的成績:<br>";
    echo "國文成績：",$score[$num]["國文"],"分<br>";    
    echo "英文成績：",$score[$num]["英文"],"分<br>";
    echo "數學成績：",$score[$num]["數學"],"分<br>";
}else{
    echo "<span style='font-weight:border;color:red'>!!請提供學生座號!!</span>";
}


// $student=$score['24'];
// echo "國文".$score['24']['國文']."<br>";
// echo "英文".$score['24']['英文']."<br>";
// echo "數學".$score['24']['數學']."<br>";
?>
<a href="student2.php">回學生列表</a>