<?php
$arr = [12,4,5];
$c=0;
$hasil=NULL;
for ($i=0; $i <= count($arr); $i++) {
  for ($j=0; $j < $i ; $j++) {
    if ($c%2!=0) {
      $median = (($c+1)/2)-1;
      $hasil =  $arr[$median];
    }else {
      $d = $c/2;
      $e = ($c/2)-1;
      $median = ($arr[$d]+$arr[$e])/2;
      $hasil =  $median;
    }
  }
  echo $hasil;
  echo "\n";
  $c++;
}
