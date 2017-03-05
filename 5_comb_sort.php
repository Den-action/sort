<?php

$massive = [5,2,1,3,9,0,4,6,8,7];
$interval = (int)(count($massive) / 1.247);
$number = count($massive);
while ($interval > 0) {
    for ($index = 0; $index + $interval < count($massive) - 1; $index++) {
        if ($massive[$index] > $massive[$index + $interval]) {
            $temp = $massive[$index];
            $massive[$index] = $massive[$index + $interval];
            $massive[$index + $interval] = $temp;
        }
    }
    $interval = (int)($interval / 1.247);
}
while (--$number > 1) {
    for ($index = 0; $index < $number; $index++) {
        if ($massive[$index] > $massive[$index + 1]) {
            $temp = $massive[$index];
            $massive[$index] = $massive[$index + 1];
            $massive[$index + 1] = $temp;
        }
    }
}

var_dump($massive);

?>
