<h4>字串"好的，該死的新冠肺炎"，請將"新冠肺炎"四字放大並變色</h4>
<?php
$str="好的，該死的新冠肺炎";
// $arr=explode('',$str);
// print_r($arr);
echo str_replace("新冠肺炎","<span style='color:red;font-size:24px'>新冠肺炎</span>",$str),"<hr>";

$search="該死的";
$target="<span style='color:darkseablue;font-size:24px;font-family:\"微軟正黑體\"'>可怕的</span>";

echo str_replace($search,$target,$str),"<hr>";

echo mb_ereg_replace("新冠肺炎","<span style='color:yellow;font-size:32px'>新冠肺炎</span>",$str),"<hr>";

?>
<hr>
好的，該死的<span style="color:red;font-size:24px">新冠肺炎</span>