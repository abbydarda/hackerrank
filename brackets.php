<?php
  $data = ('{([)]}');
  $arr = [];
  for ($i=0; $i < strlen($data) ; $i++) {
    if ($data[$i]=='{' || $data[$i]=='[' || $data[$i]=='(') {
      array_push($arr, $data[$i]);
    }else {
      if (strlen($arr)==0) {
        $ans = false;
      }
      $x = end($arr);
      array_pop($arr);
      if (($x == '{' && $data[$i] != '}') || ($x == '(' && $data[$i] != ')') || ($x == '[' && $data[$i] != ']')) {
        $ans = false;
      }
    }
  }
  if (strlen($arr) == 0) {
    $ans = true;
  }else {
    $ans = false;
  }

  if ($ans==1) {
    echo "YES";
  }else {
    echo "NO";
  }
 ?>
