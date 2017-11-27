<?php
$a = [4,9,95,93,57,4,57,93,9];

$result = 0;
for ($i=0; $i < count($a); $i++) {
  $result ^= $a[$i];
}
  echo $result;
