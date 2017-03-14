<?php

$massive = [5,2,1,3,9,0,4,6,8,7];
$flag = true;
$maxIndex = count($massive) - 1;
while (true) {
    if ($flag) {
        $flagNotSwap = true;
    }
    for ($index = $flag ? 0 : 1; $index < $maxIndex; $index += 2) {
        if ($massive[$index] > $massive[$index + 1]) {
            list($massive[$index], $massive[$index + 1]) = array($massive[$index + 1], $massive[$index]);
            $flagNotSwap = false;
        }
    }
        if ($flagNotSwap && !$flag) {
            break;
        }
    $flag = !$flag;
}
var_dump($massive);

?>
