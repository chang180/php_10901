<?php

//PHP版累加器，$v1就是累加器，$v2則是陣列數值
function myfunction($v1,$v2)
{
return $v1 . "-" . $v2;
}
$a=array("Dog","Cat","Horse");
print_r(array_reduce($a,"myfunction"));
?>