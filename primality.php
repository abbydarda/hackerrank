<?php
$a = [34,35,36,37];
for ($i=0; $i < count($a); $i++) {
  if ($a[$i]<=1) {
    $bil = 0;
  }elseif($a[$i]<=3) {
    $bil = 1;
  }elseif ($a[$i]%2==0) {
    $bil =0;
  }else {
    for($j=2; $j<=sqrt($a[$i]);$j++){
      if($a[$i]%$j==0){
        $bil = 0;
        break;
      }else {
        $bil = 1;
      }
    }
  }
  if ($bil==0) {
    echo "Not prime\n";
  }else {
    echo "Prime\n";
  }
}
