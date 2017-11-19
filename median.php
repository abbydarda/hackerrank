<?php
$a = [4,12,5];
if(count($a)%2==0){
  $median1 = (count($a)/2)-1;
  $median2 = (count($a)/2);
  $m = ($a[$median1]+$a[$median2])/2;
  echo $m;
}else{
  $median = (count($a)/2)+0.5;
  $m = $a[$median-1];
  echo $m;
}
 ?>
