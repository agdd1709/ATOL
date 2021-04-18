<?php
$data1 = array(5,8,7,9,2);
$data2 = array(10,8,2,4,3);
$irisan=array_intersect($data1,$data2);
echo"<pre>";
print_r($irisan);