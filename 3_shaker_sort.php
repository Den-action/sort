<?php

$massive = [5,2,1,3,9,0,4,6,8,7];
$maxIndex = count($massive) - 1;
$direction = true;
$flag = true;
$minIndex = 0;
while ($flag) {
    $flag = false;
    if ($direction) {
        $index = $minIndex;
    }
    else {
        $index = $maxIndex - 1;
    }
    while (true) {
        if ($massive[$index] > $massive[$index + 1]) {
            list($massive[$index], $massive[$index + 1]) = array($massive[$index + 1], $massive[$index]);
            $flag = true;
        }
        if (($direction && $index == $maxIndex -1) || (!$direction && $index == $minIndex) )
            break;
        if ($direction)
            ++$index;
        else
            --$index;
    }
    $direction = !$direction;
}

var_dump($massive);

?>

