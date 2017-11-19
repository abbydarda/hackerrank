<?php
$a = array(1, 2, 3, 4, 5);
$n = count($a);
$k = 4;

$dump=[];
for($i=0;$i < $n; $i++){
    $new = ($i + $k)%$n;
    $dump[$i] = $a[$new];
}
for($i=0;$i<$n;$i++){
echo $dump[$i]." ";
}
 ?>
