<?php
  $a = [3,2,1];

  $n = count($a);
  $num = 0;
for($i=0;$i<$n;$i++){
    for($j=0;$j<$n-1;$j++){
        if($a[$j]>$a[$j+1]){
            $temp = $a[$j];
            $a[$j] = $a[$j+1];
            $a[$j+1] = $temp;
            $num=$num+1;
        }
    }
}
echo $num."\n";
for($i=0;$i<$n;$i++){
echo $a[$i]."\n";
}
 ?>
