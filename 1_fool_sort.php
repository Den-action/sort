<?php

$massive = [5,2,1,3,9,0,4,6,8,7];
$massiveSize = count($massive);
for ($index = 0; $index < $massiveSize - 1;) {
    if ($massive[$index] < $massive[$index + 1]) {
        ++$index;
    }
    else {
        $temp = $massive[$index];
        $massive[$index] = $massive[$index + 1];
        $massive[$index + 1] = $temp;
        $index = 0;
    }
}
var_dump($massive);

?>
