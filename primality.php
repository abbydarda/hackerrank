<?php
$n = 5;
$count=0;

if($n==2){
    $count=2;
}elseif($n%2==0 && $n%3==0){
        $count!=2;
    }else{
        for($i = 1; $i <= $n; $i++){
            if($count>2){
                break;
            }else{
                if($n%$i==0){
                $count++;
            }
            }
        }
    }
if($count==2){
    echo "Prime\n";
}else{
    echo "Not prime\n";
}
