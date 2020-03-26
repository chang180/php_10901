<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while</title>
</head>
<body>

<?php
//while 迴圈

$str = "today is a good day";
$find = "s";
// echo $str."<br>";
// echo "字元".$find."在第 ".(mb_stripos($str,$find)+1)." 個位置出現"."<br>";


$status=false;
$position=0;
while($status==false){
    $tmp=mb_substr($str,$position,1,"utf8"); //利用函式mb_substr()來取得某個位置的字元
    
    if($tmp==$find){
        $status=true;
        echo "字元".$find."在".$str."的第".($position+1)."個位置"."<br>";
    }
    $position++;
}
?>
</body>
</html>