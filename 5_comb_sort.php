<?php

$massive = [5,2,1,3,9,0,4,6,8,7];
$number = count($massive);
$interval = $number - 1;
while ($interval > 0) {
    $swapFlag = false;
    for ($index = 0; $index + $interval < $number; $index++) {
        if ($massive[$index] > $massive[$index + $interval]) {
            list($massive[$index], $massive[$index + $interval]) = array($massive[$index + $interval], $massive[$index]);
            $swapFlag = true;
        }
    }
    if (!$swapFlag && $interval == 1)
        break;
    $interval = (int)($interval / 1.247);
    if ($interval < 1) {
        $interval = 1;
    }
}
var_dump($massive);

?>
