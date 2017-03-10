<?php

$massive = [5,2,1,3,9,0,4,6,8,7];
$maxIndex = count($massive) - 1;
$direction = true;
$flag = true;
while ($flag) {
    $flag = false;
    for ($index = $direction ? $minIndex : $maxIndex - 1; ; $index = $direction ? ++$index : --$index) {
        if ($massive[$index] > $massive[$index + 1]) {
            list($massive[$index], $massive[$index + 1]) = array($massive[$index + 1], $massive[$index]);
            $flag = true;
        }
        if ($direction && $index == $maxIndex -1)
            break;
        elseif (!$direction && $index == $minIndex)
            break;
    }
    $minIndex = $direction ? $minIndex : ++$minIndex;
    $maxIndex = $direction ? --$maxIndex : $maxIndex;
    $direction = !$direction;
}

var_dump($massive);

?>

