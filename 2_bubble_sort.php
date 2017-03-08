<?php

$massive = [5,2,1,3,9,0,4,6,8,7];
$number = count($massive);
$flag = false;
while (--$number > 1) {
    for ($index = 0; $index < $number; $index++) {
        if ($massive[$index] > $massive[$index + 1]) {
            $temp = $massive[$index];
            $massive[$index] = $massive[$index + 1];
            $massive[$index + 1] = $temp;
            $flag = true;
        }
    }
    if (!$flag)
        break;
}
var_dump($massive);

?>
