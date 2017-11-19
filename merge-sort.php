<?php

function selection_sort($data)
{
for($i=0; $i<count($data)-1; $i++) {
	$min = $i;
  $num =0;
	for($j=$i+1; $j<count($data); $j++) {
		if ($data[$j]<$data[$min]) {
			$min = $j;
		}
    $num++;
	}
    // $data = swap_positions($data, $i, $min);
    $backup_old_data_right_value = $data[$i];
    $data[$i] = $data[$min];
    $data[$min] = $backup_old_data_right_value;
}
return $data;
}

// function swap_positions($data1, $left, $right) {
// 	$backup_old_data_right_value = $data1[$right];
// 	$data1[$right] = $data1[$left];
// 	$data1[$left] = $backup_old_data_right_value;
// 	return $data1;
// }
$my_array = array(3, 0, 2, 5, -1, 4, 1);
echo "Original Array :\n";
echo implode(', ',$my_array );
echo "\nSorted Array :\n";
echo implode(', ',selection_sort($my_array)). PHP_EOL;
echo $num;
?>
