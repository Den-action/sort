<?php

$massive = [5,2,1,3,9,0,4,6,8,7];
while (true) {
    $numberOfSwaps = 0;
    for ($index = 0; $index < count($massive) - 1; $index += 2) {
        if ($massive[$index] > $massive[$index + 1]) {
            $temp = $massive[$index];
            $massive[$index] = $massive[$index + 1];
            $massive[$index + 1] = $temp;
            $numberOfSwaps++;
        }
    }
    for ($index = 1; $index < count($massive) - 1; $index += 2) {
        if ($massive[$index] > $massive[$index + 1]) {
            $temp = $massive[$index];
            $massive[$index] = $massive[$index + 1];
            $massive[$index + 1] = $temp;
            $numberOfSwaps++;
        }
    }
    if (0 == $numberOfSwaps)
        break;
}
var_dump($massive);

?>
