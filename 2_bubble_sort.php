<?php

$massive = [5,2,1,3,9,0,4,6,8,7];
$number = count($massive) - 1;
$flag = true;
while ($flag) {
    $flag = false;
    for ($index = 0; $index < $number; $index++) {
        if ($massive[$index] > $massive[$index + 1]) {
            list($massive[$index],$massive[$index+1]) = array($massive[$index+1],$massive[$index]);
            $flag = true;
        }
    }
}
var_dump($massive);

?>
