<?php

// Complete the aVeryBigSum function below.
function aVeryBigSum($ar) {
    $sum = 0;
    for($i=0;$i<count($ar);$i++){
        $sum = $sum + $ar[$i];
    }
    return $sum;
}


$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $ar_count);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = aVeryBigSum($ar);

print($result);