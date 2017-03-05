<?php

$massive = [5,2,1,3,9,0,4,6,8,7];

for ($minIndex = 0, $maxIndex = count($massive) - 1; $minIndex < $maxIndex;) {
    for ($index = $minIndex; $index < $maxIndex; $index++) {
        if ($massive[$index] > $massive[$index + 1]) {
            $temp = $massive[$index];
            $massive[$index] = $massive[$index + 1];
            $massive[$index + 1] = $temp;
        }
    }
    $maxIndex--;
    for ($index = $maxIndex; $index >= $minIndex; $index--) {
        if ($massive[$index - 1] > $massive[$index]) {
            $temp = $massive[$index - 1];
            $massive[$index - 1] = $massive[$index];
            $massive[$index] = $temp;
        }
    }
    $minIndex++;
}
var_dump($massive);

?>
