<?php

// Complete the factorial function below.
function factorial($n)
{
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}



$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$result = factorial($n);

print($result);

fclose($stdin);
