<?php

$massive = [5,2,1,3,9,0,4,6,8,7];
$flag = true;
$evenFlag = true;
$oddFlag = true;
$maxIndex = count($massive) - 1;
while ($evenFlag || $oddFlag) {
    $swapFlag = false;
    if ($flag) {
        $evenFlag = $oddFlag = false;
    }
    for ($index = $flag ? 0 : 1; $index < $maxIndex; $index += 2) {
        if ($massive[$index] > $massive[$index + 1]) {
            list($massive[$index], $massive[$index + 1]) = array($massive[$index + 1], $massive[$index]);
            $swapFlag = true;
        }
    }
        if ($swapFlag) {
            $evenFlag = $flag ? true : $evenFlag;
            $oddFlag = $flag ? $oddFlag : true;
        }
    $flag = !$flag;
}
var_dump($massive);

?>
